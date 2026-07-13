@extends('layout.front')

@section('title', 'Renovation & Restoration Services | Lassana Gedara Construction ')

@section('meta_description', 'Revitalize both historic and modern properties with Lassana Gedara’s comprehensive renovation and restoration services. Specializing in colonial heritage preservation, eco-friendly remodeling, and customized interior solutions across Sri Lanka.')

@section('meta_keywords', 'renovation, restoration, Lassana Gedara, Sri Lanka, colonial buildings, heritage preservation, house remodeling, office renovation, sustainable design, eco-friendly design')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/service-3-banner.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Renovation & Restoration Services</h1>
                <span class="title">Breathing New Life into Spaces</span>
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
                            <li class="active"><a href="{{route('Renovation_&_Restoration_Services')}}">Renovation & Restoration Services</a></li>
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
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-3/1.jpg')}}" alt="Renovation" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-3/2.jpg')}}" alt="Renovation" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-3/3.jpg')}}" alt="Renovation" /></figure>
                            </div>
                        </div>
                        <h2>Antique Property Restoration</h2>
                        <div class="text">
                            <strong>Preserving Historical Beauty</strong>
                            <p>Our restoration experts work meticulously to preserve the charm and integrity of colonial-era and traditional Sri Lankan buildings, ensuring that their legacy stands for generations to come.</p>
                            <h3>House & Office Renovation</h3>
                            <p>Transform your living or working space with modern designs, improved functionality, and eco-friendly solutions that make your space more efficient and stylish.</p>
                            <div class="two-column row">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <h3>Key Features</h3>
                                    <ul>
                                        <li>Modern Design Integration with Existing Structures</li>
                                        <li>Sustainable and Energy-Efficient Solutions</li>
                                        <li>Custom Renovation Plans Tailored to Your Needs</li>
                                        <li>Expert Restoration with Attention to Detail</li>
                                    </ul>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/resource/services/single-service/service-3/4.jpg')}}" alt="Second Renovation Imagex"/>
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
                                <li data-tab="#prod-details" class="tab-btn active-btn">Antique Restoration</li>
                                <li data-tab="#prod-spec" class="tab-btn">House Renovation</li>
                                <li data-tab="#prod-reviews" class="tab-btn">Sustainable Upgrades</li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="prod-details">
                                    <div class="content">
                                        <p>Preserving history through architecture, our heritage restoration services breathe new life into age-old structures. The delicate balance between tradition and modern engineering ensures that these landmarks stand strong for generations to come.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-spec">
                                    <div class="content">
                                        <p>Transforming spaces into contemporary masterpieces, our renovation services cater to evolving needs. Whether enhancing residential comfort or optimizing workspaces, each project is executed with precision and elegance.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-reviews">
                                    <div class="content">
                                        <p>Modernization with sustainability in mind is at the heart of our approach. Energy-efficient solutions and smart design principles ensure that every renovation aligns with future-ready standards.</p>
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
