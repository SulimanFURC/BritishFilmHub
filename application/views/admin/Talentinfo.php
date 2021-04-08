<!-- Slider Section Start -->
<section class="page__img" style="background-image: url('<?php echo base_url(); ?>assets/img/page-img.jpg')">
</section>
<!-- Slider Section End -->



<div class="container" style="width: 1150px;">
  <div class="col-lg-12">
    <h3><?php echo $talents['first_name'] ?> Information</h3>
  </div>
  <div class="col-lg-4">
    <h5 style="font-weight: bold;">First Name</h5>
    <p style="background: aliceblue;"><?php echo ucfirst($talents['first_name']); ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Last Name</h5>
    <p style="background: aliceblue;"><?php echo ucfirst($talents['last_name']); ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Gender</h5>
    <p style="background: aliceblue;"><?php echo ucfirst($talents['gender']); ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Sexuality</h5>
    <p style="background: aliceblue;"><?php echo ucfirst($talents['Sexuality']); ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Email</h5>
    <p style="background: aliceblue;"><?php echo $talents['email_address']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Contact Number</h5>
    <p style="background: aliceblue;"><?php echo $talents['phone_number']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Residental Address</h5>
    <p style="background: aliceblue;"><?php echo ucfirst($talents['residental_address']); ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Nationality</h5>
    <p style="background: aliceblue;"><?php echo $talents['nationality']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Date of Birth</h5>
    <p style="background: aliceblue;"><?php echo $talents['dob']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Height (in Feet)</h5>
    <p style="background: aliceblue;"><?php echo $talents['height']; ?>
    <p>

  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Weight (in Pounds)</h5>
    <p style="background: aliceblue;"><?php echo $talents['weight']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Skin Color</h5>
    <p style="background: aliceblue;"><?php echo $talents['skin_color']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Eye Color</h5>
    <p style="background: aliceblue;"><?php echo $talents['eye_color']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Hair Color</h5>
    <p style="background: aliceblue;"><?php echo ucfirst($talents['hair_color']); ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Hair Type</h5>
    <p style="background: aliceblue;"><?php echo ucfirst($talents['hair_type']); ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Preferred Role Applied</h5>
    <p style="background: aliceblue;"><?php echo $talents['preferred_role']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Experience (in Years)</h5>
    <p style="background: aliceblue;"><?php echo $talents['experience']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Role</h5>
    <p style="background: aliceblue;"><?php echo $talents['role']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Language</h5>
    <p style="background: aliceblue;"><?php echo $talents['language']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Consent for Nudity</h5>
    <p style="background: aliceblue;"><?php echo $talents['consent_for_nudity']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Alternative Contact No</h5>
    <p style="background: aliceblue;"><?php echo $talents['alternative_number']; ?>
    <p>
  </div>

  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Twitter</h5>
    <ul class="fs__list clearfix">
      <li class="fs__list-item"><a target="_blank" href="<?php echo $talents['twitter_link']; ?>" class="animation"><i class="mdi mdi-twitter"></i></a></li>
    </ul>
  </div>
  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Facbook</h5>
    <ul class="fs__list clearfix">
      <li class="fs__list-item"><a target="_blank" href="<?php echo $talents['fb_link']; ?>" class="animation"><i class="mdi mdi-facebook"></i></a></li>

    </ul>
  </div>
  <div class="col-lg-4">
    <h5 style="font-weight: bold;">Instagram</h5>
    <ul class="fs__list clearfix">
      <li class="fs__list-item"><a target="_blank" href="<?php echo $talents['insta_link']; ?>" class="animation"><i class="mdi mdi-instagram"></i></a></li>
    </ul>
  </div>

  <div class="col-lg-12" style="margin-top: 20px;">
    <!-- <h5 style="font-weight: bold; margin-top: 25px;">CV</h5> -->
    <embed src="<?php echo base_url(); ?>assets/img/TalentCVandPic/<?php echo $talents['cv'] ?>" type="application/pdf" scrolling="auto" style="width: 800px; height: 765px;"></embed>
  </div>

  <!-- <div class="col-lg-6">
    <h5 style="font-weight: bold; margin-top: 25px;">Pic</h5>
    <img src="<?php echo base_url(); ?>assets/img/TalentCVandPic/<?php echo $talents['picture'] ?>" alt="">
  </div> -->






</div>