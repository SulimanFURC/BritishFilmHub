

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjprc-1BZ4ft8yC81jNUAdtCkSByqP-DY"></script>
    <script>
    var map;
	var egglabs = new google.maps.LatLng(51.511020176444966, -0.4414192881530681);
	var mapCoordinates = new google.maps.LatLng(51.511020176444966, -0.4414192881530681);

	var markers = [];
	var image = new google.maps.MarkerImage(
	    '<?php echo base_url()?>assets/img/pin.png',
	    new google.maps.Size(60,80),
	    new google.maps.Point(0,0),
	    new google.maps.Point(42,56)
	);

	function addMarker() {
	      markers.push(new google.maps.Marker({
	      position: egglabs,
	      raiseOnDrag: false,
		  icon: image,
	      map: map,
	      draggable: false
	      }));
	}

	function initialize() {
	  var mapOptions = {
		backgroundColor: "#ffffff",
	    zoom: 14,
		disableDefaultUI: true,
	    center: mapCoordinates,
	    mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#BFBFBF"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#BFBFBF"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#BFBFBF"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

	  };
	map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
	addMarker();

	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>

	<!-- Slider Section Start -->
	<section class="page__img" style="background-image: url('<?php echo base_url();?>assets/img/contact_bg.jpg')">
		<div class="container">
			<div class="row">
				<div class="title__wrapp">
					<div class="page__subtitle title__grey">Get in touch</div>
					<h1 class="page__title">Contact us</h1>
				</div>
			</div>
		</div>
	</section><!-- Slider Section End -->

	<!-- Services Section Start -->
	<section class="section contacts">
		<div class="container">
			<div class="row">

				<div class="col-md-5">
				<h2>Get in touch</h2>
					<form class="vertical-form">
						<div class="form-group">
	    					<label for="c-name">Name <span class="req">*</span></label>
	    					<input type="text" class="form-control" id="c-name">
		    			</div>
		    			<div class="form-group">
	    					<label for="c-phone">Phone <span class="req">*</span></label>
	    					<input type="text" class="form-control" id="c-phone">
		    			</div>
		    			<div class="form-group">
	    					<label for="c-email">Email <span class="req">*</span></label>
	    					<input type="email" class="form-control" id="c-email">
						</div>
						<div class="form-group">
		    				<label for="c-text">Message <span class="req">*</span></label>
							<textarea name="c-text" id="c-text" class="form-control"></textarea>
						</div>
						<input type="submit" class="btn btn__red animation" name="update_cart" value="Send message" />
					</form>
				</div>
				<div class="col-md-6 col-md-offset-1">
					<div id="map-canvas"></div>
					<h3>Office 77, Spaces, Heathrow Airport, 4roundwood avenue, Stockley park , Uxbridge, ub111AF</h3>
					<div class="contact-info">
						<p class="contact-info__item"><i class="mdi mdi-cellphone-android"></i>Phone: 077-899-54362</p>
						<p><i class="mdi mdi-email"></i>info@britishfilmhub.com</p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Services Section End -->
