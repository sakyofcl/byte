$(document).ready(() => {


    //here list of search option depenting variables
    searchBtn = $('#search-btn');
    searchBox = $('#search-box'); //inputbox
    searchCategory = $('#search-category');
    searchDropDown = $('#search-dropdown-root');
    listSearchCat = $('#list-search-cat')[0];
    listSearchProduct = $('#list-search-product-root')[0];
    searchico = '<i class="linearicons-magnifier"></i>';
    bufferimage = "<img src='assets/images/buffer.gif' style='width:15px;height:15px;'>";

    const productListCart = (i, l, pid) => {
        return `
        <div class="col-6 w-100 p-1">
            <div class="search-cart-wrapper d-flex flex-column p-1 border">
                <a href="/productinfo/${l}/${pid}"><img src="/products/${i}" style="height:100px;"></a>
            </div>
        </div>
        `
    }


    let state = {
        search: false,
        category: 0,

    }

    //apiurl
    const apiurl = 'https://byte.lk/api/search';

    //hide btn default
    searchBtn.attr('disabled', true);

    //hide dropdown
    searchDropDown.addClass('d-none');
    //set keyup event
    searchBox.keyup((e) => {
        if (e.target.value !== "") {
            searchBtn[0].innerHTML = "";
            searchBtn[0].appendChild(document.createRange().createContextualFragment(bufferimage))

            searchBox.addClass('noerror');
            searchBox.removeClass('error');
            state.search = true;
            searchBtn.attr('disabled', false);

            axios.get(apiurl, { headers: { 'query': searchBox.val(), 'catid': state.category } }).then((res) => {

                searchBtn[0].innerHTML = "";
                searchBtn[0].appendChild(document.createRange().createContextualFragment(searchico))

                if (typeof res.data.pname !== "undefined" || res.data.product !== "empty") {
                    searchDropDown.removeClass('d-none');
                    listSearchCat.innerHTML = "";
                    if (typeof res.data.pname !== "undefined") {
                        res.data.pname.map((v) => {
                            let listEle = document.createRange().createContextualFragment(`<li><i class="ti-view-grid text-success mr-2" style="font-size:13px;"></i><a href="/product/${v.name}" class="text-uppercase">${v.name}</a></li>`);
                            listSearchCat.appendChild(listEle);
                        })
                    }
                    listSearchProduct.innerHTML = "";
                    if (res.data.product !== "empty") {
                        res.data.product.map((p) => {
                            let listProduct = document.createRange().createContextualFragment(productListCart(p.image, p.name, p.pid));
                            listSearchProduct.appendChild(listProduct);
                        })
                    }
                } else {
                    searchDropDown.addClass('d-none');
                }


            })
        } else {
            searchDropDown.addClass('d-none');
            searchBox.removeClass('noerror');
            state.search = false;
            searchBtn.attr('disabled', true);
        }
    })

    searchCategory.change((c) => {
        if (c.target.name == "search-category") {
            if (c.target.value === "0") {
                searchCategory.removeClass('noerror');
            } else {
                searchCategory.addClass('noerror');
            }

            state.category = c.target.value;
        }
    })





})