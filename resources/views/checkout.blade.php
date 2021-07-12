<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout | Byte.lk</title>
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
                        <li class="breadcrumb-item active">Checkout</li>
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
                        <div class="medium_divider"></div>
                        <div class="divider center_icon"><i class="linearicons-credit-card text-primary"></i></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading_s1">
                            <h4 class="text-capitalize">DELIVERY INFORMATION</h4>
                        </div>
                        <form action="/store" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="col-md-12 d-flex flex-row p-0">
                                <div class="form-group col-md-6 pl-0">
                                    <label for="name">FIRST NAME *</label>
                                    <input name="first_name" id="first_name" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-6 pr-0">
                                    <label for="name">LAST NAME *</label>
                                    <input name="last_name" id="last_name" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">E-MAIL *</label>
                                <input name="email" id="email" class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label for="number">PHONE *</label>
                                <input name="phone" id="number" class="form-control" type="number">
                            </div>

                            <div class="form-group">
                                <label for="address">STREET ADDRESS *</label>
                                <input name="address" id="address" class="form-control" type="text">
                            </div>


                            <div class="col-md-12 d-flex flex-row p-0">
                                <div class="form-group col-md-6 pl-0">
                                    <label for="town">TOWN/CITY *</label>
                                    <input name="city" id="town" class="form-control" type="text">
                                </div>

                                <div class="form-group col-md-6 pr-0">
                                    <div class="custom_select">
                                        <label for="province">STATE/PROVINCE *</label>
                                        <select class="form-control" name="province" id="province">
                                            <option selected value="" disabled>Choose State/Province</option>
                                            <option value="central">Central</option>
                                            <option value="eastern">Eastern</option>
                                            <option value=" North Central">North Central</option>
                                            <option value="North Western">North Western</option>
                                            <option value="Sabaragamuwa">Sabaragamuwa</option>
                                            <option value="Southern">Southern</option>
                                            <option value="Uva">Uva</option>
                                            <option value="Western">Western</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom_select">
                                    <label for="province">STATE/PROVINCE *</label>
                                    <select class="form-control" name="province" id="province">
                                        <option selected value="" disabled>Choose State/Province</option>
                                        <option value="central">Central</option>
                                        <option value="eastern">Eastern</option>
                                        <option value=" North Central">North Central</option>
                                        <option value="North Western">North Western</option>
                                        <option value="Sabaragamuwa">Sabaragamuwa</option>
                                        <option value="Southern">Southern</option>
                                        <option value="Uva">Uva</option>
                                        <option value="Western">Western</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="zipcode">ZIP/POSTAL CODE *</label>
                                <input name="zipcode" id="zipcode" class="form-control" type="text">
                            </div>
                            <div class="payment_method">
                                <div class="heading_s1">
                                    <h4>Payment</h4>
                                </div>
                                <div class="payment_option d-flex flex-column pl-4">
                                    @foreach ($product['paymentmethods'] as $items)
                                    <?php
                                    $cash = 'cash';
                                    $bank = 'bank';
                                    $card = 'card';
                                    ?>
                                    @switch($items->method)

                                    @case($cash)
                                    <div>
                                        <input class="form-check-input" type="radio" name="payment" option="cash" value={{ $cash }}>
                                        <label class="form-check-label" for="payment" id="cash">
                                            Cash on delivery.
                                        </label>
                                    </div>
                                    @break

                                    @case($bank)
                                    <div>
                                        <input class="form-check-input" type="radio" name="payment" option="bank" value={{ $bank }}>
                                        <label class="form-check-label" for="payment" id="bank">
                                            Direct Bank Transfer
                                        </label>
                                    </div>
                                    @break
                                    @case($card)
                                    <div>
                                        <input class="form-check-input" type="radio" name="payment" option="card" value={{ $card }} disabled>
                                        <label class="form-check-label" for="payment" id="card">
                                            Credit / Debit Card( only for registered users )
                                        </label>
                                    </div>
                                    @break
                                    @endswitch
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group" id="bankslip" style="display:none;">
                                <label for="slip">BANK SLIP *</label>
                                <input name="slip" id="slip" class="form-control" type="file">
                            </div>

                            <div class="heading_s1">
                                <h4>Additional information</h4>
                            </div>
                            <div class="form-group">
                                <label for="ordernode">ORDER NOTE</label>
                                <textarea rows="5" class="form-control" name="ordernode" id="ordernode"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" id="placeorder" class="btn btn-fill-out btn-block">Place
                                    Order</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">

                        <div class="order_review">
                            <div class="payment_method">
                                <div class="heading_s1">
                                    <h4>SHIPPING & BILLING</h4>
                                </div>
                                <div class="heading_s1">
                                    <p class="text-dark mb-1">Ship to :</p>
                                    <p style="font-size:13px;" class="text-capitalize">
                                        <span id="shipname"></span><br />
                                        <span id="shipaddrs"></span><br />
                                        <span id="shipcity"></span><br />
                                        <span id="shipzipcode"></span><br />
                                        <span id="shipnumber"></span><br />
                                    </p>
                                </div>

                            </div>
                            <div class="heading_s1">
                                <h4>ORDER SUMMARY</h4>
                            </div>
                            <div class="table-responsive order_table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Session::get('cart') as $items)
                                        <tr>
                                            <td>
                                                <a href="/productinfo/{{str_replace(' ', '-', str_replace('/', '-' , $items['name']))}}/{{$items['id']}}">
                                                    {{ $items['name'] }}
                                                </a>
                                                <span class="product-qty">x {{ $items['qty'] }}</span>
                                            </td>
                                            <td>Rs.{{ number_format($items['price'] * $items['qty']) }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>

                                        <tr>
                                            <th>Total</th>
                                            <?php $total = 0; ?>
                                            @foreach (Session::get('cart') as $items)
                                            <?php $total = $total + $items['price'] * $items['qty'];
                                            ?>
                                            @endforeach
                                            <td class="product-subtotal">Rs.{{ number_format($total) }}</td>

                                        </tr>
                                    </tfoot>
                                </table>
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
    <script src="{{ asset('assets/js/validation/checkout.js') }}"></script>

</body>

</html>