@extends('layout.theme.master')
@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="text-color-dark font-weight-bold">Blog</h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-flex justify-content-md-end text-3-5">
                        <li><a href="demo-auto-services.html"
                                class="text-color-default text-color-hover-primary text-decoration-none">HOME</a></li>
                        <li class="active">BLOG</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container pt-4 pb-5 my-5">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="1600">

                <article class="mb-5">
                    <div class="card bg-transparent border-0 custom-border-radius-1">
                        <div class="card-body p-0 z-index-1">
                            <a href="demo-auto-services-blog-post.html">
                                <img class="card-img-top custom-border-radius-1 mb-2"
                                    src="{{asset('theme/default/img/demos/auto-services/blog/blog-1.jpg')}}" alt="Card Image">
                            </a>
                            <p class="text-uppercase text-color-default text-1 my-2">
                                <time pubdate datetime="2023-01-10">10 Jan 2023</time>
                                <span class="opacity-3 d-inline-block px-2">|</span>
                                3 Comments
                                <span class="opacity-3 d-inline-block px-2">|</span>
                                John Doe
                            </p>
                            <div class="card-body p-0">
                                <h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a
                                        class="text-color-dark text-color-hover-primary text-decoration-none"
                                        href="demo-auto-services-blog-post.html">The Importance Of Wheel Maintenance</a>
                                </h4>
                                <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                    viverra lorem , consectetur adipiscing elit...</p>
                                <a href="demo-auto-services-blog-post.html"
                                    class="btn btn-link font-weight-semibold text-decoration-none text-3 ps-0">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="mb-5">
                    <div class="card bg-transparent border-0 custom-border-radius-1">
                        <div class="card-body p-0 z-index-1">
                            <a href="demo-auto-services-blog-post.html">
                                <img class="card-img-top custom-border-radius-1 mb-2"
                                    src="{{asset('theme/default/img/demos/auto-services/blog/blog-2.jpg')}}" alt="Card Image">
                            </a>
                            <p class="text-uppercase text-color-default text-1 my-2">
                                <time pubdate datetime="2023-01-10">10 Jan 2023</time>
                                <span class="opacity-3 d-inline-block px-2">|</span>
                                3 Comments
                                <span class="opacity-3 d-inline-block px-2">|</span>
                                John Doe
                            </p>
                            <div class="card-body p-0">
                                <h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a
                                        class="text-color-dark text-color-hover-primary text-decoration-none"
                                        href="demo-auto-services-blog-post.html">Tips for Protecting Your Car</a></h4>
                                <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                    viverra lorem , consectetur adipiscing elit...</p>
                                <a href="demo-auto-services-blog-post.html"
                                    class="btn btn-link font-weight-semibold text-decoration-none text-3 ps-0">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </article>

                <ul class="custom-pagination-style-1 pagination pagination-rounded pagination-md justify-content-center">
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                </ul>

            </div>
            <div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="1800">
                <aside class="sidebar">
                    <div class="px-3 mb-4">
                        <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">About The Blog
                        </h3>
                        <p class="m-0">Lorem ipsum dolor sit amet, conse elit porta. Vestibulum ante justo, volutpat quis
                            porta diam.</p>
                    </div>
                    <div class="py-1 clearfix">
                        <hr class="my-2">
                    </div>
                    <div class="px-3 mt-4">
                        <form action="page-search-results.html" method="get">
                            <div class="input-group mb-3 pb-1">
                                <input class="form-control box-shadow-none text-1 border-0 bg-color-grey"
                                    placeholder="Search..." name="s" id="s" type="text">
                                <button type="submit" class="btn bg-color-grey text-1 p-2"><i
                                        class="fas fa-search m-2"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="py-1 clearfix">
                        <hr class="my-2">
                    </div>
                    <div class="px-3 mt-4">
                        <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Posts</h3>
                        <div class="pb-2 mb-1">
                            <a href="#"
                                class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan
                                2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                    class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                            <a href="#"
                                class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem
                                ipsum dolor sit amet</a>
                            <a href="#"
                                class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan
                                2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                    class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                            <a href="#"
                                class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur
                                adipiscing elit</a>
                            <a href="#"
                                class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan
                                2023 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                    class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                            <a href="#"
                                class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Vivamus
                                sollicitudin nibh luctus</a>
                        </div>
                    </div>
                    <div class="py-1 clearfix">
                        <hr class="my-2">
                    </div>
                    <div class="px-3 mt-4">
                        <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent Comments
                        </h3>
                        <div class="pb-2 mb-1">
                            <a href="#"
                                class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin on
                                <strong class="text-color-dark text-hover-primary text-4">Vivamus sollicitudin</strong>
                                <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>
                            <a href="#"
                                class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">John Doe
                                on <strong class="text-color-dark text-hover-primary text-4">Lorem ipsum dolor</strong>
                                <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>
                            <a href="#"
                                class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin on
                                <strong class="text-color-dark text-hover-primary text-4">Consectetur adipiscing</strong>
                                <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan 2023</span></a>
                        </div>
                    </div>
                    <div class="py-1 clearfix">
                        <hr class="my-2">
                    </div>
                    <div class="px-3 mt-4">
                        <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0">Categories</h3>
                        <ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
                            <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Design
                                    (2)</a></li>
                            <li class="nav-item">
                                <a class="nav-link bg-transparent border-0 active" href="#">Photos (4)</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                            href="#">Animals</a></li>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0 active"
                                            href="#">Business</a></li>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                            href="#">Sports</a></li>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                            href="#">People</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Videos
                                    (3)</a></li>
                            <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Lifestyle
                                    (2)</a></li>
                            <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">Technology
                                    (1)</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
