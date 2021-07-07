<div class="modal fade col-12" id="order-check-model" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog  ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="position:relative">

                <div class="panel panel-default plain" id="dash_0">
                    <!-- Start .panel -->
                    <div class="panel-body p30 modal-dialog-scrollable">
                        <div class="row">
                            <!-- Start .row -->
                            <div class="col-lg-6">
                                <!-- col-lg-6 start here -->
                                <div class="invoice-logo"><img width="100" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Invoice logo"></div>
                            </div>
                            <!-- col-lg-6 end here -->
                            <div class="col-lg-6">
                                <!-- col-lg-6 start here -->
                                <div class="invoice-from">
                                    <ul class="list-unstyled text-right">
                                        <li>Mohamed sakeen,</li>
                                        <li>241/c newroad kalmunai-14,</li>
                                        <li>Eastern | PO:32300,</li>
                                        <li>0757630782.</li>

                                    </ul>
                                </div>
                            </div>
                            <!-- col-lg-6 end here -->
                            <div class="col-lg-12">
                                <!-- col-lg-12 start here -->

                                <div class="invoice-details mt-3">
                                    <div class="well">
                                        <ul class="list-unstyled">

                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="w-50"><strong>ORDER ID</strong></td>
                                                        <td class="text-center">BO_<span id="oid"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-50"><strong>ORDER DATE</strong></td>
                                                        <td class="text-center" id="date"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-50"><strong>PAYMENT METHOD</strong></td>
                                                        <td class="text-center text-capitalize" id="method"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-50"><strong>PAYMENT REF NO</strong></td>
                                                        <td class="text-center">0</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </ul>
                                    </div>
                                </div>

                                <div class="invoice-items">
                                    <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="per70 text-center">Description</th>
                                                    <th class="per5 text-center">Qty</th>
                                                    <th class="per25 text-center">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="product-root-wrapper" class="text-center">

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2" class="text-right">Sub Total:</th>
                                                    <th class="text-center" id="sub-total">25,000.00 Rs</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-right">Discount:</th>
                                                    <th class="text-center">0.00</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-right">Total:</th>
                                                    <th class="text-center" id="full-total">25,000.00 Rs</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-lg-6 pl-0">
                                    <!-- col-lg-6 start here -->
                                    <div class="invoice-from">
                                        <ul class="list-unstyled text-left mt-2">
                                            <li class=" font-weight-bold pb-1">Delivery Address :</li>
                                            <li id="name" class=" text-capitalize"></li>
                                            <li id="street" class=" text-capitalize"></li>
                                            <li><span id="city" class=" text-capitalize"></span> | PO : <span id="zip"></span>,</li>
                                            <li id="province" class=" text-capitalize"> </li>
                                            <li id="phone"></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-12 pl-0">
                                    <!-- col-lg-6 start here -->
                                    <div class="invoice-from">
                                        <ul class="list-unstyled text-left mt-2">
                                            <li class=" font-weight-bold pb-1">Order Note :</li>
                                            <li id="note" class="text-capitalize"></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- col-lg-12 end here -->
                        </div>
                        <!-- End .row -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-success" id="accept-order">Accept</button>
                <button class="btn btn-danger" id="reject-order">Cancel</button>
            </div>
        </div>
    </div>
</div>