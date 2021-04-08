
<!-- Slider Section Start -->
<section class="page__img" style="background-image: url('<?php echo base_url();?>assets/img/apply_bg.jpg')">
		<div class="container">
			<div class="row">
				<div class="title__wrapp">
					<div class="page__subtitle title__grey">Apply</div>
					<h1 class="page__title">Work with us</h1>
				</div>
			</div>
		</div>
  </section><!-- Slider Section End -->
  
  <!-- Services Section Start -->
	<section class="section apply">
		<div class="container">
			<div class="row">
				<h3 class="text__quote centered">Edit Job</h3>
				<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
          <form class="apply-form form-horizontal" method="post" action="<?php echo base_url();?>HomeController/update">
          <input type="hidden" name="id" value="<?php echo $jobs['id']; ?>">
						<div class="form-block">
              <div class="form-group">
                  <label for="name" class="col-sm-4 control-label">Job Title</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="job_title"
                     value="<?php echo $jobs['job_title']?>" >
                  </div>
              </div>
              
              <div class="form-group">
                <label for="gender" class="col-sm-4 control-label">Job Details</label>
                <div class="col-sm-8">
                  <textarea cols="50" rows="5" name="description"><?php echo $jobs['job_details']?></textarea>
                </div>
              </div>

              <div class="form-group">
                  <label for="b-date" class="col-sm-4 control-label">Application Deadline</label>
                  <div class="col-sm-8 form-row">
                    <input type="date" class="form-control" name="application_deadline"
                    value="<?php echo $jobs['application_deadline']?>">
                  </div>
              </div>

            </div>

            <div class="form-block">
              <div class="form-group">
                <label for="phone" class="col-sm-4 control-label">Job Description</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="job_description"
                  value="<?php echo $jobs['job_responsibility']?>">
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Skills Required</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="skills_required"
                  value="<?php echo $jobs['skill_required']?>">
                </div>
              </div>
              <div class="form-group">
                <label for="address" class="col-sm-4 control-label">Posting Date</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="posting_date" 
                  value="<?php echo $jobs['posting_date']?>">
                </div>
              </div>
 
                
              <div class="row">
                <div class="col-sm-8 col-sm-offset-4">
                  <button type="submit" class="btn btn-default btn__red animation btn-full pull-right">Update Job</button>
                </div>
                <?php if($this->session->flashdata('job_updated')) : ?>
                  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('job_updated').'</p>'; ?>
                <?php endif; ?>
              </div>

            </div>
           </form>
				</div>

			</div>
		</div>
	</section><!-- Services Section End -->
