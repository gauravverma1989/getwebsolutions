<?php
if (isset($_POST['name'])  && isset($_POST['email']) && isset($_POST['phone']) && isset ($_POST['message']) ){
	if(!empty($_POST['name'])  && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo 'Kindly Provide Valid Email';
	}	else{
			$body = $name."\n".$email."\n".$phone."\n".$message;
			if(mail('gauravpersonal1989@gmail.com','Get Web Solutions - Enquiry Form', $body ,'From: <enquiry@getwebsolutions.co>')){
				header("Location: http://www.getwebsolutions.co/thankyou.html");
				exit();

			} else{
			echo 'There is a problem in sending mail.';
		}
}

}	else{
		echo 'All Fields are required.';
	}
} else {
	echo 'Not OK';
}
?>