<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST['vname']==""||$_POST['vemail']==""||$_POST['sub']==""||$_POST['msg']==""){
$fill="Fill All Fields..";?>
<script>alert("<?php echo "$fill";?>");</script>
<?php
}
else
{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
$invalid="Invalid Sender's Email";?>
<script>alert("<?php echo "$invalid";?>");</script>
<?php
}
// for sending mail remove comments lines from the below code and remember for sending mail you need to have run your program on live server
else{
//$subject = $_POST['sub'];
//$message = $_POST['msg'];
//$headers = 'From:'. $email2 . "\r\n"; // Sender's Email
//$headers .= 'Cc:'. $email2 . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
//$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
//mail("googol.msg@gmail.com", $subject, $message, $headers); // If you wish to send email then for that you need to have a live server
$mailsent= "Your mail has been sent successfully ! Thank you for your feedback";
?>
<script>alert("<?php echo "$mailsent";?>");</script>
<?php
}
}
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
