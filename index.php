<?php
require 'connection.php'; 
session_start();
?>
<html>
<head>
<title>My Little Bookstore</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<hr>
       	<header id="masthead">
		<h1>MY LITTLE BOOKSTORE <span class="tagline">Presented by XAVIER AND JADEN LIM</span></h1>
	</header>
        	<!-- Navigation -->
		<div id="navigation">
			<ul>
                <li><a href="index.php">HOME PAGE</a></li>
			    <li><a href="cart.php">MY CART</a></li>
			    <li><a href="reg.php">USER REGISTRATION</a></li>
			    <li><a href="login.php">LOGIN</a></li>
			</ul>
		</div>

<!-- End Navigation -->
   <br><br> 
    
<div id="site">

  <div id="content">
	<div id="products"> 
<h1 style="font-size: 300%;">Arts and Music</h1>
		<ul>
				<li>
					<div class="product-image">
				    <img src="images/product/AM01.jpg" width="150" height="200"> </div>
					<div class="product-description" data-name="The Art Book for Beginners" data-price="20">
						<h3 class="product-name">The Art Book For Beginners</h3>
						<p class="product-price">RM 20</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-1">Quantity</label>
								<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>
				
							
				<li>
					<div class="product-image">
				    <img src="images/product/AM02.jpg" width="150" height="200"> </div>
					<div class="product-description" data-name="Drawing on the Artist Within" data-price="60">
						<h3 class="product-name">Drawing on the Artist Within</h3>
						<p class="product-price">RM 60</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-3">Quantity</label>
								<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>
				
				<li>
					<div class="product-image">
                    <img src="images/product/AM03.jpg" width="150" height="200"></div>
					<div class="product-description" data-name="MusicoPhilia" data-price="50">
						<h3 class="product-name">MusicoPhilia : The Passion For Music</h3>
						<p class="product-price">RM 50</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-1">Quantity</label>
								<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>
			</ul>
			<hr /> <!-- horizontal line-->
            <h1 style="font-size: 300%;">Fiction and Literature</h1>
	<ul>
				<li>
					<div class="product-image">
			        <img src="images/product/F01.jpg" width="150" height="200"></div>
				  <div class="product-description" data-name="City of Bones" data-price="30">
						<h3 class="product-name">City of Bones</h3>
						<p class="product-price">RM 30</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>
				
				<li>
					<div class="product-image">
                    <img src="images/product/F02.jpg" width="150" height="200"></div>
					<div class="product-description" data-name="Charlottes Web" data-price="25">
						<h3 class="product-name">Charlottes Web
                        </h3>
						<p class="product-price">RM 25</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-3">Quantity</label>
								<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>	
			
				<li>
					<div class="product-image">
                    <img src="images/product/F03.jpg" width="150" height="200"></div>
					<div class="product-description" data-name="Act of Treason" data-price="25">
						<h3 class="product-name">Acts of Treason</h3>
						<p class="product-price">RM 25</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-1">Quantity</label>
								<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>
			</ul>
			<hr /> <!-- horizontal line-->
		<h1 style="font-size: 300%;">Business</h1>
			<ul>
				
				<li>
					<div class="product-image">
                    <img src="images/product/Business/01.jpg" width="150" height="200"></div>
				  <div class="product-description" data-name="ich Dad Poor Dad" data-price="30">
						<h3 class="product-name">Rich Dad Poor Dad Guide Book</h3>
						<p class="product-price">RM 30</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
				  </div>
				</li>
				
				<li>
					<div class="product-image">
                    <img src="images/product/Business/02.jpg" width="150" height="200"></div>
				  <div class="product-description" data-name="Leadership is an Art" data-price="10">
						<h3 class="product-name">Leadership is an Art</h3>
						<p class="product-price">RM 20</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-3">Quantity</label>
								<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
				  </div>
				</li>
				
				<li>
					<div class="product-image">
                    <img src="images/product/Business/03.jpg" width="150" height="200"></div>
					<div class="product-description" data-name="Launching A Leadership Revolution" data-price="30">
						<h3 class="product-name">Leadership Revolution</h3>
						<p class="product-price">RM 30</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-1">Quantity</label>
								<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>
			</ul>
            <hr /> <!-- horizontal line-->
		<h1 style="font-size: 300%;">Science and Technology</h1>
			<ul>
				<li>
					<div class="product-image">
                    <img src="images/product/S&T/01.jpg" width="150" height="200"></div>
				  <div class="product-description" data-name="Rapid Development" data-price="53">
						<h3 class="product-name">Rapid Development</h3>
						<p class="product-price">RM 53</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
				  </div>
				</li>
				
				<li>
					<div class="product-image">
                    <img src="images/product/S&T/02.jpg" width="150" height="200"></div>
				  <div class="product-description" data-name="Discreet Maths and Its Application" data-price="78">
						<h3 class="product-name">Discreet Maths Application</h3>
						<p class="product-price">RM 78</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-3">Quantity</label>
								<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
				  </div>
				</li>
				
								<li>
					<div class="product-image">
                    <img src="images/product/S&T/03_.jpg" width="150" height="200"></div>
				  <div class="product-description" data-name="Introduction of Algorithms" data-price="80">
						<h3 class="product-name">Introduction of Algorithms</h3>
						<p class="product-price">RM 80</p>
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<label for="qty-1">Quantity</label>
								<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to cart" class="btn" /></p>
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>	
