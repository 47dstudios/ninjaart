<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact || Ninja Art Online Junior Track</title>
    <link rel="stylesheet" href="../css/foundation.css" />
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
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Events</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <!-- <li><a href="orders.php">My Orders</a></li> -->
          <li class="active"><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="../controller/logout.php">Log Out</a></li>';
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
        
        <section class="form-group">  

  <section class="form-box">

  <div class="form">
   <div class="form-text">
    <center>
    <h2>We're here to support you!</h2>
    <p>Let us help you become the artist you want to be!</p>
  </center>
   </div>

<!--  <form class="form-contents" method="post" name="form-c" action="#">
    
    <div class="two-columns">
     <div class="first-name space-between">
      <label>First Name</label>
      <input type="text" name="firstname">
     </div>

     <div class="first-name">
      <label>Last Name</label>
      <input type="text" name="lastname">
     </div>
    </div>

    <div class="two-columns">
     <div class="first-name space-between">
     <label>Email</label>
     <input type="email" name="emailaddress">
     </div>

     <div class="first-name">
     <label>Contact Number</label>
     <input type="contact" name="contactnumber">
     </div>
    </div>

    <div class="choices">
     <label>What are you getting in touch about?</label>
     <select name="options">
    
      <option active>Click to select one.</option>
      <option active>Enrollment Process</option>
      <option>Corporate Rates</option>
      <option>Course Offering</option>
      <option>Classroom Instructor-Led Training</option>
      <option>Others</option>
      
     </select>
    </div>

    <div class="describe">
     <label>Describe the assistance that you need.</label>
     <textarea name="message" placeholder="Enter text here."></textarea>
    </div>

     <button>
      Send Message
    </button>

    
   </form> -->


   <center>
   <form action="mailto:kristine@seriousbyte.com" method="post">
    <button>Send Email</button>
   </form>  
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
