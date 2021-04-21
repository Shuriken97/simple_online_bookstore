<!DOCTYPE html>
<html>
<head>
<title>Group1 E-bookstore</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/haha.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.shop.js"></script>
<style>
	#loginfrm{
		border:dotted black 3px;
		width:30%;
		border-radius:5px;
        border-left: 180px;
		margin:80px;
		background:white;
		padding:30px;
        padding-left: 90px;
        display: inline-block;
	}
		
	#submit{
		color:cornflowerblue;
		padding:5px;
		margin-left:40%;
	}
	</style>
</head>

<body>
       	<div id="navigation">
			<ul>
                <li><a href="index.php">HOME PAGE</a></li>
			    <li><a href="cart.php">MY CART</a></li>
			    <li><a href="reg.php">USER REGISTRATION</a></li>
			    <li><a href="login.php">LOGIN</a></li>
			</ul>
		</div>
	<div id="content">
        
 <!-- horizontal line-->
        <center>
	<div id="loginfrm">
	<form action="loginprocess.php" method="POST">
		<p>
			<label:>Username:</label:>
			<input type="text" name="user">
		</p>
		<p>
			<label:>Password:</label:>
			<input type="password" name="pass">
		</p>
		<p>
			<input name="loginB" id="loginB" type="submit" value="login">
		</p>
		<p>Not yet a member?<a href="reg.php">Sign up here</a>
		</p>
	</form>
	</div>
        </center></div>
</body>
</html>	