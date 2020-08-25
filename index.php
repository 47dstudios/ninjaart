<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Events Management System</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
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
          <h1><a href="index.php">Ninja Art Online Junior Track</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="views/about.php">About</a></li>
          <li><a href="views/products.php">Events</a></li>
          <li><a href="views/cart.php">View Cart</a></li>
         <!-- <li><a href="views/orders.php">My Orders</a></li> -->
          <li><a href="views/contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="views/account.php">My Account</a></li>';
            echo '<li><a href="controller/logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="views/login.php">Log In</a></li>';
            echo '<li><a href="views/register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <img data-interchange="[images/ninjaartcover.jpg, (retina)], [images/ninjaartcover.jpg, (large)], [images/ninjaartbanner400x900.jpg, (mobile)], [images/ninjaartcover.jpg, (medium)]">
    <noscript><img src="images/ninjaartcover.jpg"></noscript>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
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
