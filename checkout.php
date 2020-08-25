<?php
include("functions/functions.php");
?>
<html>
	<head>
		<title>My Site Title</title>
		<link rel="stylesheet" href="styles/style.css" media="all">
	<head>

<!-- Start of Hippo Code -->
<script src= "https://chat.hippochat.io/js/widget.js"></script>
<script>
     window.initHippo({
        appSecretKey: "1089555fe53a5eecc684e573c0b0b393"
    });
</script>
<!-- End of Hippo Code -->
	
<body>
	
	<div class="main_wrapper">
		
		<div class="header_wrapper">This is a header!
			<img id="logo" src="images/logo.gif" >
			<img id="banner" src="images/ad_banner.gif" >
		
		</div>
		<div class="menubar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="">Contact Us</a></li>
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" / >
					<input type="submit" name="search" value="Search" />
				</form>
			</div>
		</div>
	<div class="content_wrapper">
		<div id="sidebar">
				
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
					<?php getCats();?>
				</ul>
				
				<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
					<?php
					getBrands();
					?>
				</ul>
		</div>
		
			
			
			<div id="content_area" style="background:pink;"> 
			
			<?php cart(); ?>
				<div id="shopping_cart">
					<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
						<?php
						if(isset($_SESSION['customer_email'])){
							echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b>Your</b>";
						}
						else{
							echo "<b>Wecome Guest</b>";
						}
						
						?>
						<b style="color:yellow;">Shopping Cart -</b> Total Items:<?php total_items() ?> 
						Total Price: <?php  total_price(); ?><a href="cart.php" style="color:yellow;">Go to Cart</a>
						
					</span>
					
				</div>
				
				<?php $ip = getIp(); 
					//echo $ip;
				?>
				
				<div id="products_box">
				
				<?php
				if(!isset($_SESSION['customer_email'])){
					include("customer_login.php");
				}
				else{
					include("payment.php");
				}
				?>
				
				
				</div> 
			</div>
		</div>
	
		
	</div>
	<div id="footer">
		<p style="text-align:center; font-size:0.8em;">&copy; Kristine Costo. All Rights Reserved.</p>
           <p style="text-align:center; font-size:0.8em;">Powered by Serious Byte</p>
	</div>	
	
		








</body>
</html>