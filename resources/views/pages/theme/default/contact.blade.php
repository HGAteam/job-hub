@extends('layout.theme.master')
@section('content')
<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-color-dark font-weight-bold">Contact</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-flex justify-content-md-end text-3-5">
                    <li><a href="demo-auto-services.html" class="text-color-default text-color-hover-primary text-decoration-none">HOME</a></li>
                    <li class="active">CONTACT US</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-4 my-5">
    <div class="row align-items-center">
        <div class="col-lg-5 col-xl-4 offset-xl-1 mb-5 mb-lg-0">
            <div class="overflow-hidden">
                <h2 class="text-color-dark font-weight-bold line-height-3 text-5-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">123 Street Name, Los Angeles, CA</h2>
            </div>
            <div class="overflow-hidden">
                <a href="#get-direction" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="d-inline-block custom-text-underline-1 font-weight-bold border-color-primary text-decoration-none text-3-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">GET DIRECTIONS</a>
            </div>
            <ul class="list list-unstyled text-color-dark font-weight-bold text-4 py-2 my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                <li class="d-flex align-items-center mb-2">
                    <i class="icons icon-envelope text-color-dark me-2"></i>
                    Email: <a href="mailto:porto@domain.com" class="text-color-dark text-color-hover-primary text-decoration-none ms-1">porto@domain.com</a>
                </li>
                <li class="d-flex align-items-center mb-0">
                    <i class="icons icon-phone text-color-dark me-2"></i>
                    Phone: <a href="tel:1234567890" class="text-color-dark text-color-hover-primary text-decoration-none ms-1">+123 4567 890</a>
                </li>
            </ul>
            <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">We are here to help you with your auto repair and service needs. Come in, give us a call or send us an email. We will get back to you as soon as we can during regular business hours.</p>
        </div>
        <div class="col-lg-6 col-xl-5 offset-lg-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
            <form class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
                <div class="contact-form-success alert alert-success d-none mt-4">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="contact-form-error alert alert-danger d-none mt-4">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="mail-error-message text-1 d-block"></span>
                </div>

                <div class="row row-gutter-sm">
                    <div class="form-group col mb-3">
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required placeholder="First Name">
                    </div>
                </div>
                <div class="row row-gutter-sm">
                    <div class="form-group col mb-3">
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required placeholder="E-mail Address">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col mb-3">
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message" id="message" required placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="row appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1500">
                    <div class="form-group col mb-0">
                        <button type="submit" class="btn btn-primary btn-modern font-weight-bold custom-btn-border-radius custom-btn-arrow-effect-1 text-3 px-5 py-3" data-loading-text="Loading...">
                            SUBMIT
                            <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<section id="get-direction" class="section bg-light border-0 box-shadow-1 position-relative z-index-1 py-4 m-0">
    <div class="container py-2">
        <div class="row align-items-center justify-content-lg-center justify-content-xl-start">
            <div class="col-lg-3 col-xl-2 offset-xl-1 mb-2 mb-lg-0">
                <h2 class="text-color-dark font-weight-bold text-4-5 mb-0 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250" data-plugin-options="{'accY': -100}">GET DIRECTIONS:</h2>
            </div>
            <div class="col-lg-8">
                <form class="custom-get-direction-form custom-form-style-1 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500" data-plugin-options="{'accY': -100}" action="" method="post">
                    <div class="d-flex align-items-stretch">
                        <input type="text" class="custom-get-direction-address form-control w-100" data-msg-required="Please enter Starting Address." name="getDirectionAddress" value="" placeholder="Enter Your Starting Address" required>
                        <button type="submit" class="btn btn-dark btn-modern font-weight-bold custom-btn-border-radius text-3 btn-px-4 ms-3 my-1" data-loading-text="...">GO</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-11 col-xl-10 offset-xl-1 custom-get-direction-error alert alert-danger d-none mt-4 mx-3 mx-sm-auto">
                <p class="text-center mb-0">There's an error and we couldn't find your address.<br><strong class="custom-get-direction-error-message d-none"></strong></p>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div class="position-relative appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="750">
    <div class="custom-directions-panel position-absolute top-0 left-0 w-100pct w-md-50pct w-lg-25pct h-100 mh-100 overflow-auto z-index-1"></div>
    <div id="googlemaps" class="google-map m-0" style="min-height: 500px;"></div>
</div>
@endsection
