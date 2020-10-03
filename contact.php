<?php
if($_POST["email"]<>''){
  $ToEmail='basilsaji222@gmail.com';
  $EmailSubject='Contact Form';
  $mailheader="From:".$_POST["email"]."\r\n";
  $mailheader .="Reply-To:".$_POST["email"]."\r\n";
  $mailheader .="Content-Type:text/html;charset=iso-8859\r\n";
  $MESSAGE_BODY ="Name:".$_POST["name"]."";
  $MESSAGE_BODY ="Email:".$_POST["email"]."";
  $MESSAGE_BODY ="Message:".nl2br($_POST["message"])."";
  mail($ToEmail,$EmailSubject,$MESSAGE_BODY,$mailheader) or die ("Failure");
  
  ?>
Your message has been sent

<?php
}else{
?>
