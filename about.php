<!DOCTYPE html>
<html lang="en">
<head>
	<!-- TODO: Change routes to correct location when in production -->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="publisher" content="James Hoover"/>	<!-- Credit to the developer of the website -->
	<!-- LINK stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="file:///Users/james/Documents/Web/206tutoring/stylesheets/abc-reset.css">
	<link rel="stylesheet" type="text/css" href="file:///Users/james/Documents/Web/206tutoring/stylesheets/style.css">
	<title>206Tutoring - About</title>
</head>
<!-- START BODY -->
<body>
	<!-- START HEADER -->
	<header class="about-header">
		<div class="full-row grad">
			<section class="top-nav row">
				<a href="file:///Users/james/Documents/Web/206tutoring/home.html" class="nav-logo pull first" title="Home">206 <span class="subtext-light">tutoring</span></a>
				<a href="" class="nav-btn btn-orange btn-contact push"><img src="file:///Users/james/Documents/Web/206tutoring/assets/home_page/contact_envelope_icon.png" alt="contact">CONTACT US</a>
				<!-- START NAV -->
				<nav>
					<ul class="nav-link-list">
						<li><a href="" class="nav-link">SERVICES</a></li>
						<li><a href="file:///Users/james/Documents/Web/206tutoring/about.html" class="nav-link">ABOUT ME</a></li>
						<li><a href="file:///Users/james/Documents/Web/206tutoring/blog.html" class="nav-link">BLOG</a></li>
						<li><a href="" class="nav-link">CALENDAR</a></li>
					</ul>
				</nav>
			</section>
		</div>
	</header><!-- END HEADER -->
	<section class="about-content half-row">
		<article class="about-article">
			<h1>About Us</h1>
			<p>I also teach lessons in piano. If you have always wanted to make that leap and take your musical skills to the next level, im the guy that will get you there. I am acredited by the seattle music association and can help any skill level. I also teach lessons in piano. If you have always wanted to make that leap and take your musical skills to the next level, im the guy that will get you there. I am acredited by the seattle music association and can help any skill level. I also teach lessons in piano. If you have always wanted to make that leap and take your musical skills to the next level, im the guy that will get you there. I am acredited by the seattle music association and can help any skill level.</p>
			<p>I also teach lessons in piano. If you have always wanted to make that leap and take your musical skills to the next level, im the guy that will get you there. I am acredited by the seattle music association and can help any skill level. I also teach lessons in piano. If you have always wanted to make that leap and take your musical skills to the next level, im the guy that will get you there. I am acredited by the seattle music association and can help any skill level. I also teach lessons in piano. If you have always wanted to make that leap and take your musical skills to the next level, im the guy that will get you there. I am acredited by the seattle music association and can help any skill level.</p>
		</article>
		<article class="about-article">
			<h1>Our Teachers</h1>
			<p>Our professional teachers that would love to help you succeed. Our professional teachers that would love to help you succeed. Our professional teachers that would love to help you succeed.</p>
			<section class="row">
				<div class="one-third first">
					<img src="file:///Users/james/Documents/Web/206tutoring/images/cml-portrait.png" alt="CML Portrait">
				</div>
				<div class="one-third">
					<img src="file:///Users/james/Documents/Web/206tutoring/images/cml-portrait.png" alt="CML Portrait">
				</div>
				<div class="one-third">
					<img src="file:///Users/james/Documents/Web/206tutoring/images/cml-portrait.png" alt="CML Portrait">
				</div>
			</section>
		</article>
		<article class="about-article">
			<h1>Get in touch</h1>
			<?php 
				if (isset($_REQUEST['submitted'])) {
				// Initialize error array.
				  $errors = array();
				  // Check for a proper First name
				  if (!empty($_REQUEST['name'])) {
				  $name = $_REQUEST['name'];
				  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
				  if (preg_match($pattern,$name)){ $name = $_REQUEST['name'];}
				  else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-25 long.';}
				  } else {$errors[] = 'You forgot to enter your Name.';}
				  
				  //Check for a valid email
				  if (!empty($_REQUEST['email'])) {
				  $email = $_REQUEST['email'];
				  $pattern = "/^[a-zA-Z0-9\_.@]{6,40}/";
				  if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
				  else{ $errors[] = 'Your email was not formatted corretly.';}
				  } else {$errors[] = 'You forgot to enter your email.';}

				  //Check for a valid phone number
				  if (!empty($_REQUEST['phone'])) {
				  $phone = $_REQUEST['phone'];
				  $pattern = "/^[0-9\_]{7,20}/";
				  if (preg_match($pattern,$phone)){ $phone = $_REQUEST['phone'];}
				  else{ $errors[] = 'Your Phone number can only be numbers.';}
				  } else {$errors[] = 'You forgot to enter your Phone number.';}
				  
				  // Check for a message
				  if (!empty($_REQUEST['message'])) {
				  $message = $_REQUEST['message'];
				  $pattern = "/^[a-zA-Z0-9\:punct:]{1,500}/";// This is a regular expression that checks if the message is valid characters
				  if (preg_match($pattern,$message)){ $message = $_REQUEST['message'];}
				  else{ $errors[] = 'Your message can only contain numbers, letters, standard punctuation, and be 1-500 characters long.';}
				  } else {$errors[] = 'You forgot to enter a message.';}
				  
				  }
				  //End of validation 

				  if (isset($_REQUEST['submitted'])) {
					  if (empty($errors)) { 
						  $from = "From: 206Tutoring"; //Site name
						  // Change this to your email address you want to form sent to
						  $to = "jamesfhoover@gmail.com"; 
						  $subject = "Admin - 206Tutoring! Message from " . $name . "";
						  
						  $body = "Message from " . $name . " ". "
						  Email: " . $email . " ". "
						  Phone: " . $phone . " ". "
						  Message: " . $message . ""; 
						  mail($to,$subject,$body,$from);
					  }
					}
				?>

				<?php 
				  //Print Errors
				  if (isset($_REQUEST['submitted'])) {
				  // Print any error messages. 
				  if (!empty($errors)) { 
				  echo '<hr /><h3>The following occurred:</h3><ul>'; 
				  // Print each error. 
				  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
				  echo '</ul><h3>Your mail could not be sent due to input errors.</h3><hr />';}
				   else{echo '<hr /><h3 align="center">Thank you for your message!</h3><hr />'; 
				  }
				  }
				//End of errors array
			?>
			<section class="contact-form">
			  <form action="" method="post">
			    <label>Name:</label>
			    <input name="name" type="text" value="" placeholder="Name..." class="input-box"/>
			    <label>Email:</label>
			    <input name="email" type="email" value="" placeholder="Email..." class="input-box"/>
			    <label>Phone Number:</label>
			    <input name="phone" type="tel" value="" placeholder="Phone..." class="input-box"/>
			    <label>Message:</label>
			    <textarea name="message" type="text" value="" placeholder="Message..."></textarea>
			    <input name="submitted" type="submit" value="Send Message" class="btn-orange btn-submit"/>
			  </form>
			</section>
			<h2 class="prominent">206 Tutoring</h2>
			<h2>1234 Fake St.</h2>
			<h2>Seattle, WA 98123</h2	>
		</article>
	</section>
	<section class="schedule-block full-row">
		<h1>Want to know how we can help you?</h1>
		<h2>Contact us for a free 30 minute consultation.</h2>
		<a href="" class="btn-orange">Schedule Appointment</a>
	</section>
	<!-- START FOOTER -->
	<footer>
		<section class="row">
			<article class="footer-logo pull first">
				<h1>206 <span class="subtext-dark">tutoring</span></h1>
				<h3>&copy;206 Tutoring</h3>
			</article>
			<article class="footer-contact push">
				<h3>(206) 555-1234</h3>
				<h3>206tutoring@gmail.com</h3>
			</article>
		</section>
	</footer><!-- END FOOTER -->
</body><!-- END BODY -->