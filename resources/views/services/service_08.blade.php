@extends('layout.front')

@section('title', 'Real Estate Investment & Property Development | Lassana Gedara ')

@section('meta_description', 'Partner with Lassana Gedara to maximize your property’s potential. We specialize in strategic real estate investment, land development, and joint ventures to deliver large-scale residential and commercial projects with high ROI in Sri Lanka.')

@section('meta_keywords', 'real estate investment, property development, Lassana Gedara, Sri Lanka, land development, joint ventures, housing projects, commercial projects, ROI, construction consultancy, Gampaha')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/service-8-banner.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Real Estate Investment & Property Development</h1>
                <span class="title">Investing in Growth, Building the Future</span>
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
                            <li class="active"><a href="{{route('Real_Estate_Investment_&_Property_Development')}}">Real Estate Investment & Property Development</a></li>
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
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-8/1.jpg')}}" alt="Real Estate" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-8/2.jpg')}}" alt="Real Estate" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-8/3.jpg')}}" alt="Real Estate" /></figure>
                            </div>
                        </div>
                        <h2>Joint Ventures with Investors</h2>
                        <div class="text">
                            <strong>Large-Scale Housing Projects</strong>
                            <p>By partnering with investors, we take on large-scale residential and commercial projects, maximizing return on investment and creating high-value properties.</p>
                            <h3>Land Development for Housing & Commercial Use</h3>
                            <p>We identify and develop strategic land parcels to meet housing and commercial demands, turning raw land into thriving, profitable spaces.</p>
                            <div class="two-column row">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <h3>Key Features</h3>
                                    <ul>
                                        <li>Strategic Land Acquisition & Development</li>
                                        <li>High-Return Property Projects</li>
                                        <li>Investor Partnerships for Large-Scale Developments</li>
                                        <li>Market Research & Project Feasibility</li>
                                    </ul>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/resource/services/single-service/service-8/4.jpg')}}" alt="Second Real Estate Image" />
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
                                <li data-tab="#prod-details" class="tab-btn active-btn">Joint Ventures</li>
                                <li data-tab="#prod-spec" class="tab-btn">Land Development</li>
                                <li data-tab="#prod-reviews" class="tab-btn">Market Expansion</li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="prod-details">
                                    <div class="content">
                                        <p>Strategic partnerships drive our large-scale housing and commercial developments, fostering opportunities for investors and stakeholders alike.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-spec">
                                    <div class="content">
                                        <p>Transforming land into thriving communities, our property development expertise ensures high-value real estate solutions for residential and business needs.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-reviews">
                                    <div class="content">
                                        <p>Insight-driven planning and execution elevate real estate ventures, maximizing returns while ensuring sustainable urban expansion.</p>
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
