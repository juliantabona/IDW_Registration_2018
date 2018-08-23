@extends('layouts.app') 

@section('content')

	<div class="idw-content-container wrapper">
		<h1>Payment</h1>
		<div class="main-registration-container" style="min-height: 300px;">
			<div class="registration-box" style="min-height: 300px;"> 
				<div id="section_A" class="section_box">

					@if (Session::exists('user') && Session::exists('transaction') ) 
						<h4 class="mb-2">
							<b style="font-weight: 600;color: #229c06;">
								Delegate: 
								{{ Session::get('user')->first_name }} {{ Session::get('user')->last_name }}</b>
						</h4>
							
						<div class="section-header">
							
							<h3><i class="fa fa-check mr-2" aria-hidden="true"></i>PAYMENT SUCCESSFUL!</h3>
						</div>  
						<p class="mb-4" style="font-weight: 300;">Thank you for registering. Your booking has been confirmed successfully. Confirmation sent to your email address
							@if (Session::exists('user') )
								"{{ Session::get('user')->email }}"
							@endif
							.<br><a href="/">Register A Collegue</a></p>
						<a href="http://internationaldataweek.org/visa-and-travel-information" class="btn">Visa And Travel Information</a>
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
	</div>	 

@endsection