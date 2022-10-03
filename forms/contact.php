<?php
if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $Message = $_POST['message'];

  $mailto = "mohamedduale@mailfence.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$Message;


  mail($mailto, $subject, $txt, $headers);

  header("Location: index.php?mailsend");
}
?>
