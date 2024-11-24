<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Atema</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
   <style>


        /* Style for the welcome message */
        .welcome {
            font-size: 18px;
            margin-bottom: 20px;
        }

        /* Style for the buttons */
        .button {

            color: black;
            padding: 10px 20px;
            margin: 5px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            color: #001431;
        }

        .button-logout {
            background-color: #dc3545;
        }

        .button-logout:hover {
            background-color: #c82333;
        }

        /* Optional: Add mobile responsiveness */
        @media (max-width: 480px) {
            .container2 {
                width: 90%;
            }

            .button {
                font-size: 14px;
            }
        }
    </style>



      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-right: 55px;">
               <a class="navbar-brand"href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="what-we.html">What we do</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="chatbot.php">Chatbot</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           <!--<li><a href="login.php"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                           <li><a href="login.php"><i class="fa fa-search" aria-hidden="true"></i></a></li>-->
   <?php
    if (isset($_SESSION['user_id'])) {
        // If logged in, show a welcome message and a logout link

        echo '<a href="logout.php" class="button button-logout">Logout</a>';
    } else {
        // If not logged in, show Login and Signup buttons
        echo '<a href="login.php" class="button">Login</a>';
    }
    ?>
                          </div>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
         <!-- banner section start --> 
         <div class="banner_section layout_padding" style="background: linear-gradient(90deg, #001431 61%, #f8f2e2 61%);">
            <div class="container-fluid">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">We Provide Law Practice</h1>
                                 <p class="banner_text">At Atema, we provide expert legal guidance tailored to your unique needs. Whether you’re navigating complex legal disputes, protecting your business, or seeking justice for personal matters, our dedicated attorneys are here to help.</p>
                                 <div class="started_bt"><a href="contact.html">Contact Us</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">We Provide Law Practice</h1>
                                 <p class="banner_text">At Atema, we provide expert legal guidance tailored to your unique needs. Whether you’re navigating complex legal disputes, protecting your business, or seeking justice for personal matters, our dedicated attorneys are here to help.</p>
                                 <div class="started_bt"><a href="contact.html">Contact Us</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">We Provide Law Practice</h1>
                                 <p class="banner_text">At Atema, we provide expert legal guidance tailored to your unique needs. Whether you’re navigating complex legal disputes, protecting your business, or seeking justice for personal matters, our dedicated attorneys are here to help.</p>
                                 <div class="started_bt"><a href="contact.html">Contact Us</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- box section start -->
      <div class="container">
         <div class="box_section">
            <div class="online_box" style="padding-left: 500px;">
              <div class="online_box_left active" style="width: 350px; padding-left: 40px;">
                  <div class="online_box_main">
                     <div class="box_left">
                        <div class="right_arrow"><a href="appointment.html" style="color: white;"><i class="fa fa-arrow-right"></i></a></div>
                     </div>
                     <div class="box_right">
                        <p class="book_text" >Book At</p>
                        <h4 class="appoinment_text">Appoinment</h4>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!-- box section end -->
      <!-- services section start -->
      <div class="services_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="studies_taital">SERVICE OFFERINGS</h1>
               </div>
            </div>
         </div>
         <div class="services_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="service_box">
                                 <div class="house_icon">
                                    <img src="images/icon-1.png" class="image_1">
                                    <img src="images/icon-4.png" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">Corporate Law</h3>
                                 <p class="chunks_text">Contract Law governs agreements between individuals or entities, ensuring that the terms of the agreement are binding and enforceable. </p>
                              </div>
                           </div>

                           <div class="col-md-4">
                              <div class="service_box active">
                                 <div class="house_icon">
                                    <img src="images/icon-5.png" class="image_1">
                                    <img src="images/icon-5.png" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">Employments Law</h3>
                                 <p class="chunks_text">Contract Law governs agreements between individuals or entities, ensuring that the terms of the agreement are binding and enforceable. </p>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="service_box">
                                 <div class="house_icon">
                                    <img src="images/icon-3.png" class="image_1">
                                    <img src="images/icon-6.png" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">International Law</h3>
                                 <p class="chunks_text">Contract Law governs agreements between individuals or entities, ensuring that the terms of the agreement are binding and enforceable. </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="service_box">
                                 <div class="house_icon">
                                    <img src="images/icon-1.png" class="image_1">
                                    <img src="images/icon-4.png" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">Corporate Law</h3>
                                 <p class="chunks_text">Contract Law governs agreements between individuals or entities, ensuring that the terms of the agreement are binding and enforceable. </p>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="service_box active">
                                 <div class="house_icon">
                                    <img src="images/icon-5.png" class="image_1">
                                    <img src="images/icon-5.png" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">Employments Law</h3>
                                 <p class="chunks_text">Contract Law governs agreements between individuals or entities, ensuring that the terms of the agreement are binding and enforceable. </p>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="service_box">
                                 <div class="house_icon">
                                    <img src="images/icon-3.png" class="image_1">
                                    <img src="images/icon-6.png" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">International Law</h3>
                                 <p class="chunks_text">Contract Law governs agreements between individuals or entities, ensuring that the terms of the agreement are binding and enforceable.  </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="service_box">
                                 <div class="house_icon">
                                    <img src="images/icon-1.png" class="image_1">
                                    <img src="images/icon-4.png" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">Corporate Law</h3>
                                 <p class="chunks_text">Contract Law governs agreements between individuals or entities, ensuring that the terms of the agreement are binding and enforceable. </p>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="service_box active">
                                 <div class="house_icon">
                                    <img src="images/icon-5.png" class="image_1">
                                    <img src="images/icon-5.png" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">Employments Law</h3>
                                 <p class="chunks_text">Contract Law governs agreements between individuals or entities, ensuring that the terms of the agreement are binding and enforceable. </p>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="service_box">
                                 <div class="house_icon">
                                    <img src="images/icon-3.png" class="image_1">
                                    <img src="images/icon-6.png" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">International Law</h3>
                                 <p class="chunks_text">Contract Law governs agreements between individuals or entities, ensuring that the terms of the agreement are binding and enforceable. </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- studies section start -->
      <div class="studies_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="studies_taital">Recent Case Studies</h1>
               </div>
            </div>
            <div class="studies_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="hover01 column">
                        <figure><img src="images/service-img1.png"></figure>
                     </div>
                     <div class="studies_box">
                        <h3 class="introduction_text">Languages, 2010</h3>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="hover01 column">
                        <figure><img src="images/service-img2.png"></figure>
                     </div>
                     <div class="studies_box">
                        <h3 class="introduction_text">Master of Law, 2012</h3>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="hover01 column">
                        <figure><img src="images/service-img3.png"></figure>
                     </div>
                     <div class="studies_box">
                        <h3 class="introduction_text">Parlament, 2014</h3>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- studies section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_img"><img src="images/about-img.png"></div>
               </div>
               <div class="col-md-6">
                  <div class="about_text_main">
                     <h1 class="about_taital">About Us</h1>
                     <p class="about_text">At Atema, we are dedicated to providing expert legal guidance with a client-first approach. With a focus on clarity, trust, and results, our team of experienced attorneys is committed to helping individuals and businesses navigate complex legal challenges. Whether you need advice, representation, or tailored solutions, we are here to deliver exceptional service every step of the way.</p>
                     <div class="readmore_bt"><a href="about.html">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- testimonial section start -->
      <div class="customer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="customer_taital">SATISFIED CLIENT Says</h1>
               </div>
            </div>
         </div>
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="customer_section_2">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="box_main">
                                 <div class="customer_main">
                                    <div class="customer_left">
                                       <div class="customer_img" style="width: 200px; height: 250px;"><img src="images/customer-img3.jpg"></div>
                                    </div>
                                    <div class="customer_right">
                                       <h3 class="customer_name">Marina Siwa <span class="quick_icon"><img src="images/quick-icon.png"></span></h3>
                                       <p class="enim_text">I recently used Atema for assistance with a legal matter, and I couldn't be more pleased with the experience. The website is incredibly user-friendly, with clear navigation that made finding the information I needed straightforward. Their comprehensive database of resources and legal articles helped me understand my case better before consulting with a professional.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="customer_section_2">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="box_main">
                                 <div class="customer_main">
                                    <div class="customer_left">
                                       <div class="customer_img" style="width: 200px; height: 250px;"><img src="images/customer-img.jpg"></div>
                                    </div>
                                    <div class="customer_right">
                                       <h3 class="customer_name">Toby Haistings<span class="quick_icon"><img src="images/quick-icon.png"></span></h3>
                                       <p class="enim_text">I recently used Atema for assistance with a legal matter, and I couldn't be more pleased with the experience. The website is incredibly user-friendly, with clear navigation that made finding the information I needed straightforward. Their comprehensive database of resources and legal articles helped me understand my case better before consulting with a professional.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="customer_section_2">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="box_main">
                                 <div class="customer_main">
                                    <div class="customer_left">
                                       <div class="customer_img" style="width: 200px; height: 250px;"><img src="images/customer-img2.jpg"></div>
                                    </div>
                                    <div class="customer_right">
                                       <h3 class="customer_name">DenoMark <span class="quick_icon"><img src="images/quick-icon.png"></span></h3>
                                       <p class="enim_text">I recently used Atema for assistance with a legal matter, and I couldn't be more pleased with the experience. The website is incredibly user-friendly, with clear navigation that made finding the information I needed straightforward. Their comprehensive database of resources and legal articles helped me understand my case better before consulting with a professional.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
            </a>
         </div>
      </div>
      <!-- testimonial section end -->
      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital">Recent News</h1>
            <div class="news_section_2">
               <div class="news_box">
                  <!--<div id="custom_slider" class="carousel slide" data-ride="carousel">-->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="news_img"><img src="images/news-img.png"></div>
                        </div>
                     </div>
                     <a class="carousel-control-next"  role="button" data-slide="next">
                     <i class="fa fa-arrow-right"></i>
                     </a>
                  </div>
                  <h2 class="does_taital">What Does Marijuana Law Mean for You?</h2>
                  <p class="dummy_text">The Texas Attorney General, Ken Paxton, has sued Dallas after the city passed a measure to decriminalize small amounts of marijuana. This law prohibits arrests for possession of less than four ounces and bans police from using marijuana odor as probable cause. Similar lawsuits have been filed against other Texas cities that enacted comparable measures</p>
               </div>
            </div>
         </div>
      </div>

      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="footer_logo">
                  <a href="indexz.html">
                     <img src="images/logo.png">
               </div>
               <div class="social_icon">
               <ul>
               <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               <li><a href="https://x.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
               <li><a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
               </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2024 All Rights Reserved. Design by <a href="https://html.design">Eda Ballanca</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
   </body>
</html>