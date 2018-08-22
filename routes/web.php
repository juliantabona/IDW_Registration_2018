<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
//  Emails to send to user
use App\Mail\PaymentFail;
use App\Mail\PaymentSuccess;
use App\Mail\EventRegistered;
//  Emails to send to IDW team
use App\Mail\IDWPaymentFail;
use App\Mail\IDWPaymentSuccess;
use App\Mail\IDWEventRegistered;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('index');
});

Route::post('/register', function (Request $request) {
    //  If we have the email provided
    if (!empty($request->input('email'))) {
        // Does the user exist
        $userExists = User::where('email', $request->input('email'))->count();

        //  If the user exists
        if ($userExists) {
            //  Get the user
            $user = User::where('email', $request->input('email'))->first();

            //  Find out if they have payed successfully before
            $hasTransactedBefore = $user->transactions->where('success_state', 1)->count();

            //  If they have paid
            if ($hasTransactedBefore != 0) {
                //  Notify the user
                $request->session()->flash('alert', array('You have already registered and paid for this event! Visit your email to verify or <a href="/resend/paymentConfirmation">resend payment confirmation email</a>. Thank you', 'success'));

                return back();

                //  If they have not paid
            }

            //  If the user does not exist
        } else {
            if ($request->input('abortRegistration') == '1') {
                //  Notify the user
                $request->session()->flash('alert', array('Registration with "'.$request->input('email').'" does not exist. Please re-enter the email you used when registering previously otherwise return to <a href="/">Registration</a>', 'success'));

                return back();
            } else {
                //  Create a new user
                $user = User::create($request->all());
                //  Send email to the user
                Mail::to($request->input('email'))->send(new EventRegistered($user));
                //  Send email to the IDW Team
                Mail::to('julian@optimumqbw.com')->send(new IDWEventRegistered($user));

                //Alert update success
                $request->session()->flash('alert', array('You have been registered successfully! Complete your application by paying for your seat', 'success'));
            }
        }

        //  If we have the user
        if ($user) {
            //  Register a potential transaction
            $transaction = $user->transactions()->create([
                'user_id' => $user->id,
            ]);

            //  Hold the user and potential transaction session
            session(['user' => $user, 'transaction' => $transaction]);
        }

        //  Go to payment page
        return redirect('/payment-options');
    } else {
        $request->session()->flash('alert', array('Please register!', 'danger'));

        //  Go back to registration page
        return redirect('/');
    }
});

Route::get('/payment-options', function (Request $request) {
    $user = null;

    if (Session::has('user')) {
        $user = Session::get('user');
    } else {
        $userEmail = Input::get('email', false);
        if (!empty($userEmail)) {
            //  Get the user
            $user = User::where('email', $userEmail)->first();
        }
    }

    if (!empty($user)) {
        //  Find out if they have payed successfully before
        $hasTransactedBefore = $user->transactions->where('success_state', 1)->count();

        //  If they have paid successfully before
        if ($hasTransactedBefore != 0) {
            //  Notify the user
            $request->session()->flash('alert', array('You have already registered and paid for this event using your "'.$user->email.'" email! Visit your email to verify or <a href="/resend/paymentConfirmation">resend payment confirmation email</a>. Thank you', 'success'));

            return redirect('/');
        }
    }

    return view('payment/payment');
});

Route::get('/paymentSuccessful', function (Request $request) {
    $transaction_ID = Input::get('p2', false);    //  Transaction ID
    $amount = Input::get('p6', false);            //  Amount
    $payment_type = Input::get('p7', false);      //  Payment Type
    $package_type = Input::get('p8', false);      //  Package Type

    if (!empty($transaction_ID)) {
        $transaction = Transaction::find($transaction_ID);
        if (!empty($transaction)) {
            if ($transaction->success_state != 1) {
                $transaction_state = $transaction->update([
                    'payment_type' => $payment_type,
                    'package_type' => $package_type,
                    'amount' => $amount,
                    'success_state' => 1,                       //  SUCCESSFUL
                ]);

                if ($transaction_state) {
                    if ($transaction) {
                        //  Get the user
                        $user = User::where('id', $transaction->user_id)->first();
                        if ($user) {
                            //  Mail the user on payment success
                            Mail::to($user->email)->send(new PaymentSuccess($user, $transaction));

                            //  Send email to the IDW Team
                            Mail::to('julian@optimumqbw.com')->send(new IDWPaymentSuccess($user));
                            //  Go to payment success page
                            return view('payment/paymentSuccessful');
                        }
                    }
                }
            }
        }
    }

    $request->session()->flash('alert', array('You are not authorized to access this page!', 'danger'));

    return redirect('/');
});

Route::get('/paymentUnSuccessful', function (Request $request) {
    $transaction_ID = Input::get('p2', false);    //  Transaction ID
    $amount = Input::get('p6', false);            //  Amount
    $payment_type = Input::get('p7', false);      //  Payment Type
    $package_type = Input::get('p8', false);      //  Package Type

    if (!empty($transaction_ID)) {
        $transaction = Transaction::find($transaction_ID);
        if (!empty($transaction)) {
            if ($transaction->success_state != 2) {
                $transaction_state = $transaction->update([
                    'payment_type' => $payment_type,
                    'package_type' => $package_type,
                    'amount' => $amount,
                    'success_state' => 2,                       //  FAIL
                ]);

                if ($transaction_state) {
                    if ($transaction) {
                        //  Get the user
                        $user = User::where('id', $transaction->user_id)->first();
                        if ($user) {
                            //  Mail the user on payment success
                            Mail::to($user->email)->send(new PaymentFail($user, $transaction));

                            //  Send email to the IDW Team
                            Mail::to('julian@optimumqbw.com')->send(new IDWPaymentFail($user));

                            //  Go to payment success page
                            return view('payment/paymentUnSuccessful');
                        }
                    }
                }
            }
        }
    }

    $request->session()->flash('alert', array('You are not authorized to access this page!', 'danger'));

    return redirect('/');
});

Route::get('/resend/paymentConfirmation', function (Request $request) {
    $user = Session::get('user');

    if ($user) {
        //  Get the user
        $user = User::where('email', $user->email)->first();

        //  Find out if they have payed successfully before
        $hasTransactedBefore = $user->transactions->where('success_state', 1)->count();

        //  If they have paid successfully before
        if ($hasTransactedBefore != 0) {
            //  Get the paid transaction
            $transaction = Transaction::where('user_id', $user->id)->where('success_state', 1)->first();
            //  If we have the user and transaction details
            if ($user && $transaction) {
                //  Send the email
                Mail::to($user->email)->send(new PaymentSuccess($user, $transaction));
            }

            //  Notify the user
            $request->session()->flash('alert', array('Payment confirmation email sent to "'.$user->email.'"</a>. Thank you', 'success'));

            return redirect('/');

        //  If they have not paid
        } else {
            $request->session()->flash('alert', array('You havent paid for this event using the email "'.$user->email.'"! Visit <a href="/payment-options">Payment Options</a> to pay for your seat', 'danger'));

            return redirect('/');
        }

        //  If the user does not exist
    }

    $request->session()->flash('alert', array('You are not authorized to access this page!', 'danger'));

    return redirect('/');
});

Route::get('/faq', function () {
    return view('faq');
});
