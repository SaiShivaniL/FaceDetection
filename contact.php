<?php
require "common.php";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
      #map {
        width: 1200px;
        height: 400px;
        background-color: grey;
      }
    </style>
        <title>WHEELZ</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
     
    <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo-img">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="index.php">home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="service.php">service</a></li>
                                        <li><a href="testimonials.php">Testimonials</a></li>
                                        <li><a class="active" href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="book_room">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="formtext.php">Make an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <body>
       
        <div class="bradcam_area breadcam_bg overlay2">
                <h3>contact us</h3>
            </div>
        
        <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map">        
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7614.047266344689!2d78.39715340641717!3d17.41065344751848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb96b085001d67%3A0x4f48deff88efc042!2sG.%20Narayanamma%20Institute%20of%20Technology%20and%20Science!5e0!3m2!1sen!2sin!4v1592215370989!5m2!1sen!2sin" width="1200" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
    
    
                <div class="row" >
                    <div class="col-12">
                        <h2 class="contact-title">Get in Contact</h2>
                    </div>
                    <div class="col-lg-8"style="background-color: #4A3600">
                        <form action="contact_process.php" method="post" >
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text"  placeholder="Enter message" name="message"  >
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                         <input type="text"  placeholder="Enter your Name" name="name"  >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input  type="text"  placeholder="Email" name="email" > 
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input  type="text"  placeholder="Subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            
                            <div class="media-body">
                                <span class="glyphicon glyphicon-home"></span>
                                <h3>Shaikpet Rd, Ambedkar Nagar, Shaikpet</h3>
                                <p>Hyderabad, Telangana 500104</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <span class="glyphicon glyphicon-phone"></span>
                                <h3>+91 9876543210</h3>
                                <p>Mon to Fri 8am to 11pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <span class="glyphicon glyphicon-envelope"></span>
                                <h3>Wheelz@123gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
