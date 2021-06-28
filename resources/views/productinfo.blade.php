<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product info | Byte.lk</title>
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
                    <ol class="breadcrumb justify-content-md-center text-capitalize">
                        <li class="breadcrumb-item"><a class="text-primary" href="/">Home</a></li>

                        <li class="breadcrumb-item">
                            @foreach ($productsinfo['catname'] as $items)
                            <a class="text-primary text-capitalize" href="/product/{{$items->name}}">
                                {{ $items->name }}
                            </a>
                            @endforeach
                        </li>
                        <li class="breadcrumb-item">
                            @foreach ($productsinfo['subcat'] as $items)
                                <?php 
                                    $subName=strtolower( preg_replace('/\s+/','-', $items->name) );
                                ?>
                               
                                @foreach ($productsinfo['catname'] as $main)
                                    <a class="text-primary" href="/product/{{$main->name}}/{{$items->name}}/{{ $items->subid }}">
                                        {{ $items->name }}
                                    </a>
                                @endforeach
                                
                            @endforeach
                        </li>
                        <li class="breadcrumb-item active">
                            @foreach ($productsinfo['data'] as $items)
                            <a>
                                {{ $items->name }}
                            </a>
                            @endforeach
                        </li>

                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->


    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                    <div class="product-image">
                        <div class="product_img_box" style="color:transparent;">
                            @foreach ($productsinfo['data'] as $items)
                            {{ $pimag = 'products/' . $items->image }}
                            <img id="product_img" src={{ asset($pimag) }} data-zoom-image={{ asset($pimag) }} alt={{ $items->name }} />

                            @endforeach
                        </div>
                        {{-- <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4"
                            data-slides-to-scroll="1" data-infinite="false">
                            @foreach ($productsinfo['data'] as $items)
                                {{ $pimag = 'products/' . $items->image }}
                        <div class="item">
                            <a href="#" class="product_gallery_item active" data-image={{ asset($pimag) }} data-zoom-image={{ asset($pimag) }}>
                                <img src={{ asset($pimag) }} alt={{ $items->name }} />
                            </a>
                        </div>
                        @endforeach
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="pr_detail">
                    @foreach ($productsinfo['data'] as $items)
                    <div class="product_description">
                        <h4 class="product_title">
                            <span>{{ $items->name }}</span>
                        </h4>
                        <div class="product_price">
                            <span class="price">Rs.{{ number_format($items->price) }}</span>
                        </div>
                        
                        <div class="pr_desc mt-1 w-100">
                            <p style="font-size:13px">
                                {{ $items->description }}
                            </p>
                        </div>
                        <hr />
                        <div class="pr_desc mb-1">
                            <table style="font-size:13px">
                                <tr>
                                    <td><span style="padding-right:10px;">Product Code</span></td>
                                    <td><span>{{ $items->pcode }}</span></td>
                                </tr>
                                <tr>
                                    <td><span style="padding-right:10px;">Brand</span></td>
                                    <td>
                                        {{ $items->brand }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><span style="padding-right:10px;">Model</span></td>
                                    <td><span>{{ $items->model }}</span></td>
                                </tr>
                                
                                <tr>
                                    <td><span style="padding-right:10px;">Available</span></td>
                                    @if( $items->stock=="1")
                                        <td>
                                            <i class="fas fa-shopping-bag text-success"></i>
                                            <span>In stock</span>
                                        </td>
                                    @else
                                        <td>
                                            <i class="far fa-sad-tear text-warning pr-1"></i>
                                            <span>No stock</span>
                                        </td>
                                    @endif
                                </tr>
                                
                            </table>
                        </div>
                        <hr />
                        <div class="product_sort_info">
                            <ul>
                               
                                <li><i class="linearicons-bag-dollar text-danger"></i> Cash on Delivery available</li>
                            </ul>
                        </div>
                    </div>
                    <hr />
                    <div class="cart_extra">
                        
                        <div class="cart-product-quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4" id="qty">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                        
                        <div class="cart_btn">
                            <a href="/checkout/{{ $items->pid }}" id="buy-product">
                                <button class="btn btn-fill-out-green btn-addtocart" type="button" style="width:150px;">
                                    <i class="fas fa-shopping-bag"></i> Buy
                                </button>
                            </a>
                            <a href="/addcart/{{ $items->pid }}">
                                <button class="btn btn-fill-out btn-addtocart " type="button" style="width:150px;">
                                    <i class="icon-basket-loaded"></i>
                                    Cart
                                </button>
                            </a>
                        </div>
                    </div>
                    <hr />
                    <div class="product_share">
                        <span>Share:</span>
                        <ul class="social_icons">
                            <li><a href="#"><i class="fab fa-facebook text-primary"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp-square text-success"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram text-danger"></i></a></li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="large_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-style3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Specification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content shop_info_tab">
                        <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                            
                            <?php
                            foreach ($productsinfo['data'] as $value) {
                                echo "
                                <div class='p-2 w-100'>
                                    ".$value->editerdesc."
                                </div>";
                            }
                            ?> 
                        </div>
                        <div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                            <table class="table table-bordered">
                                @foreach ($productsinfo['data'] as $items)
                                    <tr>
                                        <td>Brand</td>
                                        <td>{{ $items->brand }}</td>
                                    </tr>
                                    <tr>
                                        <td>Model</td>
                                        <td>{{ $items->model }}</td>
                                    </tr>
                                    <tr>
                                        <td>Weight</td>
                                        <td>{{ $items->weight }}</td>
                                    </tr>
                                    <tr>
                                        <td>Height</td>
                                        <td>{{ $items->height }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                            
                            <div class="review_form field_form">
                                <h5>Add a review</h5>
                                <form class="row mt-3">
                                    <div class="form-group col-12">
                                        <div class="star_rating">
                                            <span data-value="1"><i class="far fa-star"></i></span>
                                            <span data-value="2"><i class="far fa-star"></i></span>
                                            <span data-value="3"><i class="far fa-star"></i></span>
                                            <span data-value="4"><i class="far fa-star"></i></span>
                                            <span data-value="5"><i class="far fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea required="required" placeholder="Your review *" class="form-control" name="message" rows="4"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email">
                                    </div>

                                    <div class="form-group col-12">
                                        <button type="submit" class="btn btn-fill-out" name="submit" value="Submit" disabled>Submit Review</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="small_divider"></div>
                <div class="divider"></div>
                <div class="medium_divider"></div>
            </div>
        </div>

       
    </div>
    </div>
    <!-- END SECTION SHOP -->



    <!-----------------------------  Footer area  ----------------------------------->
    @include('./component/footer')


    <!-- js link -->
    @include('./jslink/js')
    <script src="{{ asset('assets/js/validation/direct-checkout.js')}}"></script>
</body>

</html>