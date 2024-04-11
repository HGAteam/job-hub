@extends('layout.theme.master')
@section('content')
<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-color-dark font-weight-bold">About Us</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-flex justify-content-md-end text-3-5">
                    <li><a href="demo-auto-services.html" class="text-color-default text-color-hover-primary text-decoration-none">HOME</a></li>
                    <li class="active">ABOUT US</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container my-5 pt-4">
    <div class="row align-items-center justify-content-center mb-5">
        <div class="col-lg-6 pb-sm-4 pb-lg-0 mb-5 mb-lg-0">
            <div class="overflow-hidden">
                <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Twenty Years of Top Experience</h2>
            </div>
            <div class="custom-divider divider divider-primary divider-small my-3">
                <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700">
            </div>
            <p class="font-weight-light text-3-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
            <p class="pb-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Quisque efficitur ligula at erat lobortis luctus vitae eget lectus. Nullam vel massa bibendum nulla sollicitudin finibus. Etiam tincidunt ut turpis vulputate auctor. Cras at enim ac urna fringilla feugiat. Cras accumsan metus eget maximus fringilla. Sed sed odio commodo, tristique lacus vitae, condimentum neque. Mauris ut nunc vestibulum, malesuada orci sed, interdum eros. Proin volutpat, ante non eleifend mattis.</p>
            <div class="row">
                <div class="col-sm-5 col-lg-4 order-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="950">
                    <ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
                        <li class="font-weight-semibold text-color-dark">
                            <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                            Brand 1
                        </li>
                        <li class="font-weight-semibold text-color-dark">
                            <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                            Brand 2
                        </li>
                        <li class="font-weight-semibold text-color-dark">
                            <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                            Brand 3
                        </li>
                    </ul>
                </div>
                <div class="col-sm-5 col-lg-4 order-3 order-lg-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1200">
                    <ul class="list list-icons list-icons-style-2 list-icons-lg mb-0">
                        <li class="font-weight-semibold text-color-dark">
                            <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                            Brand 4
                        </li>
                        <li class="font-weight-semibold text-color-dark">
                            <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                            Brand 5
                        </li>
                        <li class="font-weight-semibold text-color-dark">
                            <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                            Brand 6
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-10 col-md-9 col-lg-6 ps-lg-5 pe-5 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1450" data-plugin-options="{'accY': -200}">
            <div class="position-relative">
                <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                    <img src="{{asset('theme/default/img/demos/auto-services/generic-1.png')}}" class="img-fluid" alt="" />
                </div>
                <div class="position-absolute transform3dxy-n50" style="top: 25%; left: 7%;">
                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': false}">
                        <img src="{{asset('theme/default/img/demos/auto-services/generic-1-1.png')}}" class="appear-animation" alt="" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1700" />
                    </div>
                </div>
                <div class="position-absolute transform3dxy-n50 ms-5 pb-5 ms-xl-0" style="top: 32%; left: 85%;">
                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1500, 'isInsideSVG': false}">
                        <img src="{{asset('theme/default/img/demos/auto-services/generic-1-2.png')}}" class="appear-animation" alt="" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1900" />
                    </div>
                </div>
                <div class="position-absolute transform3dxy-n50" style="top: 90%; left: 19%;">
                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 2, 'transition': true, 'transitionDuration': 2500, 'isInsideSVG': false}">
                        <img src="{{asset('theme/default/img/demos/auto-services/generic-1-3.png')}}" class="appear-animation" alt="" data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="2100" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
        <div class="row row-gutter-sm mb-4 mb-lg-5">
            <div class="col-sm-4 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="250" data-plugin-options="{'accY': -150}">
                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="img/demos/auto-services/generic/generic-square-5.jpg')}}">
                    <img class="img-fluid rounded-0" src="{{asset('theme/default/img/demos/auto-services/generic/generic-square-5.jpg')}}" alt="" />
                </a>
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="500" data-plugin-options="{'accY': -150}">
                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="img/demos/auto-services/generic/generic-square-6.jpg')}}">
                    <img class="img-fluid rounded-0" src="{{asset('theme/default/img/demos/auto-services/generic/generic-square-6.jpg')}}" alt="" />
                </a>
            </div>
            <div class="col-sm-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="750" data-plugin-options="{'accY': -150}">
                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="img/demos/auto-services/generic/generic-square-7.jpg')}}">
                    <img class="img-fluid rounded-0" src="{{asset('theme/default/img/demos/auto-services/generic/generic-square-7.jpg')}}" alt="" />
                </a>
            </div>
        </div>
    </div>
    <div class="row pb-4">
        <div class="col-lg-9 col-xl-4-5 mb-4 mb-lg-0">
            <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000">Phasellus ultrices mollis nulla sed finibus. Nulla gravida felis vel orci eleifend sodales. Cras sit amet nisi et nibh aliquet tempor nec porttitor leo. Nulla ultrices leo non tellus egestas, nec dignissim ante tempor. Aenean sed nisi vulputate, tincidunt felis ut, imperdiet magna. Aenean tellus enim, efficitur quis condimentum quis, finibus ut felis. </p>
        </div>
        <div class="col-lg-3 col-xl-1-5">
            <a href="demo-auto-services-services.html" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 w-lg-100pct appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1250">OUR SERVICES</a>
        </div>
    </div>
</div>

<section class="section border-0 m-0">
    <div class="container pb-3 my-5">
        <div class="row justify-content-center pb-3 mb-4">
            <div class="col text-center">
                <h2 class="font-weight-bold text-color-dark line-height-1 mb-0">See What Clients Are Saying</h2>
                <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0">
                </div>
                <p class="font-weight-bold text-3-5 mb-1">We are very proud of the service we provide and stand by every product we carry.</p>
                <p class="font-weight-light text-3-5 mb-0">Read our testimonials from our happy customers.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="owl-carousel nav-outside nav-style-1 nav-dark nav-arrows-thin nav-font-size-lg custom-carousel-box-shadow-1 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 3}}, 'autoplay': true, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': true, 'margin': 15, 'stagePadding': '75'}">
                    <div>
                        <div class="card custom-border-radius-1">
                            <div class="card-body">
                                <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                    <blockquote>
                                        <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                                <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                    <blockquote>
                                        <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                                <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                    <blockquote>
                                        <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                                <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                    <blockquote>
                                        <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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

<div class="container my-5 pt-5">
    <div class="row">
        <div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
            <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                <div class="custom-icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250" data-plugin-options="{'accY': -200}">
                    <div class="custom-icon-style-1 mb-4">
                        <img width="50" src="{{asset('theme/default/img/demos/auto-services/icons/checklist.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-3 px-xl-5 my-2">Complete Auto Body and Paint Shop</h3>
                    <p>Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 text-center px-lg-5 mb-5 mb-lg-0">
            <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                <div class="custom-icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500" data-plugin-options="{'accY': -200}">
                    <div class="custom-icon-style-1 mb-4">
                        <img width="50" src="{{asset('theme/default/img/demos/auto-services/icons/wheel-disk.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-xl-5 my-2 mx-4">Free Diagnosis & Brake Checks</h3>
                    <p>Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 text-center px-lg-5">
            <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                <div class="custom-icon-box-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="750" data-plugin-options="{'accY': -200}">
                    <div class="custom-icon-style-1 mb-4">
                        <img width="50" src="{{asset('theme/default/img/demos/auto-services/icons/car-safe.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                    </div>
                    <h3 class="text-transform-none font-weight-bold text-color-dark line-height-3 text-4-5 px-4 px-xl-5 my-2">Car Mechanics You Can Trust</h3>
                    <p>Lorem ipsum dolor sit a met, consectetur adipiscing elit.</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
