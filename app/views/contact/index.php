<!DOCTYPE html>
<!-- Html -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
    <!-- Common Head Components -->
    <?php require APPROOT . '/views/modules/head.php'; ?>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/globals.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/contact.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/header.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/footer.css" />
</head>
<!-- Body -->

<body>
    <!-- Header -->
    <?php require APPROOT . '/views/modules/header.php'; ?>
    <!-- Main Wrapper -->
    <div class="main_wrapper">
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */


/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>



<div class="container">
  <div style="text-align:center">
    <h1>Contact Us</h1>
    <p>Feel free to contact us if you have any questions</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="<?php echo URLROOT ?>/img/contact/4.jpg" alt="imf" style="width:100%"/>
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Email</label>
        <input type="text" id="lname" name="lastname" placeholder="Your email..">
        <label for="country">Country</label>
        <select id="country" name="country">
           
       
            <option selected="selected" class="def_value" value="creative_empty">Select country</option>   
          <option id="0_3_1" value="Afghanistan"  >Afghanistan</option>
                  <option id="0_3_2" value="Albania"  >Albania</option>
                  <option id="0_3_3" value="Algeria"  >Algeria</option>
                  <option id="0_3_4" value="American Samoa"  >American Samoa</option>
                  <option id="0_3_5" value="Andorra"  >Andorra</option>
                  <option id="0_3_6" value="Angola"  >Angola</option>
                  <option id="0_3_7" value="Anguilla"  >Anguilla</option>
                  <option id="0_3_8" value="Antarctica"  >Antarctica</option>
                  <option id="0_3_9" value="Antigua and Barbuda"  >Antigua and Barbuda</option>
                  <option id="0_3_10" value="Argentina"  >Argentina</option>
                  <option id="0_3_11" value="Armenia"  >Armenia</option>
                  <option id="0_3_12" value="Aruba"  >Aruba</option>
                  <option id="0_3_13" value="Australia"  >Australia</option>
                  <option id="0_3_14" value="Austria"  >Austria</option>
                  <option id="0_3_15" value="Azerbaijan"  >Azerbaijan</option>
                  <option id="0_3_16" value="Bahamas"  >Bahamas</option>
                  <option id="0_3_17" value="Bahrain"  >Bahrain</option>
                  <option id="0_3_18" value="Bangladesh"  >Bangladesh</option>
                  <option id="0_3_19" value="Barbados"  >Barbados</option>
                  <option id="0_3_20" value="Belarus"  >Belarus</option>
                  <option id="0_3_21" value="Belgium"  >Belgium</option>
                  <option id="0_3_22" value="Belize"  >Belize</option>
                  <option id="0_3_23" value="Benin"  >Benin</option>
                  <option id="0_3_24" value="Bermuda"  >Bermuda</option>
                  <option id="0_3_25" value="Bhutan"  >Bhutan</option>
                  <option id="0_3_26" value="Bolivia"  >Bolivia</option>
                  <option id="0_3_27" value="Bosnia and Herzegowina"  >Bosnia and Herzegowina</option><option id="0_3_28" value="Botswana"  >Botswana</option><option id="0_3_29" value="Bouvet Island"  >Bouvet Island</option><option id="0_3_30" value="Brazil"  >Brazil</option><option id="0_3_31" value="British Indian Ocean Territory"  >British Indian Ocean Territory</option><option id="0_3_32" value="Brunei Darussalam"  >Brunei Darussalam</option><option id="0_3_33" value="Bulgaria"  >Bulgaria</option><option id="0_3_34" value="Burkina Faso"  >Burkina Faso</option><option id="0_3_35" value="Burundi"  >Burundi</option><option id="0_3_36" value="Cambodia"  >Cambodia</option><option id="0_3_37" value="Cameroon"  >Cameroon</option><option id="0_3_38" value="Canada"  >Canada</option><option id="0_3_39" value="Cape Verde"  >Cape Verde</option><option id="0_3_40" value="Cayman Islands"  >Cayman Islands</option><option id="0_3_41" value="Central African Republic"  >Central African Republic</option><option id="0_3_42" value="Chad"  >Chad</option><option id="0_3_43" value="Chile"  >Chile</option><option id="0_3_44" value="China"  >China</option><option id="0_3_45" value="Christmas Island"  >Christmas Island</option><option id="0_3_46" value="Cocos (Keeling) Islands"  >Cocos (Keeling) Islands</option><option id="0_3_47" value="Colombia"  >Colombia</option><option id="0_3_48" value="Comoros"  >Comoros</option><option id="0_3_49" value="Congo"  >Congo</option><option id="0_3_50" value="Cook Islands"  >Cook Islands</option><option id="0_3_51" value="Costa Rica"  >Costa Rica</option><option id="0_3_52" value="Cote D"  >Cote D</option><option id="0_3_53" value="Croatia"  >Croatia</option><option id="0_3_54" value="Cuba"  >Cuba</option><option id="0_3_55" value="Cyprus"  >Cyprus</option><option id="0_3_56" value="Czech Republic"  >Czech Republic</option><option id="0_3_57" value="Democratic Republic of Congo"  >Democratic Republic of Congo</option><option id="0_3_58" value="Denmark"  >Denmark</option><option id="0_3_59" value="Djibouti"  >Djibouti</option><option id="0_3_60" value="Dominica"  >Dominica</option><option id="0_3_61" value="Dominican Republic"  >Dominican Republic</option><option id="0_3_62" value="East Timor"  >East Timor</option><option id="0_3_63" value="Ecuador"  >Ecuador</option><option id="0_3_64" value="Egypt"  >Egypt</option><option id="0_3_65" value="El Salvador"  >El Salvador</option><option id="0_3_66" value="Equatorial Guinea"  >Equatorial Guinea</option><option id="0_3_67" value="Eritrea"  >Eritrea</option><option id="0_3_68" value="Estonia"  >Estonia</option><option id="0_3_69" value="Ethiopia"  >Ethiopia</option><option id="0_3_70" value="Falkland Islands (Malvinas)"  >Falkland Islands (Malvinas)</option><option id="0_3_71" value="Faroe Islands"  >Faroe Islands</option><option id="0_3_72" value="Fiji"  >Fiji</option><option id="0_3_73" value="Finland"  >Finland</option><option id="0_3_74" value="France"  >France</option><option id="0_3_75" value="France, Metropolitan"  >France, Metropolitan</option><option id="0_3_76" value="French Guiana"  >French Guiana</option><option id="0_3_77" value="French Polynesia"  >French Polynesia</option><option id="0_3_78" value="French Southern Territories"  >French Southern Territories</option><option id="0_3_79" value="Gabon"  >Gabon</option><option id="0_3_80" value="Gambia"  >Gambia</option><option id="0_3_81" value="Georgia"  >Georgia</option><option id="0_3_82" value="Germany"  >Germany</option><option id="0_3_83" value="Ghana"  >Ghana</option><option id="0_3_84" value="Gibraltar"  >Gibraltar</option><option id="0_3_85" value="Greece"  >Greece</option><option id="0_3_86" value="Greenland"  >Greenland</option><option id="0_3_87" value="Grenada"  >Grenada</option><option id="0_3_88" value="Guadeloupe"  >Guadeloupe</option><option id="0_3_89" value="Guam"  >Guam</option><option id="0_3_90" value="Guatemala"  >Guatemala</option><option id="0_3_91" value="Guinea"  >Guinea</option><option id="0_3_92" value="Guinea-bissau"  >Guinea-bissau</option><option id="0_3_93" value="Guyana"  >Guyana</option><option id="0_3_94" value="Haiti"  >Haiti</option><option id="0_3_95" value="Heard and Mc Donald Islands"  >Heard and Mc Donald Islands</option><option id="0_3_96" value="Honduras"  >Honduras</option><option id="0_3_97" value="Hong Kong"  >Hong Kong</option><option id="0_3_98" value="Hungary"  >Hungary</option><option id="0_3_99" value="Iceland"  >Iceland</option><option id="0_3_100" value="India"  >India</option><option id="0_3_101" value="Indonesia"  >Indonesia</option><option id="0_3_102" value="Iran"  >Iran</option><option id="0_3_103" value="Iraq"  >Iraq</option><option id="0_3_104" value="Ireland"  >Ireland</option><option id="0_3_105" value="Israel"  >Israel</option><option id="0_3_106" value="Italy"  >Italy</option><option id="0_3_107" value="Jamaica"  >Jamaica</option><option id="0_3_108" value="Japan"  >Japan</option><option id="0_3_109" value="Jordan"  >Jordan</option><option id="0_3_110" value="Kazakhstan"  >Kazakhstan</option><option id="0_3_111" value="Kenya"  >Kenya</option><option id="0_3_112" value="Kiribati"  >Kiribati</option><option id="0_3_113" value="Korea"  >Korea</option><option id="0_3_114" value="Kuwait"  >Kuwait</option><option id="0_3_115" value="Kyrgyzstan"  >Kyrgyzstan</option><option id="0_3_116" value="Lao People"  >Lao People</option><option id="0_3_117" value="Latvia"  >Latvia</option><option id="0_3_118" value="Lebanon"  >Lebanon</option><option id="0_3_119" value="Lesotho"  >Lesotho</option><option id="0_3_120" value="Liberia"  >Liberia</option><option id="0_3_121" value="Libyan Arab Jamahiriya"  >Libyan Arab Jamahiriya</option><option id="0_3_122" value="Liechtenstein"  >Liechtenstein</option><option id="0_3_123" value="Lithuania"  >Lithuania</option><option id="0_3_124" value="Luxembourg"  >Luxembourg</option><option id="0_3_125" value="Macau"  >Macau</option><option id="0_3_126" value="Macedonia"  >Macedonia</option><option id="0_3_127" value="Madagascar"  >Madagascar</option><option id="0_3_128" value="Malawi"  >Malawi</option><option id="0_3_129" value="Malaysia"  >Malaysia</option><option id="0_3_130" value="Maldives"  >Maldives</option><option id="0_3_131" value="Mali"  >Mali</option><option id="0_3_132" value="Malta"  >Malta</option><option id="0_3_133" value="Marshall Islands"  >Marshall Islands</option><option id="0_3_134" value="Martinique"  >Martinique</option><option id="0_3_135" value="Mauritania"  >Mauritania</option><option id="0_3_136" value="Mauritius"  >Mauritius</option><option id="0_3_137" value="Mayotte"  >Mayotte</option><option id="0_3_138" value="Mexico"  >Mexico</option><option id="0_3_139" value="Micronesia"  >Micronesia</option><option id="0_3_140" value="Moldova"  >Moldova</option><option id="0_3_141" value="Monaco"  >Monaco</option><option id="0_3_142" value="Mongolia"  >Mongolia</option><option id="0_3_143" value="Montserrat"  >Montserrat</option><option id="0_3_144" value="Morocco"  >Morocco</option><option id="0_3_145" value="Mozambique"  >Mozambique</option><option id="0_3_146" value="Myanmar"  >Myanmar</option><option id="0_3_147" value="Namibia"  >Namibia</option><option id="0_3_148" value="Nauru"  >Nauru</option><option id="0_3_149" value="Nepal"  >Nepal</option><option id="0_3_150" value="Netherlands"  >Netherlands</option><option id="0_3_151" value="Netherlands Antilles"  >Netherlands Antilles</option><option id="0_3_152" value="New Caledonia"  >New Caledonia</option><option id="0_3_153" value="New Zealand"  >New Zealand</option><option id="0_3_154" value="Nicaragua"  >Nicaragua</option><option id="0_3_155" value="Niger"  >Niger</option><option id="0_3_156" value="Nigeria"  >Nigeria</option><option id="0_3_157" value="Niue"  >Niue</option><option id="0_3_158" value="Norfolk Island"  >Norfolk Island</option><option id="0_3_159" value="North Korea"  >North Korea</option><option id="0_3_160" value="Northern Mariana Islands"  >Northern Mariana Islands</option><option id="0_3_161" value="Norway"  >Norway</option><option id="0_3_162" value="Oman"  >Oman</option><option id="0_3_163" value="Pakistan"  >Pakistan</option><option id="0_3_164" value="Palau"  >Palau</option><option id="0_3_165" value="Panama"  >Panama</option><option id="0_3_166" value="Papua New Guinea"  >Papua New Guinea</option><option id="0_3_167" value="Paraguay"  >Paraguay</option><option id="0_3_168" value="Peru"  >Peru</option><option id="0_3_169" value="Philippines"  >Philippines</option><option id="0_3_170" value="Pitcairn"  >Pitcairn</option><option id="0_3_171" value="Poland"  >Poland</option><option id="0_3_172" value="Portugal"  >Portugal</option><option id="0_3_173" value="Puerto Rico"  >Puerto Rico</option><option id="0_3_174" value="Qatar"  >Qatar</option><option id="0_3_175" value="Reunion"  >Reunion</option><option id="0_3_176" value="Romania"  >Romania</option><option id="0_3_177" value="Russian Federation"  >Russian Federation</option><option id="0_3_178" value="Rwanda"  >Rwanda</option><option id="0_3_179" value="Saint Kitts and Nevis"  >Saint Kitts and Nevis</option><option id="0_3_180" value="Saint Lucia"  >Saint Lucia</option><option id="0_3_181" value="Saint Vincent and the Grenadines"  >Saint Vincent and the Grenadines</option><option id="0_3_182" value="Samoa"  >Samoa</option><option id="0_3_183" value="San Marino"  >San Marino</option><option id="0_3_184" value="Sao Tome and Principe"  >Sao Tome and Principe</option><option id="0_3_185" value="Saudi Arabia"  >Saudi Arabia</option><option id="0_3_186" value="Senegal"  >Senegal</option><option id="0_3_187" value="Seychelles"  >Seychelles</option><option id="0_3_188" value="Sierra Leone"  >Sierra Leone</option><option id="0_3_189" value="Singapore"  >Singapore</option><option id="0_3_190" value="Slovak Republic"  >Slovak Republic</option><option id="0_3_191" value="Slovenia"  >Slovenia</option><option id="0_3_192" value="Solomon Islands"  >Solomon Islands</option><option id="0_3_193" value="Somalia"  >Somalia</option><option id="0_3_194" value="South Africa"  >South Africa</option><option id="0_3_195" value="South Georgia &amp; South Sandwich Islands"  >South Georgia &amp; South Sandwich Islands</option><option id="0_3_196" value="Spain"  >Spain</option><option id="0_3_197" value="Sri Lanka"  >Sri Lanka</option><option id="0_3_198" value="St. Helena"  >St. Helena</option><option id="0_3_199" value="St. Pierre and Miquelon"  >St. Pierre and Miquelon</option><option id="0_3_200" value="Sudan"  >Sudan</option><option id="0_3_201" value="Suriname"  >Suriname</option><option id="0_3_202" value="Svalbard and Jan Mayen Islands"  >Svalbard and Jan Mayen Islands</option><option id="0_3_203" value="Swaziland"  >Swaziland</option><option id="0_3_204" value="Sweden"  >Sweden</option><option id="0_3_205" value="Switzerland"  >Switzerland</option><option id="0_3_206" value="Syrian Arab Republic"  >Syrian Arab Republic</option><option id="0_3_207" value="Taiwan"  >Taiwan</option><option id="0_3_208" value="Tajikistan"  >Tajikistan</option><option id="0_3_209" value="Tanzania"  >Tanzania</option><option id="0_3_210" value="Thailand"  >Thailand</option><option id="0_3_211" value="Togo"  >Togo</option><option id="0_3_212" value="Tokelau"  >Tokelau</option><option id="0_3_213" value="Tonga"  >Tonga</option><option id="0_3_214" value="Trinidad and Tobago"  >Trinidad and Tobago</option><option id="0_3_215" value="Tunisia"  >Tunisia</option><option id="0_3_216" value="Turkey"  >Turkey</option><option id="0_3_217" value="Turkmenistan"  >Turkmenistan</option><option id="0_3_218" value="Turks and Caicos Islands"  >Turks and Caicos Islands</option><option id="0_3_219" value="Tuvalu"  >Tuvalu</option><option id="0_3_220" value="Uganda"  >Uganda</option><option id="0_3_221" value="Ukraine"  >Ukraine</option><option id="0_3_222" value="United Arab Emirates"  >United Arab Emirates</option><option id="0_3_223" value="United Kingdom"  >United Kingdom</option><option id="0_3_224" value="United States"  >United States</option><option id="0_3_225" value="United States Minor Outlying Islands"  >United States Minor Outlying Islands</option><option id="0_3_226" value="Uruguay"  >Uruguay</option><option id="0_3_227" value="Uzbekistan"  >Uzbekistan</option><option id="0_3_228" value="Vanuatu"  >Vanuatu</option><option id="0_3_229" value="Vatican City State (Holy See)"  >Vatican City State (Holy See)</option><option id="0_3_230" value="Venezuela"  >Venezuela</option><option id="0_3_231" value="Viet Nam"  >Viet Nam</option><option id="0_3_232" value="Virgin Islands (British)"  >Virgin Islands (British)</option><option id="0_3_233" value="Virgin Islands (U.S.)"  >Virgin Islands (U.S.)</option><option id="0_3_234" value="Wallis and Futuna Islands"  >Wallis and Futuna Islands</option><option id="0_3_235" value="Western Sahara"  >Western Sahara</option><option id="0_3_236" value="Yemen"  >Yemen</option><option id="0_3_237" value="Yugoslavia"  >Yugoslavia</option><option id="0_3_238" value="Zambia"  >Zambia</option><option id="0_3_239" value="Zimbabwe"  >Zimbabwe</option>
        </select>
        <label for="subject">Message</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>

    </div>
    <!-- Footer -->
    <?php require APPROOT . '/views/modules/footer.php'; ?>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?php echo URLROOT ?>/js/common.js" type="text/javascript"></script>
    <script src="<?php echo URLROOT ?>/js/contact.js" type="text/javascript"></script>
</body>

</html>