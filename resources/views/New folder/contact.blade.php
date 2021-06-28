<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>Contact | IT STORE</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- style sheets -->
    @include('./csslink/css')

</head>

<body class="config">

    <!--====== Main App ======-->
    <div id="app">
        <header class="header--style-1">
            <!----------------------------- Primary nav ------------------------------------>
            @include('./component/primarynav')
            <!----------------------------- Secondary nav ----------------------------------->
            @include('./component/secondarynav')
        </header>
    </div>

    <!----------------------------- Contact content --------------------------------------->

    <div class="app-content">

        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="breadcrumb">
                        <div class="breadcrumb__wrap">
                            <ul class="breadcrumb__list">
                                <li class="has-separator">

                                    <a href="/">Home</a>
                                </li>
                                <li class="is-marked">

                                    <a href="contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->


        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="g-map">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->


        <!--====== Section 3 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="contact-o u-h-100">
                                <div class="contact-o__wrap">
                                    <div class="contact-o__icon"><i class="fas fa-phone-volume"></i></div>

                                    <span class="contact-o__info-text-1">LET'S HAVE A CALL</span>

                                    <span class="contact-o__info-text-2">(+94) 77 785 5411</span>

                                    <span class="contact-o__info-text-2">(+94) 77 007 2581</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="contact-o u-h-100">
                                <div class="contact-o__wrap">
                                    <div class="contact-o__icon"><i class="fas fa-map-marker-alt"></i></div>

                                    <span class="contact-o__info-text-1">OUR LOCATION</span>

                                    <span class="contact-o__info-text-2">105/33 Unity Square Sports
                                        Complex,<br />Kalmunai. PO: 32300 </span>

                                    <span class="contact-o__info-text-2">Sri Lanka Lk</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="contact-o u-h-100">
                                <div class="contact-o__wrap">
                                    <div class="contact-o__icon"><i class="far fa-clock"></i></div>

                                    <span class="contact-o__info-text-1">WORK TIME</span>

                                    <span class="contact-o__info-text-2">5 Days a Week</span>

                                    <span class="contact-o__info-text-2">From 9 AM to 5 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 3 ======-->


        <!--====== Section 4 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-area u-h-100">
                                <div class="contact-area__heading">
                                    <h2>Get In Touch</h2>
                                </div>
                                <form class="contact-f" method="post" action="index.html">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 u-h-100">
                                            <div class="u-s-m-b-30">

                                                <label for="c-name"></label>

                                                <input
                                                    class="input-text input-text--border-radius input-text--primary-style"
                                                    type="text" id="c-name" placeholder="Name (Required)" required>
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label for="c-email"></label>

                                                <input
                                                    class="input-text input-text--border-radius input-text--primary-style"
                                                    type="text" id="c-email" placeholder="Email (Required)" required>
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label for="c-subject"></label>

                                                <input
                                                    class="input-text input-text--border-radius input-text--primary-style"
                                                    type="text" id="c-subject" placeholder="Subject (Required)"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 u-h-100">
                                            <div class="u-s-m-b-30">

                                                <label for="c-message"></label><textarea
                                                    class="text-area text-area--border-radius text-area--primary-style"
                                                    id="c-message" placeholder="Compose a Message (Required)"
                                                    required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">

                                            <button class="btn btn--e-brand-b-2" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 4 ======-->
    </div>
    <!----------------------------- End contact  --------------------------------------->

    <!----------------------------- category nav ----------------------------------->



    <!-----------------------------  footer area  ----------------------------------->
    @include('./component/footer')

    <!-- javascript -->
    @include('./jslink/js')
</body>

</html>
