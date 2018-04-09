<?php

  if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = "Message from fingerdingles.com";
    $emailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "info@fingerdingles.com";
    $headers = "From: ".$emailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    header("Location: index.php?mailsend");
  }


 ?>
