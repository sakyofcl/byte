<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Products | Admin </title>
    {{-- css --}}
    @include('./admin/csslink/css')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/customForm.css') }}">
</head>


<body class="bg-light">
    {{-- topbar --}}
    @include('./admin/topbar/topbar')
    {{-- end topbar --}}
    <div class="d-flex">
        {{-- sidebar --}}
        @include('./admin/sidebar/sidebar')
        {{-- end sidebar --}}



        <div class="content p-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">admin</a></li>
                    <li class="breadcrumb-item"><a href="manageproduct">products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">addProducts</li>
                </ol>
            </nav>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border bg-white">
                    <li class="breadcrumb-item active text-capitalize" aria-current="page">
                        <span class="badge badge-danger p-2 border text-uppercase" style="letter-spacing:2px;">
                            <i class="fas fa-plus"></i>
                            add products
                        </span>
                    </li>
                </ol>
                @if (Session::has('productSave'))
                    @if (Session::get('productSave')=="ok")
                        <div class="alert alert-success w-100 mt-2" role="alert" id="cat-msg">
                            product successfully added to your shop....
                        </div>
                    @elseif(Session::get('productSave')=="no")
                        <div class="alert alert-danger" role="alert" id="cat-msg">
                            Product doesn't add please check issue...!
                        </div>
                    @endif
                @endif
            </nav>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-form">
                        <form action="addproduct" method="POST" class="signup" enctype='multipart/form-data'>

                            @csrf

                            <div class="form-title text-capitalize bg-danger rounded-0 border"><i class="fas fa-shopping-bag mr-2"></i>
                                Add
                                beautiful product
                                here..
                            </div>
                            <div class="form-body row ml-0 mr-0 p-3">

                                <div class="col-md-6 form-row">
                                    <select class="form-control rawinput text-uppercase" name="catid" id="catid">
                                        <option value="" disabled selected>Select Main category</option>
                                        @foreach ($category['main'] as $items)
                                            <option value="{{$items->catid}}">{{$items->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 form-row">
                                    <select class="form-control rawinput" name="subid" id="subid">
                                        <option value="" disabled selected>Select Sub category</option>
                                    </select>
                                </div>

                                <div class="col-12 form-row">
                                    <label for="name" class="text-danger">Product Name*</label>
                                    <input type="text" name="name" id="name" class="form-control rawinput">
                                </div>
                                <div class="col-md-4 form-row ">
                                    <label for="stock" class="text-danger">Stock</label>
                                    <div class="form-control border-0" style="background-color:#e8ebed;" id="stockErr">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input stock" type="radio" name="stock" value="1">
                                            <label class="form-check-label" for="inlineRadio1" >Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input stock" type="radio" name="stock" value="0">
                                            <label class="form-check-label" for="stock">No</label>
                                        </div>
                                    </div>
                                      
                                </div>

                                <div class="col-md-4 form-row">
                                    <label for="brand" class="text-danger">Brand*</label>
                                    <input type="text" name="brand" id="brand" class="form-control rawinput" placeholder="Brand">
                                </div>

                                <div class="col-md-4 form-row">
                                    <label for="model" class="text-danger">Model*</label>
                                    <input type="text" name="model" id="model" class="form-control rawinput" placeholder="Model">
                                </div>

                                <div class="col-md-6 form-row">
                                    <label for="pcode" class="text-danger"> Product Code*</label>
                                    <input type="text" name="pcode" id="pcode" class="form-control rawinput">
                                </div>
                            
                                <div class="col-md-6 form-row">
                                    <label for="price" class="text-danger">Product Price*</label>
                                    <input type="number" name="price" id="price" class="form-control rawinput">
                                </div>

                                <div class="col-12 form-row">
                                    <label for="description" class="text-danger">Short Description*</label>
                                    <textarea name="description" id="description" class="form-control rawinput h-100" rows="3"></textarea>
                                </div>

                                <div class="col-12 form-row">
                                    <label for="image" class="text-danger mt-4">Product Image*</label>
                                    <input type="file" name="image" id="image" class="form-control-file rawinput">
                                </div>

                                <div class="col-12 form-row">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb border bg-white">
                                            <li class="breadcrumb-item active text-capitalize" aria-current="page">
                                                <span class="badge badge-success p-2 border text-uppercase" style="letter-spacing:2px;">
                                                    <i class="fas fa-plus"></i>
                                                    add specifications
                                                </span>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>

                                <div class="col-12 form-row w-100">
                                    <textarea name="editerdisc" id="editer-disc" class="form-control rawinput h-100 w-100" rows="3"></textarea>
                                </div>
                                
                                
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-danger mr-1 h-100" id="addbtn">
                                    <i class="fas fa-plus mr-1"></i>
                                    <span>Add New<span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    
    @include('./admin/jslink/js')
    <script src="{{ asset('assets/admin/js/validation/addproduct.js')}}" type="module"></script>
    <script src="{{ asset('assets/admin/js/api/addproduct.js')}}" type="module"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.0.0/tinymce.min.js" integrity="sha512-k+t+yFpvcMDstTfYd5lj2624TCW6A9QkHBuFGNWpSlalxBCm/vVdTukWKGk+n+AnzbgoXLgg9x2ztZWk3TuGvQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/admin/js/editer/init.js')}}"></script>
    
</body>

</html>
