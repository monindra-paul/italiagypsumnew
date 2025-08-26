@extends('frontend.layout.app') @section('content')

<!--====================  breadcrumb area ====================-->
<div
    class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
    data-bg="assets/img/italia/product/wallputty.png"
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">Italia Wall Putty</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children">
                        <a href="{{ route('contact') }}">Home</a>
                    </li>
                    {{-- <li class="has-children">
                        <a href="#">Jointing Compound</a>
                    </li> --}}
                    <li>Italia Wall Putty</li>
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
                    <h2 class="title title--left">Italia Wall Putty</h2>
                </div>
                <p class="section-title-content">
                   Gypsum Wall Putty is a premium finishing material designed to give walls and ceilings a smooth, durable, and flawless surface before painting. Made from high-quality gypsum, it ensures excellent bonding, superior whiteness, and long-lasting performance. Suitable for both interior and exterior applications, it enhances the life of paints while reducing paint consumption.
                </p>

                <div class="section-title-area">
                    <!-- <h4 class="subtitle">Regular Plaster Boards</h4> -->
                    <h2 class="title title--left">Field of Application</h2>
                </div>
                <p class="section-title-content">
                  Gypsum Wall Putty is suitable for interior and exterior walls, ceilings, plastered surfaces, RCC, and gypsum boards. Widely used in residential, commercial, and institutional projects, it provides a smooth base, enhances paint durability, and ensures a flawless finish in both new construction and renovations.
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
                    src="assets/img/italia/product/wallputty2.jpg"
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
                src="assets/img/italia/product/joint-perfect-mix.webp"
                alt=""
                srcset=""
                width="80%"
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
                                <h2 class="title">Smooth Walls. Lasting Impressions.</h2>
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
                                        <li>Smooth Finish – Provides a uniform and mirror-like surface.</li>
                                        <li>Strong Bonding – Excellent adhesion to plaster, concrete, and gypsum substrates.</li>
                                        <li>High Whiteness – Ensures brighter and more vibrant paint shades.</li>
                                        <li>Crack Resistance – Reduces hairline cracks and flaking.</li>
                                        <li>Fast Setting – Saves time with quick application and drying.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-list-wrapper">
                                    <h3 class="about-list-title">Benefits: </h3>
                                    <ul class="about-list">
                                        <li>Enhances paint durability and finish.</li>
                                        <li>Reduces paint consumption and cost.</li>
                                        <li>Prevents dampness and efflorescence.</li>
                                        <li>Ideal for residential, commercial, and industrial projects.</li>
                                        {{-- <li>Provides long-lasting durability</li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
