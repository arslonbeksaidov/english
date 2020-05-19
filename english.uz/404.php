<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Edua | 404</title>
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

<body>
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
              <li><a href="test1.php">Example test</a></li>
              <li><a href="gallery.php">gallery</a></li>
              <li><a href="teachers.php">Teachers</a></li>
            </ul>
          </li>


          <?php
          if(isset($_SESSION['users'])){?>
            <li><a href="speak.php">speech rec</a></li>
            <li><a href="darslar.php">Tests</a></li>

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

    <!--sidebar-->
    <div class="sidebar_menu">
      <nav class="pushmenu pushmenu-right">
        <a class="push-logo" href="index.php"><img src="images/logo.png" alt="logo"></a>
        <ul class="push_nav centered">
          <li class="dropdown clearfix">
            <a href="index.php" class="dropdown-toggle"><span>01.</span>Home</a>

          <li class="dropdown clearfix">
            <a href="about1.php" class="dropdown-toggle"> <span>02.</span>about us</a>

          </li>
          <li class="dropdown clearfix">
            <a href="blog.php" class="dropdown-toggle"> <span>03.</span>News</a>

          </li>
          <li class="dropdown clearfix">
            <a href="contact.php" class="dropdown-toggle"> <span>04.</span>Contact as</a>

          </li>
          <li class="dropdown clearfix">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>05.</span> Menu</a>
            <ul class="dropdown-menu">
              <li><a href="test1.php">Example test</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="teachers.php">Teachers</a></li>

            </ul>
          </li>
          <li><a href="speak.php"> <span>06.</span>speech rec</a></li>
          <li><a href="darslar.php"> <span>06.</span>Tests</a></li>
        </ul>
        <div class="clearfix"></div>
        <ul class="social_icon black top25 bottom20">
          <li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
          <li><a href="#." class="instagram"><i class="icon-instagram"></i></a></li>
        </ul>
      </nav>
    </div>
  </nav>
</header>


<!--Search-->
<div id="search">
  <button type="button" class="close">×</button>
  <form>
    <input type="search" value="" placeholder="Search here...."  required/>
    <button type="submit" class="btn btn_common blue">Search</button>
  </form>
</div>

<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1> Error</h1>
        <p></p>
        <div class="page_nav">
      <span>You are here:</span> <a href="index.html">Home</a> <span><i class="fa fa-angle-double-right"></i>404</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->



<!--Error 404 SECTION-->
<section id="error" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
      <div class="error wow bounceIn" data-wow-delay="300ms">
         <h1>Error</h1>
         <h2></h2>
      </div>
      <p class="heading_space">We are sorry,login or password wrong .Please  try again ! ! !</p>
      <a href="register.php" class="btn_common blue border_radius wow fadeIn" data-wow-delay="400ms">Sign up</a>
      <a href="kirish.php" class="btn_common yellow border_radius wow fadeIn" data-wow-delay="400ms">Login</a>
      </div>
    </div>
  </div>
</section>



<!--Footer-->
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

