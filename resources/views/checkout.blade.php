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
                        <form action="https://www.payhere.lk/pay/checkout" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="merchant_id" value="217939">
                            <input type="hidden" name="return_url" value="http://byte.lk/return">
                            <input type="hidden" name="cancel_url" value="http://byte.lk/cancel">
                            <input type="hidden" name="notify_url" value="http://byte.lk/notify">
                            <?php $totalAmount = 0; ?>
                            @foreach (Session::get('cart') as $items)
                            <?php $totalAmount = $totalAmount + $items['price'] * $items['qty'];
                            ?>
                            @endforeach
                            <input type="hidden" name="currency" value="LKR">
                            <input type="hidden" name="amount" value={{$totalAmount}}>


                            <div class="col-md-12 d-flex flex-row p-0">
                                <div class="form-group col-md-6 pl-0">
                                    <label for="name">FIRST NAME *</label>
                                    <input name="name" id="first_name" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-6 pr-0">
                                    <label for="name">LAST NAME *</label>
                                    <input name="name" id="last_name" class="form-control" type="text">
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


                            <div class="col-md-12 d-flex flex-row p-0">
                                <div class="form-group col-md-6 pl-0">
                                    <label for="zipcode">ZIP/POSTAL CODE *</label>
                                    <input name="zipcode" id="zipcode" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-6 pr-0">
                                    <div class="custom_select">
                                        <label for="province">COUNTRY *</label>
                                        <select class="form-control" id="country" name="country">

                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka" selected>Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>

                                        </select>
                                    </div>
                                </div>
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
                                        <input class="form-check-input" type="radio" name="payment" option="card" value={{ $card }}>
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
                                    <p class="text-dark mb-1">Ship to:</p>
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
                                                <a href="/productinfo/{{strtolower( preg_replace('/\s+/','-', $items['name']) ) }}/{{ $items['id'] }}">
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
    <!--
    <script src="{{ asset('assets/js/validation/checkout.js') }}"></script>
                            -->
</body>

</html>