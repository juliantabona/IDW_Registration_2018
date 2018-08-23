<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
		<title>{{ $user->first_name }}, - Payment Confirmation</title>
	<link id="id2" rel="stylesheet" href="//fast.fonts.net/cssapi/e3b6f221-91c3-496d-85a5-e06a333f4d2d.css"><style type="text/css">@font-face { font-family: test; src: url('chrome-extension://dlpillepmpinmldcgomlekppgegbkkoc/AvenirLTStd-Heavy.otf'); }</style><link id="id2" rel="stylesheet" href="//fast.fonts.net/cssapi/e3b6f221-91c3-496d-85a5-e06a333f4d2d.css"><style type="text/css">@font-face { font-family: test; src: url('chrome-extension://dlpillepmpinmldcgomlekppgegbkkoc/AvenirLTStd-Heavy.otf'); }</style></head>
	<body>
		<!--[if mso]>
			<style type="text/css">
				
				.background_main, table, table td, p, div, h1, h2, h3, h4, h5, h6 {
					font-family: Arial, sans-serif !important;
				}
				
			</style>
		<![endif]-->
	
		<table width="100%" cellpadding="0" cellspacing="0" border="0" class="background_main" style="line-height: 24px;background-color: #ffffff; padding-top: 20px; color: #434245; width: 100%;">
			<tbody>
				<tr>
					<td valign="top" class="sm_full_width" style="margin: 0 auto; width: 100%; display: block;">
						<div class="sm_no_padding" style="margin: 0 auto; padding: 30px 0 40px; display: block; box-sizing: border-box;">
							<table style="width: 100%; color: #434245;" border="0" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td style="box-sizing: border-box;">
											<table border="0" cellpadding="0" cellspacing="0">
												<tbody>
													<tr>
														<td>
															<img src="{{ URL::to('/') }}/images/sponsors.png" style="background: #e23500;border-bottom: 5px solid #e23500;">
															<h1 style="font-size: 30px;"> PAYMENT CONFIRMATION</h1>
															<br>
															<p style="font-size: 17px;">
																Delegate No: {{ $user->id }}
																Transaction No: IDW-2018-{{ $transaction->id }}
															</p>
															<p style="font-size: 20px;">
																<strong>Payment Details:</strong>
															</p>
															<ul>
																<li>Card Type: {{ $payment_type }}</li>
																
																<li>Card Number: {{ $MaskedCardNumber }}</li>
												
																<li>Cardholder Name: {{ $card_name }}</li>
										
																<li>Email Address: {{ $user->email }}</li>
								
																<li>Merchandise: {{ $package_type }}</li>
																
																<li>Amount: BWP {{ $amount }}</li>
														
																<li>Reference: {{ $transaction_ID }}</li>
												
																<li>Transaction RRN: N/A</li>
										
																<li>Transaction Date: {{ $transactionDate }}</li>
															</ul>
															<br>
															<p style="font-size: 17px;">
															    Dear {{ $user->first_name }},
															</p> 
															<p> 
																Thank you for your payment. We herewith confirm your participation in International Data Week (IDW) 2018, which will take place on 5–8 November 2018 in Gaborone, Botswana. 
															</p>
													
															<ul> 
                                                                <li>To view the programme, including details on breakout and poster sessions, please visit www.internationaldataweek.org/programme.</li>


                                                                <li>For information on logistics, including lodging options, please visit: www.internationaldataweek.org/venue-accommodation-logistics.</li>
                                                                
                                                                
                                                                <li>For transportation details and visa requirements, please visit: www.internationaldataweek.org/visa-and-travel-information.</li>
                                                                
                                                                <li>For Botswana Tourism information, please visit the Botswana Tourism official site: http://www.botswanatourism.co.bw/
                                                                    <br/>As well as, the Hospitality and Tourism Association of Botswana official site: http://www.this-is-botswana.com/
                                                                    <br/>Please also see the Lonely Planet entry for Botswana: https://www.lonelyplanet.com/botswana
                                                                </li>
															</ul> 
															<p> 
																If you would like to make any changes to your registration at a later stage, please contact  
																the organizers of IDW 2018 at <a href="registrations@internationaldataweek.org." target="_top">registrations@internationaldataweek.org.</a> Please take note of the Cancellation &amp; Refund Policy stated in the <a href="{{ URL::to('/') }}/pdf/TnCs%20-%20Privacy%20Policy%20-%20Disclaimer.pdf">Terms &amp; Conditions.</a> 
															</p> 
															<p> 
																We look forward to seeing you in Botswana!
															</p> 
															<p> 
                                                                Best regards,<br>
                                                                IDW 2018 Programme Committee                                                                    
															</p> 
                                                            <p>
                                                                Support Email: 
                                                                <a href="info@internationaldataweek.org" target="_top">info@internationaldataweek.org</a>
                                                            </p>	
                                                            <img src="{{ URL::to('/') }}/images/sponsors.png" style="background: #e23500;border-bottom: 5px solid #e23500;">												
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	
	
	</body></html>