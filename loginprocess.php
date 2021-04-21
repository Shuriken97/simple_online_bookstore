<?php
if(isset($_POST['loginB']))
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$con=mysqli_connect("localhost","root","","my_bookstore2");
	
	$user=stripcslashes($user);
	$pass=stripcslashes($pass);
	$user=mysqli_real_escape_string($con,$user);
	$pass=mysqli_real_escape_string($con,$pass);
	
	$result=mysqli_query($con,"select * from users where username='$user' and password='$pass'")
			or die("Failed to query database".mysqli_error());
	$row = $result->fetch_array(MYSQLI_BOTH);
	session_start();
	$_SESSION['FirstName']=$row['firstname'];
	$_SESSION['LastName']=$row['lastname'];
	if($row) 
	{	
		header('Location:index.php');
  	}
	else
	{
		echo "Invalid username or password";
		echo "<script>setTimeout(\"location.href = 'login.php';\",1500);</script>";
	}
}?>