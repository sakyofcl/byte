<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>Main category | IT STORE</title>

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

    <!----------------------------- Prodect Content --------------------------------------->
    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== breadcrumb ======-->
        <div class="u-s-p-y-60">
            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="breadcrumb">
                        <div class="breadcrumb__wrap">
                            <ul class="breadcrumb__list" style="text-transform: capitalize;">
                                <li class="has-separator">

                                    <a href="/">Home</a>
                                </li>
                                <li class="has-separator">
                                    <a href="/product">Product</a>
                                </li>
                                <li class="is-marked">
                                    @foreach ($products['maincat'] as $items)
                                        <a href="/maincategory/{{ $items->catid }}">{{ $items->name }}</a>
                                    @endforeach
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End -breadcrumb ======-->

        <!--====== Section 1 ======-->
        <div class="u-s-p-y-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="shop-w-master">
                            <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

                                <span>FILTERS</span>
                            </h1>
                            <div class="shop-w-master__sidebar sidebar--bg-snow">

                                {{-- shaw main and sub category --}}
                                <div class="u-s-m-b-30">
                                    <div class="shop-w">
                                        <div class="shop-w__intro-wrap">
                                            <h1 class="shop-w__h">SUB CATEGORY</h1>

                                            <span class="fas fa-minus shop-w__toggle" data-target="#s-category"
                                                data-toggle="collapse"></span>
                                        </div>
                                        <div class="shop-w__wrap collapse show" id="s-category">
                                            <ul class="shop-w__category-list gl-scroll">
                                                @foreach ($products['subcatid'] as $items)

                                                    <li class="has-list">
                                                        <a class="main_cat_product"
                                                            href="/subcategory/{{ $items->subid }}">{{ $items->name }}</a>
                                                        <span
                                                            class="js-shop-category-span  fas fa-plus u-s-m-l-6"></span>
                                                    </li>

                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- end shaw main and sub category --}}


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="shop-p">
                            <div class="shop-p__toolbar u-s-m-b-30">

                                <div class="shop-p__tool-style">
                                    <div class="tool-style__group u-s-m-b-8">

                                        <span class="js-shop-grid-target is-active">Grid</span>

                                        <span class="js-shop-list-target">List</span>
                                    </div>
                                    <form>
                                        <div class="tool-style__form-wrap">
                                            <div class="u-s-m-b-8"><select
                                                    class="select-box select-box--transparent-b-2">
                                                    <option>Show: 8</option>
                                                    <option selected>Show: 12</option>
                                                    <option>Show: 16</option>
                                                    <option>Show: 28</option>
                                                </select></div>
                                            <div class="u-s-m-b-8"><select
                                                    class="select-box select-box--transparent-b-2">
                                                    <option selected>Sort By: Newest Items</option>
                                                    <option>Sort By: Latest Items</option>
                                                    <option>Sort By: Best Selling</option>
                                                    <option>Sort By: Best Rating</option>
                                                    <option>Sort By: Lowest Price</option>
                                                    <option>Sort By: Highest Price</option>
                                                </select></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="shop-p__collection">
                                <div class="row is-grid-active " id="product_card">

                                    {{-- Start Loop card --}}
                                    @foreach ($products['main'] as $items)

                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                        href="/maincategory/productinfo/{{ $items->pid }}">
                                                        <?php $img = 'products/' . $items->image; ?>
                                                        <img class="aspect__img" src={{ asset($img) }}>
                                                    </a>

                                                    <div class="product-m__add-cart">

                                                        <a href="/addcart/{{$items->pid}}" class="btn--e-brand" data-modal="modal"
                                                            data-modal-id="#add-to-cart">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="product-m__content">

                                                    <div class="product-m__name">

                                                        <a
                                                            href="productinfo/{{ $items->catid }}">{{ $items->name }}</a>
                                                    </div>
                                                    <div class="product-m__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star-half-alt"></i><i
                                                            class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">0</span>
                                                    </div>
                                                    <div class="product-m__price" style="color:red;">
                                                        Rs.{{ $items->price }}</div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                    {{-- End Loop card --}}


                                </div>
                            </div>
                            <div class="u-s-p-y-60">

                                <!--====== Pagination ======-->
                                <ul class="shop-p__pagination">
                                    <li class="is-active">

                                        <a href="#">1</a>
                                    </li>
                                    <li>

                                        <a href="#">2</a>
                                    </li>
                                    <li>

                                        <a href="#">3</a>
                                    </li>
                                    <li>

                                        <a href="#">4</a>
                                    </li>
                                    <li>

                                        <a class="fas fa-angle-right" href="#"></a>
                                    </li>
                                </ul>
                                <!--====== End - Pagination ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->
    </div>
    <!--====== End - App Content ======-->
    <!----------------------------- End Prodect content ------------------------------------->



    <!-----------------------------  footer area  ----------------------------------->
    @include('./component/footer')

    <!-- javascript -->
    @include('./jslink/js')


</body>

</html>
