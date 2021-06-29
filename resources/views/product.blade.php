<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product | Byte.lk</title>
    <!-- style sheets -->
    @include('./csslink/css')

</head>

<body>
    <!----------------------------- Header area --------------------------------------->
    @include('./component/header/header')
    @include('./component/preload')
    @include('./component/product/productComponent')

    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini pt-md-5 pb-md-5">
        <div class="container">
            <!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ol class="breadcrumb justify-content-center ">

                        @if($category['type']=='search')
                        @if (Session::has('nodata'))
                        <li class="breadcrumb-item active text-capitalize text-danger"><span>No Results..!</span></li>
                        @else
                        <li class="breadcrumb-item active text-capitalize text-success"><span>Search Results..!</span></li>
                        @endif
                        @endif

                        @if($category['type']!=='search')
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/product">Product</a></li>
                        @endif
                        @if($category['type']=="P-M")
                        @foreach ($category['mainCategory'] as $items)
                        <li class="breadcrumb-item active text-capitalize"><span>{{ $items->name }}</span></li>
                        @endforeach
                        @endif
                        @if($category['type']=="P-S")
                        @foreach ($category['mainCategory'] as $items)
                        <li class="breadcrumb-item text-capitalize"><a href="/product/{{ $items->name}}">{{ $items->name }}</a></li>
                        @endforeach
                        @endif
                        @if($category['type']=="P-S")
                        @foreach ($category['subCategory'] as $items)
                        <li class="breadcrumb-item active text-capitalize"><span>{{ $items->name }}</span></li>
                        @endforeach
                        @endif

                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->


    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row align-items-center mb-4 pb-1">
                            <div class="col-12">
                                <div class="product_header">
                                    <div class="product_header_left">
                                        <div class="custom_select">
                                            <select class="form-control form-control-sm">
                                                <option value="order">Default sorting</option>
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="date">Sort by newness</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="product_header_right">
                                        <div class="products_view">
                                            <a href="javascript:Void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                            <a href="javascript:Void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                        </div>
                                        <div class="custom_select">
                                            <select class="form-control form-control-sm">
                                                <option value="">Showing</option>
                                                <option value="9">9</option>
                                                <option value="12">12</option>
                                                <option value="18">18</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row shop_container grid">
                            @if($category['type']=="P-D")
                            @if(count($category['product'])!==0)
                            @foreach ($category['product'] as $items)
                            <?php
                            echo productCart($items->image, $items->pid, $items->name, $items->price, $items->description);
                            ?>
                            @endforeach
                            @else

                            <div class="alert alert-light d-flex justify-content-center w-100" role="alert">
                                <i class="far fa-sad-tear ml-2 text-dark"></i>
                                nothing to have...!
                            </div>
                            @endif
                            @elseif($category['type']=="P-M")
                            @if(count($category['product'])!==0)
                            @foreach ($category['product'] as $items)
                            <?php
                            echo productCart($items->image, $items->pid, $items->name, $items->price, $items->description);
                            ?>
                            @endforeach
                            @else
                            <div class="alert alert-light d-flex justify-content-center w-100" role="alert">
                                <i class="far fa-sad-tear ml-2 text-dark"></i>
                                nothing to have...!
                            </div>
                            @endif
                            @elseif($category['type']=="P-S")
                            @if(count($category['product'])!==0)
                            @foreach ($category['product'] as $items)
                            <?php
                            echo productCart($items->image, $items->pid, $items->name, $items->price, $items->description);
                            ?>
                            @endforeach
                            @else
                            <div class="alert alert-light d-flex justify-content-center w-100" role="alert">
                                <i class="far fa-sad-tear ml-2 text-dark"></i>
                                nothing to have...!
                            </div>
                            @endif
                            @elseif($category['type']=='search')
                            @if(count($category['product'])!==0)
                            @foreach ($category['product'] as $items)
                            <?php
                            echo productCart($items->image, $items->pid, $items->name, $items->price, $items->description);
                            ?>
                            @endforeach
                            @else
                            <div class="alert alert-light d-flex justify-content-center w-100" role="alert">
                                <i class="far fa-sad-tear ml-2 text-dark"></i>
                                nothing to have...!
                            </div>
                            @endif
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="pagination mt-3 justify-content-center pagination_style1">

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- category -->
                    <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                        <div class="sidebar">
                            <div id="accordion" class="w-100">
                                <h6 class="text-danger text-uppercase text-center p-2 mb-3 bg-light border">Categories</h6>

                                @if($category['type']=="P-D")
                                @foreach($category['mainCategory'] as $items)
                                <div class="card border-0 mb-1">
                                    <div id="headingOne">
                                        <div class="d-flex flex-nowrap justify-content-between bg-light p-2 border">
                                            <a href="/product/{{$items->name}}" class="ml-2 text-uppercase p-0 cat-item-list main-cat-item">{{$items->name}}</a>
                                            <a href="#" data-toggle="collapse" data-target="#C{{$items->catid}}" aria-expanded="false">
                                                <i class="fas fa-chevron-down"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div id="C{{$items->catid}}" class="collapse bg-light border" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class=" d-flex flex-column p-1">
                                            <div class="w-100 pl-2">
                                                <ul>
                                                    @foreach($category['subCategory'] as $sub)
                                                    @if($items->catid==$sub->catid)
                                                    <li class="list-unstyled text-uppercase">
                                                        <a href="product/{{$items->name}}/{{$sub->name}}/{{$sub->subid}}" class="cat-item-list sub-cat-item">{{$sub->name}}</a>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                @elseif($category['type']=="P-M")
                                @foreach($category['subCategory'] as $items)
                                <div class="card border-0 mb-1">
                                    <div id="headingOne">
                                        <div class="d-flex flex-nowrap justify-content-between bg-light p-2 border">
                                            @foreach($category['mainCategory'] as $main)
                                            <a href="/product/{{$main->name}}/{{$items->name}}/{{$items->subid}}" class="ml-2 text-uppercase p-0 cat-item-list main-cat-item">{{$items->name}}</a>
                                            @endforeach
                                            <a href="#" data-toggle="collapse" data-target="#C{{$items->subid}}" aria-expanded="false">
                                                <i class="fas fa-chevron-down"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div id="C{{$items->catid}}" class="collapse bg-light border" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class=" d-flex flex-column p-1">
                                            <div class="w-100 pl-2">
                                                <ul>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                @elseif($category['type']=='search')
                                @foreach($category['mainCategory'] as $items)
                                <div class="card border-0 mb-1">
                                    <div id="headingOne">
                                        <div class="d-flex flex-nowrap justify-content-between bg-light p-2 border">
                                            <a href="/product/{{$items->name}}" class="ml-2 text-uppercase p-0 cat-item-list main-cat-item">{{$items->name}}</a>
                                            <a href="#" data-toggle="collapse" data-target="#C{{$items->catid}}" aria-expanded="false">
                                                <i class="fas fa-chevron-down"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div id="C{{$items->catid}}" class="collapse bg-light border" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class=" d-flex flex-column p-1">
                                            <div class="w-100 pl-2">
                                                <ul>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                    <!-- end category -->

                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
        <div class="section bg_default small_pt small_pb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="heading_s1 mb-md-0 heading_light">
                            <h3>Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="newsletter_form">
                            <form>
                                <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                                <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    </div>
    <!-- END MAIN CONTENT -->




    <!-----------------------------  Footer area  ----------------------------------->
    @include('./component/footer')


    <!-- js link -->
    @include('./jslink/js')

</body>

</html>