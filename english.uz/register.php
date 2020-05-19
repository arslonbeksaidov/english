<?php session_start();?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>English.uz</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/edua-icons.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">

    <link rel="icon" href="images/favicon.png">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="pushmenu-push">
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<div class="loader">
    <div class="bouncybox">
        <div class="bouncy"></div>
    </div>
</div>

<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <span class="info"><a href="contact.php"> Have any question?</a></span>
                    <span class="info"><i class="icon-phone2"></i>(97) 791-03-90</span>
                    <span class="info"><i class="icon-mail"></i>muqaddas2017@gmail.com</span>
                </div>
                <ul class="social_top pull-right">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="icon-twitter4"></i></a></li>
                    <li><a href="#."><i class="icon-google"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!--Header-->
<header>
  <nav class="navbar navbar-default navbar-sticky bootsnav pushy">
      <div class="container">
          <div id="menu_bars" class="right">
              <span class="t1"></span>
              <span class="t2"></span>
              <span class="t3"></span>
          </div>
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                  <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="index.php">
                  <p style=" font-family:Palatino Linotype;
            font-size: 30px;
            font-weight: 600;">English.uz</p>
              </a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
              <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
                  <li><a href="index.php">Home</a></li>

                  <li><a href="about1.php">About us</a></li>
                  <li><a href="blog.php">news</a></li>
                <li><a href="contact.php">contoct us</a></li>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >menu</a>
                    <ul class="dropdown-menu">
                      <li><a href="test1.php">Namuna test</a></li>
                      <li><a href="gallery.php">gallery</a></li>
                      <li><a href="teachers.php">Teachers</a></li>
                    </ul>
                  </li>
                    <!-- <li class="dropdown"><a href="gallery.php">Galereya</a></li> -->


                  <!-- <li><a href="contact.php">contoct as</a></li> -->

<?php
if(isset($_SESSION['users'])){?>
                  <li><a href="speak.php">speech rec</a></li>
                  <li><a href="test1.php">Test</a></li>
                  <li><a href="structura/chiqish.php"><?php echo $_SESSION['users'];?></a></li>
<?php }?>
                  <?php if(!isset($_SESSION['users']))
                  {
                  ?>

                   <li><a href="register.php">Sign up</a></li>
                  <li><a href="kirish.php">Login</a></li>

                  <?php } ?>
              </ul>
          </div>
      </div>

      <div class="sidebar_menu">
          <nav class="pushmenu pushmenu-right">
              <a class="push-logo" href="index.php"><img src="images/logo.png" alt="logo"></a>
              <ul class="push_nav centered">
                  <li class="dropdown clearfix">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>01.</span>Home</a>
                      <ul class="dropdown-menu">
                          <li><a href="index.php">Home 01</a></li>
                          <li><a href="index2.html">Home 02</a></li>
                          <li><a href="index.php">Home 03</a></li>
                          <li><a href="index4.html">Home 04</a></li>
                      </ul>
                  </li>
                  <li class="dropdown clearfix">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>02.</span> courses</a>
                      <ul class="dropdown-menu">
                          <li><a href="courses.html">Courses</a></li>
                          <li><a href="course_detail.html">Courses Detail</a></li>
                      </ul>
                  </li>
                  <li class="dropdown clearfix">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>03.</span>events</a>
                      <ul class="dropdown-menu">
                          <li><a href="event.html">events</a></li>
                          <li><a href="event_detail.html">events Detail</a></li>
                      </ul>
                  </li>
                  <li class="dropdown clearfix">
                      <a href="#." class="dropdown-toggle" data-toggle="dropdown"> <span>04.</span> Pages</a>
                      <ul class="dropdown-menu clearfix">
                          <li><a href="shop.html">Shop</a></li>
                          <li><a href="shop_detail.html">Shop Detail</a></li>
                          <li><a href="shop_cart.html">Cart</a></li>
                          <li><a href="about.html">About</a></li>
                          <li><a href="testinomial.html">Testinomial</a></li>
                          <li><a href="teachers.html">Teachers</a></li>
                          <li><a href="pricing.html">Pricings</a></li>
                          <li><a href="gallery.html">Gallery</a></li>
                          <li><a href="faq.html">Faq</a></li>
                          <li><a href="404.html">404</a></li>
                      </ul>
                  </li>
                  <li class="dropdown clearfix">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>05.</span> Blog</a>
                      <ul class="dropdown-menu">
                          <li><a href="blog.html">Blog 01</a></li>
                          <li><a href="blog2.html">Blog 02</a></li>
                          <li><a href="blog3.html">Blog 03</a></li>
                          <li><a href="blog_detail.html">Blog Detail</a></li>
                      </ul>
                  </li>
                  <li><a href="contact.html"> <span>06.</span> Contact Us</a></li>
              </ul>
              <div class="clearfix"></div>
              <ul class="social_icon black top25 bottom20">
                  <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
                  <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
              </ul>
          </nav>
      </div>



</header>
<div class="container">
    <br><br>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" id="forma" action="structura/register.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                    <input type="text" class="form-control" id="username" placeholder="login" name="your username" required>
                </div>
                <div class="form-group">
                    <label for="name"><span class="glyphicon glyphicon-registration-mark"></span>Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your name" name="name">
                </div>
                <div class="form-group">
                    <label for="surname"><span class="glyphicon glyphicon-eject"></span>Surname</label>
                    <input type="text" class="form-control" id="surname" placeholder="Your surname" name="surname">
                </div>
                <div class="form-group">
                    <label for="tel"><span class="glyphicon glyphicon-plus"></span>phone number</label>
                    <input type="tel" class="form-control" id="tel" placeholder="Your phone number" name="tel">
                </div>
                <div class="form-group">
                    <label for="mail"><span class="glyphicon glyphicon-inbox"></span>email</label>
                    <input type="email" class="form-control" id="mail" placeholder="Your email address" name="mail">
                </div>
                <div class="form-group">
                    <label for="birthday"><span class="glyphicon glyphicon-calendar"></span>Birth day
                        </label>
                    <input type="date" class="form-control" id="birthday" placeholder=""
                           name="birthday">
                </div>

                <div class="form-group">
                    <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                    <input type="password" class="form-control" id="pass" placeholder=" your password" name="pass">
                </div>
                <div class="form-group">
                    <label for="pass2"><span class="glyphicon glyphicon-eye-close"></span>confirm password</label>
                    <input type="password" class="form-control" id="pass2" placeholder="your confirm password" name="pass2" required>
                    <div id="mess"></div>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="" checked>Remember me</label>
                </div>
                <button type="submit" class="btn btn-success btn-block" name="submit"><span
                        class="glyphicon glyphicon-off"></span> Sign up
                </button>
            </form>
        </div>
    </div>

</div>








<!--FOOTER-->
<footer class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 footer_panel bottom25">
                <h3 class="heading bottom25">About Us<span class="divider-left"></span></h3>
                <a href="index.php" class="footer_logo bottom25"></a>
                <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
                <ul class="social_icon top25">
                    <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
                    <li><a href="#." class="dribble"><i class="icon-dribbble5"></i></a></li>
                    <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
                    <li><a href="#." class="vimo"><i class="icon-vimeo4"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 footer_panel bottom25">
                <h3 class="heading bottom25">Quick Links<span class="divider-left"></span></h3>
                <ul class="links">
                    <li><a href="index.php"><i class="icon-chevron-small-right"></i>Home</a></li>
                    <li><a href="about1.php"><i class="icon-chevron-small-right"></i>About us</a></li>
                    <li><a href="contact.php"><i class="icon-chevron-small-right"></i>Contoct us</a></li>
                    <li><a href="blog.php"><i class="icon-chevron-small-right"></i>News</a></li>
                    <li><a href="gallery.php"><i class="icon-chevron-small-right"></i>Gallery</a></li>
                    <li><a href="teachers.php"><i class="icon-chevron-small-right"></i>Teachers</a></li>
                    <li><a href="register.php"><i class="icon-chevron-small-right"></i>Sign up</a></li>
                    <li><a href="kirish.php"><i class="icon-chevron-small-right"></i>Login</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 footer_panel bottom25">
                <h3 class="heading bottom25">Keep in Touch <span class="divider-left"></span></h3>
                <p class=" address"><i class="icon-map-pin"></i>TUIT Urgench Branch. Al-Xorazmiy 110, Uzbekistan</p>
                <p class=" address"><i class="icon-phone"></i>(97) 791-03-90</p>
                <p class=" address"><i class="icon-mail"></i><a href="mailto:Edua@info.com">muqaddas2017@gmail.com</a></p>
                <img src="images/footer-map.png" alt="we are here" class="img-responsive">
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright &copy; 2017 <a href="#.">TUIT</a>. all rights reserved.</p>
            </div>
        </div>
    </div>
</div>
<!--FOOTER ends-->



<script src="js/jquery-2.2.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/functions.js"></script>

</body>

</html>
