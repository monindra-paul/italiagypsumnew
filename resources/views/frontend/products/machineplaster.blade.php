@extends('frontend.layout.app')
@section('content')


<!--====================  breadcrumb area ====================-->
<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
    data-bg="assets/img/italia/product/fine.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">Italia Machine Plaster</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children">
                        <a href="{{ route('contact') }}">Home</a>
                    </li>
                    <li class="has-children"><a href="#">Plaster</a></li>
                    <li>Italia Machine Plaster </li>
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
                <img src="assets/img/italia/product/machine-palster.webp" style="border-radius: 10px;" class="img-fluid" alt="" />
            </div>
        </div>
        <div class="col-md-7">
            <div class="feature-project-single-slide__content">
                <!-- section title left align -->
                <div class="section-title-area">
                    <img src="assets/img/italia/logo/icon.png" alt="" srcset="">
                    {{-- <h4 class="subtitle">Italia Vermiculite Plaster</h4> --}}
                    <h2 class="title title--left">Italia Machine Plaster</h2>
                </div>
                <p class="section-title-content">
                  Italia Gypsum One Coat Gypsum Plaster is a Machine gypsum-based plaster created to offer a better approach to traditional plastering. Its vermuculite-based Beta-Hemihydrate formulation ensures working and setting characteristics. It can deliver thrice more insulating capacity than others. As the name suggests, you only need a single coat of One Coat Gypsum Plaster to the brick wall and its done. 


                </p>

                <div class="section-title-area">
                    <!-- <h4 class="subtitle">Regular Plaster Boards</h4> -->
                    <h2 class="title title--left">Field of Application</h2>
                </div>
                <p class="section-title-content">
                  Machine plaster is valued in construction for enhancing thermal insulation, fire protection, soundproofing, durability, workability, and lightweight properties, used in internal/external wall finishes, fire barriers, passive fire protection coatings, acoustic treatments, and decorative plasters.
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
            <h2 class="text-center"> Why Italia Machine Plaster? </h2>
            <img class="mt-2" src="assets/img/italia/product/m-p-p.png" alt="" srcset="" width="100%">
        </div>
        <div class="col-6">
            <h2 class="text-center">Italia Plaster Product Range</h2>
            <img class="mt-2" src="assets/img/italia/about/plasterpoints.webp" alt="" srcset="" width="100%">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row ">
        <div class="col-12">
            <h2 class="text-center">Technical Specifications of Gypsum Machine Plaster</h2>
   <table class="spec-table">

                <thead>
                    <tr>
                        <th>Property</th>
                        <th>Typical Value/Range</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Color of Finished Surface	</td>
                        <td>White powder</td>
                    </tr>
                    <tr>
                        <td>Water/Plaster Ratio	 </td>
                        <td>60 - 65%
</td>
                    </tr>
                    <tr>
                        <td>Setting Time </td>
                        <td>15-20 mins.</td>
                    </tr>
                    
                    <tr>
                        <td>Coverage (1kg)		</td>
                        <td>12 kg / sq.m for 1 cmm thickness
</td>
                    </tr>
                </tbody>
            </table>


        </div>
        {{-- <div class="col-5">
            <h2 class="text-center">Chemical Composition (by weight%) </h2>                
            <div class="service-details-chart">
                <canvas class="d-flex align-items-center" id="pie-chart"></canvas>
            </div>

        </div> --}}
    </div>
</div>





@endsection