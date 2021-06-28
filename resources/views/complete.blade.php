
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Completed | Byte.lk</title>
    <!-- style sheets -->
    @include('./csslink/css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/invoice.css') }}" />
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
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Order Completed</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>

    <!-- END SECTION BREADCRUMB -->

    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row justify-content-center bg-white">
                <div class="col-12" >
                    <div class="text-center order_complete">
                        <i class="fas fa-check-circle"></i>
                        <div class="heading_s1">
                        <h3>Your order is completed!</h3>
                        </div>
                        <p>Thank you for your order! Your order is being processed and will be completed within 3-6 hours. You will receive an email confirmation when your order is completed.</p>
                        

                        @include('component/invoice')
                        <a href="/product" class="btn btn-fill-out">Continue Shopping</a>
                        <a href="#" class="btn btn-fill-out-green" id="dwnldinvoice" download>Download Invoice</a>
                    </div>
                </div>
            </div>
           
        </div>
    
    </div>
    <!-- END SECTION SHOP -->

    


    <!----------------------------- clear session ----------------------->
    <?php 
        $cart=session()->get('cart');
        if($cart){
            $cart=[];
            session()->put('cart',$cart);                  
        }
    ?>

    <!-----------------------------  Footer area  ----------------------------------->
    @include('./component/footer')


    <!-- js link -->
    @include('./jslink/js')
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/htmltoimg.js') }}"></script>

    <script>
        
        $(document).ready(()=>{
            var node = document.getElementById('invoice');
            var options = {quality: 0.95};

            domtoimage.toJpeg(node, options).then((data)=>{
                
                $('#dwnldinvoice').attr('href',data);
            })
        })

    </script>

</body>

</html>






