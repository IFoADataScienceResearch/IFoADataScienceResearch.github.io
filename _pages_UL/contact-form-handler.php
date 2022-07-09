
<?php 

// 'Source is from https://html.form.guide/contact-form/php-email-contact-form/

$errors = '';
$myemail = 'debsdey@hotmail.com';//<-----Put Your email address here.

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 
$attachment = $_POST['file']; 

<?php
function_alert("name");
function_alert("email");
function_alert("message");

function function_alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form WP4 site: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>
