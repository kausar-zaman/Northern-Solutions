<?php

  $error_message = "";

  // NAME
  if (empty($_POST["name"])) {
      $error_message = "Name is required ";
  } else {
      $name = $_POST["name"];
  }

  // EMAIL
  if (empty($_POST["email"])) {
      $error_message .= "Email is required ";
  } else {
      $email = $_POST["email"];
  }

  // MSG SUBJECT
  if (empty($_POST["contact_number"])) {
      $error_message .= "Contact Number is required ";
  } else {
      $contact_number = $_POST["contact_number"];
  }

  // MSG SUBJECT
  if (empty($_POST["subject"])) {
      $error_message .= "Subject is required ";
  } else {
      $msg_subject = $_POST["subject"];
  }


  // MESSAGE
  if (empty($_POST["message"])) {
      $error_message .= "Message is required ";
  } else {
      $message = $_POST["message"];
  }


  $EmailTo = "kausar.zaman.1456@gmail.com";
  $Subject = "New Message Received";

  // prepare email body text
  $Body = "";
  $Body .= "Name: ";
  $Body .= $name;
  $Body .= "\n";
  $Body .= "Email: ";
  $Body .= $email;
  $Body .= "\n";
  $Body .= "Contact Number: ";
  $Body .= $_POST['contact_number'];
  $Body .= "\n";
  $Body .= "Subject: ";
  $Body .= $msg_subject;
  $Body .= "\n";
  $Body .= "Message: ";
  $Body .= $message;
  $Body .= "\n";
  $Body .= "\n";
  $Body .= "Northern Solutions LTD 2020 ©";

  // send email
  $success = mail($EmailTo, $Subject, $Body, "From:".$email);

  // redirect to success page
  if ($success && $error_message == ""){
      header ("Location: email-sent.php");
  } else {
      if($error_message == ""){
          echo "Something went wrong :(";
      } else {
      echo '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
      }
  }

?>
