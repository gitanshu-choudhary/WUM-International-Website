<?php
	if(isset($_POST['et_pb_contactform_submit_0'])){
		$name=$_POST['et_pb_contact_name_1'];
		$email=$_POST['et_pb_contact_email_1'];
		$msg=$_POST['et_pb_contact_message_1'];

		$to='wuminternational@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>