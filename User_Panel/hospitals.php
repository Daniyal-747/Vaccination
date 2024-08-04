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
    }

    #hospital {
        margin-top: 50px;
    }


    #txt {
        font-size: 50px;
        margin-bottom: 200px;
    }

    #image{
        margin-top: 50px;
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

    <!-- Crousel 1 Start -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="active item">
                <div class="carousel-content">
                    <img src="images/Agha Khan.png" alt="..." position="relative">
                </div>

                <!-- <div class="carousel-caption">
                                <h3 id="txt">Agha Khan University Hospital</h3>
                            </div> -->
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center" id="hospital">AGHA KHAN UNIVERSITY HOSPITAL</h3>

                    <p id="p-tag">The Aga Khan University Hospital in Karachi, established in 1985. Their vision is to provide premier,
                        tertiary, referral health care facilities to the people of Pakistan.AKU's objective is to promote human welfare by
                        disseminating knowledge and providing instruction, training, research and services in health sciences, education and
                        other disciplines. AKU is a non-denominational institution open to all on merit, and admissions to its academic
                        programmes are needs-blind. The University places special emphasis on the development of women. Through its high
                        academic standards, programmes relevant to the needs of developing societies, its work as a dialogue partner with
                        government on issues of health and education policy, and its delivery of critical social services, AKU has had a
                        national impact in Pakistan. With the launch of academic programmes in East Africa, the United Kingdom, Syria and
                        Afghanistan, AKU has now established itself as an international institution at ten sites in seven countries. AKU's
                        Faculty of Health Sciences, comprising a Medical College and a School of Nursing, is located on the same campus in
                        Karachi as Aga Khan University Hospital (AKUH). The Institute for Educational Development (AKUIED) is situated at
                        another campus in Karachi, while the Institute for the Study of Muslim Civilisations (AKU-ISMC) is based in
                        London. With the development of AKU-IED and AKU-ISMC, along with the planning of a Faculty of Arts and Sciences,
                        AKU has moved towards becoming a comprehensive university.</p>
                </div>
            </div>




        </div>
    </div>

    <!-- Crousel 1 End -->

    <!-- Crousel 2 Start -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="active item">
                <div class="carousel-content">
                    <img id="image" src="images/Liaqat National.jpg" alt="..." width="1500" position="relative">
                </div>

                <!-- <div class="carousel-caption">
                                <h3 id="txt">Agha Khan University Hospital</h3>
                            </div> -->
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center" id="hospital">LIAQAT NATIONAL HOSPITAL</h3>

                    <p id="p-tag">Welcome to Liaquat National Hospital! Every day thousands of people enter the gates of Liaquat National Hospital (LNH) seeking medical attention for themselves or their loved ones. With an undying commitment to excellence that meets international standards, regulations and quality systems, we make sure that the patient’s needs are met satisfactorily under a single roof. Liaquat National Hospital is located in the center of the bustling city of Karachi near the National Cricket Stadium. Owing to this unique location LNH has easy access from all quadrants of the city. LNH was conceived 60 years ago as a not-for-profit organization with a vision to provide quality healthcare at an affordable cost to all socioeconomic classes. Over the years, the hospital has evolved to become the largest tertiary care hospital in the country with more than 700 beds. We also have the largest number of ICU beds and ventilators in the city. The hospital excels in all facets of medicine, surgery, diagnostics and medical support services. LNH houses more than 35 specialties. Considering patient’s care as priority, we provide 24 hour emergency services, acute care, inpatient, outpatient and day care facilities not only to the city but also to patients from the far reaching corners of Sindh, Balochistan, Khyber Pakhtunkhwa and Punjab.</p>
                </div>
            </div>




        </div>
    </div>

    <!-- Crousel 2 End -->

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

    <!-- Crousel 3 Start -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="active item">
                <div class="carousel-content">
                    <img id="image" src="images/Ziauddin Hospital.jpg" alt="..." width="1500" height="500" position="relative">
                </div>

                <!-- <div class="carousel-caption">
                                <h3 id="txt">Agha Khan University Hospital</h3>
                            </div> -->
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center" id="hospital">Dr. Ziauddin Hospital North Nazimabad</h3>

                    <p id="p-tag">Operating under the Ziauddin Trust, Dr. Ziauddin Group of Hospitals is one of the largest private groups in the country. Its mission has been to reach out to the masses and cater to their needs for quality health care facilities at affordable rates in the country. It began with a small maternity home and has grown exponentially over the years to include five hospitals, including three tertiary-care facilities, responding to the healthcare needs of the people. All facilities under Dr. Ziauddin Group of Hospitals are equipped with state-of-the-art equipment and focused on providing services of the highest quality. The diagnostic technologies, and medical and surgical treatments provided, are controlled to keep pace with the technological advancements. The planning and development team of Dr. Ziauddin Group of Hospitals is working continuously to increase the patient capacity at each of the hospitals to make quality health care accessible to as many people as possible. Dr. Ziauddin Group of Hospitals competes with some of the biggest names in the healthcare industry and aspires to become the preferred healthcare facility for our people and a symbol of national pride for all.

Zia Medical Center located in Dubai, UAE is a part of Dr. Ziauddin Group of Hospitals. ZMC practices the same standard of excellence and provides premium healthcare to the residents of Dubai.</p>
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