<head>

  <meta charset="utf-8" />

  <!--Meta Tegs-->
  <title><?= $title; ?></title>
  <meta content="" name="description" />

  <!--Icons-->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="<?php ?>assets/img/favicon/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/img/favicon/apple-touch-icon-114x114.png" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- Google font -->
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700,900' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

  <!--Style-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/animate/animate.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/icons/materialdesignicons.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/libs/icons/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/libs/hero-slider/hero-style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/media.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables.min.css" />



</head>

<style>
  /* Style the tab */
  .tab {
    float: left;
    background-color: #2B2D2C;
    position: fixed;
    width: 250px;
    height: 100vh;
  }

  /* Style the buttons inside the tab */
  .tab button {
    display: block;
    background-color: inherit;
    color: white;
    padding: 15px 25px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
    border-left: 10px solid #2B2D2C;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
    /* background-color: #EA1F28; */
  }

  /* Create an active/current "tab button" class */
  .tab button.active {
    border-left: 10px solid #EA1F28;
  }

  /* Style the tab content */
  .tabcontent {
    float: left;
    margin-left: 250px;
    padding: 0px 12px;
    width: 80%;
    border-left: none;
    /* height: 300px; */
  }
</style>


<!-- Slider Section Start -->
<!-- <section class="page__img" style="height: 100px; background-color:#2B2D2C;">
</section> -->
<!-- Slider Section End -->

<!-- Services Section Start -->
<section class="section apply" style="padding: 0; ">
  <div class="row" style="margin: 0;">
    <div class="tab">

      <div style="display: flex; align-items: center; justify-content: center; padding: 30px 0px;">
        <a class="navbar-brand" href="<?php echo base_url(); ?>Home">
          <img class="logo-postion" style="" src="<?php echo base_url(); ?>assets/img/logo/britishfilmhub.png" alt="">
        </a>

      </div>

      <div style="display: flex; align-items: center; justify-content: center;">
        <img style="width: 75px; height: 75px; border: 4px solid #EA1F28; border-radius: 50px;" src="<?php echo base_url(); ?>assets/img/modelPic/<?php echo $info['picture'] ?>" alt="">
      </div>
      <div style="display: flex; align-items: center; justify-content: center; color:white;">
        <p><?php echo strtoupper($info['first_name'] . ' ' . $info['last_name']) ?></p>
      </div>

      <button class="tablinks" onclick="openCity(event, 'Dashboard')" id="defaultOpen"> <img style="padding-right:10px;" src="<?php echo base_url(); ?>assets/img/icons/Dashboard.png" alt="">Dashbaord</button>
      <button class="tablinks" onclick="openCity(event, 'job_list')"><img style="padding-right:10px;" src="<?php echo base_url(); ?>assets/img/icons/showJobs.png" alt="">Show Jobs</button>
      <button class="tablinks" onclick="openCity(event, 'applications')"><img style="padding-right:10px;" src="<?php echo base_url(); ?>assets/img/icons/showAllTalents.png" alt="">Show All Talents</button>
      <button class="tablinks" onclick="openCity(event, 'appliedJobs')"><img style="padding-right:10px;" src="<?php echo base_url(); ?>assets/img/icons/jobApplication.png" alt="">Job Application</button>
      <button class="tablinks" onclick="openCity(event, 'PostJobs')"><img style="padding-right:10px;" src="<?php echo base_url(); ?>assets/img/icons/jobApplication.png" alt="">Post Job</button>

      <button class="tablinks" onclick="openCity(event, 'approve')">
      <img style="padding-right:10px;" src="<?php echo base_url(); ?>assets/img/icons/approve.png" alt="">Approve Admin</button>

      <div style="position: absolute; bottom: 20px; left: 75px;">
        <a class="tablinks" href="<?php echo base_url() ?>logout" style="color: white;">
          <img style="padding-right:10px;" src="<?php echo base_url(); ?>assets/img/icons/logout.png" alt="">
          Logout</a>
      </div>
      <!-- <button class="tablinks" onclick="openCity(event, 'custom_search')">Custom Search</button> -->
      <!-- <button class="tablinks" onclick="openCity(event, 'Users')">Show Users</button> -->
    </div>

    <div id="Dashboard" class="tabcontent">
      <!-- <h3>Admin Dashboard</h3> -->
      <!-- <div class="col-md-12 pull-right">
        <img style="width: 290px; height: 210px;" src="<?php echo base_url(); ?>assets/img/modelPic/<?php echo $info['picture'] ?>" alt="">
      </div> -->

      <div class="col-lg-12">
        <div class="row">
          <div class="col-md-6">
            <h3>Personal Information</h3>
          </div>
          <div class="col-md-2 col-lg-offset-4">
            <a href="<?php echo base_url() ?>editRecuriter/<?php echo $info['id'] ?>">
              <button style="margin-top: 10px;" type="submit" class="btn btn-default btn__red animation btn-full pull-right">Edit Info</button>
            </a>
          </div>
        </div>
      </div>
      <!--       
      <div class="col-md-12">
        <h2><?php echo strtoupper($info['first_name'] . ' ' . $info['last_name']) ?></h2>
        <h4>Personal Information</h4>
      </div> -->

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">First Name</h5>
        <p><?php echo ucfirst($info['first_name']); ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Last Name</h5>
        <p><?php echo ucfirst($info['last_name']); ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Date of Birth</h5>
        <p><?php echo $info['dob']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Email</h5>
        <p><?php echo $info['email']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Phone Number</h5>
        <p><?php echo $info['phone_number']; ?>
        <p>
      </div>


      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Contact Number</h5>
        <p><?php echo $info['phone_number']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Residental Address</h5>
        <p><?php echo ucfirst($info['residental_address']); ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Nationality</h5>
        <p><?php echo $info['nationality']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Gender</h5>
        <p><?php echo ucfirst($info['gender']); ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Experience (in Years)</h5>
        <p><?php echo $info['experience']; ?> Years
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Role</h5>
        <p><?php echo $info['role']; ?>
        <p>
      </div>



    </div>

    <div id="job_list" class="tabcontent">
      <h3>Job Lists</h3>
      <div class="col-lg-12  col-md-8">
        <table id="example" class="display">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Details</th>
              <th>Application Deadline</th>
              <th>JDs</th>
              <th>Skills Required</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($jobs as $job) { ?>
              <tr>
                <td><?php echo $job['id'] ?></td>
                <td><?php echo $job['job_title'] ?></td>
                <td><?php echo $job['job_details'] ?></td>
                <td><?php echo $job['application_deadline'] ?></td>
                <td><?php echo $job['job_responsibility'] ?></td>
                <td><?php echo $job['skill_required'] ?></td>
                <td style="width: 70px;">
                  <a class="btn_edit" href="<?php echo base_url() ?>editJob/<?php echo $job['id'] ?>">
                    <img style="position: relative; top: -1px;" src="<?php echo base_url(); ?>assets/img/icons/edit.png" alt=""> Edit</a>
                </td>
                <td style="width: 80px;"><a class="btn_delete" href="<?php echo base_url(); ?>delete/<?php echo $job['id'] ?>">
                    <img style="position: relative; top: -2px;" src="<?php echo base_url(); ?>assets/img/icons/delete.png"> Delete</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

    <div id="applications" class="tabcontent">
      <h3>List of Applicants</h3>
      <table id="talent_data" class="display" style="width:100%">
        <thead>
          <tr>
            <!-- <th>ID</th> -->
            <th>First Name</th>
            <th>Gender</th>
            <th>Nationality</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Skin Color</th>
            <th>Eye Color</th>
            <th>Hair Color</th>
            <th>Hair Type</th>
            <th>Language</th>
            <th>View CV</th>
            <th>View info</th>
            <th>Send Email</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($talents as $talent) { ?>
            <tr>
              <!-- <td><?php echo $talent['id'] ?></td> -->
              <td><?php echo $talent['first_name'] ?></td>
              <td><?php echo $talent['gender'] ?></td>
              <!-- <td><?php echo $talent['email_address'] ?></td> -->
              <!-- <td><?php echo $talent['phone_number'] ?></td> -->
              <td><?php echo $talent['nationality'] ?></td>
              <!-- <td><?php echo $talent['dob'] ?></td> -->
              <!-- <td><?php echo $talent['experience'] ?> Years</td> -->
              <!-- <td><?php echo $talent['role'] ?></td> -->
              <td><?php echo $talent['height'] ?></td>
              <td><?php echo $talent['weight'] ?></td>
              <td><?php echo $talent['skin_color'] ?></td>
              <td><?php echo $talent['eye_color'] ?></td>
              <td><?php echo $talent['hair_color'] ?></td>
              <td><?php echo $talent['hair_type'] ?></td>
              <td><?php echo $talent['language'] ?></td>
              <td>
                <a target="_blank" data-toggle="tooltip" title="View Talent CV" href="<?php echo base_url() ?>assets/img/modelPic/<?php echo $talent['cv'] ?>">View</a>
              </td>
              <td>
                <a target="_blank" data-toggle="tooltip" title="View <?php echo $talent['first_name'] ?> Info" href="<?php echo base_url(); ?>talentinfo/<?php echo $talent['id'] ?>">View</a>
              </td>
              <?php if ($talent['status'] == 1) { ?>
                <td data-toggle="tooltip" title="Email has been Sent"><i class="fas fa-check"></i></td>
              <?php } else { ?>
                <td>
                  <a href="<?php echo base_url() ?>HomeController/send_email" data-toggle="tooltip" title="Send Email">
                    <i class="fas fa-envelope"></i>
                  </a>
                </td>
              <?php } ?>
              <td>
                <a href="<?php echo base_url() ?>HomeController/sendEmail" data-toggle="tooltip" title="Send Email">
                  <i class="fas fa-envelope"></i>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div id="appliedJobs" class="tabcontent">
      <h3>List of Applications for Jobs</h3>
      <table id="applied_jobs" class="display">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Date Applied</th>
            <th>Position Applied</th>
            <th>Download CV</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($applied_jobs as $apply) { ?>
            <tr>
              <td><?php echo $apply['id'] ?></td>
              <td><?php echo $apply['first_name'] ?></td>
              <td><?php echo $apply['last_name'] ?></td>
              <td><?php echo $apply['gender'] ?></td>
              <td><?php echo date('Y-m-d', strtotime($apply['created_at'])) ?></td>
              <td><?php echo $apply['job_title'] ?></td>
              <td><a href="<?php echo base_url() ?>assets/img/modelPic/<?php echo $apply['cv'] ?>">View</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div id="PostJobs" class="tabcontent">
      <section class="section apply">
        <form class="apply-form form-horizontal" method="post" action="<?php echo base_url(); ?>HomeController/insertJob">
          <div class="form-block">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name" class="col-sm-4 control-label">Job Title</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="job_title">
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="name" class="col-sm-4 control-label">Job Location</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="location" required>
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

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="b-date" class="col-sm-4 control-label">Application Deadline</label>
                  <div class="col-sm-8 form-row">
                    <input type="date" class="form-control" name="application_deadline">
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">Skills Required</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="skills_required">
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="address" class="col-sm-4 control-label">Posting Date</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" name="posting_date">
                    <?php if ($this->session->flashdata('login_failed')) : ?>
                      <?php echo '<p class="alert alert-success">' . $this->session->flashdata('inserted') . '</p>'; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label for="gender" class="col-sm-2 control-label">Job Details</label>
                  <div class="col-sm-10">
                    <textarea id="editor1" class="form-control" name="description"></textarea>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label for="phone" class="col-sm-2 control-label">Job Description</label>
                  <div class="col-sm-10">
                    <textarea id="editor2" class="form-control" name="job_description"></textarea>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-lg-offset-4">
                <button type="submit" class="btn btn-default btn__red animation btn-full pull-right">Post Job</button>
              </div>

            </div>

          </div>

        </form>




      </section><!-- Services Section End -->
    </div>

    <div id="approve" class="tabcontent">
      <section class="section apply">
        <div class="col-lg-12  col-md-8">
          <table id="approve_admin" class="display">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Role</th>
                <th>Username</th>
                <th>Status</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($approve as $app) { ?>
                <tr>
                  <td><?php echo $app['id'] ?></td>
                  <td><?php echo $app['first_name'] ?></td>
                  <td><?php echo $app['last_name'] ?></td>
                  <td><?php echo $app['role'] ?></td>
                  <td><?php echo $app['username'] ?></td>
                  <td><?php echo $app['status'] ?></td>
                  <td style="width: 90px;">
                    <a class="btn_approve" href="<?php echo base_url() ?>approve/<?php echo $app['id'] ?>">
                      <img style="position: relative; top: -1px;" src="<?php echo base_url(); ?>assets/img/icons/edit.png" alt=""> Approve</a>
                  </td>
                  <td style="width: 80px;"><a class="btn_delete" href="<?php echo base_url(); ?>deleteAdmin/<?php echo $app['id'] ?>">
                      <img style="position: relative; top: -2px;" src="<?php echo base_url(); ?>assets/img/icons/delete.png"> Delete</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

      </section>
    </div>


  </div>
</section>
<!-- Services Section End -->

<script src="https://cdn.datatables.net/buttons/1.1.0/js/dataTables.buttons.min.js""></script>
<script src=" https://cdn.datatables.net/buttons/1.1.0/js/buttons.print.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.0.1/js/dataTables.searchBuilder.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.0.2/js/dataTables.dateTime.min.js"></script>
<script type='text/javascript' src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script type='text/javascript' src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script type='text/javascript' src="https://cdn.datatables.net/searchpanes/1.2.1/js/dataTables.searchPanes.min.js"></script>
<script type='text/javascript' src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.0.1/css/searchBuilder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.0.2/css/dataTables.dateTime.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.2.1/css/searchPanes.dataTables.min.css">


<!-- List of all jobs posted on website  -->
<script>
  $(document).ready(function() {
    $('#example').DataTable({
      buttons: [{
        extend: 'searchBuilder',
        text: 'Filter'
      }],
      dom: 'Bfrtip',
    });
  });
</script>

<!-- Job Applications list - Tab  -->
<script>
  $(document).ready(function() {
    $('#applied_jobs').DataTable({
      buttons: [{
        extend: 'searchBuilder',
        text: 'Filter'
      }],
      dom: 'Bfrtip',
    });
  });
</script>

<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>

<!-- tooltip hover -->
<script>
  $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>

<!-- Show all talent  -->
<script>
  $(document).ready(function() {
    $('#talent_data').DataTable({
      buttons: [{
        extend: 'searchBuilder',
        text: 'Filter'
      }],
      dom: 'Bfrtip',
    });
  });
</script>

<!-- list of all admin's to approve or cancel -->
<script>
  $(document).ready(function() {
    $('#approve_admin').DataTable({
      buttons: [{
        extend: 'searchBuilder',
        text: 'Filter'
      }],
      dom: 'Bfrtip',
    });
  });
</script>


<!-- custom search datatable  -->
<script>
  // $(document).ready(function() {
  //     $('#examplee').DataTable( {
  //         buttons:['searchBuilder','print'],
  //         dom: 'Bfrtip',
  //         responsive: true
  //     });
  // });

  $(document).ready(function() {
    $('#examplee').DataTable({
      searchPanes: {
        cascadePanes: true
      },
      dom: 'Plfrtip',
      targets: [1],
    });
  });
</script>


<script src="<?php echo base_url(); ?>assets/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/modernizr/modernizr.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/plugins-scroll/plugins-scroll.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/izotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/hero-slider/hero-slider.js"></script> <!-- Resource jQuery -->
<script src="<?php echo base_url(); ?>assets/js/common.js"></script>

<!-- datatable files -->
<script src="<?php echo base_url(); ?>assets/js/datatables.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables.min.js"></script>


<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/buttons.jqueryui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/dataTables.searchBuilder.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/dataTables.searchBuilder.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/searchBuilder.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/searchBuilder.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/searchBuilder.foundation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/searchBuilder.jqueryui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/dataTables.searchPanes.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/dataTables.searchPanes.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/searchPanes.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/searchPanes.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/searchPanes.foundation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/dataTables.select.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/dataTables.select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/select.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/select.foundation.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/select.jqueryui.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatableButtons/select.jqueryui.min.js"></script>

<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('editor1');
  CKEDITOR.replace('editor2');
</script>


<!-- font awesome -->
<script src="https://kit.fontawesome.com/cae8759047.js" crossorigin="anonymous"></script>