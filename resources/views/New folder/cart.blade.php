<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>Card | IT STORE</title>

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

    <!----------------------------- card Contant   --------------------------------------->

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

                                    <a href="cart">Cart</a>
            
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
                                <h1 class="section__heading u-c-secondary">SHOPPING CART</h1>
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
                        <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                            <div class="table-responsive">
                                <table class="table-p">
                                    <tbody>

                                        <!--====== Row ======-->
                                        @foreach(Session::get('cart') as $items)

                                            <tr>
                                                <td>
                                                    <div class="table-p__box">

                                                        <div class="table-p__img-wrap">
                                                            <?php $img = 'products/' . $items['photo']; ?>
                                                            <img class="u-img-fluid" src={{ asset($img) }}>
                                                        </div>

                                                        <div class="table-p__info">

                                                            <span class="table-p__name">

                                                                <a href="/maincategory/productinfo/{{$items['id']}}">{{$items['name'] }}</a></span>

                                                            <span class="table-p__category">
                                                                <a href="shop-side-version-2.html">Quantity x {{$items['qty']}}</a>
                                                            </span>

                                                            <ul class="table-p__variant-list" >
                                                                <li>
                                                                    <span>Price: <b>Rs. {{number_format($items['price'])}}</b></span>
                                                                </li>
                                                                <li>
                                                                    <span>Unit Price: <b>Rs. {{number_format($items['price'] * $items['qty'])}}</b> </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                <td>
                                                    <span class="table-p__price">Rs.{{number_format($items['price'])}}</span>
                                                </td>
                                                
                                                <td>
                                                    <div class="qtytab">
                                                        <form action="/updateqty" method="POST">
                                                            @csrf
                                                            <input type="text" name="pid" value="{{$items['id']}}" hidden>
                                                            <input class="qtybox" type="number" name="qty" value="{{$items['qty']}}" min="1">
                                                            <button class="qtybtn" type="submit" ><i class="fas fa-edit"></i></button>
                                                        </form>
                                                    </div> 
                                                </td>
                                                <td>
                                                    <div class="table-p__del-wrap">

                                                        <a class="far fa-trash-alt table-p__delete-link" href="/remove-cart-item/{{$items['id']}}"></a></div>
                                                </td>
                                                
                                            </tr>

                                        @endforeach
                                        <!--====== End - Row ======-->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="route-box">
                                <div class="route-box__g1">

                                    <a class="route-box__link" href="/product"><i class="fas fa-long-arrow-alt-left"></i>

                                        <span>CONTINUE SHOPPING</span></a></div>
                                <div class="route-box__g2">

                                    <a class="route-box__link" href="/clear-cart"><i class="fas fa-trash"></i>

                                        <span>CLEAR CART</span></a>

                                    <a class="route-box__link" href="/checkout"><i class="fas fa-shopping-cart"></i>

                                        <span>CHECKOUT</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->



        <!--====== End - Section 3 ======-->
    </div>
    <!--====== End - App Content ======-->

    <!----------------------------- End card Contant -------------------------------------->



    <!-----------------------------  footer area  ----------------------------------->
    @include('./component/footer')

    <!-- javascript -->
    @include('./jslink/js')
    
</body>

</html>
