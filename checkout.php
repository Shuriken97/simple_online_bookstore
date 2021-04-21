<?php
require 'connection.php'; 
session_start();
?>
<html>
<head>
<title>check out</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.shop.js"></script>
</head>

<body id="checkout-page">

	<?php 
	if($_SESSION['FirstName']==NULL)
		echo " ";
	else
	{ 	echo "Welcome! ";
		echo $_SESSION['FirstName'];
		echo " ";
		echo $_SESSION['LastName'];
	}
	?>

  <table width="800" align="center"> 
  <tbody>
    <tr>
      <td width="20%" align="center">
		  	<a href="index.php">HOME PAGE</a>
		</td>
      <td width="20%" align="center">
			<a href="cart.php">MY CART</a>
		</td>
      <td width="20%" align="center">
			<a href="reg.php">USER REGISTRATION</a>
		</td>
	<td width="20%" align="center">
			<a href="login.php">LOGIN</a>
		</td>
    </tr>
  </tbody>
</table>
<hr /> <!-- horizontal line-->
<div id="site">
	<div id="content">
		<h1>Checkout</h1>
			<table id="checkout-cart" class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
		<p>Free postage if the total price> RM100. If not, then postage= RM 10</p>
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping</strong>: <span id="sshipping"></span>
			</p>
			
			<p id="sub-total">
				<strong>Total</strong>: <span id="stotal"></span>
			</p>
		 </div>
		 
		 <a href="order.php" class="btn">Submit</a>
	</div>


</div>


</body>
</html>	