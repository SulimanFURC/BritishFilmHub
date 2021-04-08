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

  .photo-gallery {
    color: #313437;
    background-color: #fff;
  }


  @media (max-width:767px) {
    .photo-gallery h2 {
      margin-bottom: 25px;
      padding-top: 25px;
      font-size: 24px;
    }
  }

  .photo-gallery .intro {
    font-size: 16px;
    max-width: 500px;
    margin: 0 auto 40px;
  }

  .photo-gallery .intro p {
    margin-bottom: 0;
  }

  .photo-gallery .photos {
    padding-bottom: 20px;
  }

  .photo-gallery .item {
    padding-bottom: 30px;
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

      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Dashboard')" id="defaultOpen">Dashbaord</button>
        <button class="tablinks" onclick="openCity(event, 'gallery')">Gallery</button>
        <button class="tablinks" onclick="openCity(event, 'appliedJobs')">Applied Jobs</button>
        <div class="col-md-12 col-sm-6 col-xs-12 footer__social" style="position: absolute; bottom: 330px; left: 17px;">
          <ul class="fs__list clearfix">

            <li class="fs__list-item"><a target="_blank" style="color: white;" href="<?php echo $info['twitter_link']; ?>" class="animation"><i class="mdi mdi-twitter"></i></a></li>
            <li class="fs__list-item"><a target="_blank" style="color: white;" href="<?php echo $info['fb_link']; ?>" class="animation"><i class="mdi mdi-facebook"></i></a></li>
            <li class="fs__list-item"><a target="_blank" style="color: white;" href="<?php echo $info['insta_link']; ?>" class="animation"><i class="mdi mdi-instagram"></i></a></li>
          </ul>
        </div>
        <!-- <button class="tablinks" onclick="openCity(event, 'Users')">Show Users</button> -->
      </div>

      <div style="position: absolute; bottom: 20px; left: 75px;">
        <a class="tablinks" href="<?php echo base_url() ?>logout" style="color: white;">
          <img style="padding-right:10px;" src="<?php echo base_url(); ?>assets/img/icons/logout.png" alt="">
          Logout</a>
      </div>
      <!-- <button class="tablinks" onclick="openCity(event, 'custom_search')">Custom Search</button> -->
      <!-- <button class="tablinks" onclick="openCity(event, 'Users')">Show Users</button> -->
    </div>

    <div id="Dashboard" class="tabcontent">

      <div class="col-lg-12">
        <div class="row">
          <div class="col-md-6">
            <h3>Personal Information</h3>
          </div>
          <div class="col-md-2 col-lg-offset-4">
            <a href="<?php echo base_url() ?>editInfo/<?php echo $info['id'] ?>">
              <button style="margin-top: 10px;" type="submit" class="btn btn-default btn__red animation btn-full pull-right">Edit Info</button>
            </a>
          </div>
        </div>
      </div>

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
        <h5 style="font-weight: bold;">Gender</h5>
        <p><?php echo ucfirst($info['gender']); ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Sexuality</h5>
        <p><?php echo ucfirst($info['Sexuality']); ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Email</h5>
        <p><?php echo $info['email_address']; ?>
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
        <h5>Date of Birth</h5>
        <p style="font-weight: bold;"><?php echo $info['dob']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Height (in Feet)</h5>
        <p><?php echo $info['height']; ?>
        <p>

      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Weight (in Pounds)</h5>
        <p><?php echo $info['weight']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5>Skin Color</h5>
        <p style="font-weight: bold;"><?php echo $info['skin_color']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Eye Color</h5>
        <p><?php echo $info['eye_color']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Hair Color</h5>
        <p><?php echo ucfirst($info['hair_color']); ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Hair Type</h5>
        <p><?php echo ucfirst($info['hair_type']); ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Preferred Role Applied</h5>
        <p><?php echo $info['preferred_role']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Experience (in Years)</h5>
        <p><?php echo $info['experience']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Role</h5>
        <p><?php echo $info['role']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Language</h5>
        <p><?php echo $info['language']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Consent for Nudity</h5>
        <p><?php echo $info['consent_for_nudity']; ?>
        <p>
      </div>

      <div class="col-lg-4">
        <h5 style="font-weight: bold;">Alternative Contact No</h5>
        <p><?php echo $info['alternative_number']; ?>
        <p>
      </div>

      <!-- <div class="col-lg-4">
        <h5>Facebook</h5>
        <p><a href="<?php echo $info['fb_link']; ?>"><i class="fab fa-facebook fa-2x"></i></a>
        <p>
      </div>

      <div class="col-lg-4">
        <h5>Twitter</h5>
        <p><a href="<?php echo $info['twitter_link']; ?>"><i class="fab fa-twitter fa-2x"></i></a>
        <p> 
      </div>

      <div class="col-lg-4">
        <h5>Instagram</h5>
        <p><a href="<?php echo $info['insta_link']; ?>"><i class="fab fa-instagram fa-2x"></i></a>
        <p>
      </div>

      <div class="col-lg-12 ">
        <div class="col-lg-6 col-lg-offset-3">
          <a href="<?php echo base_url() ?>editInfo/<?php echo $info['id'] ?>">
            <button type="submit" class="btn btn-default btn__red animation btn-full pull-right">Edit Info</button></a>
        </div>
      </div> -->


    </div>

    <div id="appliedJobs" class="tabcontent">
      <?php foreach ($lists as $job) { ?>
        <div class="row" style="box-shadow: 3px 3px 3px #efefef; height: 123px; margin-bottom: 20px; background-color: #C4C4C4; border-radius: 20px;   margin-top: 35px; margin-left: 0px;">
          <div class="col-lg-3">
            <img src="<?php echo base_url(); ?>assets/img/logo/britishfilmhub.png" style="height: 45px; margin-top: 30px;" alt="">
          </div>
          <div class="col-lg-6 ol-md-offset-2" style="margin-left: -115px;">
            <h4><?php echo $job['job_title'] ?></h4>
            <p><?php echo $job['skill_required'] ?></p>
          </div>
          <div class="col-lg-3">
          </div>
        </div>
      <?php } ?>
    </div>

    <div id="gallery" class="tabcontent">

      <div class="row">
        <div class="col-lg-7 col-lg-offset-3">
          <form class="apply-form form-horizontal" method="post" enctype='multipart/form-data' action="<?php echo base_url(); ?>HomeController/uploadImage">
            <input class="form-control" type='file' name='upload_Files[]' multiple="">
            <input class="form-control " type='submit' value='Upload' name='submitForm' id="submitForm" />
          </form>
        </div>
      </div>

      <div class="row">
        <div class="row">
          <?php if (!empty($gallery)) : foreach ($gallery as $pic) : ?>
              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="<?php echo base_url(); ?>assets/img/TalentGallery/<?php echo $pic['image_name'] ?>" data-target="#image-gallery">
                  <img class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/TalentGallery/<?php echo $pic['image_name'] ?>" alt="Another alt text">
                </a>
              </div>

            <?php endforeach;
          else : ?>
            <p>No File uploaded.....</p>
          <?php endif; ?>

        </div>

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="image-gallery-title"></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                </button>
              </div>
              <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive col-md-12" src="">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                </button>

                <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

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


<!-- Gallery script -->

<script>
  let modalId = $('#image-gallery');

  $(document)
    .ready(function() {

      loadGallery(true, 'a.thumbnail');

      //This function disables buttons when needed
      function disableButtons(counter_max, counter_current) {
        $('#show-previous-image, #show-next-image')
          .show();
        if (counter_max === counter_current) {
          $('#show-next-image')
            .hide();
        } else if (counter_current === 1) {
          $('#show-previous-image')
            .hide();
        }
      }

      /**
       *
       * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
       * @param setClickAttr  Sets the attribute for the click handler.
       */

      function loadGallery(setIDs, setClickAttr) {
        let current_image,
          selector,
          counter = 0;

        $('#show-next-image, #show-previous-image')
          .click(function() {
            if ($(this)
              .attr('id') === 'show-previous-image') {
              current_image--;
            } else {
              current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
          });

        function updateGallery(selector) {
          let $sel = selector;
          current_image = $sel.data('image-id');
          $('#image-gallery-title')
            .text($sel.data('title'));
          $('#image-gallery-image')
            .attr('src', $sel.data('image'));
          disableButtons(counter, $sel.data('image-id'));
        }

        if (setIDs == true) {
          $('[data-image-id]')
            .each(function() {
              counter++;
              $(this)
                .attr('data-image-id', counter);
            });
        }
        $(setClickAttr)
          .on('click', function() {
            updateGallery($(this));
          });
      }
    });

  // build key actions
  $(document)
    .keydown(function(e) {
      switch (e.which) {
        case 37: // left
          if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
            $('#show-previous-image')
              .click();
          }
          break;

        case 39: // right
          if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
            $('#show-next-image')
              .click();
          }
          break;

        default:
          return; // exit this handler for other keys
      }
      e.preventDefault(); // prevent the default action (scroll / move caret)
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