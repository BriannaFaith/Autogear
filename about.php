<!doctype html>
<html class="no-js" lang="en">
<?php
//include "db2\db2.php";
session_start();
if(isset($_SESSION["uid"])){

    header("location:Customer_profile.php");
}
?>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Auto Gear</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
   
    <!--header area start-->
      
    <?php  
include'header.php';
?>
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
  
    <!--offcanvas menu area end-->
  

<?php  
include'header_area_menu.php';
?>
    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--about bg area start-->
    <div class="about_bg_area">
       <div class="container">
            <!--about section area -->
            <section class="about_section mb-60"> 
                <div class="row align-items-center">
                    <div class="col-12">
                       <figure>
                            <div class="about_thumb">
                                <img src="assets/img/about/about1.jpg" alt="">
                            </div>
                            <figcaption class="about_content">
                                <h1>At Auto Gear, we're passionate about cars and committed to providing car enthusiasts and owners with top-quality car parts and accessories. Whether you're a DIY mechanic, a car enthusiast, or simply someone who wants to keep their vehicle running smoothly, we have everything you need to enhance, repair, and maintain your cherished automobile.</h1>
                               
                            </figcaption>
                        </figure>
                    </div>    
                </div>   
            </section>
            <!--about section end-->

            <!--chose us area start-->
            <div class="choseus_area" data-bgimg="assets/img/about/about-us-policy-bg.jpg">
                <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="single_chose">
                                <div class="chose_icone">
                                    <img src="assets/img/about/About_icon1.png" alt="">
                                </div>
                                <div class="chose_content">
                                    <h3>Easy Shopping</h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single_chose">
                                <div class="chose_icone">
                                    <img src="assets/img/about/About_icon2.png" alt="">
                                </div>
                                <div class="chose_content">
                                    <h3>100% Money Back Guarantee</h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single_chose">
                                <div class="chose_icone">
                                    <img src="assets/img/about/About_icon3.png" alt="">
                                </div>
                                <div class="chose_content">
                                    <h3>Online Support 24/7</h3>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="testimonials-area">
                            <div class="faq-client_title">
                                <h2>What Our Customers Says ?</h2>
                            </div>
                            <div class="testimonial-two owl-carousel">
                                <div class="testimonial-wrap-two text-center">
                                        <div class="quote-container">
                                            <div class="quote-image">
                                                <img src="assets/img/about/testimonial1.jpg" alt="">
                                            </div>
                                            <div class="testimonials-text">
                                                <p>Support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>
                                            </div>
                                            <div class="author">
                                                <h6>Onyango Otieno</h6>
                                                <p>Buyer</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                <div class="testimonial-wrap-two text-center">
                                        <div class="quote-container">
                                            <div class="quote-image">
                                                <img src="assets/img/about/testimonial2.jpg" alt="">
                                            </div>
                                            <div class="testimonials-text">
                                                <p>Support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>
                                            </div>
                                            <div class="author">
                                                <h6>Onyango Otieno</h6>
                                                <p>Buyer</p>
                                            </div>
                                        </div>
                                    </div>
                                <div class="testimonial-wrap-two text-center">
                                        <div class="quote-container">
                                            <div class="quote-image">
                                                <img src="assets/img/about/testimonial3.jpg" alt="">
                                            </div>
                                            <div class="testimonials-text">
                                                <p>Support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>
                                            </div>
                                            <div class="author">
                                                <h6>Onyango Otieno</h6>
                                                <p>Buyer</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--testimonial area end-->
        </div>
    </div>
    <!--about bg area end-->

     <!--brand area start-->
     <?php  
include'brandarea.php';
?>
    <!--brand area end-->
    
     <!--footer area start-->
     <?php  
include'footer.php';
?>
    <!--footer area end-->
   
   
    
<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>


</html>