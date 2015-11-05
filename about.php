<!DOCTYPE html>
<html lang="en">
<head>
	<!-- TODO: Change routes to correct location when in production -->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="publisher" content="James Hoover"/>
	<!-- LINK stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/stylesheets/abc-reset.css">
	<link rel="stylesheet" type="text/css" href="/stylesheets/style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<title>206Tutoring - About</title>
</head>
<!-- START BODY -->
<body>
	<!-- START HEADER -->
	<header class="about-header">
		<div class="full-row grad">
			<section class="top-nav row">
				<a href="/home.php" class="nav-logo pull first" title="Home">206 <span class="subtext-light">tutoring</span></a>
				<a href="/about.php#contact-form" class="nav-btn btn-orange btn-contact push">CONTACT US</a>
				<!-- START NAV -->
				<nav>
					<ul class="nav-link-list">
						<li><a href="/test_prep.html" class="nav-link">TEST PREP</a></li>
						<li><a href="/tutoring.html" class="nav-link">TUTORING</a></li>
						<li><a href="/music.html" class="nav-link">Music Lessons</a></li>
						<li><a href="/about.php" class="nav-link">ABOUT</a></li>
						<li><a href="/blog.php" class="nav-link">BLOG</a></li>
					</ul>
				</nav>
			</section>
		</div>
	</header><!-- END HEADER -->
	<section class="about-content half-row">
		<article class="about-article">
			<h1>About Chris Morris-Lent</h1>
			<p>I grew up in Seattle, attending public schools from kindergarten onward, and graduating from Garfield High School in 2006. I have a B.A. from Columbia in English literature. I’ve been tutoring since 2007 and have also worked as a writer, an editor, a researcher, a poker player, and a software tester.</p>
		</article>
		<article class="about-article">
			<h1>Mission Statement</h1>
			<p>The approach to education in 21st-century America results too often in anxiety, frustration and stress. Too many tutors exacerbate these stresses by promoting or profiting from a high-stakes environment: assigning homework or worksheets of their own, demanding the wrong things of their students, or otherwise misunderstanding their role.</p>
			<p class="italic">The way we see it, our job is the opposite of that.</p>
			<p>206 Tutoring exists because we want to work against the worst aspects of school (and music lessons), and embody the best ones.</p>
			<p>We teach to make learning more worthwhile and more fun for our students.</p>
			<p>We tutor to <span class="italic">relieve</span> anxiety and frustration and stress.</p>
			<p>We tutor to help my students spend <span class="italic">less</span> time on homework, and more time on the things they love to do.</p>
			<p>We promote a relaxing and comfortable environment. We encourage our students to ask questions about the material and their interests. We cultivate a disposition for curiosity.</p>
			<p>Working with 206 Tutoring, students feel like themselves, can put each difficulty in the right context, and focus on solving it.</p>
			<p></p>
		</article>
		<article class="about-article">
			<h1>Our Instructors</h1>
			<section class="row">
				<div class="teahcer one-third first">
					<img src="/assets/about/Teacher_1.png" alt="Teacher1" class="teacher-img">
				</div>
				<div class="teacher one-third">
					<img src="/assets/about/Teacher_2.png" alt="Teacher2" class="teacher-img">
				</div>
				<div class="teacher one-third">
					<img src="/assets/about/Teacher_3.png" alt="Teacher3" class="teacher-img">
				</div>
			</section>
		</article>
		<a name="contact-form"></a>
		<article class="about-article get-intouch">
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
						  $to = "itscml@gmail.com";
						  $subject = "Admin - 206Tutoring - CONTACT FORM: Message from " . $name . "";
						  
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
				  echo '<hr /><h3 class="error">The following occurred:</h3><ul>'; 
				  // Print each error. 
				  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
				  echo '</ul><h3 class="error">Your mail could not be sent due to input errors.</h3><hr />';}
				   else{echo '<hr /><h3 class="success" align="center">Thank you for your message!</h3><hr />'; 
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
			<article class="address">
				<h2 class="prominent">206 Tutoring and Music Lessons</h2>
				<h2>7711 14th Avenue NE</h2>
				<h2>Seattle, WA 98115</h2	>
			</article>
		</article>
	</section>
	<!-- START FOOTER -->
	<footer>
		<section class="row">
			<article class="footer-logo pull first">
				<h1>206 <span class="subtext-dark">tutoring</span></h1>
				<h3>&copy;206 Tutoring</h3>
			</article>
			<article class="footer-contact push">
				<h3>(206) 551-7843</h3>
				<h3>chris@206tutoring.com</h3>
			</article>
		</section>
	</footer><!-- END FOOTER -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>		
	<script type="text/javascript">
	$(function() {
		// Insert Responsive Sidebar Icon
		$('<div class="responsive-nav-icon" />').appendTo('.top-nav.row');
		$('<div class="responsive-nav-close" />').appendTo('nav');

		// Navigation Slide In
		$('.responsive-nav-icon').click(function() {
			$('nav').addClass('slide-in');
			$('html').css("overflow", "hidden");
			$('#overlay').show();
			return false;
		});

		// Navigation Slide Out
		$('#overlay, .responsive-nav-close').click(function() {
			$('nav').removeClass('slide-in');
			$('html').css("overflow", "auto");
			$('#overlay').hide();
			return false;
		});
	});
	</script>
</body><!-- END BODY -->