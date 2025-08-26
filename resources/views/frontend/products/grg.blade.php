@extends('frontend.layout.app')
@section('content')


<!--====================  breadcrumb area ====================-->
<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
    data-bg="assets/img/italia/product/ceilingtilesbdcm.webp">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">GRG / GRC Panels</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children">
                        <a href="{{ route('contact') }}">Home</a>
                    </li>
                    <li class="has-children"><a href="#">Ceiling Tiles</a></li>
                    <li>GRG / GRC Panels</li>
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
                    <h2 class="title title--left">GRG / GRC Panels</h2>
                </div>
                <p class="section-title-content">
                   Glass Reinforced Gypsum (GRG) panels are advanced building materials consisting of gypsum plaster reinforced with glass fibers, offering exceptional strength, versatility, and lightweight performance. GRG panels are widely chosen for interior decorative features such as ceilings, wall panels, columns, domes, and custom architectural shapes in commercial and residential spaces.
                </p>

                <div class="section-title-area">
                    <!-- <h4 class="subtitle">Regular Plaster Boards</h4> -->
                    <h2 class="title title--left">Suitability</h2>
                </div>
                <p class="section-title-content">
                   GRG panels are ideal for projects requiring lightweight yet robust materials with high aesthetic flexibility, especially for feature-rich interiors. They are generally used indoors, except for specialized outdoor-grade products.
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
                <img src="assets/img/italia/product/grgpanles.webp" style="border-radius: 10px;" class="img-fluid"
                    alt="" />
            </div>
        </div>

    </div>
</div>

<div class="container mt-5 text-center">
    <div class="row">

        <div class="col-6">
            <h2 class="text-center"> Why Italia GRG Panels? </h2>
            <img class="mt-2" src="assets/img/italia/product/grg.png" alt="" srcset="" width="100%">
        </div>
        <div class="col-6">
            <h2 class="text-center">Italia GRG Panels Process</h2>
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
            <h2 class="text-center">Technical Specifications of Italia GRG / GRC Panels</h2>
            <table class="spec-table">

                <thead>
    <tr>
      <th>Property</th>
      <th>Specification / Value</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>Glass Fiber Content</strong></td>
      <td>5–6% by weight (approx. 38% by volume)</td>
    </tr>
    <tr>
      <td><strong>Panel Thickness</strong></td>
      <td>1/8"–3/16" (3–5 mm); nominal 3/16" (5 mm)</td>
    </tr>
    <tr>
      <td><strong>Density</strong></td>
      <td>103–112 lbs/ft³ (1648–1792 kg/m³)</td>
    </tr>
    <tr>
      <td><strong>Flexural Strength</strong></td>
      <td>Avg: 10,660 psi; Min: 2,500 psi</td>
    </tr>
    
    <tr>
      <td><strong>Compressive Strength</strong></td>
      <td>≥ 7,080 psi</td>
    </tr>
    <tr>
      <td><strong>Impact Strength</strong></td>
      <td>Typical: 12.9 ft-lb/in; Min: 3 ft-lb</td>
    </tr>
    
    <tr>
      <td><strong>Manufacturing Standard</strong></td>
      <td>Mold-cast, factory made, QC cured</td>
    </tr>
  </tbody>
            </table>


        </div>

    </div>
</div>

@endsection