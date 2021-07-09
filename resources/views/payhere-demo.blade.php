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
                        <form method="post" action="https://sandbox.payhere.lk/pay/checkout">   
                            <input type="hidden" name="merchant_id" value="1217678">
                            <input type="hidden" name="return_url" value="http://byte.lk">
                            <input type="hidden" name="cancel_url" value="http://byte.lk">
                            <input type="hidden" name="notify_url" value="http://byte.lk">  
                            <br><br>Item Details<br>
                            <input type="text" name="order_id" value="ItemNo12345">
                            <input type="text" name="items" value="Door bell wireless"><br>
                            <input type="text" name="currency" value="LKR">
                            <input type="text" name="amount" value="10">  
                            <br><br>Customer Details<br>
                            <input type="text" name="first_name" value="Saman">
                            <input type="text" name="last_name" value="Perera"><br>
                            <input type="text" name="email" value="samanp@gmail.com">
                            <input type="text" name="phone" value="0771234567"><br>
                            <input type="text" name="address" value="No.1, Galle Road">
                            <input type="text" name="city" value="Colombo">
                            <input type="hidden" name="country" value="Sri Lanka"><br><br> 
                            <input type="submit" value="Buy Now">   
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

    

    </div>
    <!-- END MAIN CONTENT -->

    <!-----------------------------  Footer area  ----------------------------------->
    @include('./component/footer')


    <!-- js link -->
    @include('./jslink/js')
    

</body>

</html>