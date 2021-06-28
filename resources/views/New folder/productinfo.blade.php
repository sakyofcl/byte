<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>Prodect info | IT STORE</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- style sheets -->
    @include('./csslink/css')

</head>

<body class="config">

    <!--====== Main App ======-->
    <div id="app">
        <header class="header--style-1">
            <!----------------------------- Primary nav ------------------------------------>
            @include('./component/primarynav')
            <!----------------------------- Secondary nav ----------------------------------->
            @include('./component/secondarynav')
        </header>
    </div>

    <!----------------------------- Prodect info Contant   --------------------------------------->

    <!--====== App Content ======-->
    <div class="app-content">
        <!--====== breadcrumb ======-->
        <div class="u-s-p-y-60">
            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="breadcrumb">
                        <div class="breadcrumb__wrap">
                            <ul class="breadcrumb__list" style="text-transform: capitalize;">
                                <li class="has-separator">

                                    <a href="/">Home</a>
                                </li>

                                <li class=" has-separator">
                                    @foreach ($productsinfo['catname'] as $items)
                                        <a href="/maincategory/{{ $items->catid }}">
                                            {{ $items->name }}
                                        </a>
                                    @endforeach
                                </li>
                                <li class=" has-separator">
                                    @foreach ($productsinfo['subcat'] as $items)
                                        <a href="/subcategory/{{ $items->subid }}">
                                            {{ $items->name }}
                                        </a>
                                    @endforeach
                                </li>
                                <li class="is-marked">
                                    @foreach ($productsinfo['data'] as $items)
                                        <a href="/maincategory/productinfo/{{ $items->pid }}">
                                            {{ $items->name }}
                                        </a>
                                    @endforeach
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End -breadcrumb ======-->

        <!--====== Section 1 ======-->
        <div class="u-s-p-t-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">

                        <!--====== Product Detail Zoom ======-->
                        <div class="pd u-s-m-b-30">
                            <div class="slider-fouc pd-wrap">
                                <div id="pd-o-initiate" style="color:white;">
                                    @foreach ($productsinfo['data'] as $items)
                                        {{ $pimag = 'products/' . $items->image }}
                                        <div class="pd-o-img-wrap" data-src={{ asset($pimag) }}>
                                            <img class="u-img-fluid" src={{ asset($pimag) }}
                                                data-zoom-image={{ asset($pimag) }} alt="">
                                        </div>
                                    @endforeach

                                </div>


                                <span class="pd-text">Click for larger zoom</span>
                            </div>
                            <div class="u-s-m-t-15">
                                <div class="slider-fouc">
                                    <div id="pd-o-thumbnail">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Product Detail Zoom ======-->
                    </div>
                    <div class="col-lg-7">

                        <!--====== Product Right Side Details ======-->
                        <div class="pd-detail">
                            @foreach ($productsinfo['data'] as $items)
                                <div>
                                    <span class="pd-detail__name">{{ $items->name }}</span>
                                </div>
                                <div>
                                    <div class="pd-detail__inline">
                                        <span class="pd-detail__price">Rs.{{ number_format($items->price) }}</span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                        <span class="pd-detail__review u-s-m-l-4">

                                            <a data-click-scroll="#view-review">23 Reviews</a></span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__inline">

                                        <span class="pd-detail__stock">{{ $items->stock }} in stock</span>

                                        <span class="pd-detail__left">Only 2 left</span>
                                    </div>
                                </div>

                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__inline">
                                        <table style="font-size:13px">
                                            <tr>
                                                <td><span style="padding-right:5px;">Brand</span></td>
                                                <td><span>{{ $items->brand }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><span style="padding-right:5px;">Model</span></td>
                                                <td><span>{{ $items->model }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><span style="padding-right:5px;">Product Code</span></td>
                                                <td><span>{{ $items->pcode }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><span style="padding-right:5px;">Height</span></td>
                                                <td><span>{{ $items->height }}</span></td>
                                            </tr>
                                            <tr>
                                                <td><span style="padding-right:5px;">Weight</span></td>
                                                <td><span>{{ $items->weight }}</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="u-s-m-b-15">
                                    <span class="pd-detail__preview-desc">
                                        {{ $items->description }}
                                    </span>
                                </div>
                            @endforeach
                            <div class="u-s-m-b-15">
                                @foreach ($productsinfo['data'] as $items)
                                    <form class="pd-detail__form">
                                        <div class="pd-detail-inline-2 u-s-m-b-15">
                                            <!--====== Input Counter ======-->
                                            <div class="input-counter">

                                                <span class="input-counter__minus fas fa-minus"></span>

                                                <input class="input-counter__text input-counter--text-primary-style"
                                                    type="text" value="1" data-min="1" data-max="1000">

                                                <span class="input-counter__plus fas fa-plus"></span>
                                            </div>
                                            <!--====== End - Input Counter ======-->
                                        </div>


                                    </form>
                                    <div class="pd-detail__form">
                                        <div class="pd-detail-inline-2">
                                            <div class="u-s-m-b-15">

                                                <a href="/checkout/{{ $items->pid }}"><button
                                                        class="btn btn--e-brand-b-2">Check out</button>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                        <!--====== End - Product Right Side Details ======-->
                    </div>
                </div>
            </div>
        </div>

        <!--====== Product Detail Tab ======-->
        <div class="u-s-p-y-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pd-tab">
                            <div class="u-s-m-b-30">
                                <ul class="nav pd-tab__list">
                                    <li class="nav-item">

                                        <a class="nav-link active" data-toggle="tab">DESCRIPTION</a>
                                    </li>
                                    <li class="nav-item">

                                        <a class="nav-link" data-toggle="tab" href="#pd-tag">TAGS</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content">

                                <!--====== Tab 1 ======-->
                                <div class="tab-pane fade show active" id="pd-desc">
                                    <div class="pd-tab__desc">
                                        <div class="u-s-m-b-15">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially unchanged. It was popularised in the 1960s with the release
                                                of Letraset sheets containing Lorem Ipsum passages, and more recently
                                                with desktop publishing software like Aldus PageMaker including versions
                                                of Lorem Ipsum.</p>
                                        </div>

                                        <div class="u-s-m-b-30">
                                            <ul>
                                                <li><i class="fas fa-check u-s-m-r-8"></i>

                                                    <span>Buyer Protection.</span>
                                                </li>
                                                <li><i class="fas fa-check u-s-m-r-8"></i>

                                                    <span>Full Refund if you don't receive your order.</span>
                                                </li>
                                                <li><i class="fas fa-check u-s-m-r-8"></i>

                                                    <span>Returns accepted if product not as described.</span>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <!--====== End - Tab 1 ======-->


                                <!--====== Tab 2 ======-->
                                <div class="tab-pane" id="pd-tag">
                                    <div class="pd-tab__tag">
                                        <h2 class="u-s-m-b-15">ADD YOUR TAGS</h2>
                                        <div class="u-s-m-b-15">
                                            <form>

                                                <input class="input-text input-text--primary-style" type="text">

                                                <button class="btn btn--e-brand-b-2" type="submit">ADD TAGS</button>
                                            </form>
                                        </div>

                                        <span class="gl-text">Use spaces to separate tags. Use single quotes (') for
                                            phrases.</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Product Detail Tab ======-->

        <!--====== End - Section 1 ======-->
    </div>
    <!--====== End - App Content ======-->


    <!----------------------------- End Prodect info Contant -------------------------------------->



    <!-----------------------------  footer area  ----------------------------------->
    @include('./component/footer')

    <!-- javascript -->
    @include('./jslink/js')

</body>

</html>
