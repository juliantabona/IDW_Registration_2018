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
															<img src="https://idw2018.optimumqbw.com/images/sponsors.png" style="background: #e23500;border-bottom: 5px solid #e23500;">
															<h1 style="font-size: 30px;">Successful Registration by {{ $user->first_name }} {{ $user->last_name }}</h1>
															
															<p style="font-size: 17px;">
																Delegate No: {{ $user->id }}
															</p>
	
															<p style="font-size: 20px;">
                                                                DELEGATE DETAILS
															</p> 
															<p> 
																<b>Delegate general details are as follows:</b>
															</p>
													
															<ul> 
																<li> 
																	<b>First Name: </b> {{ $user->first_name }}
                                                                </li>
                                                                <li> 
																	<b>Last Name: </b> {{ $user->last_name }}
                                                                </li>
                                                                <li> 
																	<b>Gender: </b> {{ $user->gender }}
                                                                </li> 
                                                                <li> 
																	<b>Affiliation: </b> {{ $user->affiliation }}
                                                                </li>
                                                                <li> 
																	<b>Position/Title: </b> {{ $user->position }}
                                                                </li>
                                                                <li> 
																	<b>Country: </b> {{ $user->country }}
                                                                </li>
                                                                <li> 
																	<b>Organisation Type: </b> {{ $user->organisation_type }}
                                                                </li>
                                                                <li> 
																	<b>Address: </b> {{ $user->address }}
                                                                </li>
                                                                <li> 
																	<b>Address 2: </b> {{ $user->address_2 }}
                                                                </li>
                                                                <li> 
																	<b>City: </b> {{ $user->city }}
                                                                </li>
                                                                <li> 
																	<b>State: </b> {{ $user->state }}
																</li>
                                                                <li> 
																	<b>ZipCode: </b> {{ $user->zip_code }}
                                                                </li>
                                                            </ul>
                                                            <p> 
																<b>Contact details are as follows:</b>
															</p>
                                                            <ul>
                                                                <li> 
																	<b>Phone: </b> {{ $user->phone }}
																</li>
                                                                <li> 
																	<b>Email: </b> {{ $user->email }}
																</li>
                                                                <li> 
																	<b>Additional_email: </b> {{ $user->additional_email }}
                                                                </li>
                                                                <li> 
																	<b>Twitter Handle: </b> {{ $user->twitter_handle }}
                                                                </li>
                                                            </ul>
                                                            <p> 
																<b>Event specific details:</b>
															</p>
                                                            <ul>
                                                                <li> 
																	<b>Days Attending: </b> {{ $user->days_attending }}
																</li>
                                                                <li> 
																	<b>Event Attending: </b> {{ $user->event_attending }}
																</li>
                                                            </ul>
                                                            <p> 
																<b>Other details:</b>
                                                            </p>
                                                            <ul>
                                                                <li> 
																	<b>Organisation Affiliation: </b> {{ $user->organisation_affiliation }}
                                                                </li>
                                                                <li> 
																	<b>Communication Channel: </b> {{ $user->communication_channel }}
                                                                </li>
                                                                <li> 
																	<b>Accessibility: </b> {{ $user->accessibility }}
                                                                </li>
                                                                <li> 
																	<b>Allergies: </b> {{ $user->allergies }}
                                                                </li>
                                                                <li> 
																	<b>Send Future Updates: </b> {{ $user->send_future_updates }}
                                                                </li>
                                                                <li> 
																	<b>Send Data Science Journal Updates: </b> {{ $user->send_data_science_journal_updates }}
                                                                </li>
                                                                <li> 
																	<b>Agree To Addon List: </b> {{ $user->agree_to_addon_list }}
                                                                </li>
                                                                <li> 
																	<b>Agree To Details On List: </b> {{ $user->agree_to_details_on_list }}
																</li>
															</ul> 											
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