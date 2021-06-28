<div class="bottom_header light_skin main_menu_uppercase bg_dark mb-4">
    <div class="container">
        <div class="row">


            <div class="col-lg-3 col-md-4 col-sm-6 col-3">

                <div class="categories_wrap">
                    <button type="button" data-toggle="collapse" data-target="#navCatContent" aria-expanded="false"
                        class="categories_btn">
                        <i class="linearicons-menu"></i>
                        <span>All Categories </span>
                    </button>

                    <div id="navCatContent" class="nav_cat navbar collapse">

                        <ul>
                            <?php
                            if (Session::has('main')) {
                            $main = count(Session::get('main'));
                            $maindata = Session::get('main');
                            } else {
                            $main = 0;
                            }
                            if (Session::has('sub')) {
                            $sub = count(Session::get('sub'));
                            $subdata = Session::get('sub');
                            } else {
                            $sub = 0;
                            }
                            ?>
                            @if ($main !== 0)
                                @for ($i = 0; $i < $main; $i++)

                                    @if ($i <= 9) <li class="dropdown dropdown-mega-menu">
                                            <a class="dropdown-item nav-link dropdown-toggler text-uppercase"
                                                href="#" data-toggle="dropdown">
                                                <i class="ti-view-grid text-danger" style="font-size:13px;"></i>
                                                <span>{{ $maindata[$i]->name }}</span>
                                            </a>

                                            <div class="dropdown-menu">
                                                <ul class="mega-menu d-lg-flex">
                                                    <li class="mega-menu-col col-lg-7">
                                                        <ul class="d-lg-flex">
                                                            <li class="mega-menu-col col-lg-6">
                                                                <ul>
                                                                    <a class="text-uppercase" href="product/{{ $maindata[$i]->name }}">
                                                                        <li class="dropdown-header">{{ $maindata[$i]->name }}</li>
                                                                    </a>

                                                                     @if ($sub !==0)
                                        @for ($s = 0; $s < $sub; $s++)
                                            @if ($maindata[$i]->catid == $subdata[$s]->catid)
                                                <li>
                                                <a class="dropdown-item nav-link nav_item text-uppercase"
                                                href="/product/{{$maindata[$i]->name}}/{{ $subdata[$s]->name}}/{{ $subdata[$s]->subid }}">{{ $subdata[$s]->name }}
                                                </a>
                                                </li> @endif
                                            @endfor
                                        @endif
                        </ul>
                        </li>
                        </ul>
                        </li>
                        </ul>
                    </div>
                    </li>
                @else
                    <li>
                        <ul class="more_slide_open">
                            <li class="dropdown dropdown-mega-menu">
                                <a class="dropdown-item nav-link dropdown-toggler"
                                    href="#" data-toggle="dropdown">
                                    <i class="ti-view-grid text-danger" style="font-size:13px;"></i>
                                    <span>{{ $maindata[$i]->name }}</span>
                                </a>

                                <div class="dropdown-menu">
                                    <ul class="mega-menu d-lg-flex">
                                        <li class="mega-menu-col col-lg-7">
                                            <ul class="d-lg-flex">
                                                <li class="mega-menu-col col-lg-6">
                                                    <ul>
                                                        <a
                                                            href="product/{{ $maindata[$i]->name }}">
                                                            <li class="dropdown-header">
                                                                {{ $maindata[$i]->name }}
                                                            </li>
                                                        </a>
                                                        @if ($sub !== 0)
                                                            @for ($s = 0; $s < $sub; $s++)
                                                                @if ($maindata[$i]->catid ==
                                                                $subdata[$s]->catid) <li>
                                                                <a class="dropdown-item nav-link nav_item"
                                                                href="/product/{{$maindata[$i]->name}}/{{ $subdata[$s]->name}}/{{ $subdata[$s]->subid }}">{{ $subdata[$s]->name }}
                                                                </a>
                                                                </li> @endif
                                                            @endfor
                                                        @endif
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                        </ul>
                    </li>
                    @endif

                    @endfor
                    @endif
                    </ul>


                    <div class="more_categories">More Categories</div>
                </div>
            </div>

        </div>
        <div class="col-lg-9 col-md-8 col-sm-6 col-9">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler side_navbar_toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSidetoggle" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse mobile_side_menu " id="navbarSidetoggle">
                    <ul class="navbar-nav ">
                        <li><a class="nav-link nav_item" href="/">Home</a></li>
                        <li><a class="nav-link nav_item" href="/product">Product</a></li>
                        <li><a class="nav-link nav_item" href="/about">About</a></li>
                        <li><a class="nav-link nav_item" href="/contact">Contact</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li>
                        <a href="#" class="nav-link">
                            <i class="linearicons-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            <i class="linearicons-heart"></i>
                            <span class="wishlist_count">0</span>
                        </a>
                    </li>
                    <li class="dropdown cart_dropdown">
                        <a class="nav-link cart_trigger" data-toggle="dropdown">
                            <i class="linearicons-cart"></i>

                            <?php if (Session::has('cart')) {
                            $totalcart = count(Session::get('cart'));
                            } else {
                            $totalcart = 0;
                            } ?>
                            <span class="cart_count">{{ $totalcart }}</span>
                        </a>


                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                @if (Session::has('cart'))
                                    @foreach (Session::get('cart') as $items)
                                        <li>
                                            <a href="/remove-cart-item/{{ $items['id'] }}" class="item_remove">
                                                <i class="ion-close"></i>
                                            </a>
                                            <a href="/productinfo/{{ $items['id'] }}">
                                                {{ $items['name'] }}
                                            </a>
                                            <span class="cart_quantity">
                                                {{ $items['qty'] }} x
                                                <span class="cart_amount">
                                                    <span class="price_symbole">Rs.</span>
                                                </span>
                                                {{ number_format($items['price'] * $items['qty']) }}
                                            </span>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total d-flex justify-content-between">
                                    <strong>Total:</strong>
                                    @if (!Session::has('cart'))
                                        <span>Empty!</span>
                                    @endif

                                    {{-- calculate total price --}}
                                    <?php $totalprice = 0; ?>
                                    @if (Session::has('cart'))
                                        @foreach (Session::get('cart') as $items)
                                            <?php $totalprice = $totalprice + $items['price'] *
                                            $items['qty']; ?>
                                        @endforeach
                                        <span>Rs.{{ number_format($totalprice) }}</span>
                                    @else
                                        <span>Rs.{{ number_format($totalprice) }}</span>
                                    @endif


                                </p>
                                <p class="cart_buttons">
                                    <a href="/cart" class="btn btn-fill-out view-cart">ViewCart</a>
                                    <a href="/checkout" class="btn btn-fill-out-green checkout">Checkout</a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="pr_search_icon">
                    <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i
                            class="linearicons-magnifier"></i></a>
                </div>
            </nav>
        </div>
    </div>
</div>
</div>
