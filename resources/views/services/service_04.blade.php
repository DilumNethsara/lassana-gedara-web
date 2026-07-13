@extends('layout.front')

@section('title', 'Interior & Exterior Designing | Lassana Gedara – Space Transformations')

@section('meta_description', 'Transform your space with bespoke interior and exterior designs from Lassana Gedara. Our expertise covers residential, commercial, and hospitality projects with custom layouts, sustainable materials, and professional landscape design across Sri Lanka.')

@section('meta_keywords', 'interior design, exterior design, landscape design, Lassana Gedara, Sri Lanka, space planning, hospitality, sustainable materials, architectural design, modern aesthetics')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/service-4-banner.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Interior & Exterior Designing</h1>
                <span class="title">Design That Speaks Volumes</span>
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
                            <li class="active"><a href="{{route('Interior_&_Exterior_Designing')}}">Interior & Exterior Designing</a></li>
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
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-4/1.jpg')}}" alt="Interior" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-4/2.jpg')}}" alt="Interior" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-4/3.jpg')}}" alt="Interior" /></figure>
                            </div>
                        </div>
                        <h2>Customized Interior Designs</h2>
                        <div class="text">
                            <strong>Tailored Spaces for Every Sector</strong>
                            <p>Whether residential, commercial, or hospitality, our interior designs are carefully curated to reflect the personality and vision of each client, balancing comfort and style.</p>
                            <h3>Landscape Designing</h3>
                            <p>Elevating outdoor spaces with high-end landscaping, our designs offer beautiful, functional, and sustainable outdoor solutions for resorts, hotels, and residential projects.</p>
                            <div class="two-column row">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <h3>Key Features</h3>
                                    <ul>
                                        <li>Innovative Interior Design Concepts</li>
                                        <li>Outdoor & Landscape Planning</li>
                                        <li>Sustainable Materials & Green Design</li>
                                        <li>Space Planning & Optimization</li>
                                    </ul>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/resource/services/single-service/service-4/4.jpg')}}" alt="Second Interior Image" />
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
                                <li data-tab="#prod-details" class="tab-btn active-btn">Interior Design</li>
                                <li data-tab="#prod-spec" class="tab-btn">Landscape Design</li>
                                <li data-tab="#prod-reviews" class="tab-btn">Holistic Spaces</li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="prod-details">
                                    <div class="content">
                                        <p>Crafting unique interiors that reflect personality and purpose, we blend aesthetics with functionality. From cozy residential settings to sophisticated commercial spaces, each design is a testament to refined artistry.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-spec">
                                    <div class="content">
                                        <p>Beyond interiors, our landscape designs shape serene environments. Whether enhancing a luxury villa’s exterior or crafting a resort’s lush garden, nature-inspired solutions elevate the ambiance.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-reviews">
                                    <div class="content">
                                        <p>A seamless integration of interiors and exteriors defines our philosophy. The cohesion between indoor elegance and outdoor serenity ensures a living experience that is both visually appealing and functionally superior.</p>
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
