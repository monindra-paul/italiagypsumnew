@extends('frontend.layout.app')
@section('content')


<!--====================  breadcrumb area ====================-->
<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
    data-bg="assets/img/italia/product/ceilingtilesbdcm.webp">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">60 X 60 cm Ceiling Tiles</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children">
                        <a href="{{ route('contact') }}">Home</a>
                    </li>
                    <li class="has-children"><a href="#">Ceiling Tiles</a></li>
                    <li>60 X 60 cm Tiles</li>
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
                    <h2 class="title title--left">60 X 60 cm Ceiling Tiles</h2>
                </div>
                <p class="section-title-content">
                    Our 60x60 gypsum ceiling tiles combine safety, durability, and style with environmental
                    friendliness. They provide an effective barrier against fire and moisture while delivering clean,
                    modern interiors. Choosing these tiles means ensuring longevity and comfort for your space.
                </p>

                <div class="section-title-area">
                    <!-- <h4 class="subtitle">Regular Plaster Boards</h4> -->
                    <h2 class="title title--left">Field of Application</h2>
                </div>
                <p class="section-title-content">
                    Ideal for suspended ceiling systems in offices, hospitals, educational institutions, restaurants,
                    pharmaceutical facilities, retail spaces, and residential buildings. These tiles contribute to fire
                    safety, acoustic comfort, and improved room aesthetics.
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
                <img src="assets/img/italia/product/60cmtiles.jpg" style="border-radius: 10px;" class="img-fluid"
                    alt="" />
            </div>
        </div>

    </div>
</div>

<div class="container mt-5 text-center">
    <div class="row">

        <div class="col-6">
            <h2 class="text-center"> Why Italia Ceiling Tiles? </h2>
            <img class="mt-2" src="assets/img/italia/product/60cmceilingtiles.png" alt="" srcset="" width="100%">
        </div>
        <div class="col-6">
            <h2 class="text-center">Italia Ceiling Tiles Process</h2>
            <img class="mt-2" src="assets/img/italia/product/ctf.webp" alt="" srcset="" width="100%">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row ">
        {{-- <div class="col-5">
            <h2 class="text-center">Chemical Composition (by weight%) </h2>
            <div class="service-details-chart">
                <canvas class="d-flex align-items-center" id="pie-chart"></canvas>
            </div>

        </div> --}}
        <div class="col-12">
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
</div>





@endsection