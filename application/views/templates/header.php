<!DOCTYPE html>
<html lang="en">

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

<body>

	<div class="full-search-wrap">
		<div class="full-search container">
			<div class="close-s"><a href="#">Close</a></div>
			<form action="/" class=" search-full-form">
				<input type="text" id="s-full" class="form-search__input form-search__input_search-full" placeholder="Search">
				<button type="submit" class="form-search__input_icon pull-right">
					<i class="mdi mdi-magnify"></i>
				</button>
				<p class="hint">Type in your search and press enter</p>
			</form>
		</div>
	</div>

	<!-- Header Section Start -->
	<header class="header" id="header">
		<div class="header-sticky__wrapp">
			<div class="container">
				<div class="row">
					<div class="logo col-md-3 col-sm-4 col-xs-12">
						<a class="navbar-brand" href="<?php echo base_url(); ?>Home">
							<img class="logo-postion" style="" src="<?php echo base_url(); ?>assets/img/logo/britishfilmhub.png" alt="">
						</a>
					</div>
					<div class="main__menu-wrap col-md-9 col-sm-8 col-xs-12">
						<span class="responsive-menu__button" id="responsive-menu"><i class="mdi mdi-menu"></i></span>
						<nav class="main__menu pull-right" id="main__nav">
							<ul class="m-menu__list clearfix">
								<li class="m-menu__list-item ">
									<a href="<?php echo base_url(); ?>Home">Home</a>
								</li>
								<!-- <li class="m-menu__list-item menu-item-has-children">
									<a href="<?php echo base_url(); ?>model">Models</a>
								</li> -->
								<li class="m-menu__list-item">
									<a href="<?php echo base_url(); ?>about-us">About Us</a>
								</li>
								<?php if (!$this->session->userdata('logged_in')) : ?>
									<li class="m-menu__list-item">
										<a href="<?php echo base_url(); ?>services">Jobs</a>
									</li>
								<?php endif; ?>

								<?php if (!$this->session->userdata('logged_in') && !$this->session->userdata('userlogged_in')) : ?>
									<li class="m-menu__list-item menu-item-has-children ">
										<a class="">Registration</a>
										<ul class="m-menu__sub">
											<li class="m-menu__sub-item">
												<a href="<?php echo base_url(); ?>apply">As Recuriter</a>
											</li>
											<li class="m-menu__sub-item">
												<a href="<?php echo base_url(); ?>talentRegistration">As Talent</a>
											</li>
										</ul>
									</li>
								<?php endif; ?>
								<li class="m-menu__list-item">
									<a href="<?php echo base_url(); ?>contact-us">Contacts</a>
								</li>

								<!-- if admin and User both are not logged in show this...  -->
								<?php if (!$this->session->userdata('logged_in') && !$this->session->userdata('userlogged_in')) : ?>
									<li class="m-menu__list-item menu-item-has-children m-menu__list-item_active">
										<a class="login_btn">Login</a>
										<ul class="m-menu__sub">
											<li class="m-menu__sub-item">
												<a href="<?php echo base_url(); ?>login">Admin Login</a>
											</li>
											<li class="m-menu__sub-item">
												<a href="<?php echo base_url(); ?>userlogin">User Login</a>
											</li>
										</ul>
									</li>
								<?php endif; ?>

								<!-- if admin is logged in  -->
								<?php if ($this->session->userdata('logged_in')) : ?>
									<li class="m-menu__list-item menu-item-has-children m-menu__list-item_active">
										<a><?php echo $this->session->userdata('username'); ?></a>
										<ul class="m-menu__sub">
											<li class="m-menu__sub-item">
												<a href="<?php echo base_url(); ?>AdminDashboard">Dashboard</a>
											</li>
											<li class="m-menu__sub-item">
												<a href="<?php echo base_url(); ?>logout">Logout</a>
											</li>
										</ul>
									</li>
								<?php endif; ?>

								<!-- if user is logged in  -->
								<?php if ($this->session->userdata('userlogged_in')) : ?>
									<li class="m-menu__list-item menu-item-has-children m-menu__list-item_active">
										<a><?php echo $this->session->userdata('username'); ?></a>
										<ul class="m-menu__sub">
											<li class="m-menu__sub-item">
												<a href="<?php echo base_url(); ?>Dashboard">Dashboard</a>
											</li>
											<li class="m-menu__sub-item">
												<a href="<?php echo base_url(); ?>Dashboard">Upload Images</a>
											</li>
											<li class="m-menu__sub-item">
												<a href="<?php echo base_url(); ?>logout">Logout</a>
											</li>
										</ul>
									</li>
								<?php endif; ?>

							</ul>
						</nav>
					</div>
					<!-- <div class="col-sm-1 col-xs-6 main__search">
						<a href="#0" class="form-search__input_search">
							<i class="mdi mdi-magnify"></i>
						</a>
					</div> -->
				</div>
			</div>
		</div>
	</header>
	<!-- Header Section End -->

	<!-- Flash Message for logout -->
	<?php if ($this->session->flashdata('user_logout')) : ?>
		<?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_logout') . '</p>'; ?>
	<?php endif; ?>

	<!-- user login success message  -->
	<?php if ($this->session->flashdata('user_loggedin')) { ?>
		<div class="alert alert-success alert-dismissible">
			<?php echo $this->session->flashdata('user_loggedin') ?>
		</div>
	<?php } ?>