<?php

  if(isset($_POST['submit'])){
      $fname=$POST['fname'];
      $lname=$POST['lname'];
      $phone=$POST['phone'];
      $msg=$POST['msg'];

      $to='birghan.sven@web.de';
      $subject='Form Submission';
      $message="Name: ".$fname."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n" .$msg;
      $headers= "From: ".$email;

      if(mail($to, $subject, $message, $headers)){
        echo "<h1>Hallo "Sfname.", danke für Deine Nachricht!</h1>";
      }
      else{
        echo "Etwas ist schief gelaufen :("
      }
    }

?>
