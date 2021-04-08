<!-- Slider Section Start -->
<section class="page__img" style="background-image: url('<?php echo base_url(); ?>assets/img/apply_bg.jpg')">

</section>
<!-- Slider Section End -->

<!-- Services Section Start -->
<section class="section apply">
  <div class="container">
    <div class="row">
     
      <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
        <form class="apply-form form-horizontal" method="post" action="<?php echo base_url(); ?>HomeController/updateRecuriterApprove" 
        enctype="multipart/form-data">

          <div class="form-block">
            <div class="form-group">
              <label for="name" class="col-sm-4 control-label">First Name <span class="req">*</span></label>
              <div class="col-sm-8">
                <input type="hidden" name="id" value="<?php echo $recuriter['id']; ?>">
                <input type="text" class="form-control" id="name" name="first_name" placeholder="John" 
                value="<?php echo $recuriter['first_name']?>" required>
              </div>
          </div>

          <div class="form-block">
            <div class="form-group">
              <label for="name" class="col-sm-4 control-label">Last Name <span class="req">*</span></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="name" name="first_name" placeholder="John" 
                value="<?php echo $recuriter['last_name']?>" required>
              </div>
          </div>

          <div class="form-block">
            <div class="form-group">
              <label for="status" class="col-sm-4 control-label">Status <span class="req">*</span></label>
              <div class="col-sm-8">
               <select class="form-control" name="status" required>
                  <option><?php echo $recuriter['status']?></option>
                  <option value="1">Approve</option>
                  <option value="0">Not Approve</option>
                </select>
              </div>
          </div>

          <div class="row">
              <div class="col-sm-8 col-sm-offset-4">
                <button type="submit" class="btn btn-default btn__red animation btn-full pull-right">Done</button>
              </div>
            </div>

        </form>
      </div>
    </div>
  </div>
</section>
<!-- Services Section End -->