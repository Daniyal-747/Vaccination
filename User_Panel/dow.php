<?php

include("../admin/connection.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <title>Health - Medical Website Template</title>
    <!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-style.css">

</head>

<style>

*{
        padding: 0;
        margin: 0;
    }

     #logo{
    height: 65px;
    margin-top: -10px;
    width: 150px;
    margin-left: -100px;
   }

   ul{
    list-style: none;
    text-align: center;
   }

   ul li{
    display: inline-block;
    position: relative;
   }

   ul li a{
    display: block;
    padding: 5px;
    font-size: 16px;
    color: #FFF;
    text-decoration: none;
    text-align: center;
   }

   ul li ul.dropdown li{
    display: block;
    background: white;
    margin: 2px 0px;
   }

   ul li ul.dropdown{
    width: auto;
    position: absolute;
    z-index: 999;
    display: none;
   }

   ul li a:hover{
    background: lightgoldenrodyellow;
   }

   ul li:hover ul.dropdown{
    display: block;
   }

   #footer{
     
     list-style: none;
     text-decoration: none;
     display: flex;
     align-items: center;
     margin: -25px;
     color: black;
   }

   ul li a{
     color: lightslategray;
   }

   #footer1{
     margin-left: 40px;
   }
   
    #p-tag {
        font-weight: 900;
        margin-top: 20px;
        text-align: center;
        margin-bottom: 50px;
    }

    #hospital {
        margin-top: 50px;
    }


    #txt {
        font-size: 50px;
        margin-bottom: 200px;
    }

    #footer1 li a{
     padding: 15px;
   }

   #footer1 li a:hover{
     padding: 15px;
     background-color: lightgoldenrodyellow;
   }


</style>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>


    <!-- HEADER -->
    <!-- <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to a Professional Health Care</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
                    </div>

               </div>
          </div>
     </header> -->


    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <img src="images/vms logo.png" id="logo" alt="">
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                        <li><a href="./index.php" class="smoothScroll">Home</a></li>
                         <li><a href="./about.php" class="smoothScroll">About Us</a></li>
                         <li><a href="#" class="smoothScroll">Hospitals &#x25BE;</a>
                         <ul class="dropdown">
                         <li><a href="./agha_khan.php">Agha Khan Hospital</a></li>
                         <li><a href="./liaqat.php">Liaqat National Hospital</a></li>
                         <li><a href="./dow.php">Dow University Hospital</a></li>
                         <li><a href="./ziauddin.php">Dr Ziauddin Hospital</a></li>

                         </ul>
                         </li>
                         <li><a href="./vaccines.php" class="smoothScroll">Vaccines</a></li>
                         <li><a href="./appointment.php" class="smoothScroll">Appointment</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <li class="appointment-btn"><a href="./register.php" target="_blank">Sign Up</a></li>
                         <li class="appointment-btn"><a href="./login.php" target="_blank">Sign In</a></li>




                </ul>
            </div>

        </div>
    </section>



    <!-- Crousel 3 Start -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="active item">
                <div class="carousel-content">
                    <img id="image" src="images/Dow Hospital.jpg" alt="..." width="1500" height="500" position="relative">
                </div>

                <!-- <div class="carousel-caption">
                                <h3 id="txt">Agha Khan University Hospital</h3>
                            </div> -->
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center" id="hospital">Dow University Hospital</h3>

                    <p id="p-tag">Dow University Hospital was established in the year 2009. It serves as a tertiary care University Hospital attached to Dow International Medical College for teaching and training of MBBS & Post-graduate students. The Dow hospital is a 5 story building, with large capacity of 1000 beds, fully equipped emergency room, spacious general wards, semi-private rooms, private rooms, an operation theater complex and labor rooms. It is also equipped with most modern facilities and units for treatment of surgical and medical problems, like the 12 bedded ICU and HDU, Nursery, Special Care Unit, Endoscopy Units, and the Liver Transplant Center. The hospital consists of Ultrasound, Echocardiography and pharmacy besides Seminar Rooms, a cafeteria, and the administrative departments. All types of routine and specialized surgeries are carried out by qualified and experienced surgeons of every specialty, including neurosurgery, cardiac surgery and even plastic surgery. The Intensive Care Unit (ICU) is also fully equipped with ventilators and other required equipment and monitors. High Dependency Unit (HDU) is meant for serious patients, not requiring ventilators. 10 dialysis machines are providing services till late night daily, separate machines are designated for Hepatitis B and C patients. A new dialysis lab has also been created to meet with demand for dialysis around the clock. A lab collection point is placed within the Dow Hospital to facilitate indoor and emergency patients, besides specialized collection centers all over the city, and interior of Sindh.</p>
                </div>
            </div>




        </div>
    </div>

    <!-- Crousel 3 End -->


    <!-- GOOGLE MAP -->
    <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>  

    <!-- FOOTER -->
    <footer data-stellar-background-ratio="5">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                        <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                        <div class="contact-info">
                            <p><i class="fa fa-phone"></i> 010-070-0170</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Useful Links</h4>
                              <ul id="footer1" class="st-footer-widget-nav st-mp0">
                              <li id="footer" ><a href="./index.php" class="smoothScroll">Home</a></li>
                              <li id="footer"><a href="./about.php" class="smoothScroll">About Us</a></li>
                              <li id="footer"><a href="./hospitals.php" class="smoothScroll">Hospitals</a></li>
                              <li id="footer"><a href="./vaccines.php" class="smoothScroll">Vaccines</a></li>
                              <li id="footer"><a href="./appointment.php" class="smoothScroll">Appointment</a></li>
                              <li id="footer"><a href="#google-map" class="smoothScroll">Contact</a></li>
                              </ul>

                              
                         </div>
                    </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <div class="opening-hours">
                            <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                            <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                            <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                            <p>Sunday <span>Closed</span></p>
                        </div>

                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/tooplate" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 border-top">
                    <div class="col-md-4 col-sm-6">
                        <div class="copyright-textr">
                            <p class="text-center">Copyright &copy; 2017 Your Company </p>


                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div> -->
                    <div class="col-md-2 col-sm-2 text-align-center">
                        <div class="angle-up-btn">
                            <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>