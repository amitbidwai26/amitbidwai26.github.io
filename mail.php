<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Bidwai Technologies - Mobile, Analytics, Social, Cloud, Products & Services</title>
    <link rel="stylesheet" href="./assets/css/fancybox/jquery.fancybox-v=2.1.5.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="./assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" />
    <link href="./assets/css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/css/full-menu.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style/masterslider.css" />
    <link href="./assets/css/skins/black-2/style.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="./assets/css/loader.css" rel="stylesheet">
    <link href="./assets/css/gallery.css" rel="stylesheet">
    <link href="./assets/css/gallery-style.css" rel="stylesheet">
    <link href="./assets/css/demo.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="description" content="Bidwai Technologies - An enterprise Social, Mobile, Analytics, Cloud services delivering innovative products and services to clients across the globe.">
    <meta name="keywords" content="An enterprise Mobile App Development, Cloud Solutions, Product Development, Analytics Solutions, in pune banglore mumbai hyderabad india ">
    </head>
<body>
 <section class="top-bar">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 left-side">
                <ul>
                    <li><a href="http://webmail.bidwai.in">E-mail Login</a></li>
                    <li><a href="payment.html">Pay us</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 right-side">
                <ul>
                    <li><a href="https://www.facebook.com/bidwaitechnologies/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/bidwai-associates"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://plus.google.com/u/0/+BidwaiIn"><i class="fa fa-google"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UC84etKRG4OoUiHuvxx8Vcpg"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- TOP BAR END -->
    <div class="clearfix"></div>
    <!-- HEADER START -->
    <section id="home" class="slider-wrapper">
        <header>
            <div class="container">
                <div class="col-lg-3">
                    <figure>
                        <a href="index.html"><img src="./assets/images/logo.png" alt="logo-img"></a>
                    </figure>
                </div>
                <div class="col-lg-9">
                    <div class="right-menu">
                        <a class="cd-primary-nav-trigger" href="#">
                            <span class="cd-menu-icon"></span>
                        </a>
                        <nav>
                            <ul class="cd-primary-nav">
                                <li class="wrap"><a href="/index#about" class="btn-7  "><span>ABOUT</span></a></li>
                                <li class="wrap"><a href="/index#services" class="btn-7  "><span>SERVICES</span></a></li>
                                <li class="wrap"><a href="/index#portfolio" class="btn-7  "><span>PORTFOLIO</span></a></li>
                                <!-- <li class="wrap"><a href="#team" class="btn-7  "><span>TEAM</span></a></li> -->
                                <li class="wrap"><a href="/index#price" class="btn-7  "><span>PRICE</span></a></li>
                                <!-- <li class="wrap"><a href="#blog" class="btn-7  "><span>BLOG</span></a></li> -->
                                <li class="wrap"><a href="/index#contact" class="btn-7  "><span>CONTACT</span></a></li>
                            </ul>
                    </div>
                        <nav class="main-nav">
                        <ul>
                            <li class="wrap"><a href="/index#home" class="btn-7"><span>HOME</span></a></li>
                            <li class="wrap"><a href="/index#about" class="btn-7"><span>ABOUT</span></a></li>
                            <li class="wrap"><a href="/index#services" class="btn-7"><span>SERVICES</span></a></li>
                            <li class="wrap"><a href="/index#portfolio" class="btn-7"><span>PORTFOLIO</span></a></li>
                            <!-- <li class="wrap"><a href="#team" class="btn-7 scroll"><span>TEAM</span></a></li> -->
                            <li class="wrap"><a href="/index#price" class="btn-7"><span>PRICE</span></a></li>
                            <!-- <li class="wrap"><a href="#blog" class="btn-7 scroll"><span>BLOG</span></a></li> -->
                            <li class="wrap"><a href="/index#contact" class="btn-7"><span>CONTACT</span></a></li>

                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
      <div class="clearfix"></div>
    </section>
    <!-- HEADER END -->
    <div class="clearfix"></div>
  <section class="page-content detail-page">
        <div class="container page-content-wrapper">
          <div class="col-sm-12">

<?php
//Checking For reCAPTCHA
$captcha;
if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
}
// Checking For correct reCAPTCHA
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lc5YBYTAAAAAFmRRaNC-aZ6KNx_vD_NjXXP6XRf&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
if (!$captcha || $response.success == false) {
    echo "<p>Your CAPTCHA response was wrong.</p>";
} else {
    // Checking For Blank Fields..
    if ($_POST["vname"] == "" || $_POST["vemail"] == "" || $_POST["msg"] == "") {
        echo "<p>Fill All Fields..</p>";
    } else {
        // Check if the "Sender's Email" input field is filled out
        $email = $_POST['vemail'];
        // Sanitize E-mail Address
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // Validate E-mail Address
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email) {
            echo "<p>Invalid Sender's Email</p>";
        } else {
            $from = 'contact@bidwai.in';
            $to = $email;
            $to.= ", amit@bidwai.in";
            $subject = 'Website Responce';
            $message = $_POST['msg'];
            $headers = "From:" . $from;
            // Sender's Email
            // Message lines should not exceed 70 characters (PHP rule), so wrap it
            $message = wordwrap($message, 70, "\r\n");
            // Send Mail By PHP Mail Function
            if (mail($to, $subject, $message, $headers)) {
                echo "<p>Your mail has been sent successfully!<p>";
            } else {
                echo "<p><br><br><br>Failed to record query,Please send mail at contact@bidwai.in or try again. </p>";
            }
        }
    }
}
?>



<!-- Footer Start-->
<?php include 'thank.php';
?>
</div>
</div>
</section>
    <div class="clearfix"></div>
    <!-- FOOTER START -->
    <footer>
        <div class="footer-container">
            <div class="container">
                <div class="col-lg-5 col-md-3 col-sm-6 footer-left col-footer">
                    <a href="index.html"><img src="./assets/images/logofooter.png" class="img-responsive" alt="logo-img"></a>
                    <div class="clearfix"></div>
                    <span> <p align="justify">BTech is a technology driven company, focussing on ‘Custom Development’ of Web Apps and Mobile Apps. We are into Open Source Technology-based developments (JavaScript, Java) and cloud based deployments (DevOps). We provide services to design & develop software, for our global clients, through our fully equipped offshore development centre in Pune, India.</p></span>
                    <ul>
                        <li><a href="https://www.facebook.com/bidwaitechnologies/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/bidwai-associates"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/+BidwaiIn"><i class="fa fa-google"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC84etKRG4OoUiHuvxx8Vcpg"><i class="fa fa-youtube"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li> -->

                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-footer footer-nav first-nav">
                    <h3>Additional Links</h3>
                   <ul>
                        <li></li>
                        <li><a href="/index#home" class=" ">HOME</a></li>
                        <li><a href="/index#about" class=" ">ABOUT</a></li>
                        <li><a href="/index#services" class=" ">SERVICES</a></li>
                        <li><a href="/index#portfolio" class=" ">PORTFOLIO</a></li>
                        <li><a href="/index#team" class=" ">TEAM</a></li>
                        <li><a href="/index#blog" class=" ">BLOG</a></li>
                    </ul>
                </div>
                <div class="col-clearFix"></div>
                <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-footer footer-nav">
                    <h3>Blog</h3>
                    <ul>
                        <li><a href="blog.html">Full Width</a></li>
                        <li><a href="blog_with_leftbar.html">Blog With Left Sidebar</a></li>
                        <li><a href="blog_with_rightbar.html">Blog With Right Sidebar</a></li>
                        <li><a href="blog_detail.html">Blog Detail Page</a></li>
                        <li><a href="blog_detail_leftbar.html">Blog Detail Page With Left Sidebar</a></li>
                        <li><a href="blog_detail_rightbar.html">Blog Detail Page With Right Sidebar</a></li>
                    </ul>
                </div> -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-footer">
                  <!--   <h3>Photo Stream</h3> -->
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbidwaitechnologies%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=612930275552749" width="340" height="320" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </div>
        </div>
    </footer>
    <div class="clear"></div>
    <section class="botton-bar">
        <span>All Rights Reserved. © 2019 Design by <a href="mailto:amit@bidwai.in?Subject=Contact From Website">Bidwai Technologies</a></span>
    </section>
    <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    <!-- FOOTER END -->
    <script src="./assets/js/jquery-3.1.1.min.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/jquery.easing.min.js"></script>
    <script src="./assets/js/masterslider.min.js"></script>
    <script src="./assets/js/owl.carousel.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/circle-progress.js"></script>
    <script src="./assets/js/filterable.pack.js" type="text/javascript"></script>
    <script type="text/javascript" src="./assets/js/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGPFJHNu71XLhGbg3xjEw5XOdZt-tLURU"></script>
    <script src="./assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script src="./assets/js/jquery.viewportchecker.min.js" type="text/javascript"></script>
    <script src="./assets/js/main.js"></script>
    
</body>
</html>
<!-- Footer End-->