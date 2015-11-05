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
	<title>206Tutoring - Home</title>
</head>
<!-- START BODY -->
<body>
	<!-- START HEADER -->
	<header class="home-header">
		<div class="full-row gradient">
			<section class="top-nav row">
				<a href="/home.php" class="nav-logo pull first" title="Home">206 <span class="subtext-light">tutoring</span></a>
				<a href="/about.php#contact-form" class="nav-btn btn-orange btn-contact push">CONTACT US</a>
				<!-- START NAV -->
				<nav>
					<ul class="nav-link-list">
						<li><a href="/test_prep.html" class="nav-link">Test Prep and<br>College Counseling</a></li>
						<li><a href="/tutoring.html" class="nav-link">TUTORING</a></li>
						<li><a href="/music.html" class="nav-link">Music Lessons</a></li>
						<li><a href="/about.php" class="nav-link">ABOUT</a></li>
						<li><a href="/blog.php" class="nav-link">BLOG</a></li>
					</ul>
				</nav>
			</section>
		</div>
		<main class="header-text row">
			<h1>Test Prep, Tutoring, Music Lessons</h1>
			<h2>experienced, effective, empowering</h2>
			<a href="/about.php#contact-form" class="btn-orange">Contact Us Now</a>
		</main>
	</header><!-- END HEADER -->
	<section class="home-info row">
		<article class="info-block one-third first">
			<img src="/assets/home_page/home_test_prep_sqr.png" alt="test_prep">
			<h1>Test Preparation & College Admission</h1>
			<p>The best tutors and educational consultants in the Seattle metropolitan area. Insightful, individualized and efficient. We’ll help you learn how to take tests by using information on the test itself to your advantage. You’ll get the score you want on the SAT, ACT, or GRE. Alongside our college counseling program, you’ll have the essays, scores, and résumé you need to go onto the program of your choice.</p>
		</article>
		<article class="info-block one-third">
			<img src="/assets/home_page/home_tutor_sqr.png" alt="tutor">
			<h1>K-12 Tutoring</h1><br>
			<p>On-demand help with math, reading, and writing. Elementary school, high school, and college. Homework, tests, and more. Take all the academic pressure off yourselves. Let us help make school a place for not stress and anxiety, but discovery and growth.</p>
		</article>
		<article class="info-block one-third">
			<img src="/assets/home_page/home_piano_sqr.png" alt="piano">
			<h1>Music Lessons</h1><br>
			<p>Our team of experienced, professional performers and instructors offers lessons in piano, voice, guitar, violin, viola, cello, drums, and more. We’ll help you learn to play what you want to play, how you want to play it.</p>
		</article>
	</section>
	<section class="quote-slider full-row">
		<article class="quote">
			<h1>"206 Tutoring is the best test prep service in Seattle. My son was able to improve his SAT Math score by 400 points in just a few weeks!"</h1>
			<h2>John Doe - Bellevue</h2>
		</article>
	</section>
	<section class="home-about full-row">
		<section class="row">
			<div class="home-portrait one-fifth first">
				<img src="/assets/home_page/home_profile_pic.png" alt="CML Portrait">
			</div>
			<div class="four-fifths">
				<p>Hello! My name is Chris Morris-Lent. I’m the founder of 206 Tutoring and Music Lessons. We provide the highest quality of instruction, through hiring only the most qualified instructors, and matching our students with the best possible fit. For more information, sign up for my blog below, or spend a few minutes exploring the website to get a feel for what we can offer you.</p>
			</div>
		</section>
	</section>
	<section class="home-consultation row">
		<section class="consultation-icons">
			<img src="/assets/home_page/home_lesson_option_in_person_icon.png" alt="lesson_option_in_person">
			<img src="/assets/home_page/home_lesson_option_online_icon.png" alt="lesson_option_online">
		</section>
			<h1>Lessons are available in person or online</h1>
			<h2>Unsure about the best option for you? Contact us now for a free 15-minute consultation. We’ll help you figure out the right plan.</h2>
			<a href="/about.php#contact-form" class="btn-orange">CONTACT US NOW</a>
	</section>
	<section class="schedule-block full-row">
		<h1>Want to learn more great ways to learn?</h1>
		<h2>Sign up for my blog and get regular tips and tricks on how to improve your learning.</h2>
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

				  }
				  //End of validation 
				  if (isset($_REQUEST['submitted'])) {
					  if (empty($errors)) { 
						  $from = "From: 206Tutoring"; //Site name
						  // Change this to your email address you want to form sent to
						  $to = "itscml@gmail.com";
						  $subject = "Admin - 206Tutoring - SIGNUP FORM for: " . $name . "";
						  
						  $body = "Blog signup for: " . $name . " ". "
						  Email: " . $email . "
						  ";
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
				  echo '</ul><h3 class="error">Your name could not be sent due to input errors.</h3><hr />';}
				   else{echo '<hr /><h3 class="success" align="center">Thank you! You are now signed up!</h3><hr />'; 
				  }
				  }
				//End of errors array
			?>
		<section class="home-signup-form">
		  <form action="" method="post" class="home-signup row">
		    <input name="name" type="text" value="" placeholder="Name..." class="input-box one-third first"/>
		    <input name="email" type="email" value="" placeholder="Email..." class="input-box one-third"/>
		    <input name="submitted" type="submit" value="SIGN ME UP" class="btn-orange one-third btn-submit"/>
		  </form>
		</section>
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