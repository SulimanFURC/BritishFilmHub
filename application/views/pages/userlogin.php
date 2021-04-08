<!-- <section class="page__img" style="background-image: url('<?php echo base_url(); ?>assets/img/apply_bg.jpg')">
		<div class="container">
			<div class="row">
				<div class="title__wrapp">
				
					<h1 class="page__title">User Login</h1>
				</div>
			</div>
		</div>
  </section> -->


<!-- Services Section Start -->
<section class="section apply bg">
  <div>
    <img src="<?php echo base_url(); ?>assets/img/image.png" alt="">
  </div>

  <div class="row login-css">
    <div class="col-lg-12 col-md-12 " style="padding:60px;">

      <form class="apply-form form-horizontal" method="post" action="<?php echo base_url(); ?>HomeController/userlogin" enctype="multipart/form-data">
        <h3>User Login</h3>
        <div class="form-group">
          <!-- <label for="zip" class="col-sm-4 control-label">User Name</label> -->
          <div class="col-sm-12">
            <i class="fas fa-user" style="position: relative; top: 47px; right: 125px;"></i><input type="text" class="form-control" name="user_name" placeholder="Username" required>
          </div>
        </div>

        <div class="form-group">
          <!-- <label for="zip" class="col-sm-4 control-label">Password<span class="req">*</span></label> -->
          <div class="col-sm-12">
            <i class="fas fa-lock" style="position: relative; top: 47px; right: 125px;"></i><input type="password" class="form-control" name="password" placeholder="Password">
            <?php if ($this->session->flashdata('login_failed')) : ?>
              <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
            <?php endif; ?>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-default btn__red animation btn-full pull-right">Login</button>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <p style="font-size:small; text-align:center">If you are not registered please click on <span style="font-weight:bold;">
                <a href="<?php echo base_url() ?>talentRegistration">Signup</a></span></p>
          </div>
        </div>

    </div>
    </form>
  </div>

  </div>
</section>
<!-- Services Section End -->