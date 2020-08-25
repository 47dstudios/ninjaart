<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:../index.php");}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Products || Ninja Art Online Junior Track</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <script src="../js/vendor/modernizr.js"></script>
  </head>

<!-- Start of Hippo Code -->
<script src= "https://chat.hippochat.io/js/widget.js"></script>
<script>
     window.initHippo({
        appSecretKey: "1089555fe53a5eecc684e573c0b0b393"
    });
</script>
<!-- End of Hippo Code -->

  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="../index.php">Ninja Art Online Junior Track</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Events</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <!-- <li><a href="orders.php">My Orders</a></li> -->
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="../controller/logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li class="active"><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>





    <form method="POST" action="../controller/admin-insert-products.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Product Code</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Insert Product Code." name="product_code">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Product Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Insert your product name." name="product_name">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Product Description</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Insert your product description." name="product_desc">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Product Image</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Insert your product image." name="product_img_name">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Quantity</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="right-label" placeholder="Insert quantity." name="qty">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Price</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" placeholder="Insert your item price." name="price">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="COD" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <p>Product was added successfully. Check your spam email for the order confirmation.</p>
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; Kristine Costo. All Rights Reserved.</p>
           <p style="text-align:center; font-size:0.8em;">Powered by Serious Byte</p>
        </footer>

      </div>
    </div>




    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
