<?php include('include/header.php');?>
<?php
require ('class/patients.php');
$page_name = "<i class='fa fa-registered'></i> Registration <span style='font-size: 18px;'> >>Patient </span> ";

?>
<?php include('include/nav.php');?>

    <h2 class="text-center text-success" style="font-family: SansSerif;">Please Enter Your Valid Information</h2>
    <div id="login-page">
        <div class="layer-stretch" >
            <div class="layer-wrapper" style="background-color: #66bb6a">
                <div class="layer-container " >
                    <form class="form-container" action="include/function.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="15276e55e6cdfa6911f440f75f64501dc97cc6f4a19102dddb4c47f0c4dd1523ad639943996afef209d6a358056f3b3389a9bcb175b7413ef3547589673a2b7d">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-user-o"></i>
                            <input class="mdl-textfield__input" type="text" name="firstname" pattern="[A-Z,a-z, ]*" id="register-first-name">
                            <label class="mdl-textfield__label" for="register-first-name">First Name <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-user-o"></i>
                            <input class="mdl-textfield__input" type="text" name="lastname" pattern="[A-Z,a-z, ]*" id="register-last-name">
                            <label class="mdl-textfield__label" for="register-last-name">Last Name <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-envelope-o"></i>
                            <input class="mdl-textfield__input" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="register-email">
                            <label class="mdl-textfield__label" for="register-email">Email Address <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-location-arrow"></i>
                            <label for="location">Location : </label>
                            <select name="location" id="location" class="form-input" >
                                <option value="" class="">Select Your Location</option>
                                <?php
                                $pdo = new PDO("mysql:host=localhost;dbname=doctors",'root','');
                                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

                                $sql = "SELECT * FROM locations ORDER BY name ASC ";
                                $result = $pdo->prepare($sql);
                                $result->execute();
                                $locations = $result->fetchAll(); // default value PDO::FETCH_obj

                                foreach ($locations as $location) {
                                    ?>
                                    <option class="text-capitalize" value="<?php echo $location->location_id; ?>"><?php echo $location->name; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-plus-circle"></i>
                            <label for="blood">Blood Group :</label>
                            <select name="blood" id="location" class="form-input" >
                                <option value="">Select Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>

                            </select>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-phone"></i>
                            <input class="mdl-textfield__input" type="text" name="mobile" pattern="[0-9]*" id="register-mobile">
                            <label class="mdl-textfield__label" for="register-mobile">Mobile Number <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                        </div>

                        <div class="row form-input">
                            <div class="col-md-4">
                                <label for=""><span></span><p class="text-info"><i class="fa fa-intersex text-success"> </i><b>  Gender : </b></p> </label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="gender" value="Male" id="gender-male" class="mdl-radio__outer-circle">
                                <label for="gender-male"><span></span><p><i class="fa fa-mars"></i> Male </p></label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="gender" value="Female" id="gender-female" class="mdl-radio__outer-circle">
                                <label for="gender-female"><span></span><p><i class="fa fa-venus"></i> Female </p></label>
                            </div>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-key"></i>
                            <input class="mdl-textfield__input" type="text" name="username" id="register-username">
                            <label class="mdl-textfield__label" for="register-password">Username <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Username(Min 6 Character)!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-key"></i>
                            <input class="mdl-textfield__input" type="password" name="password" id="register-password">
                            <label class="mdl-textfield__label" for="register-password">Password <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-key"></i>
                            <input class="mdl-textfield__input" type="password" name="confirmpassword" id="register-confirm-password">
                            <label class="mdl-textfield__label" for="register-confirm-password">Confirm Password <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon form-bot-check">
                            <i class="fa fa-question"></i>
                            <input class="mdl-textfield__input" type="number" name="bot-check" id="register-bot">
                            <?php
                            $a = rand(1,10);
                            $b = rand(10,20);
                            ?>
                            <label class="mdl-textfield__label" for="register-bot">What is <?php echo $a;?> plus <?php echo $b;?> = <em> *</em></label>
                            <span class="mdl-textfield__error">Please Enter Correct Value!</span>
                        </div>
                        <div class="login-condition">By clicking Creat Account you aggree to our<br /><a href="about.php">Terms & Condition</a></div>
                        <div class="form-submit">
                            <button type="submit" id="register-submit" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised mdl-button--raised button button-primary button-pill" name="register">Create Account</button>
                        </div>
                        <div class="login-link">
                            <span class="paragraph-small">Already have an account?</span>
                            <a href="login.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>
            <!--        <form action="">-->
            <!--            <div class="row ">-->
            <!--                <div class="col-md-6">-->
            <!--                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">-->
            <!--                        <i class="fa fa-user-o"></i>-->
            <!--                        <input class="mdl-textfield__input" type="text" name="firstname" pattern="[A-Z,a-z, ]*" id="register-first-name">-->
            <!--                        <label class="mdl-textfield__label" for="register-first-name">First Name <em> *</em></label>-->
            <!--                        <span class="mdl-textfield__error">Please Enter Valid Name!</span>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="col-md-6">-->
            <!---->
            <!--                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">-->
            <!--                            <i class="fa fa-user-o"></i>-->
            <!--                            <input class="mdl-textfield__input" type="text" name="firstname" pattern="[A-Z,a-z, ]*" id="register-first-name">-->
            <!--                            <label class="mdl-textfield__label" for="register-first-name">First Name <em> *</em></label>-->
            <!--                            <span class="mdl-textfield__error">Please Enter Valid Name!</span>-->
            <!--                        </div>-->
            <!---->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </form>-->


        </div>
    </div>
    <!-- End Register Section -->
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