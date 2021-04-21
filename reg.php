<?php include('process.php');?>
<!doctype html>
<html>
<head>
	<style>	
		#per_detail{
			width:40%;
			margin:15px;
			padding:20px;
			border:1px solid #B0C4DE;
			background:white;
			border-radius:0px 0px 10px 10px;
			text-align:left;
		}
	</style>
<meta charset="utf-8">
<link rel="stylesheet" href="css/haha.css" media="screen" type="text/css" />
	<title>Register</title>
</head>

<body class="reg">    
 	<div id="navigation">
			<ul>
                <li><a href="index.php">HOME PAGE</a></li>
			    <li><a href="cart.php">MY CART</a></li>
			    <li><a href="reg.php">USER REGISTRATION</a></li>
			    <li><a href="login.php">LOGIN</a></li>
			</ul>
		</div>
   
    <br><br> <br>
 <!-- horizontal line-->
<center>
	<form id='per_detail' method="post" action="reg.php">
		<?php include('errors.php');?>
		<div class="input-group">
			<h3><u><font color="ForestGreen ">Personal Details</font></u></h3>
			<label>First Name</label><br>
			<input type="text" name="firstname" />
			<br><br>
			<label>Last Name</label><br>
			<input type="text" name="lastname" />
			<br><br>
			<label>Email</label><br>
			<input type="text" name="email" placeholder='123@gmail.com'/>
			<br><br>
			<label>Telephone</label><br>
			<input type="text" name="telephone" placeholder='0123456789'/>
			<br><br>
			<label>Address</label><br>
			<textarea cols="40" rows="3" name="address"></textarea>
			<br><br>
			<label>Username</label><br>
			<input type="text" name="username" />
			<br><br>
			<label>Password</label><br>
			<input type="password" name="password" />
			<br><br>
			<input type="submit" name="register" ><br>
		</div>
	</form>
	<p style="text-align:center">Already a member?<a href="login.php">Login</a></p><br><br>
		</center>
</body>

</html>