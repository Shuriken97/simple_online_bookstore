<?php
	session_start();

	$errors=array();
	$db=mysqli_connect("localhost","root","","my_bookstore2");
	
	if(isset($_POST['register'])){
		$firstname=mysqli_real_escape_string($db,$_POST['firstname']);
		$lastname=mysqli_real_escape_string($db,$_POST['lastname']);
		$email=mysqli_real_escape_string($db,$_POST['email']);
		$telephone=mysqli_real_escape_string($db,$_POST['telephone']);
		$address=mysqli_real_escape_string($db,$_POST['address']);
		$username=mysqli_real_escape_string($db,$_POST['username']);
		$password=mysqli_real_escape_string($db,$_POST['password']);
		
		
		if(empty($firstname)){
			array_push($errors,"First name is required");
		}
		if(empty($lastname)){
			array_push($errors,"Last Name is required");
		}
		if(empty($email)){
			array_push($errors,"Email is required");
		}
		if(empty($telephone)){
			array_push($errors,"Phone number is required");
		}
		if(empty($address)){
			array_push($errors,"Address is required");
		}
		if(empty($username)){
			array_push($errors,"Username is required");
		}
		if(empty($password)){
			array_push($errors,"Password is required");
		}
		
		if(count($errors)==0){
			$sql="INSERT INTO users(firstname,lastname,email,telephone,address,username,password)
					VALUES			('$firstname','$lastname','$email','$telephone','$address','$username','$password')";
			mysqli_query($db,$sql);
			header('Location:login.php');
			
		}
	}
?>