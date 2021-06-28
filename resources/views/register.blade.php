<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>Register | IT STORE</title>

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

    <!----------------------------- Register Contant   --------------------------------------->

    <!--====== App Content ======-->
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

                                    <a href="register">Register</a>
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

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">CREATE AN ACCOUNT</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row row--center">
                        <div class="col-lg-6 col-md-8 u-s-m-b-30">
                            <div class="l-f-o">
                                <div class="l-f-o__pad-box">
                                    <h1 class="gl-h1">PERSONAL INFORMATION</h1>
                                    <form class="l-f-o__form">
                                        {{-- This will add the future update --}}
                                        {{-- <div class="gl-s-api">
                                            <div class="u-s-m-b-15">

                                                <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i
                                                        class="fab fa-facebook-f"></i>

                                                    <span>Signup with Facebook</span></button>
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i
                                                        class="fab fa-google"></i>

                                                    <span>Signup with Google</span></button>
                                            </div>
                                        </div> --}}
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-fname">NAME *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="reg-fname" placeholder="Name">
                                        </div>

                                        <div class="gl-inline">
                                            <div class="u-s-m-b-30">

                                                <!--====== Date of Birth Select-Box ======-->

                                                <span class="gl-label">BIRTHDAY</span>
                                                <div class="gl-dob"><select
                                                        class="select-box select-box--primary-style">
                                                        <option selected>Month</option>
                                                        <option value="male">January</option>
                                                        <option value="male">February</option>
                                                        <option value="male">March</option>
                                                        <option value="male">April</option>
                                                    </select><select class="select-box select-box--primary-style">
                                                        <option selected>Day</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                    </select><select class="select-box select-box--primary-style">
                                                        <option selected>Year</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1994">1994</option>
                                                    </select></div>
                                                <!--====== End - Date of Birth Select-Box ======-->
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="gender">GENDER</label><select
                                                    class="select-box select-box--primary-style u-w-100" id="gender">
                                                    <option selected>Select</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-email">E-MAIL *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="reg-email" placeholder="Enter E-mail">
                                        </div>

                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-email">Telephone *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="reg-email" placeholder="Telephone">
                                        </div>

                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-password">PASSWORD *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="reg-password" placeholder="Enter Password">
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-password">PASSWORD CONFIRM *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="reg-password" placeholder="Password confirm ">
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <button class="btn btn--e-transparent-brand-b-2"
                                                type="submit">CREATE</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->
    </div>
    <!--====== End - App Content ======-->


    <!----------------------------- End Register Contant -------------------------------------->



    <!-----------------------------  footer area  ----------------------------------->
    @include('./component/footer')

    <!-- javascript -->
    @include('./jslink/js')
</body>

</html>
