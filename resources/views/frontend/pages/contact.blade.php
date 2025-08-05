@extends('frontend.layout.app')
@section('content')

 <!--====================  breadcrumb area ====================-->
    <div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
        data-bg="assets/img/backgrounds/19.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="breadcrumb-page-title">Contact</h2>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb-page-list text-uppercase">
                        <li class="has-children"><a href="{{route('contact')}}">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  page content wrapper ====================-->
    <div class="page-content-wrapper section-space--inner--120">
        <div class="contact-location-grid__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-location-grid__single">
                            <div class="contact-location-grid__image">
                                <img src="assets/img/italia/pages/kamco.jpeg" class="img-fluid" alt="" style="border-radius: 10px">
                            </div>
                            <div class="contact-location-grid__content">
                                <h2 class="title">Head Office</h2>
                                <ul class="info-list">
                                    <li class="address">Office 4 , Floor 10, Kamco Invest Tower, Al-Shuaida Street, Sharq, Kuwait City - 13149</li>
                                    <li class="email">reception@italiagypsum.com</li>
                                    <li class="phone">+965 41157633</li>
                                </ul>
                                <a href="#" class="see-more-link see-more-link--dark  see-more-link--dark--style2">GET
                                    DIRECTION <i class="ion-arrow-right-c"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-location-grid__single">
                            <div class="contact-location-grid__image">
                                <img src="assets/img/contact/2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="contact-location-grid__content">
                                <h2 class="title">Gypsum Board plant</h2>
                                <ul class="info-list">
                                    <li class="address">Western Insdustrial Al Shuaiaba, Block 9, Plot No. 39, Kuwait  </li>
                                    <li class="email">reception@italiagypsum.com</li>
                                    <li class="phone">+965 41157633</li>
                                </ul>
                                <a href="https://g.co/kgs/MgY95y4" target="__blank" class="see-more-link see-more-link--dark  see-more-link--dark--style2">GET
                                    DIRECTION <i class="ion-arrow-right-c"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-location-grid__single">
                            <div class="contact-location-grid__image">
                                <img src="assets/img/contact/3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="contact-location-grid__content">
                                <h2 class="title">Italia Ceiling Tiles Factory </h2>
                                <ul class="info-list">
                                    <li class="address">2005 Stokes Isle Apt. 896, Venaville 10010, United State</li>
                                    <li class="email">reception@italiagypsum.com</li>
                                    <li class="phone">+965 41157633</li>
                                </ul>
                                <a href="#" class="see-more-link see-more-link--dark  see-more-link--dark--style2">GET
                                    DIRECTION <i class="ion-arrow-right-c"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-form-area section-space--top--80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="career-title-area section-space--bottom--30">
                            <h2 class="title mb-0">Drop us a line</h2>
                        </div>
                        <div class="contact-form-wrapper">
                            <form id="contact-form" action="#"
                                method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="con_name" id="con_name" placeholder="Name *" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" name="con_email" id="con_email" placeholder="Your Email *"
                                            required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="con_phone" id="con_phone" placeholder="Phone Number">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Message" name="con_message" id="con_message"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" value="submit" id="submit" name="submit"
                                            class="ht-btn ht-btn--default">SEND MESSAGE</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-social-link-list-wrapper">
                            <div class="career-title-area section-space--bottom--30">
                                <h2 class="title mb-0">Follow us</h2>
                            </div>
                            <ul class="contact-social-link-list">
                                <li>
                                    <a href="#">
                                        <i class="ion-social-twitter link-icon"></i><span
                                            class="link-text">Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-social-facebook link-icon"></i><span
                                            class="link-text">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-social-vimeo link-icon"></i><span class="link-text">Vimeo</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-social-linkedin link-icon"></i><span
                                            class="link-text">Linkedin</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of page content wrapper  ====================-->

@endsection