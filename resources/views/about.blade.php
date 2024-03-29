<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About | Byte.lk</title>
    <!-- style sheets -->
    @include('./csslink/css')
</head>

<body>
    <!----------------------------- Header area --------------------------------------->
    @include('./component/header/header')


    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini pt-md-5 pb-md-5">
        <div class="container">
            <!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>

    <!-- END SECTION BREADCRUMB -->


    <!-- STAT SECTION ABOUT -->
    <div class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_img scene mb-4 mb-lg-0">
                        <img src="assets/images/about/hero.jpg" alt="about_img" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="heading_s1">
                        <h2>Welcome to Byte (PVT) Ltd</h2>
                    </div>

                    <p class=" text-justify">
                        Byte is the sole distributor for leading international brand - Computer Casings and Power supplies, A4 Tech - Computer Accessories, data storage products, Must - UPS, Ezy Cool - computer casings, Targus - Laptop bags and accessories, Sproteck - Computer Toolkits, V Com - High quality computer cables and networking products, Belkin- power strips, ASUS computer hardware component.We assemble custom made Megabox PC for home, office server or for gaming configuring for best performance to meet customer need. Byte is a genuine channel reseller for Intel,Microsoft, HP,Dell, Samsung, Lenovo and Acer too..
                    </p>


                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION ABOUT -->





    <!-- START SECTION TEAM -->
    <div class="section pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="heading_s1 text-center">
                        <h2>Our Team Members</h2>
                    </div>
                    <p class="text-center leads">Here our beautiful team!.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1">
                        <div class="team_img">
                            <img src="assets/images/about/member.png">
                            <ul class="social_icons social_style1">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_content">
                            <div class="team_title">
                                <h5>Jazny Fareed</h5>
                                <span>Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1">
                        <div class="team_img">
                            <img src="assets/images/about/member.png">
                            <ul class="social_icons social_style4">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_content">
                            <div class="team_title">
                                <h5>Mohamed Sakeen</h5>
                                <span>Software Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1">
                        <div class="team_img">
                            <img src="assets/images/about/member.png">
                            <ul class="social_icons social_style4">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_content">
                            <div class="team_title">
                                <h5>Anders Glick</h5>
                                <span>Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team_box team_style1">
                        <div class="team_img">
                            <img src="assets/images/about/member.png">
                            <ul class="social_icons social_style4">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="team_content">
                            <div class="team_title">
                                <h5>Richard Tice</h5>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION TEAM -->

    <!-----------------------------  Footer area  ----------------------------------->
    @include('./component/footer')


    <!-- js link -->
    @include('./jslink/js')

</body>

</html>