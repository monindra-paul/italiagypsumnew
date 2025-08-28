@extends('frontend.layout.app')
@section('content')


<!--====================  breadcrumb area ====================-->
<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
    data-bg="assets/img/italia/product/cornices.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">Cornices</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children">
                        <a href="{{ route('contact') }}">Home</a>
                    </li>
                    <li class="has-children"><a href="#">Ceiling Tiles</a></li>
                    <li>Cornices</li>
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
                    <img src="assets/img/italia/logo/icon.png" alt="" srcset="">
                    {{-- <h4 class="subtitle">Italia Vermiculite Plaster</h4> --}}
                    <h2 class="title title--left">Cornices</h2>
                </div>
                <p class="section-title-content">
                    Our cornices are crafted from high-quality gypsum plaster, designed to give your interiors a refined
                    and elegant look. Available in a wide range of designs – from classic to contemporary – they are the
                    perfect choice for homes, offices, hotels, and commercial spaces.
                    <br>

                    Whether you prefer subtle minimalistic detailing or intricate ornamental patterns, our cornices
                    elevate any space by blending functionality with beauty.
                </p>

                <div class="section-title-area">
                    <!-- <h4 class="subtitle">Regular Plaster Boards</h4> -->
                    <h2 class="title title--left">Field of Application</h2>
                </div>
                <p class="section-title-content">
                    Residential Homes – Add sophistication to living rooms, bedrooms, and halls.
                    <br>
                    Hotels & Resorts – Enhance ceilings and walls with decorative details.
                    <br>
                    Offices & Showrooms – Professional, stylish interiors for a lasting impression.
                    <br>
                    Cultural & Heritage Spaces – Perfect for restoration and traditional interiors.
                </p>
                {{--
                <div class="section-title-area">
                    <!-- <h4 class="subtitle">Regular Plaster Boards</h4> -->
                    <h2 class="title title--left">Manufacturing Standards</h2>
                </div>
                <p class="section-title-content">
                    Italia Gyp Moisture Resistant Gypsum boards are produced to ASTM
                    C1396/C1396M & EN 520 Type A standards.
                </p> --}}

            </div>
        </div>
        <div class="col-md-5">
            <div class="feature-project-single-slide__image">
                <img src="assets/img/italia/product/cornices-2.webp" style="border-radius: 10px;" class="img-fluid"
                    alt="" />
            </div>
        </div>

    </div>
</div>

<div class="container mt-5 text-center">
    <div class="row">

        <div class="col-6">
            

           
            <h2 class="text-center">Installation & Support</h2>
            {{-- <img class="mt-2" src="assets/img/italia/product/100cmwhy.png" alt="" srcset="" width="100%"> --}}
            <p>
                Our team provides end-to-end support from selection to installation. With expert craftsmanship, we
                ensure a flawless finish that complements your interiors perfectly.
            </p>

            <img src="assets/img/italia/projects/project.webp" alt="" srcset="" width="100%">
           
           
        </div>
        <div class="col-6">
            <h2 class="text-center">Why Italia Cornices?</h2>
            <img class="mt-2" src="assets/img/italia/product/whycornices.png" alt="" srcset="" width="100%">
        </div>
    </div>
</div>
<!-- 
<div class="container mt-5">
    <div class="row ">
        <div class="col-5">
            <h2 class="text-center">Chemical Composition (by weight%) </h2>
            <div class="service-details-chart">
                <canvas class="d-flex align-items-center" id="pie-chart"></canvas>
            </div>

        </div>
        <div class="col-7">
            <h2 class="text-center">Technical Specifications of Gypsum Ceiling Tiles</h2>
            <table class="spec-table">

                <thead>
                    <tr>
                        <th>Property</th>
                        <th>Typical Value/Range</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dimensions </td>
                        <td>Length: 600 mm / Width: 600 mm
                        </td>
                    </tr>
                    <tr>
                        <td>Thickness Standard </td>
                        <td>22 mm (Custom thickness available)
                        </td>
                    </tr>
                    <tr>
                        <td>Tolerance</td>
                        <td>±3 mm</td>
                    </tr>

                    <tr>
                        <td>Point Loading Capacity</td>
                        <td>13 Kg (No hook required)
                        </td>
                    </tr>
                    <tr>
                        <td>Paint Finish</td>
                        <td>Factory pre-printed; ready for installation
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>

    </div>
</div> -->





@endsection