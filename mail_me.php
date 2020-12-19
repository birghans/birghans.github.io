<?php

  if(isset($_POST['submit'])){
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $msg=$_POST['msg'];

      $to='birghan.sven@web.de';
      $subject='Form Submission';
      $message="Name: ".$fname."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n" .$msg;
      $headers= "From: ".$email;

      if(mail($to, $subject, $message, $headers)){
        echo "<h1>Hallo ".$fname.", danke für Deine Nachricht!</h1>";
      }
      else{
        echo "Etwas ist schief gelaufen :("
      }
    }

?>
