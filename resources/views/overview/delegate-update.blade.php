@extends('layouts.app') 

@section('style')
    
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>
        body {
            background: #fff !important;
        }
    </style>
@endsection 

@section('content')
<div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-full-bg pt-5 pb-5">
    <div class="row w-100">
        <div class="col-md-8 offset-md-2 mt-2">
            <div class="card card-hoverable">
                <div class="card-body">
                    <form action="{{ route('delegate-save', $profile->id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn float-right mr-2" style=" max-width: 150px !important; ">
                                <i class="icon-pencil icons"></i>
                                Update
                            </button>
                            <a href="/delegates/{{$profile->id}}" class="btn float-right mr-2" style=" max-width: 150px !important; ">
                                <i class="icon-pencil icons"></i>
                                Back
                            </a>
                        </div>
                    </div>
                    <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                        <h4 class="card-title mb-0">DELEGATE DETAILS (NO {{ $profile->id }})</h4>
                    </div>
                    <div class="wrapper">
                        <hr>
                        <p class="mb-3" style="font-weight: 800;color: #ca2f00;"> 
                            <b>Delegate general details are as follows:</b>
                        </p>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>First Name: </b>
                                    <div class="input-box mt-2">
                                        <input class="text" type="text" id="first_name" name="first_name" placeholder="First Name*" value="{{ old('first_name', $profile->first_name) }}"></input>
                                    </div>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Last Name: </b>
                                    <div class="input-box mt-2">
                                        <input class="text" type="text" id="last_name" name="last_name" placeholder="Last Name*" value="{{ old('last_name', $profile->last_name) }}"></input>
                                    </div>
                                </h6>           
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-6">
                                <h6>
                                    <b>Affiliation: </b>
                                    <div class="input-box mt-2">
                                        <input class="text" type="text" id="affiliation" name="affiliation" placeholder="Affiliation*" value="{{ old('affiliation', $profile->affiliation) }}"></input>
                                    </div>
                                </h6>           
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Position/Title: </b>
                                    <div class="input-box mt-2">
                                        <input class="text" type="text" id="position" name="position" placeholder="Position/Title*" value="{{ old('position', $profile->position) }}"></input>
                                    </div>
                                </h6>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>Country: </b>
                                </h6>   
                                <div class="input-box mt-2">
                                    <select id="country" name="country">
                                        <option {{ $profile->country == "Afghanistan" ? 'selected':'' }} value="Afghanistan">Afghanistan</option>
                                        <option {{ $profile->country == "Albania" ? 'selected':'' }} value="Albania">Albania</option>
                                        <option {{ $profile->country == "Algeria" ? 'selected':'' }} value="Algeria">Algeria</option>
                                        <option {{ $profile->country == "Andorra" ? 'selected':'' }} value="Andorra">Andorra</option>
                                        <option {{ $profile->country == "Antigua and Barbuda" ? 'selected':'' }} value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option {{ $profile->country == "Argentina" ? 'selected':'' }} value="Argentina">Argentina</option>
                                        <option {{ $profile->country == "Armenia" ? 'selected':'' }} value="Armenia">Armenia</option>
                                        <option {{ $profile->country == "Australia" ? 'selected':'' }} value="Australia">Australia</option>
                                        <option {{ $profile->country == "Austria" ? 'selected':'' }} value="Austria">Austria</option>
                                        <option {{ $profile->country == "Azerbaijan" ? 'selected':'' }} value="Azerbaijan">Azerbaijan</option>
                                        <option {{ $profile->country == "Bahamas" ? 'selected':'' }} value="Bahamas">Bahamas</option>
                                        <option {{ $profile->country == "Bahrain" ? 'selected':'' }} value="Bahrain">Bahrain</option>
                                        <option {{ $profile->country == "Bangladesh" ? 'selected':'' }} value="Bangladesh">Bangladesh</option>
                                        <option {{ $profile->country == "Barbados" ? 'selected':'' }} value="Barbados">Barbados</option>
                                        <option {{ $profile->country == "Belarus" ? 'selected':'' }} value="Belarus">Belarus</option>
                                        <option {{ $profile->country == "Belgium" ? 'selected':'' }} value="Belgium">Belgium</option>
                                        <option {{ $profile->country == "Belize" ? 'selected':'' }} value="Belize">Belize</option>
                                        <option {{ $profile->country == "Benin" ? 'selected':'' }} value="Benin">Benin</option>
                                        <option {{ $profile->country == "Bhutan" ? 'selected':'' }} value="Bhutan">Bhutan</option>
                                        <option {{ $profile->country == "Bolivia" ? 'selected':'' }} value="Bolivia">Bolivia</option>
                                        <option {{ $profile->country == "Bosnia and Herzegovina" ? 'selected':'' }} value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option {{ $profile->country == "Botswana" ? 'selected':'' }} value="Botswana">Botswana</option>
                                        <option {{ $profile->country == "Brazil" ? 'selected':'' }} value="Brazil">Brazil</option>
                                        <option {{ $profile->country == "Brunei" ? 'selected':'' }} value="Brunei">Brunei</option>
                                        <option {{ $profile->country == "Bulgaria" ? 'selected':'' }} value="Bulgaria">Bulgaria</option>
                                        <option {{ $profile->country == "Burkina Faso" ? 'selected':'' }} value="Burkina Faso">Burkina Faso</option>
                                        <option {{ $profile->country == "Burundi" ? 'selected':'' }} value="Burundi">Burundi</option>
                                        <option {{ $profile->country == "Cambodia" ? 'selected':'' }} value="Cambodia">Cambodia</option>
                                        <option {{ $profile->country == "Cameroon" ? 'selected':'' }} value="Cameroon">Cameroon</option>
                                        <option {{ $profile->country == "Canada" ? 'selected':'' }} value="Canada">Canada</option>
                                        <option {{ $profile->country == "Cape Verde" ? 'selected':'' }} value="Cape Verde">Cape Verde</option>
                                        <option {{ $profile->country == "Central African Republic" ? 'selected':'' }} value="Central African Republic">Central African Republic</option>
                                        <option {{ $profile->country == "Chad" ? 'selected':'' }} value="Chad">Chad</option>
                                        <option {{ $profile->country == "Chile" ? 'selected':'' }} value="Chile">Chile</option>
                                        <option {{ $profile->country == "China" ? 'selected':'' }} value="China">China</option>
                                        <option {{ $profile->country == "Colombia" ? 'selected':'' }} value="Colombia">Colombia</option>
                                        <option {{ $profile->country == "Comoros" ? 'selected':'' }} value="Comoros">Comoros</option>
                                        <option {{ $profile->country == "Congo" ? 'selected':'' }} value="Congo">Congo</option>
                                        <option {{ $profile->country == "Costa Rica" ? 'selected':'' }} value="Costa Rica">Costa Rica</option>
                                        <option {{ $profile->country == "Cote d'Ivoire" ? 'selected':'' }} value="Cote d'Ivoire">Cote d'Ivoire</option>
                                        <option {{ $profile->country == "Croatia" ? 'selected':'' }} value="Croatia">Croatia</option>
                                        <option {{ $profile->country == "Cuba" ? 'selected':'' }} value="Cuba">Cuba</option>
                                        <option {{ $profile->country == "Cyprus" ? 'selected':'' }} value="Cyprus">Cyprus</option>
                                        <option {{ $profile->country == "Czech Republic" ? 'selected':'' }} value="Czech Republic">Czech Republic</option>
                                        <option {{ $profile->country == "Denmark" ? 'selected':'' }} value="Denmark">Denmark</option>
                                        <option {{ $profile->country == "Djibouti" ? 'selected':'' }} value="Djibouti">Djibouti</option>
                                        <option {{ $profile->country == "Dominica" ? 'selected':'' }} value="Dominica">Dominica</option>
                                        <option {{ $profile->country == "Dominican Republic" ? 'selected':'' }} value="Dominican Republic">Dominican Republic</option>
                                        <option {{ $profile->country == "East Timor" ? 'selected':'' }} value="East Timor">East Timor</option>
                                        <option {{ $profile->country == "Ecuador" ? 'selected':'' }} value="Ecuador">Ecuador</option>
                                        <option {{ $profile->country == "Egypt" ? 'selected':'' }} value="Egypt">Egypt</option>
                                        <option {{ $profile->country == "El Salvador" ? 'selected':'' }} value="El Salvador">El Salvador</option>
                                        <option {{ $profile->country == "Equatorial Guinea" ? 'selected':'' }} value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option {{ $profile->country == "Eritrea" ? 'selected':'' }} value="Eritrea">Eritrea</option>
                                        <option {{ $profile->country == "Estonia" ? 'selected':'' }} value="Estonia">Estonia</option>
                                        <option {{ $profile->country == "Ethiopia" ? 'selected':'' }} value="Ethiopia">Ethiopia</option>
                                        <option {{ $profile->country == "Fiji" ? 'selected':'' }} value="Fiji">Fiji</option>
                                        <option {{ $profile->country == "Finland" ? 'selected':'' }} value="Finland">Finland</option>
                                        <option {{ $profile->country == "France" ? 'selected':'' }} value="France">France</option>
                                        <option {{ $profile->country == "Gabon" ? 'selected':'' }} value="Gabon">Gabon</option>
                                        <option {{ $profile->country == "Gambia" ? 'selected':'' }} value="Gambia">Gambia</option>
                                        <option {{ $profile->country == "Georgia" ? 'selected':'' }} value="Georgia">Georgia</option>
                                        <option {{ $profile->country == "Germany" ? 'selected':'' }} value="Germany">Germany</option>
                                        <option {{ $profile->country == "Ghana" ? 'selected':'' }} value="Ghana">Ghana</option>
                                        <option {{ $profile->country == "Greece" ? 'selected':'' }} value="Greece">Greece</option>
                                        <option {{ $profile->country == "Grenada" ? 'selected':'' }} value="Grenada">Grenada</option>
                                        <option {{ $profile->country == "Guatemala" ? 'selected':'' }} value="Guatemala">Guatemala</option>
                                        <option {{ $profile->country == "Guinea" ? 'selected':'' }} value="Guinea">Guinea</option>
                                        <option {{ $profile->country == "Guinea-Bissau" ? 'selected':'' }} value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option {{ $profile->country == "Guyana" ? 'selected':'' }} value="Guyana">Guyana</option>
                                        <option {{ $profile->country == "Haiti" ? 'selected':'' }} value="Haiti">Haiti</option>
                                        <option {{ $profile->country == "Honduras" ? 'selected':'' }} value="Honduras">Honduras</option>
                                        <option {{ $profile->country == "Hong Kong" ? 'selected':'' }} value="Hong Kong">Hong Kong</option>
                                        <option {{ $profile->country == "Hungary" ? 'selected':'' }} value="Hungary">Hungary</option>
                                        <option {{ $profile->country == "Iceland" ? 'selected':'' }} value="Iceland">Iceland</option>
                                        <option {{ $profile->country == "India" ? 'selected':'' }} value="India">India</option>
                                        <option {{ $profile->country == "Indonesia" ? 'selected':'' }} value="Indonesia">Indonesia</option>
                                        <option {{ $profile->country == "Iran" ? 'selected':'' }} value="Iran">Iran</option>
                                        <option {{ $profile->country == "Iraq" ? 'selected':'' }} value="Iraq">Iraq</option>
                                        <option {{ $profile->country == "Ireland" ? 'selected':'' }} value="Ireland">Ireland</option>
                                        <option {{ $profile->country == "Israel" ? 'selected':'' }} value="Israel">Israel</option>
                                        <option {{ $profile->country == "Italy" ? 'selected':'' }} value="Italy">Italy</option>
                                        <option {{ $profile->country == "Jamaica" ? 'selected':'' }} value="Jamaica">Jamaica</option>
                                        <option {{ $profile->country == "Japan" ? 'selected':'' }} value="Japan">Japan</option>
                                        <option {{ $profile->country == "Jordan" ? 'selected':'' }} value="Jordan">Jordan</option>
                                        <option {{ $profile->country == "Kazakhstan" ? 'selected':'' }} value="Kazakhstan">Kazakhstan</option>
                                        <option {{ $profile->country == "Kenya" ? 'selected':'' }} value="Kenya">Kenya</option>
                                        <option {{ $profile->country == "Kiribati" ? 'selected':'' }} value="Kiribati">Kiribati</option>
                                        <option {{ $profile->country == "North Korea" ? 'selected':'' }} value="North Korea">North Korea</option>
                                        <option {{ $profile->country == "South Korea" ? 'selected':'' }} value="South Korea">South Korea</option>
                                        <option {{ $profile->country == "Kuwait" ? 'selected':'' }} value="Kuwait">Kuwait</option>
                                        <option {{ $profile->country == "Kyrgyzstan" ? 'selected':'' }} value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option {{ $profile->country == "Laos" ? 'selected':'' }} value="Laos">Laos</option>
                                        <option {{ $profile->country == "Latvia" ? 'selected':'' }} value="Latvia">Latvia</option>
                                        <option {{ $profile->country == "Lebanon" ? 'selected':'' }} value="Lebanon">Lebanon</option>
                                        <option {{ $profile->country == "Lesotho" ? 'selected':'' }} value="Lesotho">Lesotho</option>
                                        <option {{ $profile->country == "Liberia" ? 'selected':'' }} value="Liberia">Liberia</option>
                                        <option {{ $profile->country == "Libya" ? 'selected':'' }} value="Libya">Libya</option>
                                        <option {{ $profile->country == "Liechtenstein" ? 'selected':'' }} value="Liechtenstein">Liechtenstein</option>
                                        <option {{ $profile->country == "Lithuania" ? 'selected':'' }} value="Lithuania">Lithuania</option>
                                        <option {{ $profile->country == "Luxembourg" ? 'selected':'' }} value="Luxembourg">Luxembourg</option>
                                        <option {{ $profile->country == "Macedonia" ? 'selected':'' }} value="Macedonia">Macedonia</option>
                                        <option {{ $profile->country == "Madagascar" ? 'selected':'' }} value="Madagascar">Madagascar</option>
                                        <option {{ $profile->country == "Malawi" ? 'selected':'' }} value="Malawi">Malawi</option>
                                        <option {{ $profile->country == "Malaysia" ? 'selected':'' }} value="Malaysia">Malaysia</option>
                                        <option {{ $profile->country == "Maldives" ? 'selected':'' }} value="Maldives">Maldives</option>
                                        <option {{ $profile->country == "Mali" ? 'selected':'' }} value="Mali">Mali</option>
                                        <option {{ $profile->country == "Malta" ? 'selected':'' }} value="Malta">Malta</option>
                                        <option {{ $profile->country == "Marshall Islands" ? 'selected':'' }} value="Marshall Islands">Marshall Islands</option>
                                        <option {{ $profile->country == "Mauritania" ? 'selected':'' }} value="Mauritania">Mauritania</option>
                                        <option {{ $profile->country == "Mauritius" ? 'selected':'' }} value="Mauritius">Mauritius</option>
                                        <option {{ $profile->country == "Mexico" ? 'selected':'' }} value="Mexico">Mexico</option>
                                        <option {{ $profile->country == "Micronesia" ? 'selected':'' }} value="Micronesia">Micronesia</option>
                                        <option {{ $profile->country == "Moldova" ? 'selected':'' }} value="Moldova">Moldova</option>
                                        <option {{ $profile->country == "Monaco" ? 'selected':'' }} value="Monaco">Monaco</option>
                                        <option {{ $profile->country == "Mongolia" ? 'selected':'' }} value="Mongolia">Mongolia</option>
                                        <option {{ $profile->country == "Montenegro" ? 'selected':'' }} value="Montenegro">Montenegro</option>
                                        <option {{ $profile->country == "Morocco" ? 'selected':'' }} value="Morocco">Morocco</option>
                                        <option {{ $profile->country == "Mozambique" ? 'selected':'' }} value="Mozambique">Mozambique</option>
                                        <option {{ $profile->country == "Myanmar" ? 'selected':'' }} value="Myanmar">Myanmar</option>
                                        <option {{ $profile->country == "Namibia" ? 'selected':'' }} value="Namibia">Namibia</option>
                                        <option {{ $profile->country == "Nauru" ? 'selected':'' }} value="Nauru">Nauru</option>
                                        <option {{ $profile->country == "Nepal" ? 'selected':'' }} value="Nepal">Nepal</option>
                                        <option {{ $profile->country == "Netherlands" ? 'selected':'' }} value="Netherlands">Netherlands</option>
                                        <option {{ $profile->country == "New Zealand" ? 'selected':'' }} value="New Zealand">New Zealand</option>
                                        <option {{ $profile->country == "Nicaragua" ? 'selected':'' }} value="Nicaragua">Nicaragua</option>
                                        <option {{ $profile->country == "Niger" ? 'selected':'' }} value="Niger">Niger</option>
                                        <option {{ $profile->country == "Nigeria" ? 'selected':'' }} value="Nigeria">Nigeria</option>
                                        <option {{ $profile->country == "Norway" ? 'selected':'' }} value="Norway">Norway</option>
                                        <option {{ $profile->country == "Oman" ? 'selected':'' }} value="Oman">Oman</option>
                                        <option {{ $profile->country == "Pakistan" ? 'selected':'' }} value="Pakistan">Pakistan</option>
                                        <option {{ $profile->country == "Palau" ? 'selected':'' }} value="Palau">Palau</option>
                                        <option {{ $profile->country == "Panama" ? 'selected':'' }} value="Panama">Panama</option>
                                        <option {{ $profile->country == "Papua New Guinea" ? 'selected':'' }} value="Papua New Guinea">Papua New Guinea</option>
                                        <option {{ $profile->country == "Paraguay" ? 'selected':'' }} value="Paraguay">Paraguay</option>
                                        <option {{ $profile->country == "Peru" ? 'selected':'' }} value="Peru">Peru</option>
                                        <option {{ $profile->country == "Philippines" ? 'selected':'' }} value="Philippines">Philippines</option>
                                        <option {{ $profile->country == "Poland" ? 'selected':'' }} value="Poland">Poland</option>
                                        <option {{ $profile->country == "Portugal" ? 'selected':'' }} value="Portugal">Portugal</option>
                                        <option {{ $profile->country == "Puerto Rico" ? 'selected':'' }} value="Puerto Rico">Puerto Rico</option>
                                        <option {{ $profile->country == "Qatar" ? 'selected':'' }} value="Qatar">Qatar</option>
                                        <option {{ $profile->country == "Romania" ? 'selected':'' }} value="Romania">Romania</option>
                                        <option {{ $profile->country == "Russia" ? 'selected':'' }} value="Russia">Russia</option>
                                        <option {{ $profile->country == "Rwanda" ? 'selected':'' }} value="Rwanda">Rwanda</option>
                                        <option {{ $profile->country == "Saint Kitts and Nevis" ? 'selected':'' }} value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option {{ $profile->country == "Saint Lucia" ? 'selected':'' }} value="Saint Lucia">Saint Lucia</option>
                                        <option {{ $profile->country == "Saint Vincent and the Grenadines" ? 'selected':'' }} value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option {{ $profile->country == "Samoa" ? 'selected':'' }} value="Samoa">Samoa</option>
                                        <option {{ $profile->country == "San Marino" ? 'selected':'' }} value="San Marino">San Marino</option>
                                        <option {{ $profile->country == "Sao Tome and Principe" ? 'selected':'' }} value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option {{ $profile->country == "Saudi Arabia" ? 'selected':'' }} value="Saudi Arabia">Saudi Arabia</option>
                                        <option {{ $profile->country == "Senegal" ? 'selected':'' }} value="Senegal">Senegal</option>
                                        <option {{ $profile->country == "Serbia and Montenegro" ? 'selected':'' }} value="Serbia and Montenegro">Serbia and Montenegro</option>
                                        <option {{ $profile->country == "Seychelles" ? 'selected':'' }} value="Seychelles">Seychelles</option>
                                        <option {{ $profile->country == "Sierra Leone" ? 'selected':'' }} value="Sierra Leone">Sierra Leone</option>
                                        <option {{ $profile->country == "Singapore" ? 'selected':'' }} value="Singapore">Singapore</option>
                                        <option {{ $profile->country == "Slovakia" ? 'selected':'' }} value="Slovakia">Slovakia</option>
                                        <option {{ $profile->country == "Slovenia" ? 'selected':'' }} value="Slovenia">Slovenia</option>
                                        <option {{ $profile->country == "Solomon Islands" ? 'selected':'' }} value="Solomon Islands">Solomon Islands</option>
                                        <option {{ $profile->country == "Somalia" ? 'selected':'' }} value="Somalia">Somalia</option>
                                        <option {{ $profile->country == "South Africa" ? 'selected':'' }} value="South Africa">South Africa</option>
                                        <option {{ $profile->country == "Spain" ? 'selected':'' }} value="Spain">Spain</option>
                                        <option {{ $profile->country == "Sri Lanka" ? 'selected':'' }} value="Sri Lanka">Sri Lanka</option>
                                        <option {{ $profile->country == "Sudan" ? 'selected':'' }} value="Sudan">Sudan</option>
                                        <option {{ $profile->country == "Suriname" ? 'selected':'' }} value="Suriname">Suriname</option>
                                        <option {{ $profile->country == "Swaziland" ? 'selected':'' }} value="Swaziland">Swaziland</option>
                                        <option {{ $profile->country == "Sweden" ? 'selected':'' }} value="Sweden">Sweden</option>
                                        <option {{ $profile->country == "Switzerland" ? 'selected':'' }} value="Switzerland">Switzerland</option>
                                        <option {{ $profile->country == "Syria" ? 'selected':'' }} value="Syria">Syria</option>
                                        <option {{ $profile->country == "Taiwan" ? 'selected':'' }} value="Taiwan">Taiwan</option>
                                        <option {{ $profile->country == "Tajikistan" ? 'selected':'' }} value="Tajikistan">Tajikistan</option>
                                        <option {{ $profile->country == "Tanzania" ? 'selected':'' }} value="Tanzania">Tanzania</option>
                                        <option {{ $profile->country == "Thailand" ? 'selected':'' }} value="Thailand">Thailand</option>
                                        <option {{ $profile->country == "Togo" ? 'selected':'' }} value="Togo">Togo</option>
                                        <option {{ $profile->country == "Tonga" ? 'selected':'' }} value="Tonga">Tonga</option>
                                        <option {{ $profile->country == "Trinidad and Tobago" ? 'selected':'' }} value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option {{ $profile->country == "Tunisia" ? 'selected':'' }} value="Tunisia">Tunisia</option>
                                        <option {{ $profile->country == "Turkey" ? 'selected':'' }} value="Turkey">Turkey</option>
                                        <option {{ $profile->country == "Turkmenistan" ? 'selected':'' }} value="Turkmenistan">Turkmenistan</option>
                                        <option {{ $profile->country == "Tuvalu" ? 'selected':'' }} value="Tuvalu">Tuvalu</option>
                                        <option {{ $profile->country == "Uganda" ? 'selected':'' }} value="Uganda">Uganda</option>
                                        <option {{ $profile->country == "Ukraine" ? 'selected':'' }} value="Ukraine">Ukraine</option>
                                        <option {{ $profile->country == "United Arab Emirates" ? 'selected':'' }} value="United Arab Emirates">United Arab Emirates</option>
                                        <option {{ $profile->country == "United Kingdom" ? 'selected':'' }} value="United Kingdom">United Kingdom</option>
                                        <option {{ $profile->country == "United States" ? 'selected':'' }} value="United States">United States</option>
                                        <option {{ $profile->country == "Uruguay" ? 'selected':'' }} value="Uruguay">Uruguay</option>
                                        <option {{ $profile->country == "Uzbekistan" ? 'selected':'' }} value="Uzbekistan">Uzbekistan</option>
                                        <option {{ $profile->country == "Vanuatu" ? 'selected':'' }} value="Vanuatu">Vanuatu</option>
                                        <option {{ $profile->country == "Vatican City" ? 'selected':'' }} value="Vatican City">Vatican City</option>
                                        <option {{ $profile->country == "Venezuela" ? 'selected':'' }} value="Venezuela">Venezuela</option>
                                        <option {{ $profile->country == "Vietnam" ? 'selected':'' }} value="Vietnam">Vietnam</option>
                                        <option {{ $profile->country == "Yemen" ? 'selected':'' }} value="Yemen">Yemen</option>
                                        <option {{ $profile->country == "Zambia" ? 'selected':'' }} value="Zambia">Zambia</option>
                                        <option {{ $profile->country == "Zimbabwe" ? 'selected':'' }} value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>        
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>ZipCode: </b>
                                    <div class="input-box mt-2">
                                        <input class="text" type="text" id="zip_code" name="zip_code" placeholder="Zip Code/Postal Code*" value="{{ old('zip_code', $profile->zip_code) }}"></input>
                                    </div>
                                </h6>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>Address: </b>
                                    <div class="input-box mt-2">
                                        <input class="text" type="text" id="address" name="address" placeholder="Address 1*" value="{{ old('address', $profile->address) }}"></input>
                                    </div>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Address 2: </b>
                                    <div class="input-box mt-2">
                                        <input class="text" type="text" id="address_2" name="address_2" placeholder="Address 2" value="{{ old('address_2', $profile->address_2) }}"></input>
                                    </div>
                                </h6>           
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>City: </b>
                                    <div class="input-box mt-2">
                                        <input class="text" type="text" id="city" name="city" placeholder="City*" value="{{ old('city', $profile->city) }}"></input>
                                    </div>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>State: </b>
                                    <div class="input-box mt-2">
                                        <input class="text" type="text" id="state" name="state" placeholder="State" value="{{ old('state', $profile->state) }}"></input>
                                    </div>            
                                </h6>           
                            </div>
                        </div>
                        <div class="row mb-3">
                                <div class="col-6">
                                    <h6>
                                        <b>Organisation Type: </b>
                                        <div class="input-box mt-2">
                                            <div class="wthree-text">
                                                <label class="anim">
                                                    <input type="radio" {{ $profile->organisation_type == "Large Enterprise" ? 'checked':'' }} name="organisation_type" value="Large Enterprise" class="organisation_type checkbox" ></input>
                                                    <span>Large Enterprise</span>
                                                </label>
                                                <div class="clear"></div>
                                            </div>
                
                                            <div class="wthree-text">
                                                <label class="anim">
                                                    <input type="radio" {{ $profile->organisation_type == "Small and Medium Enterprise" ? 'checked':'' }} name="organisation_type" value="Small and Medium Enterprise" class="organisation_type checkbox" ></input>
                                                    <span>Small and Medium Enterprise</span>
                                                </label>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="wthree-text">
                                                <label class="anim">
                                                    <input type="radio" {{ $profile->organisation_type == "IT Consultancy/Development" ? 'checked':'' }} name="organisation_type" value="IT Consultancy/Development" class="organisation_type checkbox" ></input>
                                                    <span>IT Consultancy/Development</span>
                                                </label>
                                                <div class="clear"></div>
                                            </div>
                
                                            <div class="wthree-text">
                                                <label class="anim">
                                                    <input type="radio" {{ $profile->organisation_type == "Policy/Funding Agency" ? 'checked':'' }} name="organisation_type"value="Policy/Funding Agency" class="organisation_type checkbox" ></input>
                                                    <span>Policy/Funding Agency</span>
                                                </label>
                                                <div class="clear"></div>
                                            </div>
                
                                            <div class="wthree-text">
                                                <label class="anim">
                                                    <input type="radio" {{ $profile->organisation_type == "Press and Media" ? 'checked':'' }} name="organisation_type" value="Press and Media" class="organisation_type checkbox" ></input>
                                                    <span>Press &amp; Media</span>
                                                </label>
                                                <div class="clear"></div>
                                            </div>
                
                                            <div class="wthree-text">
                                                <label class="anim">
                                                    <input type="radio" {{ $profile->organisation_type == "Government Agency" ? 'checked':'' }} name="organisation_type" value="Government Agency" class="organisation_type checkbox"></input>
                                                    <span>Government Agency</span>
                                                </label>
                                                <div class="clear"></div>
                                            </div>
                
                                            <div class="wthree-text">
                                                <label class="anim">
                                                    <input type="radio" {{ $profile->organisation_type == "University" ? 'checked':'' }} name="organisation_type" value="University" class="organisation_type checkbox" ></input>
                                                    <span>University</span>
                                                </label>
                
                                                <div class="clear"></div>
                                            </div>
                
                                            <div class="wthree-text">
                                                <label class="anim">
                                                    <input type="radio" 
                                                    {{ (!in_array ($profile->organisation_type, ['Large Enterprise', 'Small and Medium Enterprise', 'IT Consultancy/Development', 'IT Consultancy/Development', 'Policy/Funding Agency', 'Press and Media', 'Government Agency', 'University'])) ? 'checked':'' }} 
                                                    name="organisation_type" value="Other" class="organisation_type checkbox" ></input>
                                                    <span>Other</span>
                                                </label>
                
                                                <div class="clear"></div>
                                            </div>
                
                                            <div class="input-box mt-2">
                                                <input class="text" type="text" id="organisation_type_other" name="organisation_type_other" placeholder="Other, please specify..." 
                                                value="{{ (!in_array ($profile->organisation_type, ['Large Enterprise', 'Small and Medium Enterprise', 'IT Consultancy/Development', 'IT Consultancy/Development', 'Policy/Funding Agency', 'Press and Media', 'Government Agency', 'University'])) ? $profile->organisation_type:'' }}"></input>
                                            </div>
                                        </div>
                                    </h6>           
                                </div>
                                <div class="col-6">
                                    <h6>
                                        <b>Gender: </b>
                                        <div class="input-box mt-2">
                                            <div class="wthree-text">
                                                <label class="anim">
                                                    <input type="radio" name="gender" value="Male" class="gender checkbox" {{ $profile->gender == "Male" ? 'checked':'' }}></input>
                                                    <span>Male</span>
                                                </label>
                                                <div class="clear"></div>
                                            </div>
                
                                            <div class="wthree-text">
                                                <label class="anim">
                                                    <input type="radio" name="gender" value="Female" class="gender checkbox" {{ $profile->gender == "Female" ? 'checked':'' }}></input>
                                                    <span>Female</span>
                                                </label>
                                                <div class="clear"></div>
                                            </div>
                
                                            <div class="wthree-text">
                                                <label class="anim">
                                                    <input type="radio" name="gender" value="Prefer not to disclose" class="gender checkbox" {{ $profile->gender == "Prefer not to disclose" ? 'checked':'' }}></input>
                                                    <span>Prefer not to disclose</span>
                                                </label>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </h6>
                                </div>
                            </div>
                        <hr/>
                        <p class="mb-3" style="font-weight: 800;color: #ca2f00;"> 
                            <b>Contact details are as follows:</b>
                        </p>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>Phone: </b>
                                    <div class="input-box mt-2">
                                        <input class="text" type="text" id="phone" name="phone" placeholder="Phone*" value="{{ old('phone', $profile->phone) }}"></input>
                                    </div>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Email: </b>
                                    <div class="input-box mt-2">
                                        <input class="text" type="text" id="email" name="email" placeholder="Email Address*" value="{{ old('email', $profile->email) }}"></input>
                                    </div>
                                </h6>           
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>Additional Email: </b>
                                    <div class="input-box">
                                        <input class="text" type="text" id="additional_email" name="additional_email" placeholder="Additional Email" value="{{ old('email', $profile->additional_email) }}"></input>
                                    </div>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Twitter Handle: </b>
                                    <div class="input-box">
                                        <input class="text" type="text" name="twitter_handle" placeholder="Twitter Handle (@xxx)" value="{{ old('twitter_handle', $profile->twitter_handle) }}"></input>
                                    </div>
                                </h6>           
                            </div>
                        </div>
                        <hr/>
                        <p class="mb-3" style="font-weight: 800;color: #ca2f00;"> 
                            <b>Event specific details:</b>
                        </p>
                        <div class="row mb-3">
                            <div class="col-6">
                                <h6>
                                    <b>Days Attending: </b>
                                    <div class="input-box mt-2">
            
                                        <div class="wthree-text mt-2">
                                            <label class="anim">
                                                <input {{ in_array('Monday, 5 November 2018', explode(' & ', trim($profile->days_attending))) ? 'checked' : '' }} type="checkbox" name="days_attending[]" value="Monday, 5 November 2018" class="days_attending checkbox" ></input>
                                                <span>Monday, 5 November 2018</span>
                                            </label>
                                            <div class="clear"></div>
                                        </div>
            
                                        <div class="wthree-text">
                                            <label class="anim">
                                                <input {{ in_array('Tuesday, 6 November 2018', explode(' & ', trim($profile->days_attending))) ? 'checked' : '' }} type="checkbox" name="days_attending[]" value="Tuesday, 6 November 2018" class="days_attending checkbox"  ></input>
                                                <span>Tuesday, 6 November 2018</span>
                                            </label>
                                            <div class="clear"></div>
                                        </div>
            
                                        <div class="wthree-text">
                                            <label class="anim">
                                                <input {{ in_array('Wednesday, 7 November 2018', explode(' & ', trim($profile->days_attending))) ? 'checked' : '' }} type="checkbox" name="days_attending[]" value="Wednesday, 7 November 2018" class="days_attending checkbox" ></input>
                                                <span>Wednesday, 7 November 2018</span>
                                            </label>
                                            <div class="clear"></div>
                                        </div>
            
                                        <div class="wthree-text">
                                            <label class="anim">
                                                <input {{ in_array('Thursday, 8 November 2018', explode(' & ', trim($profile->days_attending))) ? 'checked' : '' }} type="checkbox" name="days_attending[]" value="Thursday, 8 November 2018" class="days_attending checkbox"></input>
                                                <span>Thursday, 8 November 2018</span>
                                            </label>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </h6>
                            </div>
                            <div class="col-6">
                                <h6>
                                    <b>Event Attending: </b>
                                    <div class="input-box mt-2">
                                        <div class="wthree-text">
                                            <label class="anim">
                                                <input {{ in_array('Welcome Reception, 5 November 2018 (evening)', explode(' & ', trim($profile->event_attending))) ? 'checked' : '' }}  
                                                    type="checkbox" name="event_attending[]" value="Welcome Reception, 5 November 2018 (evening)" class="event_attending checkbox" ></input>
                                                <span>
                                                    Welcome Cocktail Reception, 5th November 2018 at 18:00hrs
                                                </span>
                                            </label>
                                            <div class="clear"></div>
                                        </div>
            
                                        <div class="wthree-text">
                                            <label class="anim">
                                                <input {{ in_array('Dinner Reception, 7 November 2018', explode(' & ', trim($profile->event_attending))) ? 'checked' : '' }} type="checkbox" name="event_attending[]" value="Dinner Reception, 7 November 2018" class="event_attending checkbox"></input>
                                                <span>
                                                    Cultural Dinner, 7th November 2018 at 19:00hrs
                                                </span>
                                            </label>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </h6>           
                            </div>
                        </div>
                        
                        <hr />
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn float-right mr-2" style=" max-width: 150px !important; ">
                                <i class="icon-pencil icons"></i>
                                Update
                            </button>
                            <a href="/delegates/{{$profile->id}}" class="btn float-right mr-2" style=" max-width: 150px !important; ">
                                <i class="icon-pencil icons"></i>
                                Back
                            </a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $(".clickable-row, .card-clickable").click(function (e) {
                //  Stop executing this action if user clicked inner elements
                //  that should not redirect them. Anything with the class [not-clickable] e.g (Download buttons)
                if (!$(e.target).hasClass('not-clickable')) {
                  //  Otherwise just follow the URL of the element clicked and redirect the user
                  if($(this).data("href") != undefined){
                    window.location = $(this).data("href");
                  }
                }
            });
            
        });

        function getConfirmation(){
            var retVal = confirm("Are you sure you want to approve payment?");
            if( retVal == true ){
                $('#payment_approval_form').submit();
            }
            else{
                return false;
            }
        }

    </script>

@endsection