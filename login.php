<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta name="Description" content="">
    <!-- <link rel="icon" type="image/x-icon" href="public/uploads/favicon-blue-32x32.png" /> -->
    <link rel="icon" type="image/x-icon" href="public/uploads/favicon-purple-32x32.png" />
    <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,500">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/material.min.css" />
    <link rel="stylesheet" href="public/css/mdl-selectfield.min.css">
    <link rel="stylesheet" href="public/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="public/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="public/css/owl.theme.default.css" />
    <link rel="stylesheet" href="public/css/animate.min.css" />
    <link rel="stylesheet" href="public/css/magnific-popup.css" />
    <link rel="stylesheet" href="public/css/flexslider.css" />
    <!-- <link rel="stylesheet" href="public/css/style-blue.min.css"> -->
    <link rel="stylesheet" href="public/css/style-purple.min.css">
    <!-- <link rel="stylesheet" href="public/css/style.css"> -->
    <script src="public/js/time.js"></script>
</head>
<body onload="startTime()">
    <!-- Header Start -->
    <header id="header">
        <div id="hdr-top-wrapper">
            <div class="layer-stretch hdr-top">
                <div class="hdr-top-block hidden-xs">
                    <div id="hdr-social">
                        <ul class="social-list social-list-sm">
                            <li><a class="width-auto font-13">Follow Us : </a></li>
                            <li><a href="" target="_blank" id="hdr-facebook" ><i class="fa fa-facebook" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-facebook">Facebook</span></li>
                            <li><a href="" target="_blank" id="hdr-twitter" ><i class="fa fa-twitter" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-twitter">Twitter</span></li>
                            <li><a href="" target="_blank" id="hdr-instagram" ><i class="fa fa-instagram" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-instagram">Instagram</span></li>
                            <li><a href="" target="_blank" id="hdr-linkedin" ><i class="fa fa-linkedin" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" for="hdr-instagram">Instagram</span></li>
                        </ul>
                    </div>
                </div>
                <div class="hdr-top-line hidden-xs"></div>
                <div class="hdr-top-block hdr-number">
                    <div class="text-center" id="time" style="color: #0100de;font-size: 20px;width: 100px;"></div>
                </div>
                <div class="hdr-top-line"></div>
                <div class="hdr-top-block">
                    <div class="theme-dropdown">
                        <a id="profile-menu" class="mdl-button mdl-js-button mdl-js-ripple-effect font-13">
                            <i class="fa fa-user-o color-black"></i> My Account                        </a>
                        <ul id="hdr-user-menu-dd" class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="profile-menu">
                            <li class="mdl-menu__item">
                                <a href="login.php"><i class="fa fa-sign-in"></i>Login</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="register.php"><i class="fa fa-user-o"></i>Register</a>
                            </li>
                            <li class="mdl-menu__item">
                                <a href="forget_pass.php"><i class="fa fa-key"></i>Forgot Password</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="hdr-wrapper">
            <div class="layer-stretch hdr">
<!--                <div class="tbl-cell hdr-logo">-->
<!--                <a href="index2378.html?route=home">-->
<!--                <img src="public/uploads/logo-purple.png" alt="Klinikal Health care">--}}-->
<!--                </a>-->
<!--                </div>-->

                <div class="row align-items-center justify-content-end">
                    <a href="index.php" style="padding-left: 60px" class="text-primary"><h1>Choose Your Doctor</h1></a>

                    <!-- Start Menu Section -->
                    <ul class="col menu">
                        <li>
                            <a href="index.php" id="" class="mdl-button mdl-js-button mdl-js-ripple-effect">Home</a>
                        </li>
                        <li><a href="service.php" id="menu-service" class="mdl-button mdl-js-button mdl-js-ripple-effect">Our Service</a></li>
                        <li><a href="doctors.php" id="menu-doctor" class="mdl-button mdl-js-button mdl-js-ripple-effect">Doctors</a></li>
                        <li>
                            <a id="menu-pages" class="mdl-button mdl-js-button mdl-js-ripple-effect">Pages <i class="fa fa-chevron-down"></i></a>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-pages">
                                <li class="mdl-menu__item">
                                    <a href="about.php">About</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="contact.php">Contact</a>
                                </li>
								<li class="mdl-menu__item">
									<a href="gallery.php">Gallery</a>
								</li>
                            </ul>
                        </li>
                        <li><a href="admin/index.php" id="menu-admin" class="text-success mdl-button mdl-js-button mdl-js-ripple-effect ">Admin Panel</a></li>
                        <li>
                            <a id="menu-profile" class="mdl-button mdl-js-button mdl-js-ripple-effect active"><i class="fa fa-user-o color-white "> </i> Profile <i class="fa fa-chevron-down"></i></a>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-profile">
                                <li class="mdl-menu__item">
                                    <a href="login.php"><i class="fa fa-sign-in color-green"></i> Login</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="register.php"><i class="fa fa-user-o color-green"></i> Register</a>
                                </li>
                                <li class="mdl-menu__item">
                                    <a href="forget_pass.php"><i class="fa fa-key color-green"></i> Forgot Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mobile-menu-close"><i class="fa fa-times"></i></li>
                    </ul>
                    <div id="menu-bar" class="col-2 col-md-auto"><a><i class="fa fa-bars color-white"></i></a></div>
                </div>

            </div>
        </div>
    </header>
    <!-- Header End --><!-- Start page Title Section -->
<div class="page-ttl">
    <div class="layer-stretch">
        <div class="page-ttl-container">
            <div class="page-ttl-icon">
                <i class="fa fa-sign-in"></i>
            </div>
            <div class="page-ttl-name">
                <h1>Login</h1>
                <p><a href="login.php">Home</a> > Login</p>
            </div>
        </div>
    </div>
</div>
<!-- End page Title Section -->
<!-- Start Login Section -->
<div id="login-page">
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="layer-container">
                <form class="form-container" action="include/verify_user.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-envelope-o"></i>
                        <input class="mdl-textfield__input" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="login-email">
                        <label class="mdl-textfield__label" for="login-email">Email Address <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-key"></i>
                        <input class="mdl-textfield__input" type="password" name="password" id="login-password">
                        <label class="mdl-textfield__label" for="login-password">Password <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                        <a href="forget_pass.php" class="forgot-pass">Forgot Password?</a>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon form-bot-check">
                        <i class="fa fa-question"></i>
                        <input class="mdl-textfield__input" type="number" name="bot-check" id="login-bot">

                        <input type="hidden" name="n" value="<?php echo $n=rand(1,10); ?>">
                        <input type="hidden" name="m" value="<?php echo $m=rand(10,20); ?>">

                        <label class="mdl-textfield__label" for="login-bot">What is <?php echo $n; ?> plus <?php echo $m; ?> = <em> *</em></label>
                        <span class="mdl-textfield__error">Please Enter Correct Value!</span>
                    </div>
                    <div class="form-submit">
                        <button type="submit" name="login" id="login-submit" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill">Login</button>
                    </div>
                    <div class="login-link">
                        <span class="paragraph-small">Don't have an account?</span>
                        <a href="register.php">Register as New User</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Login Section -->

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
	<!-- Start of Time Table Section -->
<!--	<div id="tt" class="animated-wrapper">-->
<!--		<div class="layer-stretch">-->
<!--			<div class="layer-wrapper">-->
<!--				<div class="layer-ttl">-->
<!--					<h3 class="animated animated-down">Our Time Table</h3>-->
<!--				</div>-->
<!--				<div class="layer-container">-->
<!--										<div class="tt-block animated animated-up">-->
<!--						<p><i class="fa fa-calendar"></i><a>Sun</a></p>-->
<!--						<p>-->
<!--							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 01:00 PM</a>-->
<!--						</p>-->
<!--						<p>-->
<!--							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>-->
<!--						</p>-->
<!--					</div>-->
<!--										<div class="tt-block animated animated-up">-->
<!--						<p><i class="fa fa-calendar"></i><a>Mon</a></p>-->
<!--						<p>-->
<!--							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>-->
<!--						</p>-->
<!--						<p>-->
<!--							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>-->
<!--						</p>-->
<!--					</div>-->
<!--										<div class="tt-block animated animated-up">-->
<!--						<p><i class="fa fa-calendar"></i><a>Tue</a></p>-->
<!--						<p>-->
<!--							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>-->
<!--						</p>-->
<!--						<p>-->
<!--							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>-->
<!--						</p>-->
<!--					</div>-->
<!--										<div class="tt-block animated animated-up">-->
<!--						<p><i class="fa fa-calendar"></i><a>Wed</a></p>-->
<!--						<p>-->
<!--							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>-->
<!--						</p>-->
<!--						<p>-->
<!--							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>-->
<!--						</p>-->
<!--					</div>-->
<!--										<div class="tt-block animated animated-up">-->
<!--						<p><i class="fa fa-calendar"></i><a>Thu</a></p>-->
<!--						<p>-->
<!--							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>-->
<!--						</p>-->
<!--						<p>-->
<!--							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>-->
<!--						</p>-->
<!--					</div>-->
<!--										<div class="tt-block animated animated-up">-->
<!--						<p><i class="fa fa-calendar"></i><a>Fri</a></p>-->
<!--						<p>-->
<!--							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>-->
<!--						</p>-->
<!--						<p>-->
<!--							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>-->
<!--						</p>-->
<!--					</div>-->
<!--										<div class="tt-block animated animated-up">-->
<!--						<p><i class="fa fa-calendar"></i><a>Sat</a></p>-->
<!--						<p>-->
<!--							<i class="fa fa-hourglass-1"></i><a>09:00 AM - 05:00 PM</a>-->
<!--						</p>-->
<!--						<p>-->
<!--							<button class="mdl-button mdl-js-button mdl-js-ripple-effect">Make An Appointment</button>-->
<!--						</p>-->
<!--					</div>-->
<!--									</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div><!-- End of Time Table Section -->-->

    <div id="appointment-button">
        <button id="appointment-now" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-button--raised animated slideInUp"><i class="fa fa-plus"></i></button>
        <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="appointment-now">Make An Appointment</div>
    </div><!-- End Fixed Appointment Bottom Button -->
    <!-- Start of Footer Section -->
    <footer id="footer">
        <div class="layer-stretch">
            <div class="row layer-wrapper">
                <div class="col-md-4 footer-block">
                    <div class="footer-ttl">
                        <p>Basic Info</p>
                    </div>
                    <div class="footer-container footer-a">
                        <div class="tbl">
                            <div class="tbl-row">
                                <div class="tbl-cell"><i class="fa fa-map-marker"></i></div>
                                <div class="tbl-cell">
                                    <p class="paragraph-medium paragraph-white">
                                        House # 56, Road # 7
                                        Dhanmondi,Dhaka-1209
                                        Bangladesh
                                    </p>
                                </div>
                            </div>
                            <div class="tbl-row">
                                <div class="tbl-cell"><i class="fa fa-phone"></i></div>
                                <div class="tbl-cell">
                                    <p class="paragraph-medium paragraph-white">11122333333</p>
                                </div>
                            </div>
                            <div class="tbl-row">
                                <div class="tbl-cell"><i class="fa fa-envelope"></i></div>
                                <div class="tbl-cell">
                                    <p class="paragraph-medium paragraph-white">support@get.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-block">
                    <div class="footer-ttl">
                        <p>Quick Links</p>
                    </div>
                    <div class="footer-container footer-b">
                        <div class="tbl">
                            <div class="tbl-row">
                                <ul class="tbl-cell">
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="indexf419.html?route=privacy-policy">Privacy policy</a></li>
                                    <li><a href="index91ac.html?route=terms-condition">Terms condition</a></li>
                                </ul>
                                <ul class="tbl-cell">
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                    <li><a href="forget_pass.php">Forgot Password</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 footer-block">
                    <div class="footer-ttl">
                        <p>Newsletter</p>
                    </div>
                    <div class="footer-container footer-c">
                        <div class="footer-subscribe">
                            <form action="" method="post">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                    <input class="mdl-textfield__input" name="email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="subscribe-email">
                                    <label class="mdl-textfield__label" for="subscribe-email">Email Address</label>
                                    <span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
                                </div>
                                <div class="footer-subscribe-button">
                                    <button type="submit" id="subscribe-submit" name="subscribe" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="social-list social-list-colored footer-social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/doctors" target="_blank" id="footer-facebook" class="fa fa-facebook"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" for="footer-facebook">Facebook</span>
                                </li>
                                <li>
                                    <a href="https://twitter.com/doctors" target="_blank" id="footer-twitter" class="fa fa-twitter"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" for="footer-twitter">Twitter</span>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/11082396103134563625" target="_blank" id="footer-google" class="fa fa-google"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" for="footer-google">Google</span>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/doctors/" target="_blank" id="footer-instagram" class="fa fa-instagram"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" for="footer-instagram">Instagram</span>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank" id="footer-linkedin" class="fa fa-linkedin"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" for="footer-linkedin">Linkedin</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start of Copyright Section -->
        <div id="copyright">
            <div class="layer-stretch">
                <div class="paragraph-medium paragraph-white">
                    2018 © ALL RIGHTS RESERVED.				</div>
            </div>
        </div><!-- End of Copyright Section -->
    </footer><!-- End of Footer Section -->

    <!-- Included Scripts -->
    <script src="public/js/jquery-2.1.4.min.js"></script>
    <script src="public/js/jquery-ui.min.js"></script>
    <script src="public/js/material.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.flexslider.min.js"></script>
    <script src="public/js/mdl-selectfield.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/datatables.min.js"></script>
    <script src="public/js/jquery-scrolltofixed.min.js"></script>
    <script src="public/js/jquery.magnific-popup.min.js"></script>
    <script src="public/js/jquery.waypoints.min.js"></script>
    <script src="public/js/smoothscroll.min.js"></script>
    <script src="public/js/custom.js"></script>
    <script>$('#menu-login').addClass('active');</script>	<!-- Custom Css -->
    <style></style>
    <script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-93901876-1', 'auto');
        ga('send', 'pageview');</script>

    <!-- Included Scripts -->
</body>
</html>

