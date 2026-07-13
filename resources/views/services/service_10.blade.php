@extends('layout.front')

@section('title', 'Estimates, Design, Approvals & Financing | Your Project, Our Expertise')

@section('meta_description', 'Ensure your project stays on track with Lassana Gedara’s comprehensive services. From detailed cost estimates and professional architectural design to smooth permit approvals and financing guidance, we help you build with confidence in Sri Lanka.')

@section('meta_keywords', 'construction estimates, architectural design, permit approvals, financing services, Lassana Gedara, Sri Lanka, BOQ, cost analysis, loan assistance, project planning')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/service-10-banner.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Estimates, Design, Approvals & Financing Services</h1>
                <span class="title">Turning Your Vision into Reality</span>
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
                            <li><a href="{{route('Prefabricated_&_Modular_Construction')}}">Prefabricated & Modular Construction</a></li>
                            <li class="active"><a href="{{route('Estimates_Design_Approvals_&_Financing_Services')}}">Estimates, Design, Approvals & Financing Services</a></li>
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
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-10/1.jpg')}}" alt="Estimates" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-10/2.jpg')}}" alt="Estimates" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-10/3.jpg')}}" alt="Estimates" /></figure>
                            </div>
                        </div>
                        <h2>Estimates (BOQs)</h2>
                        <div class="text">
                            <strong>Detailed Cost Estimation</strong>
                            <p>Our team provides detailed Bills of Quantities (BOQs) for accurate cost estimates, ensuring your project stays within budget without compromising on quality.</p>
                            <h3>Architectural Drawings</h3>
                            <p>Our expert architects design detailed, practical, and aesthetic architectural plans that bring your vision to life, ensuring compliance with all regulations.</p>
                            <div class="two-column row">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <h3>Our Key Features</h3>
                                    <ul>
                                        <li>Accurate & Transparent Cost Estimates</li>
                                        <li>Comprehensive Architectural Design & Drawings</li>
                                        <li>Land Surveying & Site Analysis</li>
                                        <li>Financing & Loan Assistance</li>
                                    </ul>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/resource/services/single-service/service-10/4.jpg')}}" alt="Second Estimates Image" />
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
                                <li data-tab="#prod-details" class="tab-btn active-btn">Cost Estimates</li>
                                <li data-tab="#prod-spec" class="tab-btn">Permit Approvals</li>
                                <li data-tab="#prod-reviews" class="tab-btn">Financing Support</li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="prod-details">
                                    <div class="content">
                                        <p>Precision in cost estimation and design ensures that every project starts with clarity, balancing budget constraints with visionary architectural plans.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-spec">
                                    <div class="content">
                                        <p>Navigating complex regulations, we streamline approval processes while conducting accurate land surveys for smooth project execution.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-reviews">
                                    <div class="content">
                                        <p>From loans to funding strategies, we support clients in securing financial backing for their dream projects with trusted guidance.</p>
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
