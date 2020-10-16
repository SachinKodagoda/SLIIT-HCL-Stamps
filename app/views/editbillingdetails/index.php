<!DOCTYPE html>
<!-- Html -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php require APPROOT . '/views/modules/head.php'; ?>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/globals.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/editbillingdetails.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/header.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/footer.css" />

        

</head>
<!-- Body -->

<body>
    <!-- Header -->
    <?php require APPROOT . '/views/modules/header.php'; ?>
    <!-- Main Wrapper -->
    <div class="main_wrapper">
    <div id="main" role="main">

							
<div id="system-message-container">
</div>

<div class="row">
    <div class="col-md-4">

        <h2>Your account details</h2>
        <div class="row">
            <div class="col-md-12">
                <form class="form-group" id="com-form-login" action="/index.php?option=com_virtuemart&amp;view=cart" method="post" name="com-login">
                    <fieldset >

                        <div  id="com-form-login-username">
                            <input class="form-control" class="form-control" type="text" name="username" size="18" title="Username" value="Username" onblur="if(this.value=='') this.value='Username';" onfocus="if(this.value=='Username') this.value='';">
                        </div>

                        <div  id="com-form-login-password">
                            <input class="form-control" id="modlgn-passwd" type="password" name="password" size="18" title="Password" value="Password" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';">
                        </div>
                        <br/>
                        <div id="com-form-login-remember">
                            <input class="btn btn-primary" type="submit" name="Submit"  value="Login">
                            <label for="remember">Remember me</label>
                            <input  type="checkbox" id="remember" name="remember"  value="yes">
                        </div>

                        <br/>
                        <div>
                            <a href="" rel="nofollow">
                            Forgot your username?</a>
                        </div>
                        <div>
                            <a href="x" rel="nofollow">
                            Forgot your password?</a>
                        </div>
                        
                    </fieldset>



                </form>
            </div>
        </div> 
    </div>

    <div class="col-md-4">

        <h2>Add/Edit Billing details</h2>

        <div class="row">
            <div class="col-md-12">

            <form  method="post" id="userForm" name="userForm"  action="https://www.stamps.lk/index.php/account">
            <fieldset  class="form-group" >         

                <table >
                    <tbody>
                    <tr title="E-Mail">
                    <td >
                    <label for="email_field">
                    E-Mail <span>*</span>						
                    </label>
                    </td>
                    <td>
                    <input class="form-control" type="email" id="email_field" name="email" size="30" value="" maxlength="100" aria-required="true" required="required"> 					
                    </td>
                    </tr>
                    <tr title="Username">
                    <td>
                    <label for="username_field">
                    Username						</label>
                    </td>
                    <td>
                    <input class="form-control" type="text" id="username_field" name="username" size="30" value="" maxlength="25"> 					</td>
                    </tr>
                    <tr title="Displayed Name">
                    <td>
                    <label for="name_field">
                    Displayed Name						</label>
                    </td>
                    <td>
                    <input class="form-control" type="text" id="name_field" name="name" size="30" value="" maxlength="25"> 					</td>
                    </tr>
                    <tr title="Password">
                    <td>
                    <label for="password_field">
                    Password						</label>
                    </td>
                    <td>
                    <input class="form-control" type="password" id="password_field" name="password" size="30">
                    </td>
                    </tr>
                    <tr title="Confirm Password">
                    <td>
                    <label  for="password2_field">
                    Confirm Password						</label>
                    </td>
                    <td>
                    <input class="form-control" type="password" id="password2_field" name="password2" size="30" cl>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    
                </fieldset>
                </form>
            </div>
        </div>

    </div>

    

    <div class="col-md-4">
        
        <h2>Billing details</h2>

        <div class="row">
            <div class="col-md-12">
                
            <fieldset  class="form-group">
            <table >

            <tbody>
            <tr title="Company Name">
            <td>
            <label for="company_field">
            Company Name						</label>
            </td>
            <td>
            <input class="form-control" type="text" id="company_field" name="company" size="30" value="" maxlength="64"> 					</td>
            </tr>
            <tr title="Title">
            <td >
            </td>
            <td>
            </td>
            </tr>
            <tr title="First Name">
            <td >
            <label for="first_name_field">
            First Name <span>*</span>						</label>
            </td>
            <td>
            <input class="form-control" type="text" id="first_name_field" name="first_name" size="30" value=""> 					</td>
            </tr>
            <tr title="Middle Name">
            <td >
            <label for="middle_name_field">
            Middle Name						</label>
            </td>
            <td>
            <input class="form-control" type="text" id="middle_name_field" name="middle_name" size="30" value="" maxlength="32"> 					</td>
            </tr>
            <tr title="Last Name">
            <td >
            <label for="last_name_field">
            Last Name <span>*</span>						</label>
            </td>
            <td>
            <input class="form-control" type="text" id="last_name_field" name="last_name" size="30" value=""  maxlength="32" aria-required="true" required="required" /> 					
            </td>
            </tr>
            <tr title="Address 1">
            <td >
            <label  for="address_1_field">
            Address 1						</label>
            </td>
            <td>
            <input  class="form-control" type="text" id="address_1_field" name="address_1" size="30" value="" maxlength="64"> 					</td>
            </tr>
            <tr title="Address 2">
            <td>
            <label  for="address_2_field">
            Address 2						</label>
            </td>
            <td>
            <input class="form-control" type="text" id="address_2_field" name="address_2" size="30" value="" maxlength="64"> 					</td>
            </tr>
            <tr title="Zip / Postal Code">
            <td >
            <label  for="zip_field">
            Zip / Postal Code						</label>
            </td>
            <td>
            <input class="form-control" type="text" id="zip_field" name="zip" size="30" value="" maxlength="32"> 					</td>
            </tr>
            <tr title="City">
            <td>
            <label  for="city_field">
            City</label>
            </td>
            <td>
            <input class="form-control" type="text" id="city_field" name="city" size="30" value="" maxlength="32"> 					</td>
            </tr>

            <tr title="Country">
                <td>
                <label  for="country_field">Country</label>
                </td>
                <td>
                    
                <select class="form-control">
                        <option value="Afganistan">Afghanistan</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="American Samoa">American Samoa</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antigua & Barbuda">Antigua & Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option>
								<option value="Aruba">Aruba</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Azerbaijan">Azerbaijan</option>
								<option value="Bahamas">Bahamas</option>
								<option value="Bahrain">Bahrain</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Barbados">Barbados</option>
								<option value="Belarus">Belarus</option>
								<option value="Belgium">Belgium</option>
								<option value="Belize">Belize</option>
								<option value="Benin">Benin</option>
								<option value="Bermuda">Bermuda</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Bolivia">Bolivia</option>
								<option value="Bonaire">Bonaire</option>
								<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
								<option value="Botswana">Botswana</option>
								<option value="Brazil">Brazil</option>
								<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
								<option value="Brunei">Brunei</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Burundi">Burundi</option>
								<option value="Cambodia">Cambodia</option>
								<option value="Cameroon">Cameroon</option>
								<option value="Canada">Canada</option>
								<option value="Canary Islands">Canary Islands</option>
								<option value="Cape Verde">Cape Verde</option>
								<option value="Cayman Islands">Cayman Islands</option>
								<option value="Central African Republic">Central African Republic</option>
								<option value="Chad">Chad</option>
								<option value="Channel Islands">Channel Islands</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Christmas Island">Christmas Island</option>
								<option value="Cocos Island">Cocos Island</option>
								<option value="Colombia">Colombia</option>
								<option value="Comoros">Comoros</option>
								<option value="Congo">Congo</option>
								<option value="Cook Islands">Cook Islands</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Cote DIvoire">Cote DIvoire</option>
								<option value="Croatia">Croatia</option>
								<option value="Cuba">Cuba</option>
								<option value="Curaco">Curacao</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Czech Republic">Czech Republic</option>
								<option value="Denmark">Denmark</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Dominica">Dominica</option>
								<option value="Dominican Republic">Dominican Republic</option>
								<option value="East Timor">East Timor</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Egypt">Egypt</option>
								<option value="El Salvador">El Salvador</option>
								<option value="Equatorial Guinea">Equatorial Guinea</option>
								<option value="Eritrea">Eritrea</option>
								<option value="Estonia">Estonia</option>
								<option value="Ethiopia">Ethiopia</option>
								<option value="Falkland Islands">Falkland Islands</option>
								<option value="Faroe Islands">Faroe Islands</option>
								<option value="Fiji">Fiji</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="French Guiana">French Guiana</option>
								<option value="French Polynesia">French Polynesia</option>
								<option value="French Southern Ter">French Southern Ter</option>
								<option value="Gabon">Gabon</option>
								<option value="Gambia">Gambia</option>
								<option value="Georgia">Georgia</option>
								<option value="Germany">Germany</option>
								<option value="Ghana">Ghana</option>
								<option value="Gibraltar">Gibraltar</option>
								<option value="Great Britain">Great Britain</option>
								<option value="Greece">Greece</option>
								<option value="Greenland">Greenland</option>
								<option value="Grenada">Grenada</option>
								<option value="Guadeloupe">Guadeloupe</option>
								<option value="Guam">Guam</option>
								<option value="Guatemala">Guatemala</option>
								<option value="Guinea">Guinea</option>
								<option value="Guyana">Guyana</option>
								<option value="Haiti">Haiti</option>
								<option value="Hawaii">Hawaii</option>
								<option value="Honduras">Honduras</option>
								<option value="Hong Kong">Hong Kong</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="Indonesia">Indonesia</option>
								<option value="India">India</option>
								<option value="Iran">Iran</option>
								<option value="Iraq">Iraq</option>
								<option value="Ireland">Ireland</option>
								<option value="Isle of Man">Isle of Man</option>
								<option value="Israel">Israel</option>
								<option value="Italy">Italy</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Japan">Japan</option>
								<option value="Jordan">Jordan</option>
								<option value="Kazakhstan">Kazakhstan</option>
								<option value="Kenya">Kenya</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Korea North">Korea North</option>
								<option value="Korea Sout">Korea South</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Kyrgyzstan">Kyrgyzstan</option>
								<option value="Laos">Laos</option>
								<option value="Latvia">Latvia</option>
								<option value="Lebanon">Lebanon</option>
								<option value="Lesotho">Lesotho</option>
								<option value="Liberia">Liberia</option>
								<option value="Libya">Libya</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Macau">Macau</option>
								<option value="Macedonia">Macedonia</option>
								<option value="Madagascar">Madagascar</option>
								<option value="Malaysia">Malaysia</option>
								<option value="Malawi">Malawi</option>
								<option value="Maldives">Maldives</option>
								<option value="Mali">Mali</option>
								<option value="Malta">Malta</option>
								<option value="Marshall Islands">Marshall Islands</option>
								<option value="Martinique">Martinique</option>
								<option value="Mauritania">Mauritania</option>
								<option value="Mauritius">Mauritius</option>
								<option value="Mayotte">Mayotte</option>
								<option value="Mexico">Mexico</option>
								<option value="Midway Islands">Midway Islands</option>
								<option value="Moldova">Moldova</option>
								<option value="Monaco">Monaco</option>
								<option value="Mongolia">Mongolia</option>
								<option value="Montserrat">Montserrat</option>
								<option value="Morocco">Morocco</option>
								<option value="Mozambique">Mozambique</option>
								<option value="Myanmar">Myanmar</option>
								<option value="Nambia">Nambia</option>
								<option value="Nauru">Nauru</option>
								<option value="Nepal">Nepal</option>
								<option value="Netherland Antilles">Netherland Antilles</option>
								<option value="Netherlands">Netherlands (Holland, Europe)</option>
								<option value="Nevis">Nevis</option>
								<option value="New Caledonia">New Caledonia</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Nicaragua">Nicaragua</option>
								<option value="Niger">Niger</option>
								<option value="Nigeria">Nigeria</option>
								<option value="Niue">Niue</option>
								<option value="Norfolk Island">Norfolk Island</option>
								<option value="Norway">Norway</option>
								<option value="Oman">Oman</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Palau Island">Palau Island</option>
								<option value="Palestine">Palestine</option>
								<option value="Panama">Panama</option>
								<option value="Papua New Guinea">Papua New Guinea</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Peru">Peru</option>
								<option value="Phillipines">Philippines</option>
								<option value="Pitcairn Island">Pitcairn Island</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Puerto Rico">Puerto Rico</option>
								<option value="Qatar">Qatar</option>
								<option value="Republic of Montenegro">Republic of Montenegro</option>
								<option value="Republic of Serbia">Republic of Serbia</option>
								<option value="Reunion">Reunion</option>
								<option value="Romania">Romania</option>
								<option value="Russia">Russia</option>
								<option value="Rwanda">Rwanda</option>
								<option value="St Barthelemy">St Barthelemy</option>
								<option value="St Eustatius">St Eustatius</option>
								<option value="St Helena">St Helena</option>
								<option value="St Kitts-Nevis">St Kitts-Nevis</option>
								<option value="St Lucia">St Lucia</option>
								<option value="St Maarten">St Maarten</option>
								<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
								<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
								<option value="Saipan">Saipan</option>
								<option value="Samoa">Samoa</option>
								<option value="Samoa American">Samoa American</option>
								<option value="San Marino">San Marino</option>
								<option value="Sao Tome & Principe">Sao Tome & Principe</option>
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Senegal">Senegal</option>
								<option value="Seychelles">Seychelles</option>
								<option value="Sierra Leone">Sierra Leone</option>
								<option value="Singapore">Singapore</option>
								<option value="Slovakia">Slovakia</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Solomon Islands">Solomon Islands</option>
								<option value="Somalia">Somalia</option>
								<option value="South Africa">South Africa</option>
								<option value="Spain">Spain</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="Sudan">Sudan</option>
								<option value="Suriname">Suriname</option>
								<option value="Swaziland">Swaziland</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="Syria">Syria</option>
								<option value="Tahiti">Tahiti</option>
								<option value="Taiwan">Taiwan</option>
								<option value="Tajikistan">Tajikistan</option>
								<option value="Tanzania">Tanzania</option>
								<option value="Thailand">Thailand</option>
								<option value="Togo">Togo</option>
								<option value="Tokelau">Tokelau</option>
								<option value="Tonga">Tonga</option>
								<option value="Trinidad & Tobago">Trinidad & Tobago</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Turkey">Turkey</option>
								<option value="Turkmenistan">Turkmenistan</option>
								<option value="Turks & Caicos Is">Turks & Caicos Is</option>
								<option value="Tuvalu">Tuvalu</option>
								<option value="Uganda">Uganda</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab Erimates">United Arab Emirates</option>
								<option value="United States of America">United States of America</option>
								<option value="Uraguay">Uruguay</option>
								<option value="Uzbekistan">Uzbekistan</option>
								<option value="Vanuatu">Vanuatu</option>
								<option value="Vatican City State">Vatican City State</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Vietnam">Vietnam</option>
								<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
								<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
								<option value="Wake Island">Wake Island</option>
								<option value="Wallis & Futana Is">Wallis & Futana Is</option>
								<option value="Yemen">Yemen</option>
								<option value="Zaire">Zaire</option>
								<option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
                         </select>
            
                </td>
            </tr>




            <tr title="Phone">
            <td >
            <label  for="phone_1_field">
            Phone						</label>
            </td>
            <td>
            <input  class="form-control" type="text" id="phone_1_field" name="phone_1" size="30" value="" maxlength="32"> 					</td>
            </tr>
            
            <tr title="Mobile phone">
            <td>
            <label  for="phone_2_field">
            Mobile phone						</label>
            </td>
            <td>
            <input class="form-control" type="text" id="phone_2_field" name="phone_2" size="30" value="" maxlength="32"> 					</td>
            </tr>
            </tbody>
            </table>
            <br/>
            <input class="btn btn-primary" type="submit" name="Submit"  value="submit">
            </fieldset>
            </div>
        </div>
    
    </div>


</div>



</div>

    
    </div>
    <!-- Footer -->
    <?php require APPROOT . '/views/modules/footer.php'; ?>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT ?>/js/common.js" type="text/javascript"></script>
    <script src="<?php echo URLROOT ?>/js/editbillingdetails.js" type="text/javascript"></script>
</body>

</html>