@extends('frontend.layout.app')
@section('content')

<div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img"
    data-bg="assets/img/italia/pages/common-1.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h2 class="breadcrumb-page-title">Projects</h2>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb-page-list text-uppercase">
                    <li class="has-children"><a href="{{url('/')}}">Home</a></li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->
<!--====================  page content wrapper ====================-->

<div class="container mt-5">
    <div class="row text-center">
        <div class="col-12">
            <h2>Italia Installation Projects
</h2>
<br>

<p>Italia Installation Project, established in 1994 and based in Kuwait, specializes in premium interior installation services. With a dedicated team of 150+ skilled professionals, we deliver expert solutions for shopping malls, luxury villas, and commercial spaces. Known for precision and excellence, our services transform interiors into sophisticated and functional spaces. Italia Installation Project is your trusted partner for high-quality craftsmanship and seamless execution.

</p>
        </div>
    </div>
</div>



<div class="page-content-wrapper section-space--inner--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- industry grid wrapper -->
                    <div class="industry-grid-wrapper">
                        <div class="row">

                           <div class="col-12">
                            <img src="assets/img/italia/projects/installation-infographics.png" alt="" srcset="" width="100%">
                           </div>
                            
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