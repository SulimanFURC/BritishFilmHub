
<!-- Slider Section Start -->
<section class="page__img" style="background-image: url('<?php echo base_url();?>assets/img/services_bg.jpg')">
  <div class="container">
    <div class="row">
      <div class="title__wrapp">
        <div class="page__subtitle title__grey">What we do</div>
        <h1 class="page__title">Services</h1>
      </div>
    </div>
  </div>
</section>
<!-- Slider Section End -->

<!-- Single model Section Start -->
<section class="section s-model">
	<div class="container">
  <input type="hidden" name="id" value="<?php echo $jobs['id']; ?>">
		<div class="row">
			<div class="col-lg-12 col-md-12">
        <h4><strong>Job Title:</strong> <?php echo ucfirst($jobs['job_title'])?></h4>
      </div>
			<div class="col-lg-12 col-md-12">
        <p><strong>Application Deadline: </strong> <?php echo $jobs['application_deadline']?></p>
        <p><strong>Job Requirements: </strong><?php echo $jobs['job_details']?></p>
        <p><strong>Job Description: </strong><?php echo $jobs['job_responsibility']?></p>
      </div>
      <div class="col-lg-4 col-md-12 col-lg-offset-0">
        <a href="<?php echo base_url();?>job_apply" class="btn btn-default btn__red animation btn-full pull-right" 
        style="margin-top: 20px; width:fit-content; margin-right: 215px;">Apply Now</a>
      </div>

		</div>

	</div>
</section>

