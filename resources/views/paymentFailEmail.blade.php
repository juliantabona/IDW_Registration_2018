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
	
		<table width="100%" cellpadding="0" cellspacing="0" border="0" class="background_main" style="background-color: #ffffff; padding-top: 20px; color: #434245; width: 100%;">
			<tbody>
				<tr>
					<td valign="top" class="sm_full_width" style="margin: 0 auto; width: 600px; display: block;">
						<div class="sm_no_padding" style="margin: 0 auto; padding: 30px 0 40px; display: block; box-sizing: border-box;">
							<table style="width: 100%; color: #434245;" border="0" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td style="box-sizing: border-box;">
											<table border="0" cellpadding="0" cellspacing="0">
												<tbody>
													<tr>
														<td>
															<img src="https://idw2018.optimumqbw.com/images/sponsors.png" style="background: #e23500;border-bottom: 5px solid #e23500;">
															<h1 style="font-size: 30px;">PAYMENT UNSUCCESSFUL</h1>
															<br>
															<p style="font-size: 17px;">
																Delegate No: {{ $user->id }}
																Transaction No: {{ $transaction->id }}
															</p>
															<br>
															<p style="font-size: 17px;">
															    Dear {{ $user->first_name }},
															</p> 
															<p> 
																Payment for your participation in International Data Week (IDW) 2018, was not successful. Please try again. 
                                                            </p>
                                                            <br>
															<form action="https://idw2018.optimumqbw.com/register" method="POST">
																{{ csrf_field() }}
																<input class="hidden" name="email" value="{{ $user->email }}">
																<input type="hidden" name="abortRegistration" value="1"> 
																<button type="submit" class="btn" style="text-decoration:none;padding: 10px;color: #fff;background: #e23500;display: block;width: 50%;text-align: center;margin: 40px 20%;">Proceed To Payment</button>
															</form>

															<p> 
                                                                Best regards,<br>
                                                                IDW 2018 Programme Committee                                                                    
															</p> 
                                                            <p>
                                                                Support Email: 
                                                                <a href="info@optimumqbw.com" target="_top">info@optimumqbw.com</a>
                                                            </p>	
                                                            <img src="https://idw2018.optimumqbw.com/images/sponsors.png" style="background: #e23500;border-bottom: 5px solid #e23500;">												
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