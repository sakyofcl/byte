<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage category | Admin </title>
    {{-- css --}}
    @include('./admin/csslink/css')
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
            <div class="content-wrapper d-flex flex-column">

                {{-- breadcrumb --}}
                <div class="row w-100 m-0">
                    <div class="col-12 p-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">category</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                {{-- end breadcrumb --}}

                {{-- add category --}}
                <div class="row w-100 m-0">
                    <div class="col-12 p-0">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb border bg-white">
                                <li class="breadcrumb-item active text-capitalize" aria-current="page">
                                    <span class="badge badge-danger p-2 border text-uppercase" style="letter-spacing:2px;">
                                        <i class="fas fa-plus"></i>
                                        add category
                                    </span>
                                </li>
                            </ol>
                        </nav>

                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="border rounded-0 d-style btn btn-brc-tp btn-outline-blue btn-h-outline-blue btn-a-outline-blue w-100 my-2 py-3" style="background-color: #e9ecef;">
                                    
                                    <div class="row align-items-center ml-0 mr-0">
            
                                        <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                            <div class="w-100 d-flex justify-content-start pb-1">
                                                <span class="badge badge-danger border text-uppercase rounded-0" style="letter-spacing:2px;" id="cat-label-name">
                                                    main category
                                                </span>
                                            </div>
                                                                                          
                                            <form action="add-main-category" method="post" class="input-group w-100" id="cat-form">
                                                @csrf
                                                <input type="text" name="cat_name" id="cat-name" class="form-control rounded-0 w-75" placeholder="type maincategory..!">
                                                <div class="input-group-append rounded-0 w-25">
                                                    <select name="main_cat_name" id="main-cat-name" class="custom-select mr-sm-2 rounded-0" id="cat-list">
                                                        <option selected value="d-v">Categories</option>
                                                        @foreach ($category['main'] as $items)
                                                            <option value={{ $items->catid }}>
                                                                {{ $items->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <button  class="btn btn-danger rounded-0" id="save-cat">
                                                        <i class="fas fa-plus-square"></i>
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>               
                                </div>

                                {{-- show main msg --}}
                                @if (Session::has('msg'))
                                    <div class="alert alert-success w-100 mt-2" role="alert" id="cat-msg">
                                        {{ Session::get('msg') }}
                                    </div>
                                @elseif(Session::has('error'))
                                    <div class="alert alert-danger" role="alert" id="cat-msg">
                                        {{ Session::get('error') }}
                                    </div>
                                @elseif(Session::has('empty'))
                                    <div class="alert alert-danger" role="alert" id="cat-msg">
                                        {{ Session::get('empty') }}
                                    </div>
                                @elseif(Session::has('exception'))
                                    <div class="alert alert-danger" role="alert" id="cat-msg">
                                        {{ Session::get('exception') }}
                                    </div>
                                @endif
                                {{-- end main msg --}}


                                {{-- show sub msg --}}
                                @if (Session::has('submsg'))
                                    <div class="alert alert-success" role="alert" id="cat-msg">
                                        {{ Session::get('submsg') }}
                                    </div>

                                @elseif(Session::has('suberror'))
                                    <div class="alert alert-danger" role="alert" id="cat-msg">
                                        {{ Session::get('suberror') }}
                                    </div>
                                @elseif(Session::has('subempty'))
                                    <div class="alert alert-danger" role="alert" id="cat-msg">
                                        {{ Session::get('subempty') }}
                                    </div>
                                @endif
                                {{--end sub show msg --}}
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row w-100 m-0">
                    <div class="col-12 p-0">
            
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb border bg-white">
                                <li class="breadcrumb-item active text-capitalize" aria-current="page">
                                    <span class="badge badge-primary p-2 border text-uppercase" style="letter-spacing:2px;">
                                        <i class="fas fa-bars"></i>
                                        category
                                    </span>
                                </li>
                            </ol>
                        </nav>

                        <div class="card mb-4">
                            <div class="card-body">
                                @foreach ($category['main'] as $items)
                                    <div class="border rounded-0 d-style btn btn-brc-tp btn-outline-blue btn-h-outline-blue btn-a-outline-blue w-100 my-2 py-3" style="background-color: #e9ecef;">
                                        
                                        <div class="row ml-0 mr-0 d-flex align-items-center">
                                                <div class="col-12 col-md-4 d-flex align-items-center justify-content-center w-100 mb-lg-0 mb-2">
                                                    <h4 class="w-100 mb-0">
                                                        <span class="badge badge-dark border p-2 border text-uppercase w-100" style="letter-spacing:2px;">
                                                            {{$items->name}}
                                                        </span>
                                                    </h4>
                                                </div>
                                    
                                                <div class=" mb-0 col-12 col-md-6 mb-lg-0 mb-2">
                                                    <div class="form-group w-100 mb-0">
                                                        <select  class="form-control">
                                                          @foreach ($category['sub'] as $subitems)
                                                                @if ($subitems->catid == $items->catid)
                                                                    <option>{{$subitems->name}}</option>
                                                                @endif
                                                          @endforeach  
                                                          
                                                        </select>
                                                    </div>
                                                </div>
                                    
                                                <div class="col-12 col-md-2 text-center w-100">
                                                    <a href="#" class="btn btn-primary cat-edit-btn rounded-0" data-toggle="modal" data-target="#catEditModel" id={{$items->catid}}><i class="far fa-edit"></i></a>
                                                    <a href="deletecategory/{{$items->catid}}" class="btn btn-danger rounded-0"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                        </div>
                                    </div> 
                                @endforeach                 
                                </div>

  
                                {{-- sub category edit popup --}}
                                    <div class="modal fade" id="catEditModel" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"> 
                                                        <i class="fa fa-fw fa-edit"></i> 
                                                        Edit Category
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                
                                                <div class="modal-body d-flex flex-column">
                                                    <form action="edit-maincat-name" method="POST">
                                                        @csrf
                                                        <div>
                                                            <span class="mb-2 badge badge-danger border text-uppercase rounded-0" style="letter-spacing:2px;">
                                                                main category
                                                            </span>        
                                                        </div>
                                                            
                                                        <div class="input-group mb-3 ">
                                                            <input type="text" name="catid" class="form-control rounded-0" id="main-cat-data-id" hidden>
                                                            <input type="text" name="name" class="form-control rounded-0" id="main-cat-edit-box">
                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-danger rounded-0" id="main-cat-edit-btn">
                                                                    <i class="fa fa-fw fa-edit"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div>
                                                        <div>
                                                            <span class="mb-2 badge badge-success border text-uppercase rounded-0" style="letter-spacing:2px;">
                                                                sub category
                                                            </span>        
                                                        </div>
                                                            
                                                        <form action="edit-subcat-name" method="post" class="input-group w-100" id="delete-sub-category-form">
                                                            @csrf
                                                            <input type="text" name="edit_sub_cat" id="edit-subcat-name" class="form-control rounded-0 w-50" placeholder="type maincategory..!">
                                                            <div class="input-group-append rounded-0 w-50">

                                                                <select name="sub_cat_name"  class="custom-select mr-sm-2 rounded-0" id="list-del-sub-cat">
                                                                    
                                                                </select>

                                                                <a href="#" class="btn btn-danger rounded-0 mr-1" id="del-sub-cat-data">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </a>
                                                                <button type="submit" class="btn btn-success rounded-0" id="edit-subcat-name-btn">
                                                                    <i class="fa fa-fw fa-edit"></i>
                                                                </button>
                                                            </div>
            
                                                        </form>
                                                    </div>
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                {{-- end sub category edit popup --}}

  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
       


    </div>


   

    @include('./admin/jslink/js')
    <script src="{{ asset('assets/admin/js/api/category.js')}}" type="module"></script>
</body>

</html>
