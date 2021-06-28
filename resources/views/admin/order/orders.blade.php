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
                    <li class="breadcrumb-item"><a href="/admin-dashbord">admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">orders</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-4">Orders</h2>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                        <div class="row p-2 d-flex alight-items-center ml-0 mr-0 mb-3">
                            <div class="col-md-3 pt-1 pb-1 d-flex justify-content-between align-items-center">
                                <p class="pr-2 mt-2">
                                    Show
                                </p>
                                <select class="form-control h-100">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <p class="pl-2 mt-2">
                                    Entries
                                </p>
                            </div>

                            <div class="col-md-6">
                                <form>
                                    <div class="wrapper">
                                        <div class="search_bar">
                                            <input id="search" type="text" class="search_input" placeholder="search...">
                                            <button class="search_icone" type="submit">
                                                <i class="fas fa-search ico"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-3 pt-1 pb-1 d-flex justify-content-center">
                                <a href="addproduct">
                                    <button type="button" class="btn btn-danger mr-1 h-100">
                                        <i class="fas fa-plus mr-1"></i>
                                        <span>Add New<span>
                                    </button>
                                </a>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example" class="table table-hover dataTable no-footer dtr-inline w-100"
                                    cellspacing="0" width="100%" role="grid" aria-describedby="example_info">
                                    <thead>
                                        <tr role="row">
                                            <th>
                                                #Id
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Price
                                            </th>
                                            <th>
                                                Stock
                                            </th>
                                            <th>
                                                Category
                                            </th>
                                            <th>
                                                Product Code
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody id="containProductData">
                                        
                                            <tr role="row">
                                                <td>dasd</td>
                                                <td>das</td>
                                                <td>dasd</td>
                                                <td>das</td>
                                                <td>
                                                    <span class="badge badge-primary text-uppercase rounded-0 p-1">
                                                      fdgdfg
                                                    </span>
                                                    <i class="fas fa-chevron-right"></i>

                                                    <span class="badge badge-secondary rounded-0 text-uppercase p-1">
                                                       ffdf
                                                    </span>

                                                </td>
                                                <td>dsada</td>
                                                <td>
                                                    <a href="editproduct/" class="btn btn-icon btn-pill btn-primary"
                                                        data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-fw fa-edit"></i>
                                                    </a>
                                                    <a href="deleteproduct/
                                                        class="btn btn-icon btn-pill btn-danger" data-toggle="tooltip"
                                                        title="Delete">
                                                        <i class="fa fa-fw fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                       
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
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('./admin/jslink/js')

</body>

</html>
