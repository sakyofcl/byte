<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart | Byte.lk</title>
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
                        <li class="breadcrumb-item active">Cart</li>
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
                    <div class="col-12">
                        <div style="min-width:100%; overflow-x:scroll;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Session::has('cart'))
                                        @foreach (Session::get('cart') as $items)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <?php $img = 'products/' . $items['photo']; ?>
                                                        <img src={{ asset($img) }}>
                                                    </a>
                                                </td>
                                                <td class="product-name text-nowrap" data-title="Product">
                                                    <a href="/productinfo/{{ $items['id'] }}">{{ $items['name'] }}
                                                    </a>
                                                </td>
                                                <td class="product-price text-nowrap" data-title="Price">
                                                    Rs. {{ number_format($items['price']) }}
                                                </td>
                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity d-flex flex-nowrap">
                                                        <form  action="/updateqty" method="post" class="d-flex flex-nowrap">
                                                            @csrf
                                                            <input type="text" value={{$items['id']}} name="pid" hidden>
                                                            <input type="number" name="quantity" value={{ $items['qty'] }}
                                                            title="Qty" class="qty" id={{$items['id']}}>
                                                            
                                                            <button type="submit" class="plus rounded-0" id="{{$items['id']}}"><i class="fas fa-recycle"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal text-nowrap" data-title="Total">
                                                    Rs. {{ number_format($items['price'] * $items['qty']) }}
                                                </td>
                                                <td class="product-remove" data-title="Remove">
                                                    <a href="/remove-cart-item/{{ $items['id'] }}">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="medium_divider"></div>
                        <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-md-end justify-content-center align-items-center pt-2">

                        <span class="btn btn-primary mr-2">
                            Total
                            <span class="badge badge-light rounded-0 ">
                                {{-- calculate total price --}}
                                <?php $totalprice = 0; ?>
                                @if(Session::has('cart'))
                                    @if (Session::get('cart'))
                                        @foreach (Session::get('cart') as $items)
                                            <?php $totalprice = $totalprice + $items['price'] *
                                            $items['qty']; ?>
                                        @endforeach
                                        <span>Rs.{{ number_format($totalprice) }}</span>
                                    @else
                                        <span>Rs.{{ number_format($totalprice) }}</span>
                                    @endif
                                @endif
                            </span>
                        </span>
                        <a href="/checkout">
                            <button class="btn btn-fill-out-green checkout" type="submit">Checkout</button>
                        </a>

                    </div>
                </div>


            </div>
        </div>
        <!-- END SECTION SHOP -->
    </div>

    <!-----------------------------  Footer area  ----------------------------------->
    @include('./component/footer')


    <!-- js link -->
    @include('./jslink/js')
    <script src="{{ asset('assets/js/api/cart.js') }}"></script>

</body>

</html>
