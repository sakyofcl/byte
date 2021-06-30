<!-- START FOOTER -->

<footer class="bg-dark">

    <div class="footer_top small_pt pb_20">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12">

                    <div class="widget ">

                        <div class="footer_logo">

                            <a href="/"><img style="height:70px;width:170px;" src={{ asset('assets/images/logo/logo.png') }} alt="logo" /></a>

                        </div>

                        <p class="mb-3">World largest it equipment suppliers</p>

                        <ul class="contact_info">

                            <li>

                                <i class="ti-location-pin text-danger"></i>

                                <p>

                                    105/33,Unity Square Sports Complex,

                                    <br />

                                    Private bus Stand,

                                    <br />

                                    Kalmunai.

                                </p>

                            </li>

                            <li>

                                <i class="ti-email text-primary"></i>

                                <p>info@byte.lk</p>

                            </li>

                            <li>

                                <i class="ti-mobile text-success"></i>

                                <p>077 1377709</p>

                            </li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-sm-6">

                    <div class="widget">

                        <h6 class="widget_title text-danger">Useful Links</h6>

                        <ul class="widget_links">

                            <li><a href="/about">About</a></li>

                            <li><a href="/contact">Contact</a></li>

                            <li><a href="#">Location</a></li>

                            <li><a href="#">Affiliates</a></li>

                            <li><a href="#">Faq</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-sm-6">

                    <div class="widget">

                        <h6 class="widget_title text-primary">My Account</h6>

                        <ul class="widget_links">

                            <li><a href="#">My Account</a></li>

                            <li><a href="#">Discount</a></li>

                            <li><a href="#">Returns</a></li>

                            <li><a href="#">Orders History</a></li>

                            <li><a href="#">Order Tracking</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">

                    <div class="widget">

                        <h6 class="widget_title text-success">Products</h6>

                        <ul class="widget_instafeed instafeed_col4">





                            @if(Session::get('newproduct')!==null)

                            <?php $items = Session::get('newproduct'); ?>

                            @for($i=0; $i < count($items); $i++) @if($i<=8) <li>



                                <a href="/productinfo/{{strtolower( preg_replace('/\s+/','-', $items[$i]->name) ) }}/{{ $items[$i]->pid }}">

                                    <?php $newProductImage = 'products/' . $items[$i]->image; ?>

                                    <img src={{ asset($newProductImage) }} alt="product_img1">

                                    <span class="insta_icon">

                                        <i class="icon-basket-loaded"></i>

                                    </span>

                                </a>

                                </li>

                                @else

                                @break

                                @endif

                                @endfor

                                @endif



                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <div class="bottom_footer border-top-tran">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-4">

                    <p class="mb-lg-0 text-center text-white">© 2021 All Rights Reserved by byte.lk | <span style="letter-spacing:2px;">v1.0.8</span><br>
                        <a class="text-white" href="http://royaltech.lk" target="_blank">
                            <span>Developed By Royaltech </span>
                            <span>
                                <a href="https://www.facebook.com/Royaltechlk/" target="_blank">
                                    <i class="fab fa-facebook text-primary pl-1"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram text-danger"></i>
                                </a>

                            </span>
                        </a>
                    </p>

                </div>

                <div class="col-lg-4 order-lg-first">

                    <div class="widget mb-lg-0">

                        <ul class="social_icons text-center text-lg-left">

                            <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>

                            <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a>

                            </li>

                            <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-4">

                    <ul class="footer_payment text-center text-lg-right">

                        <li>

                            <a href="#">

                                <img src={{ asset('assets/images/footer/visa.png') }} alt="visa">

                            </a>

                        </li>

                        <li>

                            <a href="#">

                                <img src={{ asset('assets/images/footer/master_card.png') }} alt="master_card">

                            </a>

                        </li>

                        <li>

                            <a href="#">

                                <img src={{ asset('assets/images/footer/paypal.png') }} alt="paypal">

                            </a>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</footer>

<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>