@extends('layout.front')

@section('title', 'Luxury & Affordable Housing Development | Lassana Gedara – Turnkey Residential Projects')

@section('meta_description', 'Discover Lassana Gedara’s turnkey solutions for luxury and budget-friendly housing in Sri Lanka. Our innovative approach delivers gated communities, modern apartments, and smart home construction with sustainability and timely project delivery in Gampaha.')

@section('meta_keywords', 'luxury housing, affordable housing, turnkey projects, gated communities, Lassana Gedara, Sri Lanka, apartment development, sustainable housing, smart home construction, residential development, Gampaha')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/service-1-banner.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Luxury & Affordable Housing Development</h1>
                <span class="title">Building Dreams with Affordable Solutions</span>
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
                            <li class="active"><a href="{{route('Luxury_&_Affordable_Housing_Development')}}">Luxury & Affordable Housing Development</a></li>
                            <li><a href="{{route('Commercial_&_Industrial_Construction')}}">Commercial & Industrial Construction</a></li>
                            <li><a href="{{route('Renovation_&_Restoration_Services')}}">Renovation & Restoration Services</a></li>
                            <li><a href="{{route('Interior_&_Exterior_Designing')}}">Interior & Exterior Designing</a></li>
                            <li><a href="{{route('Sustainable_&_Eco_Friendly_Construction')}}">Sustainable & Eco-Friendly Construction</a></li>
                            <li><a href="{{route('Civil_Engineering_&_MEP_Services')}}">Civil Engineering & MEP Services</a></li>
                            <li><a href="{{route('Vaasthu_Consulting_&_Traditional_Architecture')}}">Vaasthu Consulting & Traditional Architecture</a></li>
                            <li><a href="{{route('Real_Estate_Investment_&_Property_Development')}}">Real Estate Investment & Property Development</a></li>
                            <li><a href="{{route('Prefabricated_&_Modular_Construction')}}">Prefabricated & Modular Construction</a></li>
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
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-1/2.jpg')}}" alt="luxury house" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-1/3.jpg')}}" alt="luxury house" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-1/1.jpg')}}" alt="luxury house" /></figure>
                            </div>
                        </div>
                        <h2> Turnkey Housing Projects</h2>
                        <div class="text">
                            <strong>Complete Residential Construction Solutions</strong>
                            <p>With a passion for excellence, we offer a seamless service from design to execution. Our expertise ensures that every home we build is not just a structure, but a sanctuary of peace, comfort, and modern living. We create spaces that inspire and reflect the aspirations of our clients.</p>
                            <h3>Gated Community & Apartment Developments</h3>
                            <p>Creating sophisticated living spaces that harmonize luxury and convenience, our gated communities and apartments are designed for the modern individual seeking security, exclusivity, and a vibrant lifestyle.</p>
                            <div class="two-column row">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <h3>Key Features</h3>
                                    <ul>
                                        <li>Custom Home Designs & Floor Plans</li>
                                        <li>Secure Gated Communities with Modern Amenities</li>
                                        <li>High-End Finishes and Sustainable Solutions</li>
                                        <li>Timely Project Delivery & Transparent Pricing</li>
                                    </ul>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/resource/services/single-service/service-1/4.jpg')}}" alt="Second luxury house image" />
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
                                <li data-tab="#prod-details" class="tab-btn active-btn">Turnkey Projects</li>
                                <li data-tab="#prod-spec" class="tab-btn">Gated Communities</li>
                                <li data-tab="#prod-reviews" class="tab-btn">Luxury Homes</li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="prod-details">
                                    <div class="content">
                                        <p>A sense of fulfillment and excellence envelops our housing projects, transforming ideas into reality with seamless execution. From the first blueprint to the final brick, every element is carefully crafted, ensuring not just a home but a sanctuary of comfort and luxury. Our meticulous approach guarantees a stress-free journey for homeowners, allowing them to experience the joy of ownership without the burden of complexities.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-spec">
                                    <div class="content">
                                        <p>Designed to blend modern living with security and convenience, our gated communities and apartment complexes redefine urban lifestyles. The harmony of architecture and functionality creates an environment where residents thrive. Each space is curated to promote community engagement while offering privacy, ensuring a refined living experience.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-reviews">
                                    <div class="content">
                                        <p>From opulent villas for the elite to government-backed affordable housing, our expertise spans diverse residential needs. The blend of aesthetic appeal and functionality ensures that every home is a masterpiece, crafted with precision and care. Whether luxurious retreats or sustainable housing for middle-income families, each project embodies quality and elegance.</p>
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
