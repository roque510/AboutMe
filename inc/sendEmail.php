<?php

// Replace this with your own email address
$siteOwnersEmail = 're.enter.rupok@gmail.com';

if($_POST) {

	$name = trim(stripslashes($_POST['contactName']));
	$email = trim(stripslashes($_POST['contactEmail']));
	$subject = trim(stripslashes($_POST['contactSubject']));
	$contact_message = trim(stripslashes($_POST['contactMessage']));
	$error = array();

	// Check Name
	if (strlen($name) < 2) {
		$error['name'] = "Please enter your name.";
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Please enter a valid email address.";
	}
	// Check Message
	if (strlen($contact_message) < 15) {
		$error['message'] = "Your message should have at least 15 characters.";
	}
	// Subject
	if ($subject == '') {
		$subject = "Contact Form Submission";
	}


	// Set Message
	$message = "Email from: " . $name . "<br />";
	$message .= "Email address: " . $email . "<br />";
	$message .= "Message: <br />";
	$message .= $contact_message;
	$message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";

	// Set From: header
	$from =  $name . " <" . $email . ">";

	// Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


	if ( empty($error) ) {

		ini_set("sendmail_from", $siteOwnersEmail); // for windows server
		$mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) {
			$error['OK'] = "done";
			echo json_encode($error);
		} else {
			$error['sending'] = "Something went wrong. Please try again.";
			echo json_encode($error);
		}

	} # end if - no validation error

	else {

		echo json_encode($error);

	} # end else - there was a validation error

}

?>


<!-- Testimonial Section end -->
    <section id="testimonial" class="scroll-section root-sec brand-bg padd-tb-120 testimonial-wrap">
      <div class="container">
        <div class="row">
          <div class="testimonial-inner">
            <div class="col-sm-12 col-md-10 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head testimonial-text">
                  <div class="col-sm-12">
                    <h2 class="title">testimonial</h2>
                    <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="overflow-hidden">
                    <div class="row">
                      <div id="testimonialSlider" class="clearfix card-element-wrapper">
                        <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/avatar.png" alt="">
                                <p class="saying-about">Amazing theme, amazing code and especially amazing support! I Really love your work.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Jonh Smith -</span>
                              <a href="#">CEO, Apple Inc</a>
                            </div>
                          </div>
                        </div> <!-- ./single testimonial box -->
                        <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/avatar.png" alt="">
                                <p class="saying-about">Amazing theme, amazing code and especially amazing support! I Really love your work.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Jonh Smith -</span>
                              <a href="#">CEO, Apple Inc</a>
                            </div>
                          </div>
                        </div> <!-- ./single testimonial box -->
                        <div class="col-sm-6 single-card-box">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/avatar.png" alt="">
                                <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Jonh Smith -</span>
                              <a href="#">CEO, Apple Inc</a>
                            </div>
                          </div>
                        </div> <!-- ./single testimonial box -->
                        <div class="col-sm-6 single-card-box">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/avatar.png" alt="">
                                <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Jonh Smith -</span>
                              <a href="#">CEO, Apple Inc</a>
                            </div>
                          </div>
                        </div> <!-- ./single testimonial box -->
                        <div class="col-sm-6 single-card-box">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/avatar.png" alt="">
                                <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Jonh Smith -</span>
                              <a href="#">CEO, Apple Inc</a>
                            </div>
                          </div>
                        </div> <!-- ./single testimonial box -->
                      </div > <!-- #testimonialSlider end -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-wrapp tmo-ctrl">
              <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
              <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
            </div>
          </div>
        </div>
      </div> <!-- ./container end -->
    </section>
    <!-- #testimonial Section end -->