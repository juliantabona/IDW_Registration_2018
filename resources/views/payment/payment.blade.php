@extends('layouts.app') 

@section('content')
<div class="idw-content-container wrapper">
    <div class="main-registration-container" style="min-height: 600px;">
        <div class="registration-box"> 
            @if (Session::exists('user') && Session::exists('transaction') ) 
                <form  method="POST" action="https://www.vcs.co.za/vvonline/vcspay.aspx"  class="form">
                    {{ csrf_field() }}
                    <div id="section_A" class="section_box">
                            <h4 class="mb-2">
                                <b style="font-weight: 600;color: #229c06;">Delegate: {{ Session::get('user')->first_name }} {{ Session::get('user')->last_name }}</b>
                            </h4>
                        <div class="section-header">
                            <h3>PAYMENT OPTIONS</h3>
                        </div>  
                        <h4>EARLY BIRD RATE</h4>
                        <p class="mb-4">Deadline 30 September 2018</p>
                        <div class="input-box">
                            <span class="mb-2 d-block">I have Read and Agree to the <a href="/pdf/TnCs%20-%20Privacy%20Policy%20-%20Disclaimer.pdf" target="_blank">Terms and Conditions, Privacy Policy and Disclaimer*</a></span>
                            <div class="wthree-text">  
                                <label class="anim">
                                    <input type="radio" name="terms_and_conditions" value="YES" class="terms_and_conditions checkbox">
                                    <span>YES</span> 
                                </label>  
                                <div class="clear"> </div>
                            </div>  
                            <div class="wthree-text">  
                                <label class="anim">
                                    <input type="radio" name="terms_and_conditions" value="NO" class="terms_and_conditions checkbox" checked="">
                                    <span>NO</span> 
                                </label>  
                                <div class="clear"> </div>
                            </div>
                        </div>  
                        <div class="input-box">
                            <div class="wthree-text">  
                                <label class="anim">
                                    <input type="hidden" name="p1" value="3463"> 
                                    <input type="hidden" name="p2" value="{{ Session::get('transaction')->id }}"> 
                                    <input type="hidden" name="p3" value="Early Ticket"> 
                                    
                                    <select class="form-control" name="p4" data-cesta-feira-attribute="" >
                                        <option value="2064">Students: 2,000 (BWP)</option>
                                        <option value="2064">LMIC COUNTRIES: 2,000 (BWP)</option>
                                        <option value="6192">All Others: 6,000 (BWP)</option>
                                    </select>

                                    <input type="hidden" name="UrlsProvided" value="Y">  
                                    <input type="hidden" name="ApprovedUrl" value="{{ URL::to('/') }}/paymentSuccessful">  
                                    <input type="hidden" name="DeclinedUrl" value="{{ URL::to('/') }}/paymentUnSuccessful">   
                                    <input type="hidden" name="p10" value="{{ URL::to('/') }}/paymentUnSuccessful"> 			
                                </label>  
                                <div class="clear"> </div>
                            </div>  
                        </div>  
                        <div class="input-box">
                            <div class="wthree-text mb-3">  
                                <label class="anim">
                                    <input type="radio" name="payment_type" value="Online Transfer" class="payment_type checkbox" checked="">
                                    <span><strong>VISA/MasterCard</strong></span>
                                    <span>(Note: A payment handling fee of 3.2% will be charged)</span> 
                                </label>  
                                <div class="clear"> </div>
                            </div>  
                            <div class="wthree-text">  
                                <label class="anim">
                                    <input type="radio" name="payment_type" value="Bank Transfer" class="payment_type checkbox">
                                    <span><strong>Bank Transfer</strong></span>
                                    <span>(Payment will be received within 2 - 4 working days)</span> 
                                </label>   
                                <div class="clear"> </div>
                            </div> 
                        </div>   
                        
                        <span>Information on cancellation and reimbursement can be found in the <a href="/pdf/TnCs%20-%20Privacy%20Policy%20-%20Disclaimer.pdf" target="_blank">Terms and Conditions, Privacy Policy and Disclaimer.</a></span>
                        <p class="mt-3 mb-2">Notes:</p>
                        <span>1. Rates include attendance at all sessions throughout the meeting, the welcome reception and the event dinner, as well as morning/afternoon tea and lunches on each day of the meeting.</span>
                        <br><br> 
                        <span> 
                            2. The selected cost will be compared with your registration information and if deemed inappropriate, your registration will be cancelled.
                        </span>
                        <br>
                        <button type="submit" class="btn pay_now">PAY</button>
                    </div> 
                </form>
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

@section('js')

	<script>
		$(document).ready(function(){

			$(document).on("click",".pay_now",function(e){
				var payment_type = $('.payment_type:checked').val();
				var terms_and_conditions = $('.terms_and_conditions:checked');
				var err_count = 0;

				$('.errMsg').remove();

				if(terms_and_conditions.length == 0 || $(terms_and_conditions).val() == 'NO'){
					e.preventDefault();
					$('.terms_and_conditions:first').closest('.wthree-text').prepend( errMsg('Please accept the Terms and Conditions & Privacy Policy') );
					err_count++;
				}
				
				if(err_count != 0){
					alert('Please accept the Terms and Conditions & Privacy Policy before paying via ' + payment_type);
				}else{
					if(payment_type == 'Bank Transfer'){
						e.preventDefault();
						window.location = 'pdf/Bank_Transfer_Details.pdf';
					}
				}

				$('.main-registration-container').animate({
					scrollTop: 0
				}, 500);
			});

			function errMsg(msg){
				return '<p class="errMsg"><i class="fa fa-exclamation-circle mr-2"></i>'+msg+'</p>';
			}

		});
	</script>

@endsection