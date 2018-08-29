<html><head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
		<title>{{ $user->first_name }}, - Registration Confirmation</title>
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
															<h1 style="font-size: 30px;">Details For Bank Transfer</h1>
															
															<p style="font-size: 17px;">
																Delegate No: {{ $user->id }}
															</p>

															<p style="font-size: 17px;">
															Dear {{ $user->first_name }},
															</p> 
															<p> 
                                                                To pay by bank transfer, all the necessary information is atttached below. 
                                                                After you have successfully transfered your payment, kindly send your receipt to this email "registrations@internationaldataweek.org" for you to be confirmed as registered.
																Please note that payment must be received within 15 days of registration.
                                                            </p>
                                                            <p> 
                                                                If you prefer to pay using your VISA/MasterCard you may proceed by clicking on the button below:
															</p>
															<br>
															<a href="{{ URL::to('/') }}/payment-options?email={{ $user->email }}" style="text-decoration:none;padding: 10px;color: #fff;background: #e23500;display: block;width: 50%;text-align: center;margin: 40px 20%;">VISA/MasterCard Payment</a>
															<br>
															<p> 
																Best regards,
																
															</p> 
															<p>IDW 2018 Programme Committee</p>
															
															<table style="width: 100%;background: #e23500;">
																<tbody>
																	<tr>
																		<td style="box-sizing: border-box; padding: 0; padding-right: 30px; padding-left: 30px;">
																			<div style="color: #565759; text-align: left; width: 100%; font-size: 15px;">
																				<table border="0" cellpadding="0" cellspacing="0" style="display: inline-table; vertical-align: top; width: 100%;">
																					<tbody class="sm_full_width">
																						<tr class="sm_full_width">
																							<td class="sm_full_width">
	
																								<!--[if mso]>
																									<table cellpadding="0" cellspacing="0" border="0" style="padding: 0; margin: 0; width: 100%;">
																										<tr>
																											<td colspan="3" style="padding: 0; margin: 0; font-size: 20px; height: 20px;" height="20">&nbsp;</td>
																										</tr>
																										<tr>
																											<td style="padding: 0; margin: 0;">&nbsp;</td>
																											<td style="padding: 0; margin: 0;" width="540">
																								<![endif]-->
	
																									<table border="0" cellpadding="0" cellspacing="0" width="434" class="sm_full_width" style="display: inline-table; width: 434px; max-width: 100%;">
																										<tbody>
																											<tr>
																												<td width="38" style="width: 38px; padding-right: 15px; padding-top: 20px;">
																													<a href="http://www.internationaldataweek.org" style="margin: 6px 0 15px; display: block;" target="_blank">
																														<img alt="" src="http://www.internationaldataweek.org/sites/all/themes/eventme/logo.png" style="height: 48px;">
																													</a>
																												</td>  
	
																												
																												
																											</tr>
																										</tbody>
																									</table>
	
																								<div style="clear: both;"></div>
	
																							
	
																							</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table><br>
																													Support Email: <a href="info@internationaldataweek.org" target="_top">info@internationaldataweek.org</a>
																												
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