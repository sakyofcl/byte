<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>Checkout | IT STORE</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- style sheets -->
    @include('./csslink/css')
    <style rel="stylesheet">
        .error {
            border: 1px solid red !important;
            transition: 0.5s;
        }

        .noerror {
            border: 1px solid rgb(101, 168, 0) !important;
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

    <!----------------------------- Check out Contant   --------------------------------------->

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
                                    <a href="#">Checkout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->




        <!--====== Section 3 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="checkout-f">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="checkout-f__h1">DELIVERY INFORMATION</h1>
                                <form class="checkout-f__delivery" action="/store" method="post"
                                    enctype="multipart/form-data">
                                    <div class="u-s-m-b-30">
                                        @csrf
                                        <!--====== E-MAIL ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-email">NAME *</label>

                                            <input name="name" id="name" class="input-text input-text--primary-style"
                                                type="text">


                                        </div>
                                        <!--====== End - E-MAIL ======-->

                                        <!--====== E-MAIL ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-email">E-MAIL *</label>

                                            <input name="email" id="email" class="input-text input-text--primary-style"
                                                type="text">

                                        </div>
                                        <!--====== End - E-MAIL ======-->


                                        <!--====== PHONE ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-phone">PHONE *</label>

                                            <input name="number" id="number"
                                                class="input-text input-text--primary-style" type="number">
                                        </div>
                                        <!--====== End - PHONE ======-->


                                        <!--====== Street Address ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-street">STREET ADDRESS *</label>

                                            <input name="address" id="address"
                                                class="input-text input-text--primary-style" type="text"
                                                placeholder="House name and street name">
                                        </div>

                                        <!--====== End - Street Address ======-->


                                        <!--====== Town / City ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-town-city">TOWN/CITY *</label>

                                            <input name="town" id="town" class="input-text input-text--primary-style"
                                                type="text">
                                        </div>
                                        <!--====== End - Town / City ======-->


                                        <!--====== STATE/PROVINCE ======-->
                                        <div class="u-s-m-b-15">

                                            <!--====== Select Box ======-->

                                            <label class="gl-label" for="billing-state">STATE/PROVINCE *</label>
                                            <select name="province" id="province"
                                                class="select-box select-box--primary-style">
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
                                            <!--====== End - Select Box ======-->
                                        </div>
                                        <!--====== End - STATE/PROVINCE ======-->


                                        <!--====== ZIP/POSTAL ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-zip">ZIP/POSTAL CODE *</label>

                                            <input name="zipcode" id="zipcode"
                                                class="input-text input-text--primary-style" type="text"
                                                placeholder="Zip/Postal Code">
                                        </div>
                                        <!--====== End - ZIP/POSTAL ======-->

                                        <div class="o-summary__section u-s-m-b-30">
                                            <div class="o-summary__box">
                                                <h1 class="checkout-f__h1">PAYMENT INFORMATION</h1>
                                                <div class="checkout-f__payment">
                                                    @foreach ($product['paymentmethods'] as $items)
                                                        @switch($items->name)

                                                            @case(" cash")
                                                                <div class="radio-box">

                                                                    <input type="radio" name="payment"
                                                                        value={{ $items->payment_id }} id="payment">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label"
                                                                            for="pay-with-card">Pay Upon
                                                                            Cash on
                                                                            delivery.</label>
                                                                    </div>
                                                                </div>
                                                            @break

                                                            @case(" bank")
                                                                <div class="radio-box">

                                                                    <input type="radio" name="payment"
                                                                        value={{ $items->payment_id }} id="payment">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label"
                                                                            for="pay-with-card">Make
                                                                            your payment directly into
                                                                            our
                                                                            bank account</label>
                                                                    </div>
                                                                </div>
                                                            @break

                                                            @case(" card")
                                                                <div class="radio-box">

                                                                    <input type="radio" name="payment"
                                                                        value={{ $items->payment_id }} disabled
                                                                        id="payment">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label"
                                                                            for="pay-with-card">Credit /
                                                                            Debit Card( only registered users )</label>
                                                                    </div>
                                                                </div>
                                                            @break

                                                            @case(" paypal")
                                                                <div class="radio-box">

                                                                    <input type="radio" name="payment"
                                                                        value={{ $items->payment_id }} disabled
                                                                        id="payment">
                                                                    <div class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label"
                                                                            for="pay-with-card">Paypal (
                                                                            only registered users )</label>
                                                                    </div>
                                                                </div>
                                                            @break
                                                        @endswitch

                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>

                                        <div class="u-s-m-b-15" id="bankslip" style="display:none;">

                                            <label class="gl-label" for="billing-zip">Bank slip</label>

                                            <input name="slip" id="slip" class="input-text input-text--primary-style"
                                                type="file">
                                        </div>

                                        <div class="u-s-m-b-10">

                                            <label class="gl-label" for="order-note">ORDER NOTE</label>
                                            <textarea name="ordernode" id="ordernode"
                                                class="text-area text-area--primary-style"></textarea>
                                        </div>

                                        <div>

                                            <button class="btn btn--e-brand-b-2" type="submit" id="placeorder">PLACE
                                                ORDER</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <h1 class="checkout-f__h1">ORDER SUMMARY</h1>

                                <!--====== Order Summary ======-->
                                <div class="o-summary">
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__item-wrap gl-scroll">
                                            @foreach (Session::get('cart') as $items)
                                                <div class="o-card">
                                                    <div class="o-card__flex">

                                                        <div class="o-card__img-wrap" style="color:transparent;">
                                                            {{ $pimag = 'products/' . $items['photo'] }}
                                                            <img class="u-img-fluid" src="{{ asset($pimag) }}" alt="">
                                                        </div>



                                                        <div class="o-card__info-wrap">

                                                            <span class="o-card__name">
                                                                <a
                                                                    href="/maincategory/productinfo/{{ $items['id'] }}">
                                                                    {{ $items['name'] }}
                                                                </a>
                                                            </span>

                                                            <span class="o-card__quantity">Quantity x
                                                                {{ $items['qty'] }}</span>

                                                            <span
                                                                class="o-card__price">Rs.{{ number_format($items['price']) }}</span>
                                                        </div>
                                                    </div>

                                                    <a href="/remove-cart-item/{{ $items['id'] }}"
                                                        class="o-card__del far fa-trash-alt"></a>
                                                </div>

                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <h1 class="checkout-f__h1">SHIPPING & BILLING</h1>
                                            <div class="ship-b">

                                                <span class="ship-b__text">Ship to:</span>
                                                <div class="ship-b__box u-s-m-b-10" style="text-transform: capitalize;">
                                                    <p class="ship-b__p">
                                                        <span id="shipname"></span><br />
                                                        <span id="shipaddrs"></span><br />
                                                        <span id="shipcity"></span><br />
                                                        <span id="shipzipcode"></span><br />
                                                        <span id="shipnumber"></span><br />
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <table class="o-summary__table">
                                                <tbody>

                                                    <tr>
                                                        <td>SHIPPING</td>
                                                        <td>Rs.00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>TAX</td>
                                                        <td>Rs.00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SUBTOTAL</td>
                                                        <td>Rs.00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GRAND TOTAL</td>
                                                        <?php $total = 0; ?>
                                                        @foreach (Session::get('cart') as $items)
                                                            {{ $total = $total + $items['price'] * $items['qty'] }}
                                                        @endforeach
                                                        <td>Rs.{{ number_format($total) }}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <!--====== End - Order Summary ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 3 ======-->
    </div>
    <!--====== End - App Content ======-->

    <!----------------------------- End Check out Contant -------------------------------------->



    <!-----------------------------  footer area  ----------------------------------->
    @include('./component/footer')

    <!-- javascript -->
    @include('./jslink/js')

    <script src="{{ asset('assets/js/validation/checkout.js') }}"></script>
</body>

</html>
