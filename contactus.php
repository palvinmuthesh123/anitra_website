<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Anitra now, for any query & request</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="title" content="Contact Anitra now, for any query & request">
    <meta name="description" content="Contact us at +91 93914 41074, Office address: Ratnam Chambers 2nd Floor, Plot 172, Kavuri Hills Phase 2 Rd, Madhapur, Telangana 500033.">
    <meta content="livestock trading, onlinesanta, pashumela, online livestock marketplace for farmers, livestock traceability, market place for livestock, livestock services, animal medicines, buy sheep, sell sheep, traceability, animal husbandry, fodder dairy cattle, buy a dairy cow,  cattle jersey, cow, buffalo, goat, sheep, swine, door step livestock services, Online Livestock marketplace, livestock monetization, best app for livestock trading, sell and buy livestock, best onlinesanta services  in india, livestock dealer, livestock farming" name="keywords">
    <link href="fonts/Helvetica-Font-Family/Helvetica.ttf" rel="fonts">
    <link href="fonts/Helvetica-Font-Family/helvetica-light-587ebe5a59211.ttf" rel="fonts">
    <link href="fonts/Helvetica-Font-Family/Helvetica-BoldOblique.ttf" rel="fonts">
    <link href="fonts/Helvetica-Font-Family/Helvetica-Oblique.ttf" rel="fonts">
    <link href="fonts/Helvetica-Font-Family/helvetica-compressed-5871d14b6903a.otf" rel="fonts">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/anitra_logo.png">
    <link rel="shortcut icon" type="image/png" href="images/anitra_logo.png">
    <link
    rel="apple-touch-icon" href="images/anitra_logo.png"/>
    <!-- //carousel// -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    <!-- Google tag (gtag.js) -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HE6RDYNFJL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-HE6RDYNFJL');
    </script>
    <!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '442201790874088');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=442201790874088&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
   
   
   <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $uname = $_POST['name'];
    $mobnum = $_POST['mobnumber'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@anitra.co'; // Your email
        $mail->Password = 'sjms atrv mywj slhb'; // Replace with your actual App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Email content
        $mail->setFrom($email, $uname);
        $mail->addAddress('info@anitra.co', 'Anitra Team');
        $mail->isHTML(true);
        $mail->Subject = "Received message from $uname";
        $mail->Body = "
        <div>
            <h3>Hello! Anitra Team,</h3>
            <p>We received an inquiry from:</p>
            <p><strong>Name:</strong> $uname</p>
            <p><strong>Mobile Number:</strong> $mobnum</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Comment:</strong> $comment</p>
        </div>";

        $mail->send();

        // Success Popup with SweetAlert2
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Message Sent!',
                text: 'Your message has been sent successfully.',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'your-form-page.php'; // Redirect to another page
                }
            });
        </script>";
    } catch (Exception $e) {
        // Error Popup with SweetAlert2
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Message Failed!',
                text: 'Message could not be sent. Error: {$mail->ErrorInfo}',
                confirmButtonText: 'Try Again'
            });
        </script>";
    }
}
?>



</head>

<body>


    <header class="header-area">
        <section class="header-lower">
            <div class="container">
                <div class="row d-flex justify-content-space-between align-items-center">
                    <div class="col-md-4 w-50 col-xs-6 d-flex justify-content-start">
                        <div class="logo">
                            <a href="index.html">
                                <img src="images/Anitra-Logo.png" alt="" width="180px">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 w-50 col-xs-6 justify-content-end align-items-center">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-8 d-flex justify-content-end">
                                <nav class="main-menu clearfix">
                                    <div class="navbar-header clearfix">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class=""><a href="index.html">Home</a></li>
                                            <li class="dropdown"><a href="about.html">About Us</a>
                                            </li>
                                            <li class="dropdown"><a href="services.html">Services</a></li>
                                            <li class="">
                                                    <a href="mithun.html">Mithun</a>
                                                </li>
                                            <!-- <li class="dropdown"><a href="https://anitra.co/blogs">Blog</a></li> -->
                                            <li class="current"><a href="contactus.php">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-4 play-btn justify-content-end">
                                <a href="https://play.google.com/store/apps/details?id=com.an.anitra" target="_blank">
                                    <img src="images/g-play-red (1) (1).png" alt="" width="176px">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sticky-header">
            <div class="container">
                <div class="row d-flex justify-content-space-between align-items-center">
                    <div class="col-md-4 mobile-width col-xs-6 d-flex justify-content-start">
                        <div class="logo">
                            <a href="index.html">
                                <img src="images/Anitra-Logo.png" alt="" width="180px">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 mobile-width col-xs-6 justify-content-end align-items-center">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-8 d-flex justify-content-end">
                                <nav class="main-menu clearfix">
                                    <div class="navbar-header clearfix">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class=""><a href="index.html">Home</a></li>
                                            <li class="dropdown"><a href="about.html">About Us</a>
                                            </li>
                                            <li class="dropdown"><a href="services.html">Services</a></li>
                                            <li class="">
                                                    <a href="mithun.html">Mithun</a>
                                                </li>
                                            <!-- <li class="dropdown"><a href="https://anitra.co/blogs">Blog</a></li> -->
                                            <li class="current"><a href="contactus.php">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-4 play-btn justify-content-end">
                                <a href="https://play.google.com/store/apps/details?id=com.an.anitra" target="_blank">
                                    <img src="images/g-play-red (1) (1).png" alt="" width="176px">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <!--Start rev slider wrapper-->
    <!-- <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="fade">
                    <img src="images/slides/1.jpg" alt="" width="1920" height="700" data-bgposition="top center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="0" data-y="top" data-voffset="370"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="700">

                        <div class="slide-content left-slide">
                            <div class="title">Get First Class</div>
                            <div class="big-title">Business Advice</div>
                            <div class="text">With over 10 years of experience helping businesses<br>to find
                                comprehensive solutions.</div>
                            <div class="btns-box">
                                <a href="about.html" class="thm-btn pdone">Read More</a>&ensp;
                                <a href="contactus.php" class="thm-btn btn-style-two pdtwo">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="images/slides/2.jpg" alt="" width="1920" height="700" data-bgposition="top center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="right" data-hoffset="0" data-y="top" data-voffset="370"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="1500">

                        <div class="slide-content right-slide">
                            <div class="title">Marketing Strategy &</div>
                            <div class="big-title">Industry Analysis</div>
                            <div class="text">With over 10 years of experience helping businesses<br>to find
                                comprehensive solutions.</div>
                            <div class="btns-box">
                                <a href="about.html" class="thm-btn pdone">Read More</a>&ensp;
                                <a href="contactus.php" class="thm-btn btn-style-two pdtwo">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="images/slides/3.jpg" alt="" width="1920" height="700" data-bgposition="top center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                    <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="0" data-y="top" data-voffset="370"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" data-start="1500">

                        <div class="slide-content left-slide">
                            <div class="title">The Best Theme For</div>
                            <div class="big-title">Consulting Agency</div>
                            <div class="text">With over 10 years of experience helping businesses<br>to find
                                comprehensive solutions.</div>
                            <div class="btns-box">
                                <a href="about.html" class="thm-btn pdone">Read More</a>&ensp;
                                <a href="contactus.php" class="thm-btn btn-style-two pdtwo">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section> -->
    <!--End rev slider wrapper-->


    <section class="breadcrumb-sec">
        <div class="container-fluid">
            <div class="row p-rel">
                <img src="images/breadcrumb-bg.png" alt="" width="100%">
                <div class="container bread-cont">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bread-heading">
                                <h1> <span> Contact</span></h1>
                                <div class="social justify-content-center align-items-center">
                                    <a href="index.html">
                                        <p class="m-0">Home</p>
                                    </a>
                                    <div class="small-dot"></div>
                                    <p class="m-0">Contact</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-sec">
        <div class="container">
            <!-- <div class="row d-flex justify-content-center align-items-center">
                <div class="mt-4 col-md-10">
                    <p class="text-center text-blue">
                        Anitra provides the best services for monetization of livestock, managing the livestock market to increase the profit of farmers.
                    </p>
                </div>
            </div> -->
            <div class="row mt-5 d-flex justify-content-space-between">
                <div class="col-md-6">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                <div class="heading mt-8 mb-4">
                                    <h2 class="text-center">Our <span>Address</span></h2>
                                    <p class="text-blue text-center">Reach out to us for any assistance at:</p>
                                </div>
                            </div>
                            <div class="cont-left">
                                <div class="d-flex ">
        
                                    <div>
                                        <div class="cont-icon">
                                            <a href="tel:9391441074">
                                                <img src="images/telephone-call.svg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="title">Contact Number :</p>
                                        <a href="tel:9391441074">
                                            <p class="desc">+91 9391441074</p>
                                        </a>
                                    </div>
                                </div>
        
                                <div class="d-flex align-items-start">
                                    <div>
                                        <div class="cont-icon">
                                            <a href="mailto:info@anitra.co" target="_blank">
                                                <img src="images/email.svg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="title">Email :</p>
                                        <a href="mailto:info@anitra.co" target="_blank">
                                            <p class="desc">info@anitra.co</p>
                                        </a>
                                    </div>
                                </div>
        
                                <div class="d-flex align-items-start">
                                    <div>
                                        <div class="cont-icon">
                                            <a href="https://www.google.com/maps/place/Anitra+Tech+Private+Limited/@17.4365898,78.3932949,15z/data=!4m5!3m4!1s0x0:0x520822f8123b45c6!8m2!3d17.4365898!4d78.3932949"
                                                target="_blank">
                                                <img src="images/location.svg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="title">Registered Address :</p>
                                        <a href="https://www.google.com/maps/place/Ahara+Technology+Group/@17.4244118,78.5389748,17z/data=!3m1!4b1!4m5!3m4!1s0x3bcb996724c31c29:0x65072bb48708a7f6!8m2!3d17.4244356!4d78.5411337"
                                            target="_blank">
                                            <p class="desc">SKANDHAMA 12-13-521/3, New No:1495, Street no-14, Nagarjuna Nagar, Tarnaka, Hyderabad , Telangana, India - 500017</p>
                                        </a>
                                        <!-- <p class="title">Corporate Address :</p>
                                        <a href="https://www.google.com/maps/place/Anitra+Tech+Private+Limited/@17.4365898,78.3932949,15z/data=!4m5!3m4!1s0x0:0x520822f8123b45c6!8m2!3d17.4365898!4d78.3932949"
                                            target="_blank">
                                            <p class="desc">RATNAM CHAMBERS, 2nd Floor, Plot # 172, Kavuri Hills, Phase 2, Madhapur,Hyderabad, Telangana, India - 500033</p>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 cf-sec">
                    <div class="heading mt-8">
                        <h2 class="text-center">Contact <span>Form</span></h2>
                        <p class="text-blue text-center">Join the country's best online livestock marketplace and
                            achieve, astounding growth in your livestock business.</p>
                    </div>
                    <div class="cont-right">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fas fa-user"></span>
                                    </div>
                                    <input class="form-control" id="email" name="name" type="text"
                                        placeholder="Your Name" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fas fa-mobile"></span>
                                    </div>
                                    <input class="form-control" id="email" name="mobnumber" type="text"
                                        placeholder="Mobile Number" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <input class="form-control" id="email" name="email" type="text"
                                        placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fas fa-message"></span>
                                    </div>
                                    <input class="form-control" id="email" name="comment" type="text-area"
                                        placeholder="Comment" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="thm-btn3">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="download-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-8">
                    <div class="heading">
                        <h1>
                            Download <span>Anitra</span>
                        </h1>
                    </div>
                    <p class="text-justify">You can contact us anytime and get support, by easily finding and connecting
                        with veterinary care, and logistics support and resolving any query with our customer services,
                        our app provides the most simple way to monetize, your livestock; Anitra, provides farmers
                        direct access to logistics, feed, and health information. Download the Anitra app today and get
                        started on your optimizing journey of livestock management.</p>
                    <h4 class="text-blue f-600">Download Anitra Mobile App Now.</h4>
                    <a href="https://play.google.com/store/apps/details?id=com.an.anitra" target="_blank">
                        <img class="mt-4" src="images/g-play-red (1) (1).png" width="250px" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="app-mobile mt-6">
                        <h2>
                            App for all livestock
                        </h2>
                        <div class="mob d-flex justify-content-center align-items-center">
                            <img src="images/3-mobile.png" alt="" width="250px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!--Start footer area-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                <div class="col-md-5">
                    <div class="single-footer-widget mar-btm">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="images/Group 426.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-md-7 single-footer-widget d-flex justify-content-end">
                    <!-- <form>
                    <div class="form-group ">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="fas fa-user"></span>
                            </div>
                            <input class="form-control" id="email" name="name" type="text"
                                placeholder="Your Name" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="fas fa-mobile"></span>
                            </div>
                            <input class="form-control" id="email" name="number" type="text"
                                placeholder="Mobile Number" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="fas fa-envelope"></span>
                            </div>
                            <input class="form-control" id="email" name="number" type="text" placeholder="Email" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="fas fa-message"></span>
                            </div>
                            <input class="form-control" id="email" name="number" type="text-area"
                                placeholder="Message" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="thm-btn3">Send</button>
                    </div>
                </form> -->
                    <div class="our-info footer-info">

                        <div class="social mb-0">
                            <a target="_blank" href="https://www.linkedin.com/company/14611998/admin/">
                                <div class="social-circle">
                                    <img src="images/ciblinkedin-1.svg" alt="">
                                </div>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100081725602068">
                                <div class="social-circle">
                                    <img src="images/Shape.svg" alt="" width="9px">
                                </div>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/anitra_tech/">
                                <div class="social-circle">
                                    <img src="images/instagram.svg" alt="" width="22px">
                                </div>
                            </a>
                            <a target="_blank" href="https://twitter.com/AnitraTech">
                                <div class="social-circle">
                                    <img src="images/Shape-1.svg" alt="" width="22px">
                                </div>
                            </a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCbNbdr-9cz5uUKkRoI42alg">
                                <div class="social-circle">
                                    <img src="images/youtube.svg" alt="" width="22px">
                                </div>
                            </a>
                        </div>
                        <div class="social">
                                <a href="contactus.php">
                                    <p class="m-0">Contact Us</p>
                                </a>
                                <div class="white-dot"></div>
                                <a href="privacy-policy.html">
                                    <p class="m-0">Privacy Policy</p>
                                </a>
                                <div class="white-dot"></div>
                                <a href="terms-of-use.html">
                                    <p class="m-0">Terms of Use</p>
                                </a>
                                <div class="white-dot"></div>
                                <a href="#">
                                    <p class="m-0">FAQ's</p>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
        </div>
    </footer>
    <!--End footer area-->





    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


    <a href="https://wa.me/919391441074" target="_blank" rel="noopener noreferrer">
    <div class="whatsapp-icon">
      <img src="/images/whatsapp.png" alt="" width="50px">
    </div>
  </a>

    <!-- //carousel// -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- main jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Wow Script -->
    <script src="js/wow.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- bx slider -->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- count to -->
    <script src="js/jquery.countTo.js"></script>
    <!-- owl carousel -->
    <!-- <script src="js/owl.carousel.min.js"></script> -->
    <!-- validate -->
    <script src="js/validation.js"></script>
    <!-- mixit up -->
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- gmap helper -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
    <!--gmap script-->
    <script src="js/gmaps.js"></script>
    <script src="js/map-helper.js"></script>
    <!-- video responsive script -->
    <script src="js/jquery.fitvids.js"></script>
    <!-- jQuery ui js -->
    <script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
    <!-- Language Switche  -->
    <script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
    <!-- fancy box -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.appear.js"></script>
    <!-- isotope script-->
    <script src="js/isotope.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- jQuery timepicker js -->
    <script src="assets/timepicker/timePicker.js"></script>
    <!-- Bootstrap select picker js -->
    <script src="assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>
    <script src="assets/html5lightbox/html5lightbox.js"></script>

    <!-- revolution slider js -->
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>


    <!-- thm custom script -->
    <script src="js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/solid.min.js"
        integrity="sha512-dcTe66qF6q/NW1X64tKXnDDcaVyRowrsVQ9wX6u7KSQpYuAl5COzdMIYDg+HqAXhPpIz1LO9ilUCL4qCbHN5Ng=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js"
        integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



</body>

</html>