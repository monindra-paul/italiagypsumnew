@extends('frontend.layout.app') @section('content')

<!--====================  breadcrumb area ====================-->
<div
    class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
    data-bg="assets/img/italia/product/j-m.webp"
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">Italia Jointing Compound</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children">
                        <a href="{{ route('contact') }}">Home</a>
                    </li>
                    <li class="has-children">
                        <a href="#">Jointing Compound</a>
                    </li>
                    <li>Italia Jointing Compound</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->

<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-7">
            <div class="feature-project-single-slide__content">
                <!-- section title left align -->
                <div class="section-title-area">
                    <img
                        src="assets/img/italia/logo/icon.png"
                        alt=""
                        srcset=""
                    />
                    {{--
                    <h4 class="subtitle">Italia Vermiculite Plaster</h4>
                    --}}
                    <h2 class="title title--left">Italia Jointing Compound</h2>
                </div>
                <p class="section-title-content">
                    Jointing Compound is a premium-quality material specially
                    formulated for finishing gypsum board joints to achieve a
                    seamless, smooth, and durable surface. It ensures excellent
                    adhesion, easy workability, and crack-free finishing for
                    both walls and ceilings.
                </p>

                <div class="section-title-area">
                    <!-- <h4 class="subtitle">Regular Plaster Boards</h4> -->
                    <h2 class="title title--left">Field of Application</h2>
                </div>
                <p class="section-title-content">
                    Designed for use in multiple stages of jointing – bedding,
                    filling, and final finishing this compound delivers a
                    flawless surface ready for painting or decorative finishes.
                    Its fine texture provides superior coverage, minimal
                    shrinkage, and a smooth finish with less sanding effort.
                </p>
                {{--
                <div class="section-title-area">
                    <!-- <h4 class="subtitle">Regular Plaster Boards</h4> -->
                    <h2 class="title title--left">Manufacturing Standards</h2>
                </div>
                <p class="section-title-content">
                    Italia Gyp Moisture Resistant Gypsum boards are produced to
                    ASTM C1396/C1396M & EN 520 Type A standards.
                </p>
                --}}
            </div>
        </div>
        <div class="col-md-5">
            <div class="feature-project-single-slide__image">
                <img
                    src="assets/img/italia/product/jointingcomp.webp"
                    style="border-radius: 10px"
                    class="img-fluid"
                    alt=""
                />
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 text-center">
    <div class="row">
        <div class="col-6">
            <h2 class="text-center">Why Italia Jointing Compound?</h2>
            <img
                class="mt-2"
                src="assets/img/italia/product/joint-perfect.webp"
                alt=""
                srcset=""
                width="100%"
            />
        </div>
        <div class="col-6">
            <h2 class="text-center">Italia Plaster Product Range</h2>
            <img
                class="mt-2"
                src="assets/img/italia/about/plasterpoints.webp"
                alt=""
                srcset=""
                width="100%"
            />
        </div>
    </div>
</div>
<div class="about-list-content section-space--inner--120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-list-title-wrapper">
                            <div class="career-title-area section-space--bottom--50">
                                <h2 class="title">Premium Jointing Compound – Smooth & Crack-Free Finish</h2>
                            </div>
                            <a href="{{route('contact')}}" class="ht-btn ht-btn--transparent ht-btn--transparent--alt">CONTACT US</a>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-list-wrapper">
                                    <h3 class="about-list-title">Key Features:</h3>
                                    {{-- <p>Our mission is to help our clients make distinctive, lasting, and substantial improvements</p> --}}
                                    <ul class="about-list">
                                        <li>High bonding strength for secure jointing</li>
                                        <li>Smooth application and easy sanding</li>
                                        <li>Low shrinkage for crack-free finishing</li>
                                        <li>Suitable for manual or machine application</li>
                                        <li>Provides a perfect base for paint and decorative finishes</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-list-wrapper">
                                    <h3 class="about-list-title">Benefits: </h3>
                                    <ul class="about-list">
                                        <li>Ensures seamless and smooth finish</li>
                                        <li>Saves time with easy application & sanding</li>
                                        <li>Reduces risk of cracks and surface defects</li>
                                        <li>Enhances paint adhesion for a premium finish</li>
                                        <li>Provides long-lasting durability</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
