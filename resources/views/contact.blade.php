<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact | Byte.lk</title>
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
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>

    <!-- END SECTION BREADCRUMB -->


    <!-- START LOGIN SECTION -->
    <div class="login_register_wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    @if (Session::has('msg'))
                    <div class="alert alert-success w-100 mt-2" role="alert">
                        {{ Session::get('msg') }}
                    </div>
                    @endif
                    <div class="login_wrap">

                        <div class="padding_eight_all bg-white">

                            <div class="heading_s1">
                                <h3>Drop a message !</h3>
                            </div>
                            <form action="/contact-mail" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <input type="number" required="" class="form-control" name="phone" placeholder="Enter Your Number">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" name="msg" placeholder="Message!"></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGIN SECTION -->



    <!-----------------------------  Footer area  ----------------------------------->
    @include('./component/footer')


    <!-- js link -->
    @include('./jslink/js')


</body>

</html>