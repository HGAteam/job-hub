@extends('layout.theme.master')
@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="text-color-dark font-weight-bold">Products</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-flex justify-content-md-end text-3-5">
                        <li><a href="demo-auto-services.html"
                                class="text-color-default text-color-hover-primary text-decoration-none">HOME</a></li>
                        <li class="active">PRODUCTS</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="shop container py-4 my-5">
        <div class="row align-items-center justify-content-between mb-4">
            <div class="col-auto mb-3 mb-md-0 order-md-2">
                <div class="d-flex align-items-center">
                    <span>Showing 1-8 of 24 products</span>
                    <a href="#" class="text-color-dark text-3 ms-2" data-bs-toggle="tooltip" data-bs-animation="false"
                        data-bs-placement="top" title="Grid"><i class="fas fa-th"></i></a>
                    <a href="#" class="text-color-dark text-3 ms-2" data-bs-toggle="tooltip" data-bs-animation="false"
                        data-bs-placement="top" title="List"><i class="fas fa-list-ul"></i></a>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <form method="get">
                    <div class="custom-select-1" style="max-width: 280px;">
                        <select class="form-select form-control border px-3 py-2 h-auto">
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date" selected="selected">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="products row row-gutter-sm mb-4">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="product mb-0">
                    <div class="product-thumb-info mb-3">
                        <div class="product-thumb-info-badges-wrapper">
                            <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                        </div>
                        <div class="addtocart-btn-wrapper">
                            <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                <i class="icons icon-bag"></i>
                            </a>
                        </div>
                        <a href="ajax/demo-auto-services-product-quick-view.html"
                            class="quick-view text-uppercase font-weight-semibold text-2">
                            QUICK VIEW
                        </a>
                        <a href="shop-product-sidebar-left.html">
                            <div class="product-thumb-info-image bg-light">
                                <img alt="" class="img-fluid" src="{{asset('theme/default/img/demos/auto-services/products/product-1.jpg')}}">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#"
                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">CATEGORY</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                <a href="" class="text-color-dark text-color-hover-primary">Product Short Name</a>
                            </h3>
                        </div>
                    </div>
                    <div title="Rated 5 out of 5">
                        <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                    </div>
                    <p class="price text-5 mb-3">
                        <span class="sale text-color-dark font-weight-medium">49,00</span>
                        <span class="amount">59,00</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="product mb-0">
                    <div class="product-thumb-info mb-3">
                        <div class="product-thumb-info-badges-wrapper">
                            <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                        </div>
                        <div class="addtocart-btn-wrapper">
                            <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                <i class="icons icon-bag"></i>
                            </a>
                        </div>
                        <a href="ajax/demo-auto-services-product-quick-view.html"
                            class="quick-view text-uppercase font-weight-semibold text-2">
                            QUICK VIEW
                        </a>
                        <a href="shop-product-sidebar-left.html">
                            <div class="product-thumb-info-image bg-light">
                                <img alt="" class="img-fluid" src="{{asset('theme/default/img/demos/auto-services/products/product-2.jpg')}}">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#"
                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">CATEGORY</a>
                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                <a href="" class="text-color-dark text-color-hover-primary">Product Short Name</a>
                            </h3>
                        </div>
                    </div>
                    <div title="Rated 5 out of 5">
                        <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                    </div>
                    <p class="price text-5 mb-3">
                        <span class="sale text-color-dark font-weight-medium">49,00</span>
                        <span class="amount">59,00</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                <div class="product mb-0">
                    <div class="product-thumb-info mb-3">
                        <div class="product-thumb-info-badges-wrapper">
                            <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                        </div>
                        <div class="addtocart-btn-wrapper">
                            <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                <i class="icons icon-bag"></i>
                            </a>
                        </div>
                        <a href="ajax/demo-auto-services-product-quick-view.html"
                            class="quick-view text-uppercase font-weight-semibold text-2">
                            QUICK VIEW
                        </a>
                        <a href="shop-product-sidebar-left.html">
                            <div class="product-thumb-info-image bg-light">
                                <img alt="" class="img-fluid"
                                    src="{{asset('theme/default/img/demos/auto-services/products/product-3.jpg')}}">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#"
                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">CATEGORY</a>
                            <h3
                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                <a href="" class="text-color-dark text-color-hover-primary">Product Short Name</a>
                            </h3>
                        </div>
                    </div>
                    <div title="Rated 5 out of 5">
                        <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                    </div>
                    <p class="price text-5 mb-3">
                        <span class="sale text-color-dark font-weight-medium">49,00</span>
                        <span class="amount">59,00</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product mb-0">
                    <div class="product-thumb-info mb-3">
                        <div class="product-thumb-info-badges-wrapper">
                            <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                        </div>
                        <div class="addtocart-btn-wrapper">
                            <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                <i class="icons icon-bag"></i>
                            </a>
                        </div>
                        <a href="ajax/demo-auto-services-product-quick-view.html"
                            class="quick-view text-uppercase font-weight-semibold text-2">
                            QUICK VIEW
                        </a>
                        <a href="shop-product-sidebar-left.html">
                            <div class="product-thumb-info-image bg-light">
                                <img alt="" class="img-fluid"
                                    src="{{asset('theme/default/img/demos/auto-services/products/product-4.jpg')}}">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#"
                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">CATEGORY</a>
                            <h3
                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                <a href="" class="text-color-dark text-color-hover-primary">Product Short Name</a>
                            </h3>
                        </div>
                    </div>
                    <div title="Rated 5 out of 5">
                        <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                    </div>
                    <p class="price text-5 mb-3">
                        <span class="sale text-color-dark font-weight-medium">49,00</span>
                        <span class="amount">59,00</span>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="product mb-0">
                    <div class="product-thumb-info mb-3">
                        <div class="product-thumb-info-badges-wrapper">
                            <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                        </div>
                        <div class="addtocart-btn-wrapper">
                            <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                <i class="icons icon-bag"></i>
                            </a>
                        </div>
                        <a href="ajax/demo-auto-services-product-quick-view.html"
                            class="quick-view text-uppercase font-weight-semibold text-2">
                            QUICK VIEW
                        </a>
                        <a href="shop-product-sidebar-left.html">
                            <div class="product-thumb-info-image bg-light">
                                <img alt="" class="img-fluid"
                                    src="{{asset('theme/default/img/demos/auto-services/products/product-4.jpg')}}">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#"
                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">CATEGORY</a>
                            <h3
                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                <a href="" class="text-color-dark text-color-hover-primary">Product Short Name</a>
                            </h3>
                        </div>
                    </div>
                    <div title="Rated 5 out of 5">
                        <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                    </div>
                    <p class="price text-5 mb-3">
                        <span class="sale text-color-dark font-weight-medium">49,00</span>
                        <span class="amount">59,00</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                <div class="product mb-0">
                    <div class="product-thumb-info mb-3">
                        <div class="product-thumb-info-badges-wrapper">
                            <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                        </div>
                        <div class="addtocart-btn-wrapper">
                            <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                <i class="icons icon-bag"></i>
                            </a>
                        </div>
                        <a href="ajax/demo-auto-services-product-quick-view.html"
                            class="quick-view text-uppercase font-weight-semibold text-2">
                            QUICK VIEW
                        </a>
                        <a href="shop-product-sidebar-left.html">
                            <div class="product-thumb-info-image bg-light">
                                <img alt="" class="img-fluid"
                                    src="{{asset('theme/default/img/demos/auto-services/products/product-3.jpg')}}">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#"
                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">CATEGORY</a>
                            <h3
                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                <a href="" class="text-color-dark text-color-hover-primary">Product Short Name</a>
                            </h3>
                        </div>
                    </div>
                    <div title="Rated 5 out of 5">
                        <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                    </div>
                    <p class="price text-5 mb-3">
                        <span class="sale text-color-dark font-weight-medium">49,00</span>
                        <span class="amount">59,00</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="product mb-0">
                    <div class="product-thumb-info mb-3">
                        <div class="product-thumb-info-badges-wrapper">
                            <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                        </div>
                        <div class="addtocart-btn-wrapper">
                            <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                <i class="icons icon-bag"></i>
                            </a>
                        </div>
                        <a href="ajax/demo-auto-services-product-quick-view.html"
                            class="quick-view text-uppercase font-weight-semibold text-2">
                            QUICK VIEW
                        </a>
                        <a href="shop-product-sidebar-left.html">
                            <div class="product-thumb-info-image bg-light">
                                <img alt="" class="img-fluid"
                                    src="{{asset('theme/default/img/demos/auto-services/products/product-2.jpg')}}">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#"
                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">CATEGORY</a>
                            <h3
                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                <a href="" class="text-color-dark text-color-hover-primary">Product Short Name</a>
                            </h3>
                        </div>
                    </div>
                    <div title="Rated 5 out of 5">
                        <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                    </div>
                    <p class="price text-5 mb-3">
                        <span class="sale text-color-dark font-weight-medium">49,00</span>
                        <span class="amount">59,00</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <div class="product mb-0">
                    <div class="product-thumb-info mb-3">
                        <div class="product-thumb-info-badges-wrapper">
                            <span class="badge badge-ecommerce badge-danger">27% OFF</span>
                        </div>
                        <div class="addtocart-btn-wrapper">
                            <a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                <i class="icons icon-bag"></i>
                            </a>
                        </div>
                        <a href="ajax/demo-auto-services-product-quick-view.html"
                            class="quick-view text-uppercase font-weight-semibold text-2">
                            QUICK VIEW
                        </a>
                        <a href="shop-product-sidebar-left.html">
                            <div class="product-thumb-info-image bg-light">
                                <img alt="" class="img-fluid"
                                    src="{{asset('theme/default/img/demos/auto-services/products/product-1.jpg')}}">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#"
                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">CATEGORY</a>
                            <h3
                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                <a href="" class="text-color-dark text-color-hover-primary">Product Short Name</a>
                            </h3>
                        </div>
                    </div>
                    <div title="Rated 5 out of 5">
                        <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                    </div>
                    <p class="price text-5 mb-3">
                        <span class="sale text-color-dark font-weight-medium">49,00</span>
                        <span class="amount">59,00</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-md-between mt-4">
            <div class="col-md-auto mb-3 mb-md-0">
                <p class="mb-0">Showing 1-8 of 24 products</p>
            </div>
            <div class="col-md-auto">
                <ul class="pagination justify-content-start justify-content-md-end">
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="section border-0 m-0">
        <div class="container pb-3 my-5">
            <div class="row justify-content-center pb-3 mb-4">
                <div class="col text-center">
                    <div class="overflow-hidden">
                        <h2 class="font-weight-bold text-color-dark line-height-3 mb-0 appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="250">See What Clients Are Saying
                        </h2>
                    </div>
                    <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                        <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim"
                            data-appear-animation-delay="600">
                    </div>
                    <p class="font-weight-bold text-3-5 mb-1 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                        data-appear-animation-delay="500">We are very proud of the service we provide and stand by every
                        product we carry.</p>
                    <p class="font-weight-light text-3-5 mb-0 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="750">Read our
                        testimonials from our happy customers.</p>
                </div>
            </div>
            <div class="row appear-animation" data-appear-animation="fadeInUpShorterPlus"
                data-appear-animation-delay="1000">
                <div class="col">
                    <div class="owl-carousel nav-outside nav-style-1 nav-dark nav-arrows-thin nav-font-size-lg custom-carousel-box-shadow-1 mb-0"
                        data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 3}}, 'autoplay': true, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': true, 'margin': 15, 'stagePadding': '75'}">
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div
                                        class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem ipsum dolor
                                                sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt
                                                turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">John Smith</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div
                                        class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem ipsum dolor
                                                sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt
                                                turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">John Doe</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div
                                        class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem ipsum dolor
                                                sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt
                                                turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">John Smith</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div
                                        class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem ipsum dolor
                                                sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt
                                                turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">John Doe</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
