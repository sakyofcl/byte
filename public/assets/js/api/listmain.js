$(document).ready(() => {
    $('#testbtn').click((e) => {

        let apiurl = `http://127.0.0.1:8000/testmain/${$('#test').val()}`;
        axios.get(apiurl).then((response) => {
            let data = response.data['data'];
            let cart = document.getElementById('testcart');
            $.map(response.data, (v) => {
                cart.innerHTML = post_card(v.name)
            })
        })
    })
})



function post_card(name) {

    return `
    
   <div class="product">
                                        <div class="product_img">
                                            <a href="shop-product-detail.html">
                                                <?php $img = 'products/' . $items->image; ?>
                                                <img class="aspect__img" src={{ asset($img) }}>
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart">
                                                        <a href="/addcart/{{ $items->pid }}">
                                                            <i class="icon-basket-loaded"></i>
                                                            Add To Cart
                                                        </a>
                                                    </li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a
                                                    href="/productinfo/{{ $items->pid }}">${name}</a>
                                            </h6>
                                            <div class="product_price">
                                                <span class="price"> Rs.{{ number_format($items->price) }}</span>
                                            </div>

                                            <div class="pr_desc">
                                                <p>{{ $items->description }}</p>
                                            </div>

                                            <div class="list_product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i
                                                                class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i
                                                                class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                                class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
    
    `
}