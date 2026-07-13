@extends('layout.front')

@section('title', 'Prefabricated & Modular Construction | Fast & Customizable Solutions')

@section('meta_description', 'Accelerate your project timeline with Lassana Gedara’s prefabricated and modular construction solutions. Our innovative approach delivers pre-engineered buildings and customizable modular housing that combine rapid assembly with sustainable, high-quality design in Sri Lanka.')

@section('meta_keywords', 'prefabricated construction, modular housing, pre-engineered buildings, container homes, Lassana Gedara, Sri Lanka, rapid construction, sustainable building, customizable design')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/service-9-banner.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Prefabricated & Modular Construction</h1>
                <span class="title"> Efficiency, Speed, and Sustainability</span>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Service Detail</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar services-sidebar">

                    <!--Blog Category Widget-->
                    <div class="sidebar-widget sidebar-blog-category">
                        <ul class="blog-cat">
                            <li><a href="{{route('Luxury_&_Affordable_Housing_Development')}}">Luxury & Affordable Housing Development</a></li>
                            <li><a href="{{route('Commercial_&_Industrial_Construction')}}">Commercial & Industrial Construction</a></li>
                            <li><a href="{{route('Renovation_&_Restoration_Services')}}">Renovation & Restoration Services</a></li>
                            <li><a href="{{route('Interior_&_Exterior_Designing')}}">Interior & Exterior Designing</a></li>
                            <li><a href="{{route('Sustainable_&_Eco_Friendly_Construction')}}">Sustainable & Eco-Friendly Construction</a></li>
                            <li><a href="{{route('Civil_Engineering_&_MEP_Services')}}">Civil Engineering & MEP Services</a></li>
                            <li><a href="{{route('Vaasthu_Consulting_&_Traditional_Architecture')}}">Vaasthu Consulting & Traditional Architecture</a></li>
                            <li><a href="{{route('Real_Estate_Investment_&_Property_Development')}}">Real Estate Investment & Property Development</a></li>
                            <li class="active"><a href="{{route('Prefabricated_&_Modular_Construction')}}">Prefabricated & Modular Construction</a></li>
                            <li><a href="{{route('Estimates_Design_Approvals_&_Financing_Services')}}">Estimates, Design, Approvals & Financing Services</a></li>
                            <li><a href="{{route('Exporting_Construction_Services_&_Expertise')}}">Exporting Construction Services & Expertise</a></li>
                        </ul>
                    </div>

                    <!--Help Box-->
                    <div class="help-box" style="background-image:url({{asset('assets/images/resource/quick-contact.jpg')}})">
                        <div class="inner">
                            <span class="title" style="color: white;">Quick Contact</span>
                            <h2>Get Solution</h2>
                            <div class="text">Contact our nearest Lassana Gedara office or submit your inquiry online. We're here to assist you!</div>
                            <a class="theme-btn btn-style-three" href="{{route('contact')}}">Contact</a>
                        </div>
                    </div>
                </aside>
            </div>

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="service-detail">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="single-item-carousel owl-carousel owl-theme">
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-9/1.jpg')}}" alt="Prefabricated" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-9/2.jpg')}}" alt="Prefabricated" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-9/3.jpg')}}" alt="Prefabricated" /></figure>
                            </div>
                        </div>
                        <h2>Pre-Engineered Buildings (PEB)</h2>
                        <div class="text">
                            <strong>Quick & Cost-Effective Solutions</strong>
                            <p>Our pre-engineered buildings offer affordable, scalable, and fast construction solutions for commercial and industrial projects, designed to meet your specific needs.</p>
                            <h3>Modular Housing & Container Homes</h3>
                            <p>Modular housing and container homes provide a flexible, affordable, and sustainable alternative to traditional housing, making it possible to create homes in a fraction of the time.</p>
                            <div class="two-column row">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <h3>Key Features</h3>
                                    <ul>
                                        <li>Rapid Construction & Quick Deployment</li>
                                        <li>Sustainable and Cost-Effective Housing</li>
                                        <li>Customizable Designs & Flexible Configurations</li>
                                        <li>High-Quality Materials & Standards</li>
                                    </ul>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/resource/services/single-service/service-9/4.jpg')}}" alt="Second Prefabricated Image" />
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <!--Product Info Tabs-->
                    <div class="product-info-tabs">
                        <!--Product Tabs-->
                        <div class="prod-tabs tabs-box">
                            <!--Tab Btns-->
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#prod-details" class="tab-btn active-btn">Pre-Engineered Buildings</li>
                                <li data-tab="#prod-spec" class="tab-btn">Modular Housing</li>
                                <li data-tab="#prod-reviews" class="tab-btn">Rapid Construction</li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="prod-details">
                                    <div class="content">
                                        <p>Speed and efficiency define our pre-engineered buildings, offering cost-effective, durable solutions for diverse commercial and industrial applications.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-spec">
                                    <div class="content">
                                        <p>Sustainable, versatile, and affordable, our modular housing solutions redefine modern living with prefabricated efficiency.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-reviews">
                                    <div class="content">
                                        <p>Whether for temporary structures or long-term solutions, prefabrication ensures quick turnaround times and optimal cost savings.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Product Info Tabs-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
