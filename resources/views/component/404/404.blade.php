
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Error| Byte.lk</title>
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
                        <li class="breadcrumb-item active">404</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>

    <!-- END SECTION BREADCRUMB -->

   

    <!-- START 404 SECTION -->
    <div class="section">
        <div class="error_wrap">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10 order-lg-first">
                        <div class="text-center">
                            <div class="error_txt">404</div>
                            <h5 class="mb-2 mb-sm-3">oops! The page you requested was not found!</h5> 
                            <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
                            <div class="search_form pb-3 pb-md-4">
                                <form method="post">
                                    <input name="text" id="text" type="text" placeholder="Search" class="form-control">
                                    <button type="submit" class="btn icon_search"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                            <a href="/" class="btn btn-fill-out-green">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END 404 SECTION -->
   

    <!-----------------------------  Footer area  ----------------------------------->
    @include('./component/footer')


    <!-- js link -->
    @include('./jslink/js')
  

</body>

</html>






