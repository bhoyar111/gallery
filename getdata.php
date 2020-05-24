<?php

	
	if (isset($_POST['feed_sub'])) 
	{
		$fname= $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$rating = $_POST['rating'];

		$con = new mysqli('localhost', 'root', '', 'gallery');

		$query = "INSERT INTO feedback VALUES(NULL, '$fname', '$lname', '$email', '$message', '$rating')";

		if ($con->query($query)) {
			header('location:feedback.php');
		} else {
			echo mysqli_error($con);
		}
	}
	elseif (isset($_POST['cont_sub'])) 
	{
		$fname= $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

		$con = new mysqli('localhost', 'root', '', 'gallery');

		$query = "INSERT INTO contact VALUES(NULL, '$fname', '$lname', '$email', '$phone', '$message')";

		if ($con->query($query)) {
			header('location:contact.php');
		} else {
			echo mysqli_error($con);
		}
		
	}
	elseif (isset($_POST['reg_sub'])) 
	{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			$mobile = $_POST['mobile'];

			$con = new mysqli('localhost', 'root', '', 'gallery');

			$query = "INSERT INTO register VALUES(NULL, '$fname', '$lname', '$email', '$password', '$mobile')";

			if ($password==$cpassword) {
				if ($con->query($query)) {
					header('location:login.php');
				} else {
					echo mysqli_error($con);
				}
				
			} else {
				echo "Password does not match";
			}
	}

	elseif (isset($_POST['log_sub'])) 
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		$con = new mysqli('localhost', 'root', '', 'gallery');

		$query = "SELECT * FROM register WHERE  email = '$email' and password = '$password' ";

		$result = $con->query($query);

		$rows = mysqli_num_rows($result);

		$data = $result->fetch_assoc();

		if ($rows==1) {
			session_start();
			$_SESSION['id']=session_id();
			$_SESSION['user_id']= $data['id'];
			$_SESSION['user_fname']= $data['fname'];
			$_SESSION['user_lname']= $data['lname'];
			$_SESSION['user_email']= $data['email'];
			$_SESSION['user_password']= $data['password'];
			$_SESSION['user_mobile']= $data['mobile'];
			header('location:index.php');
		} else{
			echo "Incorrect Email and password";
		}
	}


	 ?>