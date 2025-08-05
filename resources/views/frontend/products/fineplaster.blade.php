@extends('frontend.layout.app')
@section('content')


<!--====================  breadcrumb area ====================-->
<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
    data-bg="assets/img/italia/product/fine.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">Italia Fine Plaster</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children">
                        <a href="{{ route('contact') }}">Home</a>
                    </li>
                    <li class="has-children"><a href="#">Plaster</a></li>
                    <li>Italia Fine Plaster</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->


<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-5">
            <div class="feature-project-single-slide__image">
                <img src="assets/img/italia/product/fine-plaster-main.png" class="img-fluid" alt="" />
            </div>
        </div>
        <div class="col-md-7">
            <div class="feature-project-single-slide__content">
                <!-- section title left align -->
                <div class="section-title-area">
                    <img src="assets/img/italia/product/fine-name.png" alt="" srcset="">
                    {{-- <h4 class="subtitle">Italia Fine Plaster</h4> --}}
                    <h2 class="title title--left">Italia Fine Plaster</h2>
                </div>
                <p class="section-title-content">
                    Give your walls a touch of elegance and durability with Italia premium Gypsum Fine Plaster. Perfect
                    for residential, commercial, or industrial spaces, Italia fine plaster is designed to provide a
                    flawless, smooth finish that stands the test of time.
                </p>

                <div class="section-title-area">
                    <!-- <h4 class="subtitle">Regular Plaster Boards</h4> -->
                    <h2 class="title title--left">Field of Application</h2>
                </div>
                <p class="section-title-content">
                    Italia fine plaster can be applied by hand or machine, ensuring flexibility for any project scope.
                    The smoothness allows for direct painting or wallpaper application without additional treatment.
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
    </div>
</div>

<div class="container mt-5 text-center">
    <div class="row">

        <div class="col-6">
            <h2 class="text-center"> Why Italia Fine Plaster? </h2>
            <img src="assets/img/italia/product/whyitalia-plaster.png" alt="" srcset="">
        </div>
        <div class="col-6">
            <h2 class="text-center">Italia Plaster Product Range</h2>
            <img src="assets/img/italia/about/plasterpoints.webp" alt="" srcset="" width="100%">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row ">
        <div class="col-7">
            <h2 class="text-center">Technical Specifications of Gypsum Fine Plaster</h2>

            <table class="spec-table">

                <thead>
                    <tr>
                        <th>Property</th>
                        <th>Typical Value/Range</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Appearance</td>
                        <td>White powder</td>
                    </tr>
                    <tr>
                        <td>Water /plaster ratio </td>
                        <td>65%-70%</td>
                    </tr>
                    <tr>
                        <td>Initial Setting Time </td>
                        <td>10-15 min</td>
                    </tr>
                    <tr>
                        <td>Compressive Strength </td>
                        <td> > 1 N/mm2</td>
                    </tr>
                    <tr>
                        <td>Density </td>
                        <td>700-800 kg/m3</td>
                    </tr>
                    <tr>
                        <td>Coverage </td>
                        <td>9.5-10.5 kg/m2</td>
                    </tr>
                   <tr>
                        <td>Recommended Water Addition</td>
                        <td>20.5L per 30kg bag</td>
                    </tr>
                    <tr>
                        <td>Standards Compliance</td>
                        <td>ASTM C28, ASTM C842, EN 13279-1</td>
                    </tr>
                    <tr>
                        <td>Finish</td>
                        <td>Extra smooth, white</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="col-5">
            <h2 class="text-center">Chemical Composition (by weight%) </h2>                
            <div class="service-details-chart">
                <canvas class="d-flex align-items-center" id="pie-chart"></canvas>
            </div>

        </div>
    </div>
</div>





@endsection