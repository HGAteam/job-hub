@extends('layout.theme.master')
@section('content')
<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-color-dark font-weight-bold">Brake Repair</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-flex justify-content-md-end text-3-5">
                    <li><a href="{{route('welcome')}}" class="text-color-default text-color-hover-primary text-decoration-none text-uppercase">{{ __('Home')}}</a></li>
                    <li><a href="{{route('services.index')}}" class="text-color-default text-color-hover-primary text-decoration-none text-uppercase">{{ __('Services')}}</a></li>
                    <li class="active">{{ __('Brake Repair')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container my-5 pt-4 pb-5">
    <div class="row">
        <div class="col-lg-8 order-lg-2 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
            <p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin. </p>
            <p class="pb-2 mb-4">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
            <img src="{{asset('theme/default/img/demos/auto-services/generic/generic-square-8.jpg')}}" class="img-fluid custom-border-radius-1 float-start me-4 mb-4" alt="" />
            <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus.</p>
            <p>Praesent mauris eros, tincidunt id enim sodales, rhoncus malesuada ligula. Vivamus quis purus nec sapien pellentesque imperdiet. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec vehicula elit. </p>
            <img src="{{asset('theme/default/img/demos/auto-services/generic/generic-square-9.jpg')}}" class="img-fluid custom-border-radius-1 float-end ms-4 mb-4 mb-sm-0" alt="" />
            <p class="mt-5 mt-md-0 mt-xl-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. </p>
            <ul class="list list-icons list-icons-style-2 list-icons-lg mb-4 mb-xl-5">
                <li class="font-weight-semibold text-color-dark">
                    <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                    Pellentesque ultricies nibh
                </li>
                <li class="font-weight-semibold text-color-dark">
                    <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                    Ultricies nibh pellen
                </li>
                <li class="font-weight-semibold text-color-dark">
                    <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                    Ultricies nibh pellen
                </li>
                <li class="font-weight-semibold text-color-dark">
                    <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                    Pellentesque ultricies nibh
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. Praesent mauris eros, tincidunt id enim sodales, rhoncus malesuada ligula. Vivamus quis purus nec sapien pellentesque imperdiet. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec vehicula elit. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. Praesent mauris eros, tincidunt id enim sodales, rhoncus malesuada ligula. Vivamus quis purus nec sapien pellentesque imperdiet. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec vehicula elit. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec vehicula elit. </p>
        </div>
        <div class="col-lg-4 order-lg-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
            <div class="card box-shadow-1 custom-border-radius-1 mb-5">
                <div class="card-body z-index-1 py-4 my-3">
                    <h2 class="text-color-dark font-weight-bold text-6 mb-4">All Services</h2>
                    <ul class="custom-nav-list-effect-1 list list-unstyled mb-0">
                        <li class="active">
                            <a href="demo-auto-services-services-detail.html" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">Brake Repair</a>
                        </li>
                        <li>
                            <a href="demo-auto-services-services-detail.html" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">Check Engine</a>
                        </li>
                        <li>
                            <a href="demo-auto-services-services-detail.html" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">Suspension Repair</a>
                        </li>
                        <li>
                            <a href="demo-auto-services-services-detail.html" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">Transmission Repair</a>
                        </li>
                        <li>
                            <a href="demo-auto-services-services-detail.html" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">A/C Repair</a>
                        </li>
                        <li>
                            <a href="demo-auto-services-services-detail.html" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">Oil Change</a>
                        </li>
                        <li>
                            <a href="demo-auto-services-services-detail.html" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">Electrical Diagnostics</a>
                        </li>
                        <li>
                            <a href="demo-auto-services-services-detail.html" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">Tune Up</a>
                        </li>
                        <li>
                            <a href="demo-auto-services-services-detail.html" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">Fuel System Repair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
