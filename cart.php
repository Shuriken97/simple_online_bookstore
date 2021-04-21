<?php
require 'connection.php'; 
session_start();
?>
<html>
<head>
<title>Group1 ebookstore: Your Shopping Cart</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/haha.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.shop.js"></script>
</head>

<body>  


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



<!-- End Navigation -->
   <br>
		<div id="content">
        
        	<div id="navigation">
			<ul>
                <li><a href="index.php">HOME PAGE</a></li>
			    <li><a href="cart.php">MY CART</a></li>
			    <li><a href="reg.php">USER REGISTRATION</a></li>
			    <li><a href="login.php">LOGIN</a></li>
			</ul>
		</div>
<div id="site">


		<h1 style="font-size: 300%;">Your Shopping Cart</h1>
		<form id="shopping-cart" action="cart.php" method="post">
			<table class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col" colspan="2">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
            <p>Between 5 - 10 books, 5% discount of total price
            <br>More than 10 books, 15% discount of total price<br>
            Postage is free for Purchase More than RM100.<br>
            Postage is RM10 for Purchase below RM100</p>
            <p id="sub-total">
				<strong>Sub Total</strong>: <span id="stotal"></span>
			</p>
			<ul id="shopping-cart-actions">
				<li>
					<input type="submit" name="update" id="update-cart" class="btn" value="Update Cart" />
				</li>
				<li>
					<input type="submit" name="delete" id="empty-cart" class="btn" value="Empty Cart" />
				</li>
				<li>
					<a href="index.php" class="btn">Continue Shopping</a>
				</li>
				<li>
					<a href="checkout.php" class="btn">Go To Checkout</a>
				</li>
			</ul>
		</form>
	</div>
	
	

</div>

</body>
</html>	