@extends('frontend.layout.app')
@section('content')


<!--====================  breadcrumb area ====================-->
<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
    data-bg="assets/img/italia/product/ceilingtilesbdcm.webp">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">100 X 100 cm Ceiling Tiles</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children">
                        <a href="{{ route('contact') }}">Home</a>
                    </li>
                    <li class="has-children"><a href="#">Ceiling Tiles</a></li>
                    <li>100 X 100 cm Tiles</li>
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
                    <h2 class="title title--left">100 X 100 cm Ceiling Tiles</h2>
                </div>
                <p class="section-title-content">
                   Elevate your interior with 100 cm x 100 cm ceiling tiles, a larger format tile ideal for creating expansive, seamless ceiling surfaces that enhance any commercial or residential space. These tiles fit specialized grid systems designed for larger tile dimensions, offering a unique aesthetic and functional solution beyond standard sizes.
                </p>

                <div class="section-title-area">
                    <!-- <h4 class="subtitle">Regular Plaster Boards</h4> -->
                    <h2 class="title title--left">Field of Application</h2>
                </div>
                <p class="section-title-content">
                    Often used in open-plan offices, conference rooms, large retail spaces, auditoriums, and modern commercial interiors where a sleek expansive ceiling plane is desired. Their acoustic properties make them suitable for noise management in educational and healthcare facilities.
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
                <img src="assets/img/italia/product/100cm.jpg" style="border-radius: 10px;" class="img-fluid"
                    alt="" />
            </div>
        </div>

    </div>
</div>

<div class="container mt-5 text-center">
    <div class="row">

        <div class="col-6">
            <h2 class="text-center"> Why Italia Ceiling Tiles? </h2>
            <img class="mt-2" src="assets/img/italia/product/100cmwhy.png" alt="" srcset="" width="100%">
        </div>
        <div class="col-6">
            <h2 class="text-center">Italia Ceiling Tiles Process</h2>
            <img class="mt-2" src="assets/img/italia/product/ctf.webp" alt="" srcset="" width="100%">
        </div>
    </div>
</div>

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
</div>





@endsection