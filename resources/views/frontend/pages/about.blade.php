@extends('frontend.layout.app')
@section('content')
{{-- 
    <div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img" data-bg="assets/img/backgrounds/19.jpg" style="background-image: url(&quot;assets/img/backgrounds/19.jpg&quot;);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h2 class="breadcrumb-page-title">About Us</h2>
                    </div>
                    <div class="col-sm-6">
                        <ul class="breadcrumb-page-list text-uppercase">
                            <li class="has-children"><a href="{{route('home')}}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div> --}}



    
    <!--====================  page content wrapper ====================-->
    <div class="page-content-wrapper">
        <!--====================  feature background area ====================-->
        <div class="feature-background__area">
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="feature-background__wrapper bg-img" data-bg="assets/img/backgrounds/13.jpg">
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <!-- feature background -->
                                <div class="feature-background__image feature-background__image--style2 bg-img" data-bg="assets/img/italia/about/aboutleft.webp"></div>
                            </div>
                            <div class="col-lg-7">
                                <!-- feature content -->
                                <div class="feature-background__content-area feature-background__content-area--style2">
                                    <div class="feature-background__content-wrapper section-space--inner--50">
                                        <!-- section title area -->
                                        <div class="section-title-area section-space--bottom--50">
                                            <h2 class="title title--style4 title--style4--about">Italia Gypsum: From Legacy to Leadership in Building Solutions</h2>
                                        </div>

                                        <!-- feature single content -->
                                        <div class="feature-background__single-content-wrapper">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p>Italia Gypsum started back in 1994, thanks to the vision of Mr. Ibrahim Alfouzan. Over the years, it’s grown into one of Kuwait’s most trusted names in gypsum and building materials. They make a wide range of products—like ceiling tiles, moldings, GRG panels, and cornices—and also handle full design and execution work with a team of about 150 professionals. They've been part of some major projects, including royal palaces, universities, villas, and malls.
<br>
<br>

In 2024, Mr. Fouzan Alfouzan took the reins and led the company into gypsum-board manufacturing, making Italia Gypsum the biggest player in that space in Kuwait. Looking ahead, they’re gearing up to start cement-board production too. It’s a company that’s built on experience, quality, and a drive to keep moving forward.</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a href="https://drive.google.com/file/d/1Q1W3tNDwjJjUbgUZ4qWZbKYe7l3tRw20/view" target="__blank" class="ht-btn ht-btn--default ht-btn--default--style4" style="border-radius: 5px">View Company Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of feature background area  ====================-->
        <!--====================  about feature icon area ====================-->
        <div class="about-feature-icon-area section-space--inner--120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="about-list-title-wrapper">
                            <div class="career-title-area section-space--bottom--50">
                                <h2 class="title mb-0">100% Natural gypsum based products </h2>
                                {{-- <img src="assets/img/italia/about/100.png" alt="" srcset=""> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1">
                        <div class="about-list-wrapper mt-0">
                             <h3 class="about-list-title">Italia manufacture and market 100% natural gypsum based products for the construction industry including:</h3>
                           {{-- <p>Tractor’s manufacturing capabilities are called upon by the U.S. Commercial Department in 1990. During the next seven years, the company had produced more than 10 million tons of constructional chemicals and materials.</p>
                            <p>Much of Tractor’s spectacular growth in the last 20 years resulted from the booming population and the increasing needs for a place to live of the citizens. We have the determination to assist our people with the best facilities.</p> --}}
<div class="row">
                            <div class="col-md-6 mt-3">
                                <img src="assets/img/italia/about/boardpoints.webp" alt="" srcset="" width="100%">
                            </div>
                           
                            <div class="col-md-6  mt-3">
                                <img src="assets/img/italia/about/plasterpoints.webp" alt="" srcset="" width="110%">
                            </div>

</div>
    
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-icon-box-wrapper">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="about-icon-box">
                                        <div class="about-icon-box__image">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" x="0" y="0" viewBox="0 0 512 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M256.855 178.625c7.047 0 12.754-5.71 12.754-12.754 0-7.043-5.707-12.754-12.754-12.754-56.347 0-102.027 45.68-102.027 102.031 0 56.348 45.68 102.028 102.027 102.028 56.352 0 102.032-45.68 102.032-102.028 0-7.046-5.711-12.753-12.754-12.753-7.043 0-12.754 5.707-12.754 12.753 0 42.262-34.258 76.524-76.524 76.524-42.261 0-76.523-34.262-76.523-76.524 0-42.265 34.262-76.523 76.523-76.523zm0 0" fill="#000258" opacity="1" data-original="#000000" class=""></path><path d="M500.2 179.395c-2.216-6.692-9.434-10.32-16.13-8.106-6.539 2.164-10.18 9.125-8.23 15.73 38.14 121.458-29.399 250.836-150.856 288.977-121.453 38.14-250.832-29.398-288.972-150.855C-2.133 203.684 65.41 74.305 186.863 36.164a230.521 230.521 0 0 1 138.121 0c6.75 2.035 13.871-1.785 15.907-8.535 2.004-6.649-1.672-13.676-8.278-15.824C197.75-30.508 54.117 44.52 11.805 179.387-30.508 314.25 44.523 457.883 179.387 500.195c134.867 42.313 278.496-32.715 320.808-167.582a255.934 255.934 0 0 0 .004-153.218zm0 0" fill="#000258" opacity="1" data-original="#000000" class=""></path><path d="M281.145 91.117c.066-7.262-5.512-13.332-12.754-13.875-3.809-.324-7.621-.648-11.532-.648-98.613 0-178.554 79.941-178.554 178.554 0 98.61 79.941 178.551 178.554 178.551 98.61 0 178.551-79.941 178.551-178.55 0-4.614-.281-9.223-.847-13.801-1.02-7-7.52-11.848-14.52-10.828-7 1.015-11.848 7.52-10.832 14.52.039.265.086.526.14.792.278 3.09.551 6.152.551 9.309.004 84.527-68.515 153.046-153.039 153.054-84.527.004-153.047-68.52-153.05-153.043-.004-84.523 68.511-153.047 153.039-153.05h.003c3.165 0 6.23.273 9.313.546l2.39.2c6.665.285 12.297-4.887 12.579-11.551.004-.063.004-.121.008-.18zm0 0" fill="#000258" opacity="1" data-original="#000000" class=""></path><path d="M333.379 114.855v45.735l-85.54 85.539c-5.066 4.894-5.206 12.969-.312 18.035 4.895 5.066 12.97 5.207 18.035.313.106-.102.211-.207.313-.313l85.54-85.539h45.733c3.383 0 6.625-1.344 9.02-3.738l76.52-76.524c4.98-4.98 4.98-13.054 0-18.035a12.749 12.749 0 0 0-9.016-3.734H435.41V38.332c0-7.043-5.71-12.754-12.758-12.75a12.747 12.747 0 0 0-9.011 3.734l-76.524 76.524a12.736 12.736 0 0 0-3.738 9.015zm25.508 5.282 51.015-51.016v20.227c0 7.043 5.711 12.754 12.754 12.754h20.227l-51.016 51.015h-32.98zm0 0" fill="#000258" opacity="1" data-original="#000000" class=""></path></g></svg>
                                        </div>
                                        <div class="about-icon-box__content">
                                            <h4 class="title">Mission</h4>
                                            <p class="content">To provide high-quality, sustainable gypsum products through innovation, efficiency, and exceptional service, enhancing value for our customers and environment.</p>
                                            {{-- <a href="#" class="see-more-link">SEE MORE <i class="ion-arrow-right-c"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="about-icon-box">
                                        <div class="about-icon-box__image">
                                           <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M150.587 341.359c-47.066 0-85.358-38.292-85.358-85.359 4.689-113.24 166.046-113.207 170.717 0 0 47.067-38.292 85.359-85.36 85.359zm0-155.718c-38.796 0-70.358 31.563-70.358 70.359 3.864 93.341 136.866 93.313 140.717 0 0-38.796-31.563-70.359-70.36-70.359zM361.413 341.359c-47.067 0-85.36-38.292-85.36-85.359 4.69-113.24 166.047-113.208 170.719 0 0 47.067-38.293 85.359-85.359 85.359zm0-155.718c-38.796 0-70.36 31.563-70.36 70.359 3.866 93.34 136.868 93.314 140.719 0 0-38.796-31.563-70.359-70.359-70.359z" fill="#0e035c" opacity="1" data-original="#000000" class=""></path><path d="M221.584 231.499c-5.1.087-8.927-5.353-7.023-10.13 14.571-38.216 68.339-38.334 82.877-.003a7.5 7.5 0 0 1-4.391 9.654 7.499 7.499 0 0 1-9.655-4.392c-4.382-11.694-15.607-19.367-27.986-19.134-11.835.238-22.604 7.927-26.797 19.131a7.504 7.504 0 0 1-7.025 4.874zM451.667 231.497h-19.256a7.5 7.5 0 1 1 0-15h19.256c9.923.34 9.93 14.657 0 15zM79.589 231.497H60.333a7.5 7.5 0 1 1 0-15h19.256c9.923.34 9.93 14.657 0 15zM181.952 223.682a9.475 9.475 0 0 1-13.056 3.015c-10.394-7.083-.878-22.306 10.041-16.07a9.474 9.474 0 0 1 3.015 13.055zM108.353 251.1c-4.905.065-8.67-4.912-7.199-9.62 5.172-17.571 19.439-31.191 37.233-35.543a7.498 7.498 0 0 1 9.067 5.503 7.5 7.5 0 0 1-5.503 9.067c-12.62 3.087-22.74 12.746-26.406 25.208a7.504 7.504 0 0 1-7.193 5.385zM319.178 251.1c-4.905.066-8.67-4.912-7.197-9.62 5.171-17.572 19.438-31.191 37.232-35.543a7.498 7.498 0 0 1 9.067 5.503 7.5 7.5 0 0 1-5.503 9.067c-12.62 3.087-22.739 12.746-26.408 25.208a7.503 7.503 0 0 1-7.191 5.385z" fill="#0e035c" opacity="1" data-original="#000000" class=""></path></g></svg>
                                        </div>
                                        <div class="about-icon-box__content">
                                            <h4 class="title">Vision</h4>
                                            <p class="content">Innovating with sustainable gypsum solutions for superior quality and a greener future.

</p>
                                            {{-- <a href="#" class="see-more-link">SEE MORE <i class="ion-arrow-right-c"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="about-icon-box">
                                        {{-- <div class="about-icon-box__image">
                                            <img src="assets/img/icons/about-icon3.png" alt="">
                                        </div> --}}
                                        <img src="assets/img/italia/about/country.webp" alt="" srcset="" width="70%">
                                        <div class="about-icon-box__content">
                                            <h4 class="title">International Team of Professionals
</h4>
                                            {{-- <p class="content">We assure that our company will always keep our performance and behavior in line with the government's regulations on environment protection.</p>
                                            <a href="#" class="see-more-link">SEE MORE <i class="ion-arrow-right-c"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of about feature icon area  ====================-->
      



        <div class="industry-grid-area section-space--inner--20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- section title -->
                        <div class="section-title-area section-space--bottom--60">
                            <div class="row">
                                <div class="col-4">

                                    <img src="https://italiagypsum.com/assets/images/italia/whyitalia.png" alt="" srcset="">
                                </div>
                                <div class="col-8">
                                    <h2 class="title title--style4 section-space--bottom--30">Why <span style="font-size: 40px;" class="highlight">Italia?</span></h2>
                                    <p class="section-title-content section-title-content--style3">
                                        Italia Gypsum stands out in the market for several reasons:
                                        <br>   
                                        <a href="#" class="see-more-link see-more-link--style2">Contact Us <i class="ion-arrow-right-c"></i></a>

                                    </p>
                                </div>
                               
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!-- industry grid wrapper -->
                        <div class="industry-grid-wrapper">
                            <div class="row row-35">
                                <div class="col-sm-6">
                                    <div class="single-industry-grid section-space--bottom--60">
                                        <div class="single-industry-grid__heading">
                                            <div class="icon">
                                               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64" x="0" y="0" viewBox="0 0 500 500" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill-rule="evenodd" d="M157.924 324.965c-6.625 0-12.021-5.395-12.021-12.032 0-6.625 5.395-12.021 12.021-12.021s12.02 5.395 12.02 12.021c.001 6.637-5.395 12.032-12.02 12.032zm0-37.143c-13.847 0-25.117 11.265-25.117 25.112 0 13.858 11.27 25.128 25.117 25.128 13.846 0 25.117-11.27 25.117-25.128 0-13.847-11.27-25.112-25.117-25.112zm280.656 19.997a64.221 64.221 0 0 1 0 31.742 6.532 6.532 0 0 0 1.484 5.996l11.408 12.677-7.552 13.08-16.699-3.547a6.525 6.525 0 0 0-5.947 1.721c-7.679 7.508-17.179 12.997-27.456 15.871a6.541 6.541 0 0 0-4.457 4.286l-5.274 16.219h-15.104l-5.274-16.219a6.548 6.548 0 0 0-4.463-4.286c-10.283-2.874-19.771-8.363-27.451-15.871a6.527 6.527 0 0 0-5.947-1.721l-16.704 3.547-7.552-13.08 11.414-12.677a6.53 6.53 0 0 0 1.484-5.996 64.221 64.221 0 0 1 0-31.742 6.568 6.568 0 0 0-1.484-6.008l-11.414-12.666 7.552-13.08 16.704 3.547a6.53 6.53 0 0 0 5.947-1.721c7.679-7.508 17.179-12.997 27.451-15.871a6.528 6.528 0 0 0 4.463-4.286l5.274-16.219h15.104l5.274 16.219a6.517 6.517 0 0 0 4.457 4.286c10.277 2.874 19.777 8.363 27.456 15.871a6.552 6.552 0 0 0 5.947 1.721l16.699-3.547 7.552 13.08-11.408 12.666a6.565 6.565 0 0 0-1.484 6.008zm13.488 31.516a77.586 77.586 0 0 0 0-31.29l12.318-13.681a6.536 6.536 0 0 0 .811-7.646l-12.308-21.322a6.555 6.555 0 0 0-7.039-3.133l-18.028 3.834a77.314 77.314 0 0 0-27.064-15.651l-5.693-17.498a6.536 6.536 0 0 0-6.223-4.529h-24.621a6.542 6.542 0 0 0-6.223 4.529l-5.693 17.498a77.305 77.305 0 0 0-27.064 15.651l-18.028-3.834a6.55 6.55 0 0 0-7.034 3.133l-12.302 21.322a6.517 6.517 0 0 0 .806 7.646l12.318 13.681a77.319 77.319 0 0 0 0 31.29l-12.318 13.67a6.537 6.537 0 0 0-.806 7.657l12.302 21.322a6.564 6.564 0 0 0 7.034 3.133l18.028-3.834c7.867 7.001 17.112 12.352 27.064 15.645l5.693 17.504a6.547 6.547 0 0 0 6.223 4.529h24.621a6.543 6.543 0 0 0 6.223-4.529l5.688-17.504a77.179 77.179 0 0 0 27.07-15.645l18.028 3.834a6.573 6.573 0 0 0 7.039-3.133l12.308-21.322a6.555 6.555 0 0 0-.811-7.657zm-75.533 16.705c17.835 0 32.344-14.514 32.344-32.349s-14.508-32.344-32.344-32.344c-17.835 0-32.349 14.509-32.349 32.344s14.514 32.349 32.349 32.349zm0-77.789c-25.056 0-45.44 20.384-45.44 45.44s20.384 45.44 45.44 45.44c25.051 0 45.44-20.384 45.44-45.44 0-25.057-20.389-45.44-45.44-45.44zM271.946 150.222c0-17.835 14.508-32.343 32.344-32.343 17.84 0 32.349 14.509 32.349 32.343 0 17.841-14.509 32.349-32.349 32.349-17.836 0-32.344-14.509-32.344-32.349zm77.784 0c0-25.051-20.384-45.44-45.44-45.44-25.051 0-45.44 20.389-45.44 45.44 0 25.056 20.389 45.44 45.44 45.44 25.056 0 45.44-20.384 45.44-45.44zm-90.18 45.798a6.566 6.566 0 0 0-5.947-1.727l-16.699 3.553-7.552-13.08 11.408-12.677a6.536 6.536 0 0 0 1.49-5.996 64.198 64.198 0 0 1 0-31.742 6.552 6.552 0 0 0-1.49-6.002l-11.408-12.672 7.552-13.074 16.699 3.542a6.521 6.521 0 0 0 5.947-1.721c7.685-7.508 17.179-12.997 27.456-15.871a6.528 6.528 0 0 0 4.463-4.286l5.274-16.219h15.104l5.268 16.219a6.526 6.526 0 0 0 4.463 4.286c10.272 2.874 19.771 8.363 27.456 15.871a6.547 6.547 0 0 0 5.947 1.721l16.699-3.542 7.552 13.074-11.414 12.672a6.55 6.55 0 0 0-1.479 6.002c2.646 10.335 2.644 21.41 0 31.742a6.53 6.53 0 0 0 1.479 5.996l11.414 12.677-7.552 13.08-16.699-3.553a6.566 6.566 0 0 0-5.947 1.727c-7.685 7.508-17.184 13.003-27.456 15.871a6.55 6.55 0 0 0-4.463 4.286l-5.268 16.224h-15.104l-5.274-16.224a6.548 6.548 0 0 0-4.463-4.286c-10.283-2.868-19.771-8.363-27.456-15.871zm32.432 49.473h24.621a6.545 6.545 0 0 0 6.223-4.529l5.682-17.504a77.07 77.07 0 0 0 27.075-15.645l18.028 3.834c2.775.596 5.61-.679 7.034-3.133l12.302-21.322a6.52 6.52 0 0 0-.805-7.646l-12.313-13.681a77.586 77.586 0 0 0 0-31.29l12.313-13.676a6.552 6.552 0 0 0 .816-7.657l-12.313-21.311a6.532 6.532 0 0 0-7.034-3.133l-18.028 3.829a77.355 77.355 0 0 0-27.075-15.651l-5.682-17.498a6.55 6.55 0 0 0-6.223-4.529h-24.621a6.536 6.536 0 0 0-6.223 4.529l-5.693 17.498a77.397 77.397 0 0 0-27.064 15.651L234.974 88.8a6.534 6.534 0 0 0-7.034 3.133l-12.302 21.311a6.534 6.534 0 0 0 .8 7.657l12.324 13.676a77.301 77.301 0 0 0 0 31.29l-12.324 13.681a6.519 6.519 0 0 0-.8 7.646l12.302 21.322a6.541 6.541 0 0 0 7.034 3.133l18.028-3.834c7.867 7.001 17.112 12.357 27.064 15.645l5.693 17.504a6.545 6.545 0 0 0 6.223 4.529zM157.924 361.429c26.739 0 48.496-21.752 48.496-48.496 0-26.728-21.757-48.485-48.496-48.485s-48.496 21.757-48.496 48.485c0 26.744 21.757 48.496 48.496 48.496zm0-110.077c-33.96 0-61.593 27.622-61.593 61.582s27.632 61.592 61.593 61.592c33.96 0 61.587-27.633 61.587-61.592s-27.627-61.582-61.587-61.582zm91.928 32.454 17.465-19.408-12.655-21.934-25.58 5.439a6.564 6.564 0 0 1-5.936-1.716c-11.199-10.95-25.045-18.955-40.028-23.148a6.555 6.555 0 0 1-4.469-4.275l-8.071-24.836h-25.315l-8.076 24.836a6.528 6.528 0 0 1-4.457 4.275c-14.983 4.193-28.83 12.197-40.028 23.148a6.569 6.569 0 0 1-5.936 1.716l-25.58-5.439-12.661 21.934 17.471 19.408a6.533 6.533 0 0 1 1.484 5.996 93.9 93.9 0 0 0 0 46.279 6.537 6.537 0 0 1-1.484 5.996l-17.471 19.407 12.661 21.917 25.58-5.428a6.571 6.571 0 0 1 5.936 1.721c11.199 10.95 25.04 18.944 40.028 23.142a6.5 6.5 0 0 1 4.457 4.281l8.076 24.836h25.315l8.071-24.836a6.529 6.529 0 0 1 4.469-4.281c14.983-4.187 28.83-12.192 40.028-23.142a6.564 6.564 0 0 1 5.936-1.721l25.58 5.428 12.655-21.917-17.465-19.407a6.537 6.537 0 0 1-1.484-5.996c3.855-15.113 3.854-31.158 0-46.279a6.533 6.533 0 0 1 1.484-5.996zm31.185-21.835-17.421-30.176a6.53 6.53 0 0 0-7.023-3.123l-26.877 5.71c-11.408-10.432-25.001-18.288-39.675-22.933l-8.473-26.099a6.552 6.552 0 0 0-6.228-4.518h-34.832a6.547 6.547 0 0 0-6.228 4.518l-8.474 26.099c-14.668 4.645-28.272 12.501-39.681 22.933l-26.871-5.71a6.534 6.534 0 0 0-7.028 3.123l-17.421 30.176a6.536 6.536 0 0 0 .811 7.651l18.359 20.389a106.848 106.848 0 0 0 0 45.848l-18.359 20.395a6.542 6.542 0 0 0-.811 7.657l17.421 30.159a6.517 6.517 0 0 0 7.028 3.133l26.871-5.704c11.408 10.421 25.007 18.287 39.681 22.932l8.474 26.088a6.543 6.543 0 0 0 6.228 4.529h34.832a6.548 6.548 0 0 0 6.228-4.529l8.473-26.088c14.663-4.645 28.267-12.501 39.675-22.932l26.877 5.704a6.51 6.51 0 0 0 7.023-3.133l17.421-30.159a6.532 6.532 0 0 0-.806-7.657l-18.359-20.395c3.312-15.044 3.308-30.79 0-45.848l18.359-20.389a6.524 6.524 0 0 0 .806-7.651z" clip-rule="evenodd" fill="#00b818" opacity="1" data-original="#000000" class=""></path></g></svg>
                                            </div>
                                            <h3 class="title"> <a href="#">Customizable Solution</a></h3>
                                        </div>
                                        <div class="single-industry-grid__content">
                                            We tailor our products to meet the specific requirements of our clients, offering bespoke solutions for diverse construction needs.


                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-industry-grid section-space--bottom--60">
                                        <div class="single-industry-grid__heading">
                                            <div class="icon">
                                               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g data-name="Layer 2"><path d="M16.9 22.75a1.46 1.46 0 0 1-1.28-.75l-2.49-4.31a.75.75 0 0 1 1.3-.75l2.49 4.31.62-1.52a1.49 1.49 0 0 1 1.54-.88l1.64.2-3-5.17a.75.75 0 0 1 1.3-.75l3 5.18a1.5 1.5 0 0 1-1.47 2.23l-1.64-.21-.63 1.51a1.49 1.49 0 0 1-1.29.91zM7.5 22.75h-.08a1.49 1.49 0 0 1-1.29-.91l-.65-1.52-1.62.21a1.47 1.47 0 0 1-1.42-.65 1.49 1.49 0 0 1 0-1.56l3-5.19a.75.75 0 0 1 1.3.75l-3 5.18 1.63-.21a1.47 1.47 0 0 1 1.54.88l.65 1.52L10 16.94a.75.75 0 0 1 1.3.75L8.78 22a1.46 1.46 0 0 1-1.28.75z" fill="#00b818" opacity="1" data-original="#000000" class=""></path><path d="M12.2 18.91a2.53 2.53 0 0 1-1.78-.73l-.88-.88a1 1 0 0 0-.71-.3h-1a2.52 2.52 0 0 1-2.51-2.51v-1a1 1 0 0 0-.32-.75l-.89-.88a2.53 2.53 0 0 1-.73-1.78 2.49 2.49 0 0 1 .72-1.77l.9-.89a1 1 0 0 0 .29-.71v-1a2.52 2.52 0 0 1 2.5-2.55h1a1 1 0 0 0 .71-.29l.92-.87A2.58 2.58 0 0 1 14 2l.88.88a1 1 0 0 0 .71.29h1a2.52 2.52 0 0 1 2.51 2.52v1a1 1 0 0 0 .29.71l.89.89a2.53 2.53 0 0 1 0 3.55l-.89.88a1 1 0 0 0-.29.72v1A2.52 2.52 0 0 1 16.61 17h-1a1 1 0 0 0-.71.3l-.88.88a2.53 2.53 0 0 1-1.82.73zM7.79 4.66a1 1 0 0 0-1 1v1a2.49 2.49 0 0 1-.73 1.77l-.88.89a1 1 0 0 0-.3.71 1 1 0 0 0 .3.72l.88.88a2.49 2.49 0 0 1 .73 1.78v1a1 1 0 0 0 1 1h1a2.46 2.46 0 0 1 1.77.74l.88.88a1.05 1.05 0 0 0 1.44 0l.88-.88a2.46 2.46 0 0 1 1.77-.74h1a1 1 0 0 0 1-1v-1a2.49 2.49 0 0 1 .73-1.78l.89-.88a1 1 0 0 0 0-1.43l-.89-.89a2.49 2.49 0 0 1-.73-1.77v-1a1 1 0 0 0-1-1h-1a2.49 2.49 0 0 1-1.77-.73l-.88-.88a1 1 0 0 0-1.44 0l-.88.88a2.49 2.49 0 0 1-1.77.73z" fill="#00b818" opacity="1" data-original="#000000" class=""></path><path d="M11.54 12.42a.79.79 0 0 1-.54-.22l-1.66-1.67a.75.75 0 0 1 0-1.06.77.77 0 0 1 1.07 0l1.13 1.14 2.8-2.81a.77.77 0 0 1 1.07 0 .75.75 0 0 1 0 1.06l-3.34 3.34a.77.77 0 0 1-.53.22z" fill="#00b818" opacity="1" data-original="#000000" class=""></path></g></g></svg>
                                            </div>
                                            <h3 class="title"> <a href="#">Our Quality</a></h3>
                                        </div>
                                        <div class="single-industry-grid__content">
                                           Our standards rival those of multinational corporations, providing reliable and durable products.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-industry-grid section-space--bottom--60">
                                        <div class="single-industry-grid__heading">
                                            <div class="icon">
                                               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64" x="0" y="0" viewBox="0 0 68 68" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M21.2 56.53H10.63c-2.28 0-4.13-1.85-4.13-4.12a4.131 4.131 0 0 1 8.26 0c0 .55.45 1 1 1s1-.45 1-1V15.18h44.23v41.35h-1.82c-.55 0-1 .45-1 1 0 .56.45 1 1 1h2.82c.55 0 1-.44 1-1V14.18c0-.55-.45-1-1-1H16.74c-.232-3.065-2.827-5.64-6.11-5.64-3.38 0-6.13 2.75-6.13 6.13v38.74c0 3.38 2.75 6.12 6.13 6.12H21.2c.55 0 1-.44 1-1 0-.55-.45-1-1-1zM10.63 9.54c2.1 0 3.853 1.57 4.1 3.64.047.373.03-1.94.03 34.7a6.13 6.13 0 0 0-8.26 0c.011-36.404-.026-34.245.03-34.7a4.14 4.14 0 0 1 4.1-3.64z" fill="#00b818" opacity="1" data-original="#000000" class=""></path><path d="M34.37 58.4c0 .55.45 1 1 1h11.21c.4 0 .77-.24.92-.62.16-.37.07-.8-.22-1.09L32.66 43.07a.998.998 0 0 0-1.09-.22c-.37.16-.62.52-.62.93V58.4c0 .55.45 1 1 1 .56 0 1-.45 1-1V46.19L44.16 57.4h-8.79c-.55 0-1 .45-1 1z" fill="#00b818" opacity="1" data-original="#000000" class=""></path><path d="M63.21 64.29 41.3 42.38c-.39-.39-1.02-.39-1.42 0-.39.39-.39 1.03 0 1.42L60.09 64H26.36V30.27l9.56 9.56c.39.39 1.03.39 1.42 0a.996.996 0 0 0 0-1.41L26.07 27.15a.988.988 0 0 0-1.09-.22c-.37.16-.62.52-.62.93V65c0 .55.45 1 1 1H62.5c.4 0 .77-.24.92-.62.16-.37.07-.8-.21-1.09zM20.25 8.24l8.4 4.36c.14.07.3.11.46.11h25.91c.33 0 .63-.16.82-.42 2.3-3.23 2.3-6.64 0-9.87-.19-.26-.49-.42-.82-.42H29.11c-.17 0-.32.04-.46.12l-8.4 4.35a.997.997 0 0 0 0 1.77zm34.24 2.47h-1.71V4h1.71c1.44 2.26 1.44 4.46 0 6.71zm-3.71 0H30.11V4h20.67zM28.11 4.65v5.41l-5.23-2.7z" fill="#00b818" opacity="1" data-original="#000000" class=""></path></g></svg>
                                            </div>
                                            <h3 class="title"> <a href="#">Prestigious Projects</a></h3>
                                        </div>
                                        <div class="single-industry-grid__content">
                                            We have been entrusted with landmark projects, including the construction of Bayan Palace, Dar Yamama Palace, Dar Jaber, among other spectacular constructions.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-industry-grid section-space--bottom--60">
                                        <div class="single-industry-grid__heading">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64" x="0" y="0" viewBox="0 0 48 48" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M42.626 20.769A5.989 5.989 0 0 0 45 16c0-3.309-2.691-6-6-6s-6 2.691-6 6a5.99 5.99 0 0 0 2.388 4.78c-.153.068-.31.126-.458.203a1 1 0 0 0 .92 1.775A6.866 6.866 0 0 1 39 22c3.859 0 7 3.14 7 7v4c0 1.654-1.346 3-3 3h-5.06a1 1 0 1 0 0 2H43c2.757 0 5-2.243 5-5v-4c0-3.672-2.213-6.833-5.374-8.231zM35 16c0-2.206 1.794-4 4-4s4 1.794 4 4-1.794 4-4 4-4-1.794-4-4zM13.498 22.331a1 1 0 0 0-.428-1.348c-.148-.077-.305-.135-.458-.203A5.988 5.988 0 0 0 15 16c0-3.309-2.691-6-6-6s-6 2.691-6 6c0 1.945.935 3.672 2.374 4.769C2.213 22.167 0 25.328 0 29v4c0 2.757 2.243 5 5 5h5.06a1 1 0 1 0 0-2H5c-1.654 0-3-1.346-3-3v-4c0-3.86 3.141-7 7-7 1.104 0 2.194.262 3.15.758a1.003 1.003 0 0 0 1.348-.427zM5 16c0-2.206 1.794-4 4-4s4 1.794 4 4-1.794 4-4 4-4-1.794-4-4zM27.975 19.755A6.995 6.995 0 0 0 31 14c0-3.86-3.141-7-7-7s-7 3.14-7 7c0 2.384 1.2 4.49 3.025 5.755C15.921 21.353 13 25.338 13 30v6c0 2.757 2.243 5 5 5h12c2.757 0 5-2.243 5-5v-6c0-4.663-2.921-8.647-7.025-10.245zM19 14c0-2.757 2.243-5 5-5s5 2.243 5 5-2.243 5-5 5-5-2.243-5-5zm14 22c0 1.654-1.346 3-3 3H18c-1.654 0-3-1.346-3-3v-6c0-4.962 4.037-9 9-9s9 4.038 9 9z" fill="#00b818" opacity="1" data-original="#000000" class=""></path></g></svg>
                                            </div>
                                            <h3 class="title"> <a href="service-details-4.html"> Our People </a></h3>
                                        </div>
                                        <div class="single-industry-grid__content">
                                           Our people’ wealth of knowledge, abilities, and skills contribute to the success of our business. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





{{-- 

        <!--====================  about responsibility area ====================-->
        <div class="about-responsibility-area section-space--inner--120 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="career-title-area section-space--bottom--50 text-center">
                            <h2 class="title mb-0">Corporate Responsibility</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-box-image-wrapper">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="about-box-image-single">
                                        <div class="about-box-image-single__image">
                                            <img src="assets/img/banner/about-box-1.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="about-box-image-single__content">
                                            <h4 class="title">Leadership Role</h4>
                                            <p>We lead a powerfully growing company with an evident social improving role.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="about-box-image-single">
                                        <div class="about-box-image-single__image">
                                            <img src="assets/img/banner/about-box-2.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="about-box-image-single__content">
                                            <h4 class="title">Awards & Accolades</h4>
                                            <p>The rewards we received are the noble compliments for what we have done.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="about-box-image-single">
                                        <div class="about-box-image-single__image">
                                            <img src="assets/img/banner/about-box-3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="about-box-image-single__content">
                                            <h4 class="title">Business Partnerships</h4>
                                            <p>We established the partnership with over 200 oversea brands and companies.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of about responsibility area  ====================-->
        <!--====================  about list content area ====================-->
        <div class="about-list-content section-space--inner--120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-list-title-wrapper">
                            <div class="career-title-area section-space--bottom--50">
                                <h2 class="title">Make distinctive, lasting, substantial</h2>
                            </div>
                            <a href="page-contact.html" class="ht-btn ht-btn--transparent ht-btn--transparent--alt">CONTACT US</a>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-list-wrapper">
                                    <h3 class="about-list-title">Distinctive</h3>
                                    <p>Our mission is to help our clients make distinctive, lasting, and substantial improvements</p>
                                    <ul class="about-list">
                                        <li>Put client interests ahead of the firm’s</li>
                                        <li>Observe high ethical standards</li>
                                        <li>Preserve client confidences</li>
                                        <li>Maintain an independent perspective</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-list-wrapper">
                                    <h3 class="about-list-title">Successful</h3>
                                    <p>Our operation aligns with and forms a business model in order to succeed.</p>
                                    <ul class="about-list">
                                        <li>Put client interests ahead of the firm’s</li>
                                        <li>Observe high ethical standards</li>
                                        <li>Preserve client confidences</li>
                                        <li>Maintain an independent perspective</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of about list content area  ====================--> --}}
    </div>
    <!--====================  End of page content wrapper  ====================-->





    {{-- <div id="regions_div" style="width: 900px; height: 500px;"></div> --}}

@endsection