<div class="middle-header dark_skin">
    <div class="container">
        <div class="nav_block">
            <a class="navbar-brand" href="/">
                <img style="height:70px;width:170px;" class="logo_light" src={{ asset('assets/images/logo/logo.png') }} alt="logo" />
                <img style="height:70px;width:170px;"  class="logo_dark" src={{ asset('assets/images/logo/logo.png') }} alt="logo" />
            </a>
            <div class="contact_phone order-md-last d-flex flex-nowrap">
                <i class="linearicons-phone-wave text-success"></i>
                <span class='d-flex flex-column'><span>076 237 0000</span><span>075 891 2234</span></span>
            </div>
            <div class="product_search_form">
                
                <form action="search">
                    <div class="input-group">
                        <div class="input-group-prepend">
                                <div class="custom_select">
                                    <select class="first_null" name="search-category" id="search-category">
                                        <option value="0" selected>All Category</option>
                                        <?php
                                        if(Session::has('main')){
                                            $main = count(Session::get('main'));
                                            $maindata = Session::get('main');
                                        }
                                        else{
                                            $main=0;
                                        }
                                        ?>
                                        @if($main!==0)
                                            @for($i=0;$i<$main;$i++)
                                                <option value={{ $maindata[$i]->catid }}>{{ $maindata[$i]->name }}</option>
                                            @endfor
                                        @endif
                                    </select>
                                </div>
                        </div>
                        <input class="form-control" name="q" placeholder="Search Product..." type="text" id="search-box">
                        <button  class="search_btn" id="search-btn" type="submit">
                            <i class="linearicons-magnifier"></i>
                        </button>
                    </div>
                </form>
                    

                <div class="search-dropdown position-relative d-none" id="search-dropdown-root">
                    <div class="row w-100 border border-top-0 ml-0 mr-0 p-2 position-absolute bg-white" style="top:0;z-index:20;">
                        <div class="col-md-6 p-1 border border-top-0 border-left-0">
                            <div class="search-wrapper-list p-2">
                                <ul class="list-unstyled" id="list-search-cat">
                                    <!-- javascript append data -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 border border-top-0 border-left-0 border-right-0">
                            <div class="search-wrapper-list w-100">
                                <div class="search-cart w-100 d-flex flex-wrap text-center" id="list-search-product-root">
                                    <!-- javascript append data -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>