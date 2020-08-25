<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || Ninja Art Online Junior Track</title>
    <link rel="stylesheet" href="../css/about.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body style="background-image: url(../images/ninjaartbg2.jpg);">

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
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="products.php">Events</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <!-- <li><a href="orders.php">My Orders</a></li> -->
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <center>
        <p>
          Ninja Art Online Junior Track offers an opportunity for children to learn traditional art.</p> 
          <p>If you like what you see, then contact Kristine Costo at kristine@seriousbyte.com.</p>
        </center>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; Kristine Costo. All Rights Reserved.</p>
           <p style="text-align:center; font-size:0.8em;">Powered by Serious Byte</p>           
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
