@extends('frontend.layout.app')
@section('content')

<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
    data-bg="assets/img/italia/pages/common-1.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">Resources</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children"><a href="{{url('/')}}">Home</a></li>
                    <li>Resources</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->
<!--====================  page content wrapper ====================-->
<div class="page-content-wrapper section-space--inner--120">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                    <div class="award-item__single">
                        <div class="award-item__single">
                            <div class="image">
                                <img src="assets/img/italia/pages/resources/productcatelouge.png" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="content">
                                <h3 class="title">Italia Product Catelouge</h3>
                                <p>Our Product Catalogue is designed to give you a complete overview of our diverse
                                    range of high-quality offerings. Each product featured in this catalogue reflects
                                    our commitment to innovation, performance, and customer satisfaction.</p>
                                     <button onclick="productcatelouge()">
                                         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><defs><clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1" data-original="#000000"></path></clipPath></defs><g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="M0 0h-66.864c-12.101 0-21.91 9.81-21.91 21.91v66.864z" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(457.214 415.726)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h200.156" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(190.984 342.267)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h200.156" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(190.984 286.68)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h200.156" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(190.984 231.091)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h64.997C77.099 0 86.91 9.811 86.91 21.914v13.148" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(335.242 33.796)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h-13.148C-25.25 0-35.062-9.811-35.062-21.914v-391.815c0-12.102 9.812-21.913 21.914-21.913h190.794" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(124.91 469.438)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0v-107.018c0-12.103 9.811-21.914 21.914-21.914h288.477c12.102 0 21.913 9.811 21.913 21.914v4.383" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(54.786 136.432)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h-13.148c-12.103 0-21.914-9.811-21.914-21.914v-252.11" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(89.848 443.142)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0v61.501c0 12.103 9.811 21.914 21.914 21.914H243.53l88.774-88.774v-324.954c0-12.103-9.811-21.914-21.913-21.914H21.914C9.811-352.227 0-342.416 0-330.313v297.627" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(124.91 421.085)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path></g></g></svg>
                                    <span>View</span>
                                     </button>
                            </div>
                           
                        </div>

  
                    </div>
            </div>

            <div class="col-lg-6">
                <div class="award-item__single">
                            <div class="image">
                                <img src="assets/img/italia/pages/resources/companyprofile.png" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="content">
                                <h3 class="title">Italia Gypsum Profile</h3>
                                <p>Italia Gypsum is a Kuwaiti gypsum manufacturer with decades of expertise, offering a comprehensive lineup of high-quality gypsum products—from boards to decorative elements—catering to construction, renovation, and architectural needs. Their commitment to innovation, customization, and sustainable practices sets them apart in the region.</p>
                                     <button onclick="companyprofile()">
                                         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><defs><clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1" data-original="#000000"></path></clipPath></defs><g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="M0 0h-66.864c-12.101 0-21.91 9.81-21.91 21.91v66.864z" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(457.214 415.726)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h200.156" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(190.984 342.267)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h200.156" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(190.984 286.68)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h200.156" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(190.984 231.091)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h64.997C77.099 0 86.91 9.811 86.91 21.914v13.148" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(335.242 33.796)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h-13.148C-25.25 0-35.062-9.811-35.062-21.914v-391.815c0-12.102 9.812-21.913 21.914-21.913h190.794" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(124.91 469.438)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0v-107.018c0-12.103 9.811-21.914 21.914-21.914h288.477c12.102 0 21.913 9.811 21.913 21.914v4.383" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(54.786 136.432)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h-13.148c-12.103 0-21.914-9.811-21.914-21.914v-252.11" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(89.848 443.142)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0v61.501c0 12.103 9.811 21.914 21.914 21.914H243.53l88.774-88.774v-324.954c0-12.103-9.811-21.914-21.913-21.914H21.914C9.811-352.227 0-342.416 0-330.313v297.627" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(124.91 421.085)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path></g></g></svg>
                                    <span>View</span>
                                     </button>
                            </div>
                           
                </div>
            </div>
          
            <div class="col-lg-6">
                  <div class="award-item__single">
                            <div class="image">
                                <img src="assets/img/italia/pages/resources/specification.png" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="content">
                                <h3 class="title">Italia Gypsum Board Specification</h3>
                                <p>Gypsum board—also known as drywall, plasterboard, or wallboard—is composed of a core of non-combustible gypsum encased in paper liners. It conforms to widely recognized standards like ASTM C1396/C1396M and EN 520, addressing various board types and their intended applications</p>
                                     <button onclick="specification()">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><defs><clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1" data-original="#000000"></path></clipPath></defs><g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="M0 0h-66.864c-12.101 0-21.91 9.81-21.91 21.91v66.864z" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(457.214 415.726)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h200.156" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(190.984 342.267)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h200.156" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(190.984 286.68)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h200.156" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(190.984 231.091)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h64.997C77.099 0 86.91 9.811 86.91 21.914v13.148" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(335.242 33.796)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h-13.148C-25.25 0-35.062-9.811-35.062-21.914v-391.815c0-12.102 9.812-21.913 21.914-21.913h190.794" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(124.91 469.438)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0v-107.018c0-12.103 9.811-21.914 21.914-21.914h288.477c12.102 0 21.913 9.811 21.913 21.914v4.383" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(54.786 136.432)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0h-13.148c-12.103 0-21.914-9.811-21.914-21.914v-252.11" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(89.848 443.142)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path><path d="M0 0v61.501c0 12.103 9.811 21.914 21.914 21.914H243.53l88.774-88.774v-324.954c0-12.103-9.811-21.914-21.913-21.914H21.914C9.811-352.227 0-342.416 0-330.313v297.627" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(124.91 421.085)" fill="none" stroke="#ffffff" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class="" opacity="1"></path></g></g></svg>
                                    <span>View</span>
                                     </button>
                            </div>
                           
                  </div>
            </div>
            
        </div>
    </div>
</div>

@endsection

@section('customjs')

<script> 
        function productcatelouge() { 
        // OPEN NEW TAB 
        window.open('https://drive.google.com/file/d/18HX94-hic4JTEL9fKm_BDOog9iZR2PS2/view?usp=sharing', '_blank'); 
        // THEN REDIRECT THIS PAGE 
        //    window.location = "http://www.redirectme.com"; 
        } 

        function companyprofile() { 
        // OPEN NEW TAB 
        window.open('https://drive.google.com/file/d/1IJCo4xDV-8EKs9IR4kkNU_lqjj-R1zcd/view?usp=sharing', '_blank'); 
        // THEN REDIRECT THIS PAGE 
        //    window.location = "http://www.redirectme.com"; 
        } 

        function specification() { 
        // OPEN NEW TAB 
        window.open('https://drive.google.com/file/d/11D0G4JNHZXP3LGdBntMZ0qE3Uh51f48o/view', '_blank'); 
        // THEN REDIRECT THIS PAGE 
        //    window.location = "http://www.redirectme.com"; 
        } 
</script> 

@endsection