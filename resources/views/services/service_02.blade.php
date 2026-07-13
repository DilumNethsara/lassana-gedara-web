@extends('layout.front')

@section('title', 'Commercial & Industrial Construction | Lassana Gedara Construction')

@section('meta_description', 'From office buildings and retail spaces to factories and warehouses, Lassana Gedara offers energy-efficient, sustainable commercial and industrial construction solutions across Sri Lanka. Benefit from our expert planning, quality control, and timely completion.')

@section('meta_keywords', 'commercial construction, industrial construction, office buildings, retail spaces, factories, warehouses, Lassana Gedara, Sri Lanka, sustainable construction, energy-efficient design, project management, Gampaha')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/service-2-banner.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Commercial & Industrial Construction</h1>
                <span class="title">Building Robust Spaces for Business Growth</span>
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
                            <li class="active"><a href="{{route('Commercial_&_Industrial_Construction')}}">Commercial & Industrial Construction</a></li>
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
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-2/1.jpg')}}" alt="Commercial Buildings" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-2/2.jpg')}}" alt="Commercial Buildings" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-2/3.jpg')}}" alt="Commercial Buildings" /></figure>
                            </div>
                        </div>
                        <h2>Commercial Buildings</h2>
                        <div class="text">
                            <strong>Offices, Retail Spaces, Hotels & Shopping Complexes</strong>
                            <p>We specialize in the construction of commercial buildings that support business expansion, innovation, and customer satisfaction. From office spaces to retail hubs, we create environments that encourage growth and productivity.</p>
                            <h3>Factory & Warehouse Construction</h3>
                            <p>Our tailored factory and warehouse construction solutions help businesses with logistics, manufacturing, and distribution needs, combining functionality with advanced design.</p>
                            <div class="two-column row">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <h3>Key Features</h3>
                                    <ul>
                                        <li>Smart & Energy-Efficient Office Spaces</li>
                                        <li>Sustainable Industrial Facilities</li>
                                        <li>Scalable Construction for Growing Businesses</li>
                                        <li>On-Time Delivery & Budget Management</li>
                                        </ul>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/resource/services/single-service/service-2/4.jpg')}}" alt="second Commercial Buildings" />
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
                                <li data-tab="#prod-details" class="tab-btn active-btn">Commercial Buildings</li>
                                <li data-tab="#prod-spec" class="tab-btn">Industrial Spaces</li>
                                <li data-tab="#prod-reviews" class="tab-btn">Public Infrastructure</li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="prod-details">
                                    <div class="content">
                                        <p>Elevating business landscapes, our commercial buildings stand as pillars of innovation and sophistication. Offices, retail outlets, and hospitality spaces are meticulously designed to meet evolving industry demands, fostering environments that enhance productivity and engagement.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-spec">
                                    <div class="content">
                                        <p>Built with precision, our factories and warehouses cater to the dynamic needs of logistics and manufacturing sectors. From custom layouts to advanced storage solutions, each structure is engineered for efficiency, sustainability, and scalability.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-reviews">
                                    <div class="content">
                                        <p>Spaces that nurture learning and well-being take precedence in our educational and healthcare projects. Schools, universities, and hospitals are designed with functionality and comfort in mind, ensuring that each structure supports the needs of its community.</p>
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
