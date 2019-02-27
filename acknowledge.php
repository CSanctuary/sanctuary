<?php
$headers = "From: googol.msg@gmail.com\r\n"; 
$headers . = 'Content-Type: text/plain; charset=utf-8'; 
if (isset($_POST['send'])) {
$to = 'googol.msg@gmail.com';
$subject = 'Feedback from my site';
$message = 'Name: '; . $_POST['name'] . "r\n\r\n";
$message = 'Email: ' . $_POST['email'] . "r\n\r\n";
$message = 'Comments: ' . $_POST['comments'];
}
?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<title></title>
</head>

<body>

<center><h1>Thank you,

<p>the Winners form has been submitted!</p></h1>

<h1>Ooops!

  <p>Sorry, there has been a problem submitting the winners form.</p><//h1></center>
<html>

</body>
</html>
