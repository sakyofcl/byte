<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="heading_tab_header border border-bottom-0 bg-light m-0 p-2">
                <div class="heading_s2">
                    <p class="text-uppercase text-dark m-0">
                        <span class="badge badge-primary border rounded-0 p-1" style="font-size:18px;font-weight:500;">
                            New arrivals
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-0 border">
        <div class="col-md-12 p-3">
            <div id="new-arrivals-carousel" class="owl-carousel">
                @if (Session::get('newproduct') !== null)
                @foreach (Session::get('newproduct') as $items)
                <div class="item">
                    <div class="product">
                        <div class="product_img">
                            <a href="index.html">
                                <?php $newProductImage = 'products/' . $items->image; ?>
                                <img src={{ asset($newProductImage) }} alt="product_img1">
                            </a>
                            <div class="product_action_box">
                                <ul class="list_none pr_action_btn">
                                    <li class="add-to-cart">
                                        <a href="/add/cart?pid={{ $items->pid }}&qty=1&type=cart">
                                            <i class="icon-basket-loaded"></i>
                                            Add To Cart
                                        </a>
                                    </li>

                                    <li><a href="/productinfo/{{ strtolower(preg_replace('/\s+/', '-', $items->name)) }}/{{ $items->pid }}" class="popup-ajax"><i class="fas fa-shopping-bag"></i></a>
                                    </li>
                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_info">
                            <h6 class="product_title"><a href="/productinfo/{{ strtolower(preg_replace('/\s+/', '-', $items->name)) }}/{{ $items->pid }}">{{ $items->name }}</a>
                            </h6>

                            <div class="product_price">
                                <span class="price">Rs.{{ number_format($items->price) }}</span>
                            </div>

                            <div class="pr_desc">
                                <p>
                                    {{ $items->description }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

<!-- END SECTION SHOP -->