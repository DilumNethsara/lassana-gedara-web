@extends('layout.front')

@section('title', 'Sustainable & Eco-Friendly Construction | Lassana Gedara Construction ')

@section('meta_description', 'Embrace the future of construction with Lassana Gedara’s eco-friendly practices. Our green building solutions include solar panel installation, water conservation, and energy-efficient design for projects across Sri Lanka and Gampaha.')

@section('meta_keywords', 'sustainable construction, eco-friendly building, solar-powered homes, green roofs, water conservation, Lassana Gedara, Sri Lanka, energy-efficient design, LEED-certified contractor, Gampaha')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/service-5-banner.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Sustainable & Eco-Friendly Construction</h1>
                <span class="title">Building a Greener Future</span>
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
                            <li class="active"><a href="{{route('Sustainable_&_Eco_Friendly_Construction')}}">Sustainable & Eco-Friendly Construction</a></li>
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
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-5/3.jpg')}}" alt="Sustainable" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-5/2.jpg')}}" alt="Sustainable" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-5/1.jpg')}}" alt="Sustainable" /></figure>
                            </div>
                        </div>
                        <h2>Green Building Solutions</h2>
                        <div class="text">
                            <strong>Energy-Efficient Design and Materials</strong>
                            <p>We use sustainable materials and energy-efficient solutions to minimize environmental impact, ensuring that each project not only meets the needs of today but also contributes to a greener tomorrow.</p>
                            <h3>Solar-Powered Housing</h3>
                            <p>Partnering with renewable energy firms, we integrate solar-powered solutions that reduce energy costs and carbon footprints, making homes both eco-friendly and cost-effective.</p>
                            <div class="two-column row">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <h3>Key Features</h3>
                                    <ul>
                                        <li>Energy-Efficient Designs & Building Materials</li>
                                        <li>Solar Integration & Green Roofs</li>
                                        <li>Water Conservation Solutions</li>
                                        <li>Sustainable Building Practices</li>
                                    </ul>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/resource/services/single-service/service-5/4.jpg')}}" alt="Second Sustainable Image" />
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
                                <li data-tab="#prod-details" class="tab-btn active-btn">Green Buildings</li>
                                <li data-tab="#prod-spec" class="tab-btn">Solar Housing</li>
                                <li data-tab="#prod-reviews" class="tab-btn">Water Conservation</li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="prod-details">
                                    <div class="content">
                                        <p>Sustainable architecture takes precedence in our projects, incorporating eco-friendly materials and energy-efficient designs. Every structure is a step towards a greener future.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-spec">
                                    <div class="content">
                                        <p>Integrating renewable energy into residential projects, we ensure sustainability without compromising luxury. Solar-powered homes redefine energy independence while reducing carbon footprints.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-reviews">
                                    <div class="content">
                                        <p>Water conservation remains a priority, with innovative rainwater harvesting and smart irrigation solutions enhancing sustainability in urban and rural developments.</p>
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
