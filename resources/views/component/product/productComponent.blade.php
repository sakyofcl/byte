<?php

function productCart($img,$pid,$name,$price,$description){

    $element=
    '
    <div class="col-md-4 col-6">
        <div class="product">
            <div class="product_img">
                <a href="shop-product-detail.html">
                    <img class="aspect__img" src="/products/'.$img.'">
                </a>
                <div class="product_action_box">
                    <ul class="list_none pr_action_btn">

                        <li class="add-to-cart">
                            <a href="/addcart/'.$pid.'">
                                <i class="icon-basket-loaded"></i>
                                    Add To Cart
                            </a>
                        </li>                    
                        <li>
                            <a href="shop-quick-view.html" class="popup-ajax">
                                <i class="icon-magnifier-add"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-heart"></i>
                            </a>
                        </li>

                    </ul>                                    
                </div>
            </div>
            <div class="product_info">

                <h6 class="product_title">
                    <a href="/productinfo/'.$name.'/'.$pid.'">'.$name.'</a>
                </h6>

                <div class="product_price">
                    <span class="price"> Rs.'.number_format($price).'</span>
                </div>

                <div class="pr_desc">
                    <p>'.$description.'</p>
                </div>

                <div class="list_product_action_box">
                    <ul class="list_none pr_action_btn">
                        <li class="add-to-cart">
                            <a href="/addcart/'.$pid.'">
                                <i class="icon-basket-loaded"></i>
                                 Add To Cart
                            </a>
                        </li>
                                                            
                        <li>
                            <a href="#" class="popup-ajax">
                                <i class="icon-magnifier-add"></i>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#">
                                <i class="icon-heart"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    ';
    return $element;
}



?>
