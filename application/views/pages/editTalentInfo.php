<!-- Slider Section Start -->
<section class="page__img" style="background-image: url('<?php echo base_url(); ?>assets/img/apply_bg.jpg')">
  <div class="container">
    <div class="row">
      <div class="title__wrapp">
        <div class="page__subtitle title__grey">Apply</div>
        <h1 class="page__title">Work with us</h1>
      </div>
    </div>
  </div>
</section>
<!-- Slider Section End -->

<!-- Services Section Start -->
<section class="section apply">
  <div class="container">
    <div class="row">
      <h1 class="text__quote centered">Talent Registration</h1>
      <h3 class="text__quote centered">Please provide us with your contact information.</h3>
      <p><span class="req">*</span> fields are immportant to fill</p>
      <form class="apply-form form-horizontal" method="post" 
      action="<?php echo base_url(); ?>HomeController/update1" enctype="multipart/form-data">
        <div class="row">
          <div class="form-block">
            <div class="col-lg-6">
              <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $talent['id']; ?>">
                <label for="name" class="col-sm-4 control-label">First Name <span class="req">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="name" name="first_name" placeholder="John"
                  value="<?php echo $talent['first_name']?>" required>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="name" class="col-sm-4 control-label">Last Name<span class="req">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="lastname" name="last_name" placeholder="Doe"  value="<?php echo $talent['last_name'] ?>" required>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="gender" class="col-sm-4 control-label">Gender <span class="req">*</span></label>
                <div class="col-sm-8">
                  <select name="gender" id="gender" class="form-control" required>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="sexuality" class="col-sm-4 control-label">Sexuality <span class="req">*</span></label>
                <div class="col-sm-8">
                  <input type="text" value="<?php echo $talent['Sexuality']?>" class="form-control"  name="sexuality" placeholder="Stright, Gay, Bisexual, Lesbian..." required>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Email <span class="req">*</span></label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" value="<?php echo $talent['email_address']?>" name="email" placeholder="john@example.com" required>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="col-sm-4 control-label">Phone Number <span class="req">*</span></label>
                <div class="col-sm-8">
                  <input type="text" value="<?php echo $talent['phone_number']?>" class="form-control" name="phone_number" placeholder="123456789" required>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">Residental Address<span class="req">*</span></label>
                <div class="col-sm-10">
                  <input type="text" value="<?php echo $talent['residental_address']?>" class="form-control" id="phone" name="residental_address" placeholder="123, street, abc, london" required>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Nationality <span class="req">*</span></label>
                <div class="col-sm-8">
                  <select id="country" name="country" class="form-control" required>
                    <option > <?php echo $talent['nationality'];?> </option>
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
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="gender" class="col-sm-4 control-label">Date of Birth</label>
                <div class="col-sm-8">
                  <input type="date" value="<?php echo $talent['dob']?>" class="form-control" name="dob">
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="name" class="col-sm-4 control-label">Height<span class="req">*</span></label>
                <div class="col-sm-8">
                  <select id="height" name="height" class="form-control" required>
                    <option > <?php echo $talent['height']?> </option>
                    <option value="5’0”">5’0” 60in 152.40cm</option>
                    <option value="5’1”">5’1” 61in 154.94cm</option>
                    <option value="5’2”">5’2” 62in 157.48cm</option>
                    <option value="5’3”">5’3” 63in 160.02cm</option>
                    <option value="5’4”">5’4” 64in 162.56cm</option>
                    <option value="5’5”">5’5” 65in 165.10cm</option>
                    <option value="5’6”">5’6” 66in 167.74cm</option>
                    <option value="5’7”">5’7” 67in 170.18cm</option>
                    <option value="5’8”">5’8” 68in 172.72cm</option>
                    <option value="5’9”">5’9” 69in 175.26cm</option>
                    <option value="5’10”">5’10” 70in 177.80cm</option>
                    <option value="5’11”">5’11” 71in 180.34cm</option>
                    <option value="6’0”">6’0” 72in 182.88cm</option>
                    <option value="6’1”">6’1” 73in 185.45cm</option>
                    <option value="6’2”">6’2” 74in 187.96cm</option>
                    <option value="6’3”">6’3” 75in 190.50cm</option>
                    <option value="6’4”">6’4” 76in 193.04cm</option>
                    <option value="6’5”">6’5” 77in 195.58cm</option>
                    <option value="6’6”">6’6” 78in 198.12cm</option>
                    <option value="6’7”">6’7” 79in 200.66cm</option>
                    <option value="6’8”">6’8” 80in 203.20cm</option>
                    <option value="6’9”">6’9” 81in 205.74cm</option>
                    <option value="6’10”">6’10” 82in 208.28cm</option>
                    <option value="6’11”">6’11” 83in 210.82cm</option>
                    <option value="7’0”">7’0” 84in 213.36cm</option>
                    <option value="7’1”">7’1” 85in 215.90cm</option>
                    <option value="7’2”">7’2” 86in 218.44cm</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="name" class="col-sm-4 control-label">Weight<span class="req">*</span></label>
                <div class="col-sm-8">
                  <select id="weight" name="weight" class="form-control" required>
                    <option > <?php echo $talent['weight']?> </option>
                    <option value="91-118 lbs">91 to 118 lbs</option>
                    <option value="94-123 lbs">94 to 123 lbs</option>
                    <option value="97-127 lbs">97 to 127 lbs</option>
                    <option value="100-131 lbs">100 to 131 lbs</option>
                    <option value="104-135 lbs">104 to 135 lbs</option>
                    <option value="107-140 lbs">107 to 140 lbs</option>
                    <option value="110-144 lbs">110 to 144 lbs</option>
                    <option value="114-149 lbs">114 to 149 lbs</option>
                    <option value="118-154 lbs">118 to 154 lbs</option>
                    <option value="121-158 lbs">121 to 158 lbs</option>
                    <option value="125-163 lbs">125 to 163 lbs</option>
                    <option value="128-168 lbs">128 to 168 lbs</option>
                    <option value="132-173 lbs">132 to 173 lbs</option>
                    <option value="136-178 lbs">136 to 178 lbs</option>
                    <option value="140-183 lbs">140 to 183 lbs</option>
                    <option value="144-188 lbs">144 to 188 lbs</option>
                    <option value="148-193 lbs">148 to 193 lbs</option>
                    <option value="152-199 lbs">152 to 199 lbs</option>
                    <option value="156-204 lbs">156 to 204 lbs</option>
                  </select>
                </div>
              </div>
            </div>


            <div class="col-lg-6">
              <div class="form-group">
                <label for="gender" class="col-sm-4 control-label">Skin Color <span class="req">*</span></label>
                <div class="col-sm-8">
                  <select id="skin color" name="skin_color" class="form-control" required>
                    <option ><?php echo $talent['skin_color']?></option>
                    <option value="Afganistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="gender" class="col-sm-4 control-label">Eye Color <span class="req">*</span></label>
                <div class="col-sm-8">
                  <select id="eye color" name="eye_color" class="form-control" required>
                    <option > <?php echo $talent['eye_color']?> </option>
                    <option value="Brown">Brown</option>
                    <option value="hazel">Hazel</option>
                    <option value="Blue">Blue</option>
                    <option value="Green">Green</option>
                    <option value="Gray">Gray</option>
                    <option value="Amber">Amber</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="gender" class="col-sm-4 control-label">Hair Color <span class="req">*</span></label>
                <div class="col-sm-8">
                  <select id="Hair color" name="hair_color" class="form-control" required>
                    <option > <?php echo $talent['hair_color']?> </option>
                    <option value="black">Black</option>
                    <option value="brown">Brown</option>
                    <option value="very dark brown">Very Dark Brown</option>
                    <option value="dark brown">Dark Brown</option>
                    <option value="medium brown">Medium Brown</option>
                    <option value="light brown">Light Brown</option>
                    <option value="dark blonde">Darkk Blonde</option>
                    <option value="medium blonde">Medium Blonde</option>
                    <option value="light blonde">Light Blonde</option>
                    <option value="very light blonde">Very Light Blonde</option>
                    <option value="extra light blonde plus">Extra Light Blonde Plus</option>
                    <option value="Grey and white">Grey and White</option>
                    <option value="Red">Red</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="gender" class="col-sm-4 control-label">Hair Type<span class="req">*</span></label>
                <div class="col-sm-8">
                  <select id="Hair Type" name="hair_type" class="form-control" required>
                    <option > <?php echo $talent['hair_type']?> </option>
                    <option value="straight">Straight</option>
                    <option value="wavy">Wavy</option>
                    <option value="curly">Curly</option>
                    <option value="coily">Coily</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="zip" class="col-sm-4 control-label">Preferred Role</label>
                <div class="col-sm-8">
                  <select id="preferred_role" name="preferred_role" class="form-control" required>
                    <option > <?php echo $talent['preferred_role']?> </option>
                    <option value="Writer">Writer</option>
                    <option value="Executive producer">Executive producer</option>
                    <option value="Line producer">Line producer</option>
                    <option value="Producer">Producer</option>
                    <option value="Casting director">Casting director</option>
                    <option value="Location scout">Location scout</option>
                    <option value="Transportation">Transportation</option>
                    <option value="Director">Director</option>
                    <option value="Assistant director">Assistant director</option>
                    <option value="Script supervisor">Script supervisor</option>
                    <option value="Director of photography">Director of photography (cinematographer)</option>
                    <option value="Sound mixer">Sound mixer</option>
                    <option value="Post-production supervisor">Post-production supervisor</option>
                    <option value="Composer">Composer</option>
                    <option value="Editor">Editor</option>
                    <option value="Stunt coordinator">Stunt coordinator</option>
                    <option value="Prop master">Prop master</option>
                    <option value="Production designer">Production designer</option>
                    <option value="Wardrobe person">Wardrobe person</option>
                    <option value="Make-up person">Make-up person</option>
                    <option value="Production assistants">Production assistants</option>
                    <option value="Grips">Grips</option>
                    <option value="Gaffer">Gaffer</option>
                    <option value="Model">Model</option>
                    <option value="Actor">Actor</option>
                    <option value="Stage Model">Stage Model</option>
                    <option value="Magazine Model">Magazine Model</option>
                    <option value="Child Actor">Child Actor</option>
                    <option value="Singer">Singer</option>
                    <option value="Screenwriter">Screenwriter</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="zip" class="col-sm-4 control-label">Experience</label>
                <div class="col-sm-8">
                  <input type="text" value="<?php echo $talent['experience']?>" class="form-control" name="experience" placeholder="3 years">
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="language" class="col-sm-4 control-label">Language<span class="req">*</span></label>
                <div class="col-sm-8">
                  <select name="languages" class="form-control">
                    <option > <?php echo $talent['language']?> </option>
                    <option value="Afrikaans">Afrikaans</option>
                    <option value="Albanian">Albanian</option>
                    <option value="Arabic">Arabic</option>
                    <option value="Armenian">Armenian</option>
                    <option value="Basque">Basque</option>
                    <option value="Bengali">Bengali</option>
                    <option value="Bulgarian">Bulgarian</option>
                    <option value="Catalan">Catalan</option>
                    <option value="Cambodian">Cambodian</option>
                    <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                    <option value="Croatian">Croatian</option>
                    <option value="Czech">Czech</option>
                    <option value="Danish">Danish</option>
                    <option value="Dutch">Dutch</option>
                    <option value="English">English</option>
                    <option value="Estonian">Estonian</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finnish">Finnish</option>
                    <option value="French">French</option>
                    <option value="Georgian">Georgian</option>
                    <option value="German">German</option>
                    <option value="Greek">Greek</option>
                    <option value="Gujarati">Gujarati</option>
                    <option value="Hebrew">Hebrew</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Hungarian">Hungarian</option>
                    <option value="Icelandic">Icelandic</option>
                    <option value="Indonesian">Indonesian</option>
                    <option value="Irish">Irish</option>
                    <option value="Italian">Italian</option>
                    <option value="Japanese">Japanese</option>
                    <option value="Javanese">Javanese</option>
                    <option value="Korean">Korean</option>
                    <option value="Latin">Latin</option>
                    <option value="Latvian">Latvian</option>
                    <option value="Lithuanian">Lithuanian</option>
                    <option value="Macedonian">Macedonian</option>
                    <option value="Malay">Malay</option>
                    <option value="Malayalam">Malayalam</option>
                    <option value="Maltese">Maltese</option>
                    <option value="Maori">Maori</option>
                    <option value="Marathi">Marathi</option>
                    <option value="Mongolian">Mongolian</option>
                    <option value="Nepali">Nepali</option>
                    <option value="Norwegian">Norwegian</option>
                    <option value="Persian">Persian</option>
                    <option value="Polish">Polish</option>
                    <option value="Portuguese">Portuguese</option>
                    <option value="Punjabi">Punjabi</option>
                    <option value="Quechua">Quechua</option>
                    <option value="Romanian">Romanian</option>
                    <option value="Russian">Russian</option>
                    <option value="Samoan">Samoan</option>
                    <option value="Serbian">Serbian</option>
                    <option value="Slovak">Slovak</option>
                    <option value="Slovenian">Slovenian</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Swahili">Swahili</option>
                    <option value="Swedish ">Swedish </option>
                    <option value="Tamil">Tamil</option>
                    <option value="Tatar">Tatar</option>
                    <option value="Telugu">Telugu</option>
                    <option value="Thai">Thai</option>
                    <option value="Tibetan">Tibetan</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Turkish">Turkish</option>
                    <option value="Ukrainian">Ukrainian</option>
                    <option value="Urdu">Urdu</option>
                    <option value="Uzbek">Uzbek</option>
                    <option value="Vietnamese">Vietnamese</option>
                    <option value="Welsh">Welsh</option>
                    <option value="Xhosa">Xhosa</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="consent_nudity" class="col-sm-4 control-label">Consent for Nudity<span class="req">*</span></label>
                <div class="col-sm-8">
                  <select name="consent_nudity" class="form-control" required>
                    <option > <?php echo $talent['consent_for_nudity']?> </option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="zip" class="col-sm-4 control-label">Alternative Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="alternative_number" value="<?php echo $talent['alternative_number']?>">
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label class="col-sm-4 control-label">Facebook Link</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="fb_link" value="<?php echo $talent['fb_link']?>" >
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label class="col-sm-4 control-label">Twitter Link</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="twitter_link" value="<?php echo $talent['twitter_link']?>">
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label class="col-sm-4 control-label">Instagram Link</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="insta_link" value="<?php echo $talent['insta_link']?>">
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="col-sm-6 col-lg-offset-3">
                <button type="submit" class="btn btn-default btn__red animation btn-full pull-right">Update Now</button>
              </div>
            </div>

          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- Services Section End -->