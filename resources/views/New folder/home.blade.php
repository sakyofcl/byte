<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>Home | It store</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- style sheets -->
    @include('./csslink/css')
    <style type="text/css">
        #i1 {
            background-image: url('banners/add1.png');
        }

    </style>
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



    <!----------------------------- Home  content --------------------------------------->
    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Primary Slider ======-->
        <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
            <div class="owl-carousel primary-style-1" id="hero-slider">
                <div class="hero-slide " id="i1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="slider-content slider-content--animation ">

                                    {{-- <span class="content-span-1 u-c-secondary">Latest Update Stock</span>

                                    <span class="content-span-2 u-c-secondary">30% Off On Electronics</span>

                                    <span class="content-span-3 u-c-secondary">Find electronics on best prices,
                                        Also Discover most selling products of electronics</span>

                                    <span class="content-span-4 u-c-secondary">Starting At

                                        <span class="u-c-brand">$1050.00</span></span> --}}

                                    <a class="shop-now-link btn--e-brand" href="product">SHOP
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide" id="i1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider-content slider-content--animation">

                                    {{-- <span class="content-span-1 u-c-white">Find Top Brands</span>

                                    <span class="content-span-2 u-c-white">10% Off On Electronics</span>

                                    <span class="content-span-3 u-c-white">Find electronics on best prices, Also
                                        Discover most selling products of electronics</span>

                                    <span class="content-span-4 u-c-white">Starting At

                                        <span class="u-c-brand">$380.00</span></span> --}}

                                    <a class="shop-now-link btn--e-brand" href="product">SHOP
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide " id="i1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider-content slider-content--animation">

                                    <!--<span class="content-span-1 u-c-secondary">Find Top Brands</span>

                                    <span class="content-span-2 u-c-secondary">10% Off On Electronics</span>

                                    <span class="content-span-3 u-c-secondary">Find electronics on best prices,
                                        Also Discover most selling products of electronics</span>

                                    <span class="content-span-4 u-c-secondary">Starting At

                                        <span class="u-c-brand">$550.00</span></span> -->

                                    <a class="shop-now-link btn--e-brand" href="product">SHOP
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Primary Slider ======-->

        <!--====== Section 4 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">SHOP BY CATEGORIES</h1>

                                <span class="section__span u-c-silver" style="text-transform:uppercase;">Here the list of our products lets explore it....</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="slider-fouc">
                        <div class="owl-carousel product-slider" data-item="7">

                            @foreach($category['sub'] as $items)

                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product13.jpg"
                                                    alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look"
                                                            data-tooltip="tooltip" data-placement="top"
                                                            title="Quick View"><i class="fas fa-search-plus"></i></a>
                                                    </li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart"
                                                            data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                    </li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                    </li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                            title="Email me When the price drops"><i
                                                                class="fas fa-envelope"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        

                                        <span class="product-o__name">
                                            <a href="/subcategory/{{$items->subid}}">{{ $items->name }}</a>
                                        </span>
                                       

                            
                                    </div>
                                </div>

                            @endforeach
                        </div>                      
                    </div>
                    
                </div>
            </div>
            <div class="section__content">
                <div class="container">
                    <div class="slider-fouc">
                        <div class="owl-carousel product-slider" data-item="7">

                            @foreach($category['sub'] as $items)

                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product13.jpg"
                                                    alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look"
                                                            data-tooltip="tooltip" data-placement="top"
                                                            title="Quick View"><i class="fas fa-search-plus"></i></a>
                                                    </li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart"
                                                            data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                    </li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                    </li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                            title="Email me When the price drops"><i
                                                                class="fas fa-envelope"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                       

                                        <span class="product-o__name">
                                            <a href="/subcategory/{{$items->subid}}">{{ $items->name }}</a>
                                        </span>
                                       

                            
                                    </div>
                                </div>

                            @endforeach
                        </div>                      
                    </div>
                    
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 4 ======-->



        


        <!--====== Section 3 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">DEAL OF THE DAY</h1>

                                <span class="section__span u-c-silver">BUY DEAL OF THE DAY, HURRY UP! THESE NEW
                                    PRODUCTS WILL EXPIRE SOON.</span>

                                <span class="section__span u-c-silver">ADD THESE ON YOUR CART.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 u-s-m-b-30">
                            <div class="product-o product-o--radius product-o--hover-off u-h-100">
                                <div class="product-o__wrap">

                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                        href="product-detail.html">

                                        <img class="aspect__img" src="images/product/electronic/product11.jpg"
                                            alt=""></a>
                                    <div class="product-o__special-count-wrap">
                                        <div class="countdown countdown--style-special" data-countdown="2020/05/01">
                                        </div>
                                    </div>
                                    <div class="product-o__action-wrap">
                                        <ul class="product-o__action-list">
                                            <li>

                                                <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fas fa-search-plus"></i></a>
                                            </li>
                                            <li>

                                                <a data-modal="modal" data-modal-id="#add-to-cart"
                                                    data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i
                                                        class="fas fa-plus-circle"></i></a>
                                            </li>
                                            <li>

                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                            </li>
                                            <li>

                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                    title="Email me When the price drops"><i
                                                        class="fas fa-envelope"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <span class="product-o__category">

                                    <a href="shop-side-version-2.html">Electronics</a></span>

                                <span class="product-o__name">

                                    <a href="product-detail.html">DJI Phantom Drone 4k</a></span>
                                <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i>

                                    <span class="product-o__review">(2)</span>
                                </div>

                                <span class="product-o__price">$125.00

                                    <span class="product-o__discount">$160.00</span></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 u-s-m-b-30">
                            <div class="product-o product-o--radius product-o--hover-off u-h-100">
                                <div class="product-o__wrap">

                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                        href="product-detail.html">

                                        <img class="aspect__img" src="images/product/electronic/product12.jpg"
                                            alt=""></a>
                                    <div class="product-o__special-count-wrap">
                                        <div class="countdown countdown--style-special" data-countdown="2020/05/01">
                                        </div>
                                    </div>
                                    <div class="product-o__action-wrap">
                                        <ul class="product-o__action-list">
                                            <li>

                                                <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fas fa-search-plus"></i></a>
                                            </li>
                                            <li>

                                                <a data-modal="modal" data-modal-id="#add-to-cart"
                                                    data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i
                                                        class="fas fa-plus-circle"></i></a>
                                            </li>
                                            <li>

                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                            </li>
                                            <li>

                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                    title="Email me When the price drops"><i
                                                        class="fas fa-envelope"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <span class="product-o__category">

                                    <a href="shop-side-version-2.html">Electronics</a></span>

                                <span class="product-o__name">

                                    <a href="product-detail.html">DJI Phantom Drone 2k</a></span>
                                <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i>

                                    <span class="product-o__review">(2)</span>
                                </div>

                                <span class="product-o__price">$125.00

                                    <span class="product-o__discount">$160.00</span></span>
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

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">NEW ARRIVALS</h1>

                                <span class="section__span u-c-silver">GET UP FOR NEW ARRIVALS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="slider-fouc">
                        <div class="owl-carousel product-slider" data-item="4">
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/electronic/product13.jpg"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Quick View"><i class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">Nikon DSLR 4K Camera</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i>

                                        <span class="product-o__review">(0)</span>
                                    </div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/electronic/product14.jpg"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Quick View"><i class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">Nikon DSLR 2K Camera</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i>

                                        <span class="product-o__review">(0)</span>
                                    </div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/electronic/product15.jpg"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Quick View"><i class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">Sony DSLR 4K Camera</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i>

                                        <span class="product-o__review">(0)</span>
                                    </div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/electronic/product16.jpg"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Quick View"><i class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">Sony DSLR 2K Camera</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i>

                                        <span class="product-o__review">(0)</span>
                                    </div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/electronic/product17.jpg"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Quick View"><i class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">Canon DSLR 4K Camera</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i>

                                        <span class="product-o__review">(0)</span>
                                    </div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">

                                            <img class="aspect__img" src="images/product/electronic/product18.jpg"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Quick View"><i class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                                </li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">Canon DSLR 2K Camera</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i>

                                        <span class="product-o__review">(0)</span>
                                    </div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 4 ======-->


        <!--====== Section 5 ======-->
        <div class="banner-bg">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-bg__countdown">
                                <div class="countdown countdown--style-banner" data-countdown="2020/05/01">
                                </div>
                            </div>
                            <div class="banner-bg__wrap">
                                <div class="banner-bg__text-1">

                                    <span class="u-c-white">Global</span>

                                    <span class="u-c-secondary">Offers</span>
                                </div>
                                <div class="banner-bg__text-2">

                                    <span class="u-c-secondary">Official Launch</span>

                                    <span class="u-c-white">Don't Miss!</span>
                                </div>

                                <span class="banner-bg__text-block banner-bg__text-3 u-c-secondary">Enjoy Free
                                    Shipping when you buy 2 items and above!</span>

                                <a class="banner-bg__shop-now btn--e-secondary" href="shop-side-version-2.html">Shop
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 5 ======-->


    
        <!--====== Section 9 ======-->
        <div class="u-s-p-b-60" style="margin-top:25px; ">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon"><i class="fas fa-truck"></i></div>
                                <div class="service__info-wrap">

                                    <span class="service__info-text-1">Quick Delivery</span>

                                    <span class="service__info-text-2">we'll send your product quick</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon"><i class="fas fa-redo"></i></div>
                                <div class="service__info-wrap">

                                    <span class="service__info-text-1">Shop with Confidence</span>

                                    <span class="service__info-text-2">Our Protection covers your purchase from
                                        click to delivery</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon"><i class="fas fa-headphones-alt"></i></div>
                                <div class="service__info-wrap">

                                    <span class="service__info-text-1">24/7 Help Center</span>

                                    <span class="service__info-text-2">Round-the-clock assistance for a smooth
                                        shopping experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 9 ======-->


        

        <!--====== Section 12  brand ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">

                    <!--====== Brand Slider ======-->
                    <div class="slider-fouc">
                        <div class="owl-carousel" id="brand-slider" data-item="5">
                            <div class="brand-slide">

                                <a href="shop-side-version-2.html">

                                    <img src="assets/images/brand/b1.png" alt=""></a>
                            </div>
                            <div class="brand-slide">

                                <a href="shop-side-version-2.html">

                                    <img src="assets/images/brand/b2.png" alt=""></a>
                            </div>
                            <div class="brand-slide">

                                <a href="shop-side-version-2.html">

                                    <img src="assets/images/brand/b3.png" alt=""></a>
                            </div>
                            <div class="brand-slide">

                                <a href="shop-side-version-2.html">

                                    <img src="assets/images/brand/b4.png" alt=""></a>
                            </div>
                            <div class="brand-slide">

                                <a href="shop-side-version-2.html">

                                    <img src="assets/images/brand/b5.png" alt=""></a>
                            </div>
                            <div class="brand-slide">

                                <a href="shop-side-version-2.html">

                                    <img src="assets/images/brand/b6.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Brand Slider ======-->
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 12 ======-->
    </div>
    <!--====== End - App Content ======-->

    <!----------------------------- End home content ----------------------------------->



    <!-----------------------------  footer area  ----------------------------------->
    @include('./component/footer')

    <!-- javascript -->
    @include('./jslink/js')
</body>

</html>
