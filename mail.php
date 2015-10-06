<html>
<body>
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

  <h2>Contact us</h2>
  <form action="" method="post">
    <label>Name: <br />
    <input name="name" type="text" value="" /><br /></label>
    <label>Email: <br />
    <input name="email" type="email" value="" /><br /></label>
    <label>Phone Number: <br />
    <input name="phone" type="tel" value="" /><br /></label>
    <label>Message: <br />
    <textarea name="message" type="text" value="" /></textarea><br /> 
    <input name="submitted" type="submit" value="Submit" />
  </form>
</body>
</html>

