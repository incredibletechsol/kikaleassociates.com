<?php
if($_POST['submit']) {
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		include('conn.php');
		$name=$_POST['name'];
		$email=$_POST['UserName'];
		$mobno=$_POST['contact'];
		$message=$_POST['message'];
		$query="insert into kikale_contactus values('$name','$email','$mobno','$message')";
		mysqli_query($con,$query);
		
	
		echo "<script> window.location.href = 'contact2.php'; </script>";
    }   
	?>
	
