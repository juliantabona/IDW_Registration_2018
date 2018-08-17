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
use App\Mail\PaymentFail;
use App\Mail\PaymentSuccess;
use App\Mail\EventRegistered;
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
                $request->session()->flash('alert', array('You have already registered and paid for this event! Visit your email to verify. Thank you', 'success'));

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

                Mail::to($request->input('email'))->send(new EventRegistered($user));

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

Route::get('/payment-options', function () {
    return view('payment');
});

Route::get('/paymentSuccessful', function () {
    $transaction_ID = Input::get('p2', false);    //  Transaction ID
    $amount = Input::get('p6', false);            //  Amount
    $payment_type = Input::get('p7', false);      //  Payment Type
    $package_type = Input::get('p8', false);      //  Package Type

    $transaction_state = Transaction::find($transaction_ID)->update([
        'payment_type' => $payment_type,
        'package_type' => $package_type,
        'amount' => $amount,
        'success_state' => 1,                       //  SUCCESSFUL
    ]);

    if ($transaction_state) {
        $transaction = Transaction::find($transaction_ID);

        if ($transaction) {
            //  Get the user
            $user = User::where('email', $transaction->user_id)->first();
            //  Mail the user on payment success
            Mail::to($request->input('email'))->send(new PaymentSuccess($user));
        }
    }

    //  Go to payment success page
    return view('paymentSuccessful');
});

Route::get('/paymentUnSuccessful', function () {
    $transaction_ID = Input::get('p2', false);    //  Transaction ID
    $amount = Input::get('p6', false);            //  Amount
    $payment_type = Input::get('p7', false);      //  Payment Type
    $package_type = Input::get('p8', false);      //  Package Type

    $transaction = Transaction::find($transaction_ID)->update([
        'payment_type' => $payment_type,
        'package_type' => $package_type,
        'amount' => $amount,
        'success_state' => 2,                       //  FAILED
    ]);

    if ($transaction) {
        //  Get the user
        $user = User::where('email', $transaction->user_id)->first();
        //  Mail the user on payment success
        Mail::to($request->input('email'))->send(new PaymentFail($user));
    }

    //  Go to payment success page
    return view('paymentUnSuccessful');
});

Route::get('/emailtemplate', function () {
    return view('sendEmailTemplate');
});

Route::get('/faq', function () {
    return view('faq');
});
