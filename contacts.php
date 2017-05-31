<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/contact-form.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/TMForm.js"></script>
<script src="js/modal.js"></script>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>



<!--==============================
              header
=================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        <h1>
          <a href="index.php">
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>
      </div>
    </div>
  </div>
  <!-- Menu Start-->

<div class="menu">
<?php include 'menu.php';?>
</div>

<!-- Menu End-->
</header>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3>Contacts</h3>
        <div class="map">

        <figure class="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.2739214001936!2d77.04097411443165!3d28.41099040082532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d229073a9f855%3A0xb1577018af6d4227!2sOmaxe+Gurgaon+Mall!5e0!3m2!1sen!2sin!4v1458560075318" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </figure>

        </div>
      </div>
      <div class="grid_5">
        <h3 class="head__1">Address:</h3>
        <address class="text3">


    Kickstart Human Capital Solution Private Limited<br><br>
    C-26, Omaxe City Center,<br><br>
    Sector 49, Sohna Road,<br><br>
    Gurgaon-122001<br>


        </address>
      </div>
      <div class="grid_4">
        <h3 class="head__1">Phone:</h3>
        <div class="text3">
    +91-9764051520<br>

        </div>
      </div>
      <div class="grid_3">
        <h3 class="head__1">E-mail:</h3>
        <div class="text3">
          <a href="https://mail.google.com/mail/?view=cm&fs=1&to=nitin@kickstarthumancapital.in">    nitin@kickstarthumancapital.in<br></a>
        </div>
      </div>
      <hr>

      <div class="grid_12">
        <h3 class="head__1">Feel free to contact us</h3>
        <div class="fwn">
        </div>

               
<form action="mail.php" method="post">
 
 <label for="fname">First Name</label><input type="text" name="fname" required><br>
Last Name:<input type="text" name="lname" required><br>
Email:<input type="text" name="email" required><br>
Phone:<input type="text" name="phone" required><br>
Message:<textarea rows="5" name="message" cols="30"></textarea><br>
<br>
<input class="button" type="submit" name="submit" value="Submit">
</form>
              


      </div>
    </div>
  </div>
</section>
<!-- Footer Start-->

<div class="menu">
<?php include 'footer.php';?>
</div>

<!-- Footer End-->

<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>