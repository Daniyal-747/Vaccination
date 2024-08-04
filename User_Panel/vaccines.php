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
        font-style: italic;
        font-size: large;
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

    #vaccine{
        margin-top: 100px;
    }

    #footer1 li a{
     padding: 15px;
   }

   #footer1 li a:hover{
     padding: 15px;
     background-color: lightgoldenrodyellow;
   }

    #google-map{
        margin-top: 50px;
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
                    <img src="images/vaccine.png" width="1500" height="650" alt="..." position="relative">
                </div>

                <!-- <div class="carousel-caption">
                                <h3 id="txt">Agha Khan University Hospital</h3>
                            </div> -->
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center" id="hospital">Covid-19</h3>

                    <p id="p-tag">Coronaviruses are a family of viruses that can cause illnesses such as the common cold, severe acute respiratory syndrome (SARS) and Middle East respiratory syndrome (MERS). In 2019, a new coronavirus was identified as the cause of a disease outbreak that originated in China. The virus is known as severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The disease it causes is called coronavirus disease 2019 (COVID-19). In March 2020, the World Health Organization (WHO) declared the COVID-19 outbreak a pandemic. Public health groups, including the U.S. Centers for Disease Control and Prevention (CDC) and WHO, are monitoring the COVID-19 pandemic and posting updates on their websites. These groups have also issued recommendations for preventing and treating the virus that causes COVID-19.</p>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center" id="hospital">Chickenpox</h3>

                    <p id="p-tag">Chickenpox is an infection caused by the varicella-zoster virus. It causes an itchy rash with small, fluid-filled blisters. Chickenpox is highly contagious to people who haven't had the disease or been vaccinated against it. Today, a vaccine is available that protects children against chickenpox. Routine vaccination is recommended by the U.S. Centers for Disease Control and Prevention (CDC). The chickenpox vaccine is a safe, effective way to prevent chickenpox and its possible complications.</p>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center" id="hospital">Dengue</h3>

                    <p id="p-tag">Dengue (DENG-gey) fever is a mosquito-borne illness that occurs in tropical and subtropical areas of the world. Mild dengue fever causes a high fever and flu-like symptoms. The severe form of dengue fever, also called dengue hemorrhagic fever, can cause serious bleeding, a sudden drop in blood pressure (shock) and death. Millions of cases of dengue infection occur worldwide each year. Dengue fever is most common in Southeast Asia, the western Pacific islands, Latin America and Africa. But the disease has been spreading to new areas, including local outbreaks in Europe and southern parts of the United States. Researchers are working on dengue fever vaccines. For now, in areas where dengue fever is common, the best ways to prevent infection are to avoid being bitten by mosquitoes and to take steps to reduce the mosquito population</p>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center" id="hospital">Flu</h3>

                    <p id="p-tag">Flu (influenza) is an infection of the nose, throat and lungs, which are part of the respiratory system. Influenza is commonly called the flu, but it's not the same as stomach "flu" viruses that cause diarrhea and vomiting. Most people with the flu get better on their own. But sometimes, influenza and its complications can be deadly. People at higher risk of developing flu complications include: Young children under age 2 Adults older than age 65 Residents of nursing homes and other long-term care facilities People who are pregnant or plan to be pregnant during flu season People with weakened immune systems American Indians or Alaska Natives People who have chronic illnesses, such as asthma, heart disease, kidney disease, liver disease and diabetes People with a body mass index (BMI) of 40 or higher Although the annual influenza vaccine isn't 100% effective, it reduces the chances of having severe complications from infection.</p>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center" id="hospital">Polio</h3>

                    <p id="p-tag">Polio is a contagious viral illness that in its most severe form causes nerve injury leading to paralysis, difficulty breathing and sometimes death. In the U.S., the last case of naturally occurring polio was in 1979. Today, despite a worldwide effort to wipe out polio, poliovirus continues to affect children and adults in parts of Asia and Africa. The Centers for Disease Control and Prevention (CDC) advises taking precautions to protect yourself from polio if you're traveling anywhere there's a risk of polio. Adults who have been vaccinated who plan to travel to an area where polio is occurring should receive a booster dose of inactivated poliovirus vaccine (IPV). Immunity after a booster lasts a lifetime.</p>
                </div>

            </div>




        </div>
    </div>

    <!-- Crousel 1 End -->

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