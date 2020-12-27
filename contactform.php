<?php

  if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['msg'];

    $mailTo = "birghan.sven@web.de";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$fname.".\n\n".$lname.".\n\n".$message;

    /*if(empty($_POST['fname'])) {
      $fname = "";
    }

    if(empty($_POST['lname'])) {
      $lname = "";
    }

    if(empty($_POST['email'])) {
      echo "Bitte tragen Sie vor dem Absenden Ihre E-Mail Adresse ein!";
    } else {*/
      mail($mailTo, $subject, $txt, $headers);
      /*header("Location: kontakt.html?mailsend");*/
      /*echo "Ihre Anfrage wurde erfolgreich übermittelt";
    }*/

  }

 ?>
