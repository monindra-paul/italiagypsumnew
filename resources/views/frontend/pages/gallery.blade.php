@extends('frontend.layout.app')
@section('content')



<!--====================  breadcrumb area ====================-->
<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
    data-bg="assets/img/italia/pages/common-1.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">Gallery</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children">
                        <a href="{{ route('contact') }}">Home</a>
                    </li>
                    {{-- <li class="#"><a href="#">Ceiling Tiles</a></li> --}}
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->

<div class="page-content-wrapper section-space--inner--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="case-study__image-gallery-wrapper section-space--top--80">
                        <div class="row image-popup">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="case-study__single-gallery-image">
                                    <a href="assets/img/italia/gallery/1.jpeg" class="single-gallery-thumb">
                                        <img src="assets/img/italia/gallery/1.jpeg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="case-study__single-gallery-image">
                                    <a href="assets/img/italia/gallery/2.jpeg" class="single-gallery-thumb">
                                        <img src="assets/img/italia/gallery/2.jpeg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="case-study__single-gallery-image">
                                    <a href="assets/img/italia/gallery/3.jpeg" class="single-gallery-thumb">
                                        <img src="assets/img/italia/gallery/3.jpeg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="case-study__single-gallery-image">
                                    <a href="assets/img/italia/gallery/4.jpg" class="single-gallery-thumb">
                                        <img src="assets/img/italia/gallery/4.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="case-study__single-gallery-image">
                                    <a href="assets/img/italia/gallery/5.jpg" class="single-gallery-thumb">
                                        <img src="assets/img/italia/gallery/5.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="case-study__single-gallery-image">
                                    <a href="assets/img/italia/gallery/6.jpg" class="single-gallery-thumb">
                                        <img src="assets/img/italia/gallery/6.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="case-study__single-gallery-image">
                                    <a href="assets/img/italia/gallery/7.jpeg" class="single-gallery-thumb">
                                        <img src="assets/img/italia/gallery/7.jpeg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="case-study__single-gallery-image">
                                    <a href="assets/img/italia/gallery/8.jpg" class="single-gallery-thumb">
                                        <img src="assets/img/italia/gallery/8.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="case-study__single-gallery-image">
                                    <a href="assets/img/italia/gallery/9.jpeg" class="single-gallery-thumb">
                                        <img src="assets/img/italia/gallery/9.jpeg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
        </div>
    </div>

@endsection