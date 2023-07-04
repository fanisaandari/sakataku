<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace fannisa@gmail.com with your real receiving email address
  $receiving_email_address = 'fannisa@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $fannisa = new PHP_Email_Form;
  $fannisa->ajax = true;
  
  $fannisa->to = $receiving_email_address;
  $fannisa->from_name = $_POST['name'];
  $fannisa->from_email = $_POST['email'];
  $fannisa->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $fanisa->smtp = array(
    'host' => 'gmail.com',
    'username' => 'gmail',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $fannisa->add_message( $_POST['name'], 'From');
  $fannisa->add_message( $_POST['email'], 'Email');
  $fannisa->add_message( $_POST['message'], 'Message', 10);

  echo $fannisa->send();
?>
