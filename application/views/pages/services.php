<!-- Slider Section Start -->
<section class="page__img" style="background-image: url('<?php echo base_url(); ?>assets/img/services_bg.jpg')">

</section>
<!-- Slider Section End -->

<!-- Single model Section Start -->
<section class="section s-model">
  <div class="container">

    <form class="apply-form form-horizontal" method="get" action="<?php echo base_url() ?>HomeController/searching">
      <div class="row">

        <div class="col-lg-3 col-sm-3" style="margin-bottom: 20px;">
          <input type="text" class="form-control" name="title" placeholder="Search by Job Title">
        </div>

        <div class="col-lg-3 col-sm-3" style="margin-bottom: 20px;">
          <input type="text" class="form-control" name="location" placeholder="Search by Location">
        </div>

        <div class="col-lg-3 col-sm-3" style="margin-bottom: 20px;">
          <input type="date" class="form-control" name="sdate" placeholder="Search by Date">
        </div>

        <div class="col-lg-3 col-sm-3" style="margin-bottom: 20px;">
          <input type="date" class="form-control" name="edate" placeholder="Search by Date">
        </div>

        <div class="col-lg-6 col-sm-12 col-md-offset-3">
          <div class="row">
            <div class="col-sm-6" style="margin-bottom: 3px;">
              <button type="submit" class="btn btn-default btn__red animation btn-block">Search</button>
            </div>
            <div class="col-sm-6"><a href="<?php echo base_url() ?>services" class="btn btn-default btn__red animation btn-block">clear</a></div>
          </div>
        </div>

      </div>
    </form>

  </div>
  <?php foreach ($jobs as $job) { ?>
    <div class="container">
      <div class="row" style="box-shadow: 0px 4px 40px rgb(68 95 236 / 10%); margin-top:25px; background: #e7e7e9; border-radius: 15px;">
        <div class="col-lg-3 col-sm-3  mt-50">
          <img src="<?php echo base_url(); ?>assets/img/logo/britishfilmhub.png" alt="" style="width:100px">
        </div>
        <div class="col-lg-5 col-sm-5" id="jobs-heading">
          <!-- <h4><?php echo $job['id'] ?></h4> -->
          <h4><?php echo strtoupper($job['job_title']) ?></h4>
          <p><?php echo $job['skill_required'] ?></p>
          <p><span style="font-weight: bold;">Application Deadline:</span> <?php echo $job['application_deadline'] ?></p>
          <p><span style="font-weight: bold;">Location:</span> <?php echo $job['location'] ?></p>
        </div>
        <div class="col-lg-4 col-sm-4" style="margin-top:40px;">
          <div class="row" id="jobs-btn">
            <div class="col-sm-6 col-xs-6">
              <a href="<?php echo base_url(); ?>jobDetails/<?php echo $job['id'] ?>" class="btn btn-default btn__red animation btn-full pull-right">Apply Now</a>
            </div>
            <div class="col-sm-6 col-xs-6">
              <a href="<?php echo base_url(); ?>jobDetails/<?php echo $job['id'] ?>" class="btn btn-default btn__red animation btn-full pull-right">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
</section>

<!-- Single model Section End -->
<!-- Skills Section Start -->
<!-- <section class="section services-page">
  <div class="container">
    <div class="row">
      <div class="col-md-4 services__double-img">
        <div class="row">
          <div class="col-md-12 col-sm-6">
            <img class="services__double-item img-responsive" src="<?php echo base_url(); ?>assets/img/service_1.jpg" alt="">
          </div>
          <div class="col-md-12 col-sm-6">
            <img class="services__double-item img-responsive" src="<?php echo base_url(); ?>assets/img/service_2.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="services__single-img col-md-4 col-sm-6">
        <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/service_3.jpg" alt="">
      </div>

      <div class="services-page__content services-page__content_right col-md-4 col-sm-6">
        <h3 class="services-page__title text__quote">Choose among different studios and locations</h3>
        <div class="services__text">Superior skills specific to the convention and tradeshow industry and provides you with quality interaction with potential customers. You only have four seconds to attract a visitor to your booth.</div>
        <a href="#0" class="more animation">explore</a>
      </div>
    </div>
    <div class="row services-page__skills">
      <div class="services-page__content col-md-3">
        <h3 class="services-page__title text__quote"><span class="line"></span>Make­up artists, stylists &amp; photo</h3>
        <div class="services-page__text">Backstage is proficient in the art of growing your booth’s traffic and executing your goal successfully. </div>
      </div>
      <div class="skills col-md-8 col-md-offset-1">
        <div class="skills__item">
          <span class="skills__icon flaticon-photo-camera"></span>
          <p class="skills__title">1 : photographer</p>
          <ul class="skills__list">
            <li class="skills__list-item">Develop skills</li>
            <li class="skills__list-item">Credibility as a fashion</li>
          </ul>
        </div>
        <div class="skills__item">
          <span class="skills__icon flaticon-shopping-bags"></span>
          <p class="skills__title">2 : MAKE UP</p>
          <ul class="skills__list">
            <li class="skills__list-item">Art of growing</li>
            <li class="skills__list-item">Quite simply</li>
          </ul>
        </div>
        <div class="skills__item">
          <span class="skills__icon flaticon-new-label"></span>
          <p class="skills__title">3 : studios</p>
          <ul class="skills__list">
            <li class="skills__list-item">Tradeshow</li>
            <li class="skills__list-item">Areas</li>
          </ul>
        </div>
        <div class="skills__item">
          <span class="skills__icon flaticon-mall-hanger"></span>
          <p class="skills__title">4 : professionals</p>
          <ul class="skills__list">
            <li class="skills__list-item">Workshops</li>
            <li class="skills__list-item">Photographers</li>
          </ul>
        </div>
        <div class="skills__item">
          <span class="skills__icon flaticon-bar-code"></span>
          <p class="skills__title">5 : locations</p>
          <ul class="skills__list">
            <li class="skills__list-item">Hire talent</li>
            <li class="skills__list-item">Spread your brand</li>
          </ul>
        </div>
        <div class="skills__item">
          <span class="skills__icon flaticon-store-mannequin"></span>
          <p class="skills__title">6 : stylists</p>
          <ul class="skills__list">
            <li class="skills__list-item">Creation Post</li>
            <li class="skills__list-item">Production</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Skills Section End -->

<!-- Call To Action Section Start -->
<!-- <div class="section action">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text__quote action__text">We have best of photographers from the fashion industry, who understands the current trend, style and format as required by clients </div>
      <a href="<?php echo base_url(); ?>apply" class="btn btn__red animation">apply now</a>
    </div>
  </div>
</div> -->
<!-- Call To Action Section End -->

<!-- About Section Start -->
<!-- <div class="section about">
  <div class="container">
    <div class="row">
      <div class="col-md-6 about__text-wrapp">
        <div class="about__title title__grey">Our Agency</div>
        <div class="about__big-tex text__quote"><span class="line__text"></span>Models from our agency are involved in the New York, Paris and Milan fashion weeks, working with the world's leading photographers</div>
      </div>
      <div class="col-md-6 about__text-wrapp">
        <div class="main__text main__text_about">We appear on the covers of sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </div>
        <a href="<?php echo base_url(); ?>about-us" class="more animation">Read more</a>
      </div>
    </div>
  </div>
</div> -->
<!-- About Section End -->


<!-- Clients Section Start -->
<!-- <div class="section clients">
  <div class="container">
    <div class="row">
      <div class="clients__img col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <img src="<?php echo base_url(); ?>assets/img/brand1.jpg" alt="">
      </div>
      <div class="clients__img col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <img src="<?php echo base_url(); ?>assets/img/brand2.jpg" alt="">
      </div>
      <div class="clients__img col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <img src="<?php echo base_url(); ?>assets/img/brand3.jpg" alt="">
      </div>
      <div class="clients__img col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <img src="<?php echo base_url(); ?>assets/img/brand4.jpg" alt="">
      </div>
      <div class="clients__img col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <img src="<?php echo base_url(); ?>assets/img/brand5.jpg" alt="">
      </div>
      <div class="clients__img col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <img src="<?php echo base_url(); ?>assets/img/brand6.jpg" alt="">
      </div>
    </div>
  </div>
</div> -->
<!-- Clients Section End -->