<?php
$errors = '';
$myemail = 'hemantchandavar1999@gmail.com';//<-----Put Your email address here.
if(empty($_POST['firstname'])  ||
   empty($_POST['email']) ||
   empty($_POST['subject']) ||
   empty($_POST['message']))
{
  { ?>
    <script language="javascript" type="text/javascript">
    alert('\n Error: All fields are required');
    window.location = 'contact-form.html';
    </script>
<?php }
    $errors .= "\n Error: all fields are required";
    echo "Error: All fields are required";
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
  { ?>
  <script language="javascript" type="text/javascript">
  alert('\n Error: Invalid Email Address');
  alert('\n All the fields are required!');
  window.location = 'contact-form.html';
  </script>
<?php }
    $errors .= "\n Error: Invalid email address";
    echo "$errors";
}

if( empty($errors))
{
	$to = $myemail;
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message";

	$headers = "From: $myemail\n";
	$headers .= "Reply-To: $email_address";

	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: ThankYou.html');
}
?>
<!DOCTYPE html>
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
