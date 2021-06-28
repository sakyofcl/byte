<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main category | Byte.lk</title>
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
                    <ol class="breadcrumb justify-content-center ">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item "><a href="/product">Product</a></li>
                        <li class="breadcrumb-item active">
                            @foreach ($products['maincat'] as $items)
                                <a>{{ $items->name }}</a>
                            @endforeach
                        </li>
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
                                            <a href="javascript:Void(0);" class="shorting_icon grid active"><i
                                                    class="ti-view-grid"></i></a>
                                            <a href="javascript:Void(0);" class="shorting_icon list"><i
                                                    class="ti-layout-list-thumb"></i></a>
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
                            @if(count($products['main'])!==0)
                                @foreach ($products['main'] as $items)
                                    <div class="col-md-4 col-6" id="testcart">
                                        <div class="product">
                                            <div class="product_img">
                                                <a href="shop-product-detail.html">
                                                    <?php $img = 'products/' . $items->image; ?>
                                                    <img class="aspect__img" src={{ asset($img) }}>
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart">
                                                            <a href="/addcart/{{ $items->pid }}">
                                                                <i class="icon-basket-loaded"></i>
                                                                Add To Cart
                                                            </a>
                                                        </li>
                                                        
                                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a
                                                        href="/productinfo/{{strtolower( preg_replace('/\s+/','-', $items->name) ) }}/{{ $items->pid }}">{{ $items->name }}</a>
                                                </h6>
                                                <div class="product_price">
                                                    <span class="price"> Rs.{{ number_format($items->price) }}</span>
                                                </div>

                                                <div class="pr_desc">
                                                    <p>{{ $items->description }}</p>
                                                </div>

                                                <div class="list_product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li class="add-to-cart"><a href="/addcart/{{ $items->pid }}"><i
                                                                    class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                        
                                                        <li><a href="#" class="popup-ajax"><i
                                                                    class="icon-magnifier-add"></i></a></li>
                                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                
                                <div class="alert alert-light d-flex justify-content-center w-100" role="alert">
                                    <i class="far fa-sad-tear ml-2 text-dark"></i>
                                    nothing to have...!
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="pagination mt-3 justify-content-center pagination_style1">
                                    @if(count($products['main'])!==0)
                                        {{$products['main']->links()}}
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                        <div class="sidebar">
                            <div id="accordion" class="w-100">
                                <h6 class="text-danger text-uppercase text-center p-2 mb-3 bg-light border">sub Categories</h6>
                                @foreach ($products['subcatid'] as $items)
                                    <div class="card border-0 mb-1">
                                        <div>
                                            <div class="d-flex flex-nowrap justify-content-between bg-light p-2 border">

                                                <?php 
                                                $subName=strtolower( preg_replace('/\s+/','-', $items->name) );
                                                ?>
                                                
                                                <a href="/subcategory/{{ $subName }}/{{ $items->subid }}" class="ml-2 text-uppercase p-0">
                                                    {{ $items->name }}
                                                </a>
                                                
                                                <a href="#" data-toggle="collapse" data-target="#C{{ $items->subid }}" aria-expanded="false">
                                                    <i class="fas fa-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
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
                                <input type="text" required="" class="form-control rounded-0"
                                    placeholder="Enter Email Address">
                                <button type="submit" class="btn btn-dark rounded-0" name="submit"
                                    value="Submit">Subscribe</button>
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
