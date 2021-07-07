<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Products | Admin </title>
    {{-- css --}}
    <style>
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: 0;
        }

        .mailbox-widget .custom-tab .nav-item .nav-link {
            border: 0;
            color: #fff;
            border-bottom: 3px solid transparent;
        }

        .mailbox-widget .custom-tab .nav-item .nav-link.active {
            background: #e8e8e8;
            border-radius: 0;
            color: #fff;
            border-bottom: 3px solid #007bff;
        }

        .no-wrap td,
        .no-wrap th {
            white-space: nowrap;
        }

        .table td,
        .table th {
            padding: .9375rem .4rem;
            vertical-align: top;
            border-top: 1px solid rgba(120, 130, 140, .13);
        }

        .font-light {
            font-weight: 300;
        }

    </style>
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


                                <div class="card">
                                    <div class="card-body bg-light  mailbox-widget pb-0 pt-0">

                                        <ul class="nav nav-tabs custom-tab border-bottom-0 " id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active  p-3" id="inbox-tab" data-toggle="tab"
                                                    aria-controls="inbox" href="#new" role="tab" aria-selected="true">
                                                    <span class="d-block d-md-none"><i class="ti-email"></i></span>
                                                    <span
                                                        class="d-none d-md-block font-weight-bold text-dark text-capitalize">New
                                                        ({{ $totalNewOrder }})</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link p-3" id="sent-tab" data-toggle="tab"
                                                    aria-controls="sent" href="#accept" role="tab"
                                                    aria-selected="false">
                                                    <span class="d-block d-md-none"><i class="ti-export"></i></span>
                                                    <span
                                                        class="d-none d-md-block font-weight-bold text-dark text-capitalize">Accepted
                                                        ({{ $totalAcceptedOrder }})</span>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link p-3" id="spam-tab" data-toggle="tab"
                                                    aria-controls="spam" href="#complete" role="tab"
                                                    aria-selected="false">
                                                    <span class="d-block d-md-none"><i class="ti-panel"></i></span>
                                                    <span
                                                        class="d-none d-md-block font-weight-bold text-dark text-capitalize">Completed
                                                        ({{$totalCompleteOrder}})</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>


                                    <div class="tab-content" id="myTabContent">
                                        {{-- @include('./admin/order/new-order') --}}
                                        <div class="tab-pane fade show active" id="new" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            @include('./admin/order/new-order')
                                        </div>
                                        <div class="tab-pane fade" id="accept" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            @include('./admin/order/accepted-order')
                                        </div>
                                        <div class="tab-pane fade" id="complete" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            @include('./admin/order/complete-order')
                                        </div>
                                    </div>
                                    @include('./admin/popup-model/order-check')

                                </div>
                                <div id="action-message" class="dataTables_processing card d-none"  >
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
    <script src="/assets/admin/js/api/check-order.js"></script>
    <script src="/assets/admin/js/api/order-status.js"></script>

</body>

</html>
