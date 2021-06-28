import { strToDom, setEventToElement } from './dom/element.js';
import { category, sub_cat_items } from './dom/categoryList.js';
import { productCart } from './dom/productCart.js';
//productCategory root element
const productCategory = document.getElementById('productCategory');
const productsCartRoot = document.getElementById('productsCartRoot');

$(document).ready(() => {

    //product api call
    axios.get('http://127.0.0.1:8000/api/product-category').then((res) => {


        if (res.data.mainCategory.length !== 0) {
            productCategory.innerHTML = ""; //reset dom
            res.data.mainCategory.map((v) => {

                productCategory.appendChild(strToDom(category({ name: v.name, id: v.catid })));
                let sub_item_root = document.getElementById(`sub_cat_item${v.catid}`);
                res.data.subCategory.map((s) => {
                    if (v.catid == s.catid) {
                        sub_item_root.appendChild(strToDom(sub_cat_items(s.name, s.subid)))
                    }
                })

            })
            setEventToElement('.main-cat-item', showMainCatProduct, 'click')
            setEventToElement('.sub-cat-item', showSubCatProduct, 'click')

        }


    })


    // list default all product 
    axios.get('http://127.0.0.1:8000/api/show-products', { headers: { 'type-data': 'default' } }).then((res) => {
        if (res.data.products.data.length !== 0) {
            console.log(res);
            const ProductData = res.data.products.data;
            productsCartRoot.innerHTML = ""; //reset dom root
            ProductData.map((p) => {
                productsCartRoot.appendChild(strToDom(productCart(p)));
            })
        }

    })

    // list main category product 
    function showMainCatProduct(e) {
        const url = 'http://127.0.0.1:8000/api/show-products';
        const head = { headers: { 'type-data': 'maincategory', 'productName': e.target.innerText.toLowerCase() } }

        axios.get(url, head).then((res) => {

            const data = res.data.products.data;
            productsCartRoot.innerHTML = ""; //reset dom root
            data.map((v) => {
                productsCartRoot.appendChild(strToDom(productCart(v)));
            })

        })
    }

    // list sub category product
    function showSubCatProduct(e) {
        const url = 'http://127.0.0.1:8000/api/show-products';
        const head = { headers: { 'type-data': 'subcategory', 'subcatid': e.target.id } }

        axios.get(url, head).then((res) => {

            const data = res.data.products;
            productsCartRoot.innerHTML = ""; //reset dom root
            data.map((v) => {
                productsCartRoot.appendChild(strToDom(productCart(v)));
            })

        })
    }
})