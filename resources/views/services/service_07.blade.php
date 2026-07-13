@extends('layout.front')

@section('title', 'Vaasthu Consulting & Traditional Architecture | Harmonious Design')

@section('meta_description', 'Integrate ancient Vaasthu principles with modern engineering. Lassana Gedara offers traditional architecture and Vaasthu consulting services, perfect for house construction, heritage preservation, and culturally inspired projects in Sri Lanka.')

@section('meta_keywords', 'vaasthu consulting, traditional architecture, temple construction, sri lanka, lassana gedara, cultural heritage, spiritual design, heritage preservation')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/service-7-banner.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Vaasthu Consulting & Traditional Architecture</h1>
                <span class="title">Creating Harmony with Tradition</span>
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
                            <li class="active"><a href="{{route('Vaasthu_Consulting_&_Traditional_Architecture')}}">Vaasthu Consulting & Traditional Architecture</a></li>
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
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-7/1.jpg')}}" alt="Vaasthu" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-7/2.jpg')}}" alt="Vaasthu" /></figure>
                                <figure class="image"><img src="{{asset('assets/images/resource/services/single-service/service-7/3.jpg')}}" alt="Vaasthu" /></figure>
                            </div>
                        </div>
                        <h2>Vaasthu-Compliant Construction</h2>
                        <div class="text">
                            <strong>Embrace Traditional Principles</strong>
                            <p>Our Vaasthu consultants ensure that every aspect of your construction follows traditional principles of harmony, balance, and energy flow, bringing peace and prosperity to your space.</p>
                            <h3>Temple & Cultural Site Development</h3>
                            <p>We specialize in designing and constructing religious and cultural landmarks that reflect spiritual values and heritage, enhancing the connection between the sacred and the physical world.</p>
                            <div class="two-column row">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <h3>Key Features</h3>
                                    <ul>
                                        <li>Vaasthu-Compliant Designs</li>
                                        <li>Cultural Heritage Preservation</li>
                                        <li>Temple Architecture & Planning</li>
                                        <li>Spiritual and Aesthetic Balance</li>
                                    </ul>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('assets/images/resource/services/single-service/service-7/4.jpg')}}" alt="Second Vaasthu Image" />
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
                                <li data-tab="#prod-details" class="tab-btn active-btn">Vaasthu Compliance</li>
                                <li data-tab="#prod-spec" class="tab-btn">Temple Construction</li>
                                <li data-tab="#prod-reviews" class="tab-btn">Cultural Craftsmanship</li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="prod-details">
                                    <div class="content">
                                        <p>Blending spirituality with architecture, our Vaasthu-compliant designs offer harmonious living and working spaces aligned with traditional energy principles.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-spec">
                                    <div class="content">
                                        <p>Paying homage to heritage, our temple and cultural site developments preserve architectural traditions while incorporating modern engineering advancements.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-reviews">
                                    <div class="content">
                                        <p>The meticulous attention to detail in our traditional projects ensures that cultural and historical significance is retained in every structure we create.</p>
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
