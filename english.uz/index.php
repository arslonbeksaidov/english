<?php session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Learn English</title>
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

    <style>
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        a:link {
            color: #000;
            text-decoration: none;
        }

        a:visited {
            color: #000;
        }

        a:hover {
            color: #33F;
        }

        .button {
            background: -webkit-linear-gradient(top, #008dfd 0, #0370ea 100%);
            border: 1px solid #076bd2;
            border-radius: 3px;
            color: #fff;
            display: none;
            font-size: 13px;
            font-weight: bold;
            line-height: 1.3;
            padding: 8px 25px;
            text-align: center;
            text-shadow: 1px 1px 1px #076bd2;
            letter-spacing: normal;
        }

        .center {
            padding: 10px;
            text-align: center;
        }

        .final {
            color: black;
            padding-right: 3px;
        }

        .interim {
            color: gray;
        }

        .info {
            font-size: 14px;
            text-align: center;
            color: #777;
            display: none;
        }

        .right {
            float: right;
        }

        .sidebyside {
            display: inline-block;
            width: 45%;
            min-height: 40px;
            text-align: left;
            vertical-align: top;
        }

        #headline {
            font-size: 40px;
            font-weight: 300;
        }

        #info {
            font-size: 20px;
            text-align: center;
            color: #777;
            visibility: hidden;
        }

        #results {
            font-size: 14px;
            font-weight: bold;
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
            min-height: 150px;
        }

        #start_button {
            border: 0;
            background-color: transparent;
            padding: 0;

        }

        }
    </style>

    <link rel="icon" href="images/favicon.png">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



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
        <input type="search" value="" placeholder="Search here...." required/>
        <button type="submit" class="btn btn_common yellow">Search</button>
    </form>
</div>

<!--Slider-->
<section class="rev_slider_wrapper text-center">
    <!-- START REVOLUTION SLIDER 5.0 auto mode -->
    <div id="rev_slider_video" class="rev_slider" data-version="5.0">
        <ul>
            <!-- SLIDE  -->
            <li data-transition="fade">
                <!-- MAIN IMAGE -->
                <img src="video/thumb.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                     data-bgparallax="10" class="rev-slidebg">

                <div class="rs-background-video-layer"
                     data-volume="mute"
                     data-videowidth="100%"
                     data-videoheight="100%"
                     data-videomp4="video/video.mp4"
                     data-videopreload="preload"
                     data-videoloop="loop"
                     data-forceCover="1"
                     data-aspectratio="16:9"
                     data-autoplay="true"
                     data-autoplayonlyfirsttime="true"
                     data-nextslideatend="true"></div>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['240','170','160','110']" data-voffset="['0','0','0','0']"
                     data-responsive_offset="on"
                     data-visibility="['on','on','on','on']"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="200"><h1><br></h1>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['300','230','230','280']" data-voffset="['0','0','0','0']"
                     data-responsive_offset="on"
                     data-visibility="['on','on','on','off']"
                     data-transform_idle="o:1;"
                     data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                     data-transform_out="opacity:0;s:1000;s:1000;"
                     data-start="1500"><p></p>
                </div>
                <div class="tp-caption  tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['370','330','290','180']" data-voffset="['0','0','0','0']"
                     data-responsive_offset="on"
                     data-visibility="['on','on','on','on']"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                     data-start="2000"><br><br><br>

                </div>
            </li>
        </ul>
    </div>
    <!-- END REVOLUTION SLIDER -->
</section>


<!--ABout US-->
<section id="about" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6 priorty wow fadeInLeft">
                <h2 class="heading bottom25">Welcome to our English course<span class="divider-left"></span></h2>

                <p style="font-size: 20px">
                    Elementary or secondary school teachers in most states in the United States must have a degreee in education with an endorsement or add-on
                    certification in ESL.Certification recuirementscan be obtained from state departaments of education ,and may be reciprocal from state of state.University
                    teacher training programs offer the required courses and are another source of information regarding state certification requirements.
                </p>

                <p></p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="about-post">
                            <a href="#." class="border_radius"><img src="images/hands.png" alt="hands"></a>
                            <h4>Good Planning</h4>

                            <p>Success seems to be connected with action .Successful people keep moving .</p>
                        </div>
                        <div class="about-post">
                            <a href="#." class="border_radius"><img src="images/awesome.png" alt="hands"></a>
                            <h4>Happy Learning </h4>

                            <p>Never stop learning,because life never stops teaching .
                                You can't live a positive life with a negative mind.
                                Live happy.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-post">
                            <a href="#." class="border_radius"><img src="images/maintenance.png" alt="hands"></a>
                            <h4>Our Courses</h4>

                            <p>Don't resort to imitation but rather look for insperation to further your own creation in pursuit of innovation.</p>
                        </div>
                        <div class="about-post">
                            <a href="#." class="border_radius"><img src="images/home.png" alt="hands"></a>
                            <h4>Our Teachers</h4>

                            <p>Teachers who love teaching,teach children to love learning .</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-6 wow fadeInRight">
                <img src="images/hd%20english/9.jpg" alt="our priorties" class="img-responsive" style="width:100%;">
            </div>
        </div>
    </div>
    <div class="container margin_top">
        <div class="row">
            <h1 class="center" id="headline">

                Speak english in order to correct your pronunciation</h1>

            <div id="info">
                <p id="info_start">Press microphone button and speak</p>

                <p id="info_speak_now">speak now </p>

                <p id="info_no_speech">Your voice was not ascertained. Please
                    <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                        Check the microphone</a>.</p>

                <p id="info_no_microphone" style="display:none">
                    Microphone is not found. Ensure that a microphone is installed and that
                    <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                        microphone settings</a> are configured correctly.</p>

                <p id="info_allow">Click the "Allow" button above to enable your microphone.</p>

                <p id="info_denied">Permission to use microphone was denied.</p>

                <p id="info_blocked">Permission to use microphone is blocked. To change,
                    go to chrome://settings/contentExceptions#media-stream</p>

                <p id="info_upgrade">Web Speech API is not supported by this browser.
                    Upgrade to <a href="//www.google.com/chrome">Chrome</a>
                    version 25 or later.</p>
            </div>
            <div class="right">
                <button id="start_button" onclick="startButton(event)">
                    <i class="fa fa-microphone" aria-hidden="true"></i></button>
            </div>
            <div id="results">
                <span id="final_span" class="final"></span>
                <span id="interim_span" class="interim"></span>

                <p>
            </div>
            <div class="center">
                <div class="sidebyside" style="text-align:right">
                    <button id="copy_button" class="button" onclick="copyButton()">
                        Copy and Paste
                    </button>
                    <div id="copy_info" class="info">
                        Press Control-C to copy text.<br>(Command-C on Mac.)
                    </div>
                </div>
                <div class="sidebyside">
                    <button id="email_button" class="button" onclick="emailButton()">
                        Create Email
                    </button>
                    <div id="email_info" class="info">
                        Text sent to default email application.<br>
                        (See chrome://settings/handlers to change.)
                    </div>
                </div>
                <p>

                <div id="div_language">
                    <select id="select_language" onchange="updateCountry()"></select>
                    &nbsp;&nbsp;
                    <select id="select_dialect"></select>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABout US-->


<!--Paralax -->
<section id="parallax" class="parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow bounceIn">
                <h2>We Believe that Education for Everyone Since</h2>

                <h1 class="margin10">1942</h1>
                <a href="#." class="border_radius btn_common white_border margin10">Gaet a Quote</a>
            </div>
        </div>
    </div>
</section>
<!--Paralax -->


<!--Fun Facts-->
<section id="facts" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInDown">
                <h2 class="heading">Education Statistics<span class="divider-center"></span></h2>


            </div>
        </div>
        <div class="row number-counters">
            <div class="col-md-2 col-sm-4">
                <div class="counters-item">
                    <i class="icon-checkmark3"></i>
                    <strong data-to="1235">0</strong>
                    <!-- Set Your Number here. i,e. data-to="56" -->
                    <p>Project Completed</p>
                </div>
                <div class="counters-item last">
                    <i class="icon-trophy"></i>
                    <strong data-to="78">0</strong>

                    <p>Awards Won</p>
                </div>
            </div>
            <div class="col-md-7 col-sm-4">
                <div class="fact-image">
                    <img src="images/hd%20english/18.jpg" alt=" some facts" class="img-responsive">
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="counters-item">
                    <i class=" icon-icons20"></i>
                    <strong data-to="186">0</strong>

                    <p>Hours of Work / Month</p>
                </div>
                <div class="counters-item last">
                    <i class="icon-happy"></i>
                    <strong data-to="89">0</strong>

                    <p>Satisfied Clients</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Customers Review-->



<!--Pricings-->

<!--Pricings-->


<!-- Courses -->
<section id="courses" class="padding parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInDown">
                <h2 class="heading heading_space">Popular fraze<span class="divider-left"></span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="slider_wrapper">
                    <div id="course_slider" class="owl-carousel">
                        <div class="item">
                            <div class="image bottom20">
                                <img src="images/hd%20english/22.jpg" alt="Courses" class="img-responsive border_radius">
                            </div>
                            <h3 class="bottom15"><a href="course_detail.html"></a></h3>

                            <p class="bottom15"></p>
<!--                            <a href="course_detail.html" class="btn_common blue border_radius">Read More</a>-->
                        </div>
                        <div class="item">
                            <div class="image bottom20">
                                <img src="images/hd%20english/19.jpg" alt="Courses" class="img-responsive border_radius">
                            </div>
                            <h3 class="bottom15"><a href="course_detail.html"></a></h3>

                            <p class="bottom15"></p>
<!--                            <a href="course_detail.html" class="btn_common blue border_radius">Read More</a>-->
                        </div>
                        <div class="item">
                            <div class="image bottom20">
                                <img src="images/hd%20english/10.jpg" alt="Courses" class="img-responsive border_radius">
                            </div>
                            <h3 class="bottom15"><a href="course_detail.html"></a></h3>

                            <p class="bottom15"></p>
                            <!--<a href="course_detail.html" class="btn_common blue border_radius">Read More</a>-->
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Courses -->

<!-- News-->



<!--FOOTER-->
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
<script>
    var langs =
        [['Afrikaans', ['af-ZA']],
            ['Bahasa Indonesia', ['id-ID']],
            ['Bahasa Melayu', ['ms-MY']],
            ['Català', ['ca-ES']],
            ['Čeština', ['cs-CZ']],
            ['Deutsch', ['de-DE']],
            ['English', ['en-AU', 'Australia'],
                ['en-CA', 'Canada'],
                ['en-IN', 'India'],
                ['en-NZ', 'New Zealand'],
                ['en-ZA', 'South Africa'],
                ['en-GB', 'United Kingdom'],
                ['en-US', 'United States']],
            ['Español', ['es-AR', 'Argentina'],
                ['es-BO', 'Bolivia'],
                ['es-CL', 'Chile'],
                ['es-CO', 'Colombia'],
                ['es-CR', 'Costa Rica'],
                ['es-EC', 'Ecuador'],
                ['es-SV', 'El Salvador'],
                ['es-ES', 'España'],
                ['es-US', 'Estados Unidos'],
                ['es-GT', 'Guatemala'],
                ['es-HN', 'Honduras'],
                ['es-MX', 'México'],
                ['es-NI', 'Nicaragua'],
                ['es-PA', 'Panamá'],
                ['es-PY', 'Paraguay'],
                ['es-PE', 'Perú'],
                ['es-PR', 'Puerto Rico'],
                ['es-DO', 'República Dominicana'],
                ['es-UY', 'Uruguay'],
                ['es-VE', 'Venezuela']],
            ['Euskara', ['eu-ES']],
            ['Français', ['fr-FR']],
            ['Galego', ['gl-ES']],
            ['Hrvatski', ['hr_HR']],
            ['IsiZulu', ['zu-ZA']],
            ['Íslenska', ['is-IS']],
            ['Italiano', ['it-IT', 'Italia'],
                ['it-CH', 'Svizzera']],
            ['Magyar', ['hu-HU']],
            ['Nederlands', ['nl-NL']],
            ['Norsk bokmål', ['nb-NO']],
            ['Polski', ['pl-PL']],
            ['Português', ['pt-BR', 'Brasil'],
                ['pt-PT', 'Portugal']],
            ['Română', ['ro-RO']],
            ['Slovenčina', ['sk-SK']],
            ['Suomi', ['fi-FI']],
            ['Svenska', ['sv-SE']],
            ['Türkçe', ['tr-TR']],
            ['български', ['bg-BG']],
            ['Pусский', ['ru-RU']],
            ['Узбекский', ['uz-UZ']],
            ['Српски', ['sr-RS']],
            ['한국어', ['ko-KR']],
            ['中文', ['cmn-Hans-CN', '普通话 (中国大陆)'],
                ['cmn-Hans-HK', '普通话 (香港)'],
                ['cmn-Hant-TW', '中文 (台灣)'],
                ['yue-Hant-HK', '粵語 (香港)']],
            ['日本語', ['ja-JP']],
            ['Lingua latīna', ['la']]];

    for (var i = 0; i < langs.length; i++) {
        select_language.options[i] = new Option(langs[i][0], i);
    }
    select_language.selectedIndex = 6;
    updateCountry();
    select_dialect.selectedIndex = 6;
    showInfo('info_start');

    function updateCountry() {
        for (var i = select_dialect.options.length - 1; i >= 0; i--) {
            select_dialect.remove(i);
        }
        var list = langs[select_language.selectedIndex];
        for (var i = 1; i < list.length; i++) {
            select_dialect.options.add(new Option(list[i][1], list[i][0]));
        }
        select_dialect.style.visibility = list[1].length == 1 ? 'hidden' : 'visible';
    }

    var create_email = false;
    var final_transcript = '';
    var recognizing = false;
    var ignore_onend;
    var start_timestamp;
    if (!('webkitSpeechRecognition' in window)) {
        upgrade();
    } else {
        start_button.style.display = 'inline-block';
        var recognition = new webkitSpeechRecognition();
        recognition.continuous = true;
        recognition.interimResults = true;

        recognition.onstart = function () {
            recognizing = true;
            showInfo('info_speak_now');
            start_img.src = 'mic-animate.gif';
        };

        recognition.onerror = function (event) {
            if (event.error == 'no-speech') {
                start_img.src = 'mic.gif';
                showInfo('info_no_speech');
                ignore_onend = true;
            }
            if (event.error == 'audio-capture') {
                start_img.src = 'mic.gif';
                showInfo('info_no_microphone');
                ignore_onend = true;
            }
            if (event.error == 'not-allowed') {
                if (event.timeStamp - start_timestamp < 100) {
                    showInfo('info_blocked');
                } else {
                    showInfo('info_denied');
                }
                ignore_onend = true;
            }
        };

        recognition.onend = function () {
            recognizing = false;
            if (ignore_onend) {
                return;
            }
            start_img.src = 'mic.gif';
            if (!final_transcript) {
                showInfo('info_start');
                return;
            }
            showInfo('');
            if (window.getSelection) {
                window.getSelection().removeAllRanges();
                var range = document.createRange();
                range.selectNode(document.getElementById('final_span'));
                window.getSelection().addRange(range);
            }
            if (create_email) {
                create_email = false;
                createEmail();
            }
        };

        recognition.onresult = function (event) {
            var interim_transcript = '';
            for (var i = event.resultIndex; i < event.results.length; ++i) {
                if (event.results[i].isFinal) {
                    final_transcript += event.results[i][0].transcript;
                } else {
                    interim_transcript += event.results[i][0].transcript;
                }
            }
            final_transcript = capitalize(final_transcript);
            final_span.innerHTML = linebreak(final_transcript);
            interim_span.innerHTML = linebreak(interim_transcript);
            if (final_transcript || interim_transcript) {
                showButtons('inline-block');
            }
        };
    }

    function upgrade() {
        start_button.style.visibility = 'hidden';
        showInfo('info_upgrade');
    }

    var two_line = /\n\n/g;
    var one_line = /\n/g;
    function linebreak(s) {
        return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
    }

    var first_char = /\S/;
    function capitalize(s) {
        return s.replace(first_char, function (m) {
            return m.toUpperCase();
        });
    }

    function createEmail() {
        var n = final_transcript.indexOf('\n');
        if (n < 0 || n >= 80) {
            n = 40 + final_transcript.substring(40).indexOf(' ');
        }
        var subject = encodeURI(final_transcript.substring(0, n));
        var body = encodeURI(final_transcript.substring(n + 1));
        window.location.href = 'mailto:?subject=' + subject + '&body=' + body;
    }

    function copyButton() {
        if (recognizing) {
            recognizing = false;
            recognition.stop();
        }
        copy_button.style.display = 'none';
        copy_info.style.display = 'inline-block';
        showInfo('');
    }

    function emailButton() {
        if (recognizing) {
            create_email = true;
            recognizing = false;
            recognition.stop();
        } else {
            createEmail();
        }
        email_button.style.display = 'none';
        email_info.style.display = 'inline-block';
        showInfo('');
    }

    function startButton(event) {
        if (recognizing) {
            recognition.stop();
            return;
        }
        final_transcript = '';
        recognition.lang = select_dialect.value;
        recognition.start();
        ignore_onend = false;
        final_span.innerHTML = '';
        interim_span.innerHTML = '';
        start_img.src = 'mic-slash.gif';
        showInfo('info_allow');
        showButtons('none');
        start_timestamp = event.timeStamp;
    }

    function showInfo(s) {
        if (s) {
            for (var child = info.firstChild; child; child = child.nextSibling) {
                if (child.style) {
                    child.style.display = child.id == s ? 'inline' : 'none';
                }
            }
            info.style.visibility = 'visible';
        } else {
            info.style.visibility = 'hidden';
        }
    }

    var current_style;
    function showButtons(style) {
        if (style == current_style) {
            return;
        }
        current_style = style;
        copy_button.style.display = style;
        email_button.style.display = style;
        copy_info.style.display = 'none';
        email_info.style.display = 'none';
    }
</script>

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
