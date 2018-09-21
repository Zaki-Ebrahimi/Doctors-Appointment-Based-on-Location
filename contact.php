<?php include('include/header.php');?>
<?php $page_name = "<i class='fa fa-phone'> </i> Contact"; ?>
<?php include('include/nav.php');?>

    <!-- Header End --><!-- Start Page Title Section -->
<div class="page-ttl" style="height: 120px">
    <div class="layer-stretch">
        <div class="page-ttl-container">
            <div class="page-ttl-name">
                <h1><i class="fa fa-phone" style="color: #890054"></i> Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Section -->

<!-- Start Contact Detail Section -->
<div class="layer-stretch animated-wrapper">
    <div class="layer-wrapper">

        <div class="row text-center">
             <div class="col-md-3 contact-info-block animated animated-up">
                <div class="contact-info-inner">
                    <i class="fa fa-plus-square-o"></i>
                    <span>APPOINTMENT</span>
                    <p class="paragraph-medium paragraph-black">+ 01 1122 333 333</p>
                    <p>sales@pepdev.com </p>
                </div>
            </div>
             <div class="col-md-3 contact-info-block animated animated-up">
                <div class="contact-info-inner">
                    <i class="fa fa-phone"></i>
                    <span>Call Us</span>
                    <p class="paragraph-medium paragraph-black">+ 01 1122 333 333</p>
                    <p>+ 01 1122 333 333 </p>
                </div>
            </div>
            <div class="col-md-3 contact-info-block animated animated-up">
                <div class="contact-info-inner">
                    <i class="fa fa-envelope"></i>
                    <span>Email Us</span>
                    <p class="paragraph-medium paragraph-black">sales@pepdev.com</p>
                    <p>support@pepdev.com </p>
                </div>
            </div>
            <div class="col-md-3 contact-info-block animated animated-up">
                <div class="contact-info-inner">
                    <i class="fa fa-map-marker"></i>
                    <span>Location</span>
                    <p class="paragraph-medium paragraph-black">Street name, City, Country</p>
                    <p> </p>
                </div>
            </div>
                </div>
    </div>
</div>
<!-- End Contact Detail Section -->
<!-- Start Request Section -->
<div id="contact-form">
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="layer-ttl">
                <h3>Make a Request</h3>
            </div>
            <div class="layer-container">
                <form class="contact-form row" action="http://pepdev.com/theme-preview/klinikal/index.php?route=contact" method="post">
                    <input type="hidden" name="_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
                    <div class="col-md-4">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-user"></i>
                            <input id="contact-name" class="mdl-textfield__input" type="text" name="name" pattern="[A-Z,a-z, ]*" value="">
                            <label class="mdl-textfield__label" for="contact-name">Name</label>
                            <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-envelope-o"></i>
                            <input class="mdl-textfield__input" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="contact-email">
                            <label class="mdl-textfield__label" for="contact-email">Email Address</label>
                            <span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-phone"></i>
                            <input class="mdl-textfield__input" type="text" name="mobile" pattern="[0-9]*" id="contact-mobile">
                            <label class="mdl-textfield__label" for="contact-mobile">Mobile Number</label>
                            <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-rocket"></i>
                            <input class="mdl-textfield__input" type="text" name="subject" id="contact-subject">
                            <label class="mdl-textfield__label" for="contact-subject">Subject</label>
                            <span class="mdl-textfield__error">Please Enter Subject Related to Your Query!</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-paper-plane"></i>
                            <textarea class="mdl-textfield__input" type="text" name="message" id="contact-message"></textarea>
                            <label class="mdl-textfield__label" for="contact-message">Message</label>
                            <span class="mdl-textfield__error">Please Enter Your Query!</span>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button id="contact-submit" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" name="make-request">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Request Section -->

<!-- Start Google Map Section -->
<div id="map" class="animated-wrapper">
    <div class="map-wrapper">
        <div id="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.2959607076423!2d90.35950081457226!3d23.80807258456102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d8dc805301%3A0x62a9945413e7a60d!2sWanderlust+Cafe!5e0!3m2!1sen!2sbd!4v1537553692334" width="1350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="map-address animated animated-up">
        <div class="map-icon">
            <i class="fa fa-map-marker"></i>
        </div>
        <div class="map-address-ttl">Our Location</div>
        <div class="paragraph-medium paragraph-black">Mirpur-2, Dhaka, Bangladesh</div>
    </div>
</div>
<!-- End Google Map Section -->
<!-- Map Block Script -->
<!--<script>-->
<!--    var map;-->
<!---->
<!--    function initMap() {-->
<!--        var loc = {-->
<!--           lat: 18.938936,-->
<!--           lng: 72.824116       };-->
<!--       var isDraggable = !('ontouchstart' in document.documentElement);-->
<!---->
<!--       map = new google.maps.Map(document.getElementById('map-container'), {-->
<!--        center: loc,-->
<!--                zoom: 14, // Map Zoom-->
<!--                draggable: isDraggable,-->
<!--                scrollwheel: false-->
<!--            });-->
<!---->
<!--       var marker = new google.maps.Marker({-->
<!--        position: loc,-->
<!--        map: map-->
<!--    });-->
<!--   }-->
<!--</script>-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB46LtJIWXW_IX_GZVvrR9LCNixR7FvG8A&amp;callback=initMap"></script>-->


<!-- Start Make an Appointment Modal -->
	<div id="appointment" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title">Make An Appointment</h4>
					<div class="appointment-hdr-back"><i class="fa fa-chevron-left"></i></div>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="appointment-form">
						<div class="appointment-part-1">
							<div class="appointment-option">
								<div class="appointment-option-department">
									<i class="fa fa-hospital-o" id="appointment-option-department"></i>
									<span class="mdl-tooltip mdl-tooltip--top" for="appointment-option-department">I Know Department</span>
								</div>
								<div class="appointment-option-doctor">
									<i class="fa fa-user-md" id="appointment-option-doctor"></i>
									<span class="mdl-tooltip mdl-tooltip--top" for="appointment-option-doctor">I Know Doctor</span>
								</div>
							</div>
							<div class="appointment-invisible">
                                <input type="hidden" value="{&quot;id&quot;:1,&quot;name&quot;:&quot;Daniel Barnes&quot;,&quot;department&quot;:2,&quot;weekly&quot;:&quot;[\&quot;3\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-01-18, 2017-01-21, 2017-01-30, 2017-03-27, 2017-03-31\&quot;&quot;}" class="doctor-id-1 department-id-2" >
                                <input type="hidden" value="{&quot;id&quot;:3,&quot;name&quot;:&quot;Melissa Bates&quot;,&quot;department&quot;:1,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;2\&quot;,\&quot;6\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-04-13, 2017-04-14, 2017-04-20, 2017-07-07, 2017-07-08, 2017-07-14\&quot;&quot;}" class="doctor-id-3 department-id-1" >
                                <input type="hidden" value="{&quot;id&quot;:4,&quot;name&quot;:&quot;Cheri Aria&quot;,&quot;department&quot;:3,&quot;weekly&quot;:&quot;[\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-03-07, 2017-03-14, 2017-03-20, 2017-03-26\&quot;&quot;}" class="doctor-id-4 department-id-3" >
                                <input type="hidden" value="{&quot;id&quot;:5,&quot;name&quot;:&quot;Steve Soeren&quot;,&quot;department&quot;:2,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-16, 2017-03-14, 2017-03-17, 2017-03-23, 2017-03-31\&quot;&quot;}" class="doctor-id-5 department-id-2" >
                                <input type="hidden" value="{&quot;id&quot;:6,&quot;name&quot;:&quot;Theodore Bennett&quot;,&quot;department&quot;:4,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-02-15, 2017-02-16, 2017-03-07, 2017-03-15, 2017-03-23, 2017-03-31\&quot;&quot;}" class="doctor-id-6 department-id-4" >
                                <input type="hidden" value="{&quot;id&quot;:7,&quot;name&quot;:&quot;Barbara Baker&quot;,&quot;department&quot;:2,&quot;weekly&quot;:&quot;[\&quot;1\&quot;,\&quot;5\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-08, 2017-06-20, 2017-06-28, 2017-06-29\&quot;&quot;}" class="doctor-id-7 department-id-2" >
                                <input type="hidden" value="{&quot;id&quot;:8,&quot;name&quot;:&quot;Linda Adams&quot;,&quot;department&quot;:1,&quot;weekly&quot;:&quot;[\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25, 2017-06-16, 2017-06-21, 2017-06-26, 2017-07-11, 2017-07-14, 2017-07-20, 2017-07-31\&quot;&quot;}" class="doctor-id-8 department-id-1" >
                                <input type="hidden" value="{&quot;id&quot;:10,&quot;name&quot;:&quot;Vedhraj Jain&quot;,&quot;department&quot;:5,&quot;weekly&quot;:&quot;[\&quot;6\&quot;,\&quot;0\&quot;]&quot;,&quot;national&quot;:&quot;\&quot;2000-12-25\&quot;&quot;}" class="doctor-id-10 department-id-5" >
                            </div>
							<input type="hidden" name="appointment_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
							<div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label appointment-input">
								<select class="mdl-selectfield__select" id="appointment-department" name="department">
									<option value=""></option>
                                        <option value="1">Gynaecology</option>
                                        <option value="2">Orthology</option>
                                        <option value="3">Dermatologist</option>
                                        <option value="4">Anaesthesia</option>
                                        <option value="5">Ayurvedic</option>
                                    </select>
								<label class="mdl-selectfield__label" for="appointment-department">Choose Department <em>*</em></label>
							</div>
							<div id="appointment-doctor-wrapper" class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label appointment-input">
								<select class="mdl-selectfield__select" id="appointment-doctor" name="doctor">
									<option value=""></option>
								</select>
								<label class="mdl-selectfield__label" for="appointment-doctor">Choose Doctor <em>*</em></label>
							</div>
							<div class="or-label">OR</div>
							<div id="search-doctor" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ui-widget appointment-input">
								<label class="mdl-textfield__label" for="appointment-search-doctor">I Know Doctor <em>*</em></label>
								<input class="mdl-textfield__input" type="text" value="" id="appointment-search-doctor">
							</div>
							<div id="appointment-date-wrapper" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input">
								<input class="mdl-textfield__input" type="text" value="" id="appointment-date" readonly>
								<label class="mdl-textfield__label" for="appointment-date">Choose Date <em>*</em></label>
							</div>
							<div class="appointment-slot">
								<p>Choose Time Slot</p>
							</div>
							<div class="appointment-button">
								<button id="appointment-continue" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" disabled>Continue</button>
							</div>
						</div>
						<div class="appointment-loading">
							<div class="appointment-loading-gif"></div>
						</div>
						<div class="appointment-part-2">
							<div class="appointment-enterd-value"></div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input">
								<input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" value="" id="appointment-name">
								<label class="mdl-textfield__label" for="appointment-name">Name <em>*</em></label>
								<span class="mdl-textfield__error">Please Enter Valid Name!</span>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input">
								<input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="" id="appointment-email">
								<label class="mdl-textfield__label" for="appointment-email">Email Address <em>*</em></label>
								<span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label appointment-input">
								<input class="mdl-textfield__input" type="text" pattern="[0-9]*" value="" id="appointment-mobile">
								<label class="mdl-textfield__label" for="appointment-mobile">Mobile Number <em>*</em></label>
								<span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
							</div>
							<div class="appointment-button">
								<button id="appointment-submit" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill">Finish</button>
							</div>
						</div>
						<div class="appointment-success">
							<p class="paragraph-medium">Hello <span id="appointment-success-name"></span></p>
							<p class="appointment-success-descr paragraph-medium">
								Your appointment for <span id="appointment-success-date"></span> at <span id="appointment-success-time"></span> 
								has been booked.							</p>
							<div class="appointment-mail-icon"><i class="fa fa-envelope-o"></i></div>
							<p class="paragraph-medium paragraph-black">For more information visit your mail box.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- End Make an Appointment Section -->
    <?php include('include/footer.php');?>
<script>

    $('#page>a').addClass('active');
</script>