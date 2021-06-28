const ProductList = () => {

    return (

        `
            
        <div class="section" id="productListPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row align-items-center mb-4 pb-1">
                        <div class="col-12">
                            <div class="product_header">
                                <div class="product_header_left">
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm">
                                            <option value="order">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product_header_right">
                                    <div class="products_view">
                                        <a href="javascript:Void(0);" class="shorting_icon grid active">
                                            <i class="ti-view-grid"></i>
                                        </a>
                                        <a href="javascript:Void(0);" class="shorting_icon list">
                                            <i class="ti-layout-list-thumb"></i>
                                        </a>
                                    </div>
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm">
                                            <option value="">Showing</option>
                                            <option value="9">9</option>
                                            <option value="12">12</option>
                                            <option value="18">18</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row shop_container grid" id="productsCartRoot">
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            
                            <ul class="pagination mt-3 justify-content-center pagination_style1">
                                @if(count($category['product'])!==0)
                                    {{$category['product']->links()}}
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- category -->
                    <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                        <div class="sidebar">
                            <div id="accordion" class="w-100">
                                <h6 class="text-danger text-uppercase text-center p-2 mb-3 bg-light border">Categories</h6>
                                <div id="productCategory">
                                    <!-- javascript append data -->
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- end category -->

            </div>
        </div>
    </div>

        
        `
    )


}


export { ProductList };