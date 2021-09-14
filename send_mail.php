<?php
  if (isset($_POST["submit"])) {
    // get the form fields, remove html tags, whitespace and filter email.
     $name = strip_tags(trim($_POST["name"]));
     $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
     $subject = strip_tags(trim($_POST["subject"]));
     $message = wordwrap(trim($_POST["message"]), 70);
     
     // check the data.
     if (empty($name) || empty($email) || empty($subject) || empty($message)) {
     	  header("Location: http://localhost/company/contact?success=-1#form");
     } 
     elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://localhost/company/contact?success=0#form");
     }
     else {
      // set the recipient email address.
      $to = "abelkipruto4@gmail.com";

      // build the email content.
      $email_content = "Name: ${name}\n";
      $email_content .= "Email: ${email}\n\n";
      $email_content .= "Message: \n${message}\n";

      // build the email headers.
      $email_headers = "From: ${name} <${email}>";
      
      // send the mail.
      mail($to, $subject, $email_content, $email_headers);

      // redirect to contact page with success code.
       if (mail($to, $subject, $email_content, $email_headers)) {
          header("Location: http://localhost/company/contact?success=1#form");
       }
    }     
  }// end if
