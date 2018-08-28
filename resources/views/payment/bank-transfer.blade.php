@extends('layouts.app') 

@section('content')
<div class="idw-content-container wrapper">
    <div class="main-registration-container" style="min-height: 600px;">
        <div class="registration-box"> 
            @if (Session::exists('user') && Session::exists('transaction') ) 
                <div id="section_A" class="section_box">
                        <h4 class="mb-2">
                            <b style="font-weight: 600;color: #229c06;">Delegate: {{ Session::get('user')->first_name }} {{ Session::get('user')->last_name }}</b>
                        </h4>
                    <div class="section-header">
                        <h3>BANK TRANSFER PAYMENT</h3>
                    </div>  
                    <p class="mb-4">After you have successfully transfered your payment, kindly send your receipt to this email for you to be confirmed as registered.</p>  
                    <br>
                    <a href="/pdf/Bank_Transfer_Details.pdf" class="btn pay_now" target="_blank">VIEW BANK DETAILS</a>
                </div> 
            @else
                <div class="input-box">
                    <div class="input-highlight">
                        <span style="font-size:20px !important;line-height: 14px;display: block;padding: 10px;margin: 10px 0 10px 0;">NOTE:</span> 
                        <h4 style="margin: 15px 0 15px 0;">If you have registered previously but had not completed payment, please enter your email below to view payment options.</h4>
                    </div>
                    <form action="/register" method="POST">
                        {{ csrf_field() }}
                        <input class="text" type="email" id="email" name="email" placeholder="Email Address*">
                        <input type="hidden" name="abortRegistration" value="1"> 
                        <button type="submit" class="btn">Proceed To Payment</button>
                    </form>
                </div>
                
            @endif
        </div>	
    </div>	
</div>
@endsection