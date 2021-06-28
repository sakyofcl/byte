<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Products | Admin </title>
    {{-- css --}}
    @include('./admin/csslink/css')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/search_bar.css') }}">
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
                    <li class="breadcrumb-item active" aria-current="page">products</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-4">Products</h2>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                        <div class="row p-2 d-flex alight-items-center ml-0 mr-0 mb-3">
                            <!--
                            <div class="col-md-3 pt-1 pb-1 d-flex justify-content-between align-items-center">
                                <p class="pr-2">
                                    Show
                                </p>
                                <select class="form-control h-100">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <p class="pl-2">
                                    Entries
                                </p>
                            </div>
                            -->
                            <div class="col-md-9">
                                <form>
                                    <div class="wrapper">
                                        <div class="search_bar rounded">
                                            <input id="search" type="text" class="search_input" placeholder="search...">
                                            <button class="search_icone" type="submit">
                                                <i class="fas fa-search ico"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-3  d-flex justify-content-center pt-0 pb-0">
                                <a href="addproduct" class="w-100 h-100">
                                    <button type="button" class="btn btn-danger mr-1 h-100 w-100 border">
                                        <i class="fas fa-plus mr-1"></i>
                                        <span>Add New<span>
                                    </button>
                                </a>
                            </div>

                        </div>

                        <div class="row" >
                            <div class="col-sm-12">
                                <table id="example" class="table table-hover dataTable no-footer dtr-inline" cellspacing="0">
                                    <thead>
                                        <tr role="row">
                                            <th>
                                                CODE
                                            </th>
                                            <th>
                                                NAME
                                            </th>
                                            <th>
                                                PRICE
                                            </th>
                                            <th>
                                                STOCK
                                            </th>
                                            <th>
                                                CATEGORY
                                            </th>
                                            
                                            <th>
                                                ACTIONS
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody id="containProductData">
                                        @foreach ($manageproduct['product'] as $items)
                                            <tr role="row">
                                                <td>BI_{{ $items->pid }}</td>
                                                <td>{{ $items->name }}</td>
                                                <td>{{ $items->price }}.Rs</td>
                                                <td>{{ $items->stock }}</td>
                                                <td>
                                                    <span class="badge badge-primary text-uppercase rounded-0 p-1">
                                                       @foreach ($manageproduct['maincat'] as $maincat)
                                                            @if($items->catid==$maincat->catid)
                                                                {{$maincat->name}}
                                                            @endif
                                                        @endforeach
                                                    </span>
                                                    <i class="fas fa-chevron-right"></i>

                                                    <span class="badge badge-secondary rounded-0 text-uppercase p-1">
                                                        @foreach ($manageproduct['subcat'] as $subcat)
                                                            @if($items->subid==$subcat->subid)
                                                                {{$subcat->name}}
                                                            @endif
                                                        @endforeach
                                                    </span>

                                                </td>
                                                
                                                <td class="d-flex w-100">
                                                    <button class="btn btn-icon btn-pill btn-primary product-edit-btn" id="{{ $items->pid }}" data-toggle="modal" data-target="#product-edit-model">
                                                        <i class="fa fa-fw fa-edit" id="{{ $items->pid }}"></i>
                                                    </button>
                                                    <a href="/delete/product?pid={{$items->pid}}"
                                                        class="btn btn-icon btn-pill btn-danger ml-1" data-toggle="tooltip"
                                                        title="Delete">
                                                        <i class="fa fa-fw fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div id="example_processing" class="dataTables_processing card" style="display: none;">
                                    Processing...</div>
                            </div>
                        </div>

                        <div class="row d-flex alight-items-center ml-0 mr-0 mt-3">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        {{$manageproduct['product']->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('./admin/popup-model/product-edit')
    @include('./admin/jslink/js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.0.0/tinymce.min.js" integrity="sha512-k+t+yFpvcMDstTfYd5lj2624TCW6A9QkHBuFGNWpSlalxBCm/vVdTukWKGk+n+AnzbgoXLgg9x2ztZWk3TuGvQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/admin/js/editer/init.js')}}"></script>
    <script src="{{ asset('assets/admin/js/api/edit-product.js')}}" type="module"></script>
    <script src="{{ asset('assets/admin/js/custom.js')}}"></script>
</body>

</html>
