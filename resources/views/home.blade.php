<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- style sheets -->

    @include('./csslink/css')

    <link rel="stylesheet" type="text/css" href="/assets/css/carousel/component.css" />

</head>



<body>

    <!----------------------------- Header area --------------------------------------->

    @include('./component/header/header')





    <div id="content-wrapper">

        <!-- START SECTION BANNER -->

        <div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">

            <div class="container">

                <div class="row">

                    <div class="col-lg-9 pl-lg-0  offset-lg-3">

                        <div id="carouselExampleControls" class="carousel slide light_arrow" data-ride="carousel">

                            <div class="carousel-inner">

                                <div class="carousel-item active background_bg" style="background-image:url(assets/images/slider/slider1.jpg)">

                                    <div class="banner_slide_content banner_content_inner">

                                        <div class="col-lg-8 col-10">

                                            <div class="banner_content overflow-hidden ">

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="carousel-item background_bg" style="background-image:url(assets/images/slider/slider2.jpg)">

                                    <div class="banner_slide_content banner_content_inner">

                                        <div class="col-lg-8 col-10">

                                            <div class="banner_content overflow-hidden ">



                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="carousel-item background_bg" style="background-image:url(assets/images/slider/slider3.jpg)">

                                    <div class="banner_slide_content banner_content_inner">

                                        <div class="col-lg-8 col-10">

                                            <div class="banner_content overflow-hidden text-white">



                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <ol class="carousel-indicators indicators_style1">

                                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>

                                <li data-target="#carouselExampleControls" data-slide-to="1"></li>

                                <li data-target="#carouselExampleControls" data-slide-to="2"></li>

                            </ol>

                        </div>

                    </div>



                </div>

            </div>

        </div>

        <!-- END SECTION BANNER -->



        <!-- OUR SERVICE -->

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="our-service">

                        <div class="owl-carousel d-flex align-items-center" id="our-service">

                            <div class="item-wrapper">

                                <div class="item h-100">

                                    <div class="d-flex h-100">

                                        <div class="ico rounded text-white bg-danger">

                                            <i class="flaticon-shipped"></i>

                                        </div>

                                        <div class="service-content d-flex flex-column align-items-center">

                                            <h1 class="pl-2 pt-2 font-weight-normal text-uppercase">fast shipping</h1>

                                            <span class="pl-2 pt-1 text-capitalize">All online orders</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="item-wrapper">

                                <div class="item h-100">

                                    <div class="d-flex h-100">

                                        <div class="ico rounded text-white bg-success">

                                            <i class="ion-social-bitcoin-outline"></i>

                                        </div>

                                        <div class="service-content d-flex flex-column">

                                            <h1 class="pl-2 pt-2 font-weight-normal text-uppercase">Save money</h1>

                                            <span class="pl-2 pt-1 text-capitalize">genuine products</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="item-wrapper">

                                <div class="item h-100">

                                    <div class="d-flex h-100">

                                        <div class="ico rounded text-white bg-primary">

                                            <i class="flaticon-support"></i>

                                        </div>

                                        <div class="service-content d-flex flex-column">

                                            <h1 class="pl-2 pt-2 font-weight-normal text-uppercase">Online Support</h1>

                                            <span class="pl-2 pt-1 text-capitalize">24/7 service</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="item-wrapper">

                                <div class="item h-100">

                                    <div class="d-flex h-100">

                                        <div class="ico rounded text-white bg-dark">

                                            <i class="ion-ios-cog-outline"></i>

                                        </div>

                                        <div class="service-content d-flex flex-column">

                                            <h1 class="font-weight-normal text-uppercase pl-2 pt-2">maintenance</h1>

                                            <span class="pl-2 text-capitalize pt-1">bug free work</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="item-wrapper">

                                <div class="item h-100">

                                    <div class="d-flex h-100">

                                        <div class="ico rounded text-white bg-warning">

                                            <i class="ion-ios-game-controller-b-outline"></i>

                                        </div>

                                        <div class="service-content d-flex flex-column">

                                            <h1 class="font-weight-normal text-uppercase pl-2 pt-2">gift promotion</h1>

                                            <span class="pl-2 text-capitalize pt-1">send gift to srilanka</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- END SERVICE -->



        @include('./component/carousel')



        <!-- SHOP BY CATEGORY -->

        <div class="container">

            <div class="row">

                <div class="col-12 mt-3">

                    <?php
                    echo carouselHeader('shop by category', 'badge-danger', '18', '500');
                    ?>

                    <div class="carousel-body mt-0">
                        <div class="owl-carousel" id="shop-by-category">

                            <div class="item h-100">
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/desk.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Desktop
                                        </span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/projeter.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Projectors
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="item h-100">
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/cctv.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            CCTV
                                        </span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/toner.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Ink/Toner
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="item h-100">
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/printer.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Printer
                                        </span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/lab.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Laptop
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="item h-100">
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/bio.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Biometric
                                        </span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/pos.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            POS Tools
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="item h-100">
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/hdd.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Hard disk
                                        </span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/soft.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Software
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="item h-100">
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/phone.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Smart Phones
                                        </span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/speaker.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Speaker/Mic
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="item h-100">
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/desk.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Desktop
                                        </span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/projeter.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Projectors
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="item h-100">
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/desk.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Desktop
                                        </span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="d-flex flex-column h-100 content-shop">
                                        <img src='/assets/images/shop/projeter.jpg'>
                                        <span class="text-capitalize text-center w-100">
                                            Projectors
                                        </span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- END SHOP BY CATEGORY -->



        <div class="container">

            <div class="row">

                <div class="col-12 mt-3">



                    <?php

                    echo carouselHeader('New arrivals', 'badge-success', '18', '500');

                    ?>

                    <div class="carousel-body mt-0">

                        <div class="owl-carousel" id="new-arrivals-product">

                            @foreach ($category['recentProduct'] as $item)



                            <div class="item h-100">

                                <div class="product_box rounded-0 text-center mb-0">

                                    <div class="product_img">

                                        <a href="shop-product-detail.html">

                                            <?php $img = 'products/' . $item->image; ?>

                                            <img class="aspect__img home-carousel-product-image" src={{ asset($img) }}>

                                        </a>

                                        <div class="product_action_box">

                                            <ul class="list_none pr_action_btn">

                                                <li>

                                                    <a href="/add/cart?pid={{ $item->pid }}&qty=1&type=cart">

                                                        <i class="icon-basket-loaded"></i>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="#">

                                                        <i class="icon-heart"></i>

                                                    </a>

                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="product_info">

                                        <h6 class="product_title pl-1 pr-1 text-center">

                                            <a class="text-uppercase text-center" href="/productinfo/{{str_replace(' ', '-', str_replace('/', '-', $item->name)) }}/{{ $item->pid }}">{{ $item->name }}</a>

                                        </h6>

                                        <div class="product_price">

                                            <span class="price">Rs.{{ number_format($item->price) }}</span>

                                        </div>

                                        <div class="rating_wrap">

                                            <div class="rating">

                                                <div class="product_rate" style="width:80%"></div>

                                            </div>



                                        </div>

                                        <div class="pr_desc">

                                            <p>{{ $item->description }}</p>

                                        </div>

                                        <div class="add-to-cart">

                                            <a href="/buy/product?pid={{$item->pid}}&qty=1&type=buy" class="btn btn-fill-out-green border-success pl-4 pr-4 pt-2 pb-2">

                                                <i class="fas fa-shopping-bag"></i>

                                                Buy

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            @endforeach

                        </div>

                    </div>



                </div>

            </div>

        </div>







        <!-- START SECTION BANNER -->



        <div class="container mt-5">

            <div class="row no-gutters">

                <div class="col-md-4">

                    <div class="sale_banner">

                        <a class="hover_effect1" href="#">

                            <img src="assets/images/adds/add1.jpg" alt="shop_banner_img3">

                        </a>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="sale_banner">

                        <a class="hover_effect1" href="#">

                            <img src="assets/images/adds/add2.jpg" class="h-100" alt="shop_banner_img4">

                        </a>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="sale_banner">

                        <a class="hover_effect1" href="#">

                            <img src="assets/images/adds/add3.jpg" alt="shop_banner_img5">

                        </a>

                    </div>

                </div>

            </div>

        </div>



        <!-- END SECTION BANNER -->



        <!-- OUR BRAND -->

        <div class="container mb-3">

            <div class="row">

                <div class="col-md-12 mt-3">

                    <?php

                    echo carouselHeader('OUR BRAND', 'badge-dark', '18', '500');

                    echo carouselBody('our-brand-company', function () {

                        $store = "";

                        $data = [

                            ['img' => 'asus.jpg'],

                            ['img' => 'brother.jpg'],

                            ['img' => 'cannon.jpg'],

                            ['img' => 'dell.jpg'],

                            ['img' => 'epson.jpg'],

                            ['img' => 'hp.jpg'],

                            ['img' => 'panasonic.jpg'],

                            ['img' => 'xerox.jpg'],

                            ['img' => 'samsung.jpg'],

                            ['img' => 'toshiba.jpg']

                        ];

                        foreach ($data as $value) {

                            $store = $store . '

                            <div class="item h-100">

                                <div class="cl_logo">

                                    <img src="assets/images/brand/' . $value['img'] . '" />

                                </div>

                            </div>

                            ';
                        }

                        return $store;
                    })

                    ?>

                </div>

            </div>

        </div>

        <!-- END OUR BRNAD -->

    </div>



    <!-----------------------------  Footer area  ----------------------------------->

    @include('./component/footer')





    <!-- js link -->

    @include('./jslink/js')

    <script src="/assets/js/our-service-carousel.js"></script>

    <script src="/assets/js/shopbycategory.js"></script>

    <script src="/assets/js/newarrivals.js"></script>

    <script src="/assets/js/carousel/carousel.js"></script>

    <script>
        var path = window.location.pathname;

        if (path == "/") {

            var navcat = document.getElementById('navCatContent');

            navcat.classList.add('active-nav-list');

        }
    </script>

</body>



</html>