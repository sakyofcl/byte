<div class="row p-3 text-dark">
    <div class="col-sm-12">
        <table id="example" class="table table-hover dataTable no-footer dtr-inline" cellspacing="0">
            <thead>
                <tr role="row">
                    <th>
                        ORDER ID
                    </th>
                    <th class="text-center">
                        AMOUNT (Rs)
                    </th>
                    <th class="text-center">
                        PAYMENT METHOD
                    </th>
                    <th class="text-center">
                        DATE
                    </th>
                    <th>
                        ACTIONS
                    </th>
                </tr>
            </thead>

            <tbody id="containProductData">

                @foreach ($order as $item)
                    @foreach ($orderStage as $stage)
                        @if ($stage->oid == $item->oid)
                            @if ($stage->stage == 'new')
                                <tr role="row">
                                    <td>BO_{{ $item->oid }}</td>
                                    <?php $tot = 0; ?>
                                    @foreach ($orderProduct as $order_product)
                                        @if ($order_product->oid == $item->oid)
                                            @foreach ($product as $product_price)
                                                @if ($product_price->pid == $order_product->pid)
                                                    <?php $tot = $tot + $product_price->price *
                                                    $order_product->qty; ?>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    <td class="text-center">{{ number_format($tot, 2) }}</td>


                                    @foreach ($paymentMethod as $m)
                                        @if ($m->oid == $item->oid)
                                            <td class="text-center ">{{ $m->method }}</td>
                                        @break
                                    @endif
                            @endforeach

                            <td class="text-center">{{ $item->date }}</td>
                            <td class="d-flex w-100">
                                <button class="btn btn-icon  btn-primary order-check-btn" id="{{ $item->oid }}"
                                    data-toggle="modal" data-target="#order-check-model">
                                    <i class="fas fa-info pl-2 pr-2" id="{{ $item->oid }}"></i>
                                </button>
                                <a href="/delete/order?oid=" class="btn btn-icon btn-danger ml-2" data-toggle="tooltip"
                                    title="Delete">
                                    <i class="fa fa-fw fa-trash"></i>
                                </a>
                            </td>
                            </tr>
                        @break
                    @endif
                @endif
                @endforeach
                @endforeach

            </tbody>
        </table>
    </div>
</div>

