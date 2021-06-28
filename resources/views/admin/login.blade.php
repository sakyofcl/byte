<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Admin </title>
    {{-- css --}}
    @include('./admin/csslink/css')
</head>


<body class="bg-light">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <h1 class="text-center mb-4">Admin</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="admin" method="post">
                            @csrf

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" name="email" id="email" class="form-control" placeholder="email">
                            </div>
                            <div class="text-danger">
                                <span id="invalidemail">invalid email</span>
                                <span id="emailError">required*</span>
                            </div>

                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password">
                            </div>
                            <div class="text-danger">
                                <span id="invalidpass">(8-15 include special character) </span>
                                <span id="passwordError">required*</span>
                            </div>

                            <div class="row mt-3">
                                <div class="col pr-2">
                                    <button type="submit" id="sub" class="btn btn-block btn-primary">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('./admin/jslink/js')
    <script src="{{ asset('assets/admin/js/validation/adminlogin.js') }}"></script>
</body>

</html>
