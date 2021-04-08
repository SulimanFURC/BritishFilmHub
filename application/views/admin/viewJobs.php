
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
				<h3 class="text__quote centered">Post Your Job</h3>
        <div class="col-lg-12  col-md-12">
          <form class="apply-form form-horizontal" method="get" action="<?php echo base_url();?>jobList">
          <div class="row">

            <div class="col-md-3">
              <div class="form-group">
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="job_title" placeholder="Search by Job Title" >
                  </div>
              </div>
            </div>

            <div class="col-md-3 ">
              <div class="form-group">
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="location" placeholder="Search by JDs">
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="skills_required" placeholder="Search by Gender">
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-default btn__red animation btn-full">Search</button>
            </div>
          </div>
           </form>
				</div>
				<div class="col-lg-12  col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Details</th>
              <th scope="col">Application Deadline</th>
              <th scope="col">JDs</th>
              <th scope="col">Skills</th>
              <th scope="col">Posting Date</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($jobs as $job)
            { ?>

              <tr>
                <th scope="row"> <?php echo $job['id'] ?> </th>
                <td> <?php echo $job['job_title'] ?> </td>
                <td> <?php echo $job['job_details'] ?> </td>
                <td> <?php echo $job['application_deadline'] ?> </td>
                <td> <?php echo $job['job_responsibility'] ?> </td>
                <td> <?php echo $job['skill_required'] ?> </td>
                <td> <?php echo $job['posting_date'] ?> </td>
                <td><a class="edit  btn__succ" 
                href="<?php echo base_url()?>editJob/<?php echo $job['id']?>">Edit</a> </td>
                <td><a class="del  btn__del " href="<?php echo base_url();?>delete/<?php echo $job['id']?>">Delete</a></td>
             </tr>
              <tr>
                
             </tr>

           <?php } ?>
          
          </tbody>
        </table>
        <?php if(isset($links)) { ?>
          <?php echo $links ?>
       <?php } ?>
              
				</div>

			</div>
		</div>
	</section><!-- Services Section End -->
