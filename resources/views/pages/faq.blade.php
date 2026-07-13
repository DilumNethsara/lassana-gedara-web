@extends('layout.front')

@section('title', 'Frequently Asked Questions | Lassana Gedara Construction')

@section('meta_description', 'Get quick answers about Lassana Gedara’s construction, renovation, and interior design services in Sri Lanka. Find detailed information on project timelines, sustainable practices, financing, and quality control.')

@section('meta_keywords', 'Lassana Gedara FAQ, construction company Sri Lanka, renovation, interior design, project management, sustainable building, cost estimation, green construction')


@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/FAQ.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Faquality Ask Question</h1>
                <span class="title">Building Dreams, Crafting Excellence</span>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>FAQ's</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- FAQ Section -->
<section class="faq-section">
    <div class="auto-container">
        <div class="row">
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('assets/images/resource/faq-image.jpg')}}" alt="faq main image"></figure>
                    </div>
                </div>
            </div>

            <div class="accordion-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="float-text">some FAQ’s</span>
                        <h2>Frequality Asked Questions</h2>
                    </div>
                    <ul class="accordion-box">
                        
                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active">How do I request a quote for my construction project with Lassana Gedara?<div class="icon fa fa-plus-square"></div></div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">To request a quote for your construction project with Lassana Gedara, simply contact us through the provided phone or email in the "Contact Us" section of our website. We will guide you through the process, including an initial consultation and site visit, to provide a detailed quote tailored to your project.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">What makes Lassana Gedara Construction stand out in the industry?<div class="icon fa fa-plus-square"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Our commitment to top-quality construction, innovative design, and unwavering dedication sets us apart in the industry.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">What is the typical timeline for a construction project with Lassana Gedara?<div class="icon fa fa-plus-square"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Project timelines vary but are influenced by factors like project scope and complexity. We work closely with clients to establish realistic timelines.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">How does Lassana Gedara ensure the quality and safety of construction work?<div class="icon fa fa-plus-square"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">We maintain quality and safety through rigorous inspections, trained staff, and adherence to industry standards and regulations.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">Do you offer sustainable or environmentally friendly construction options?<div class="icon fa fa-plus-square"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, we provide sustainable and environmentally friendly construction solutions.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">What is the payment structure for construction services with Lassana Gedara?<div class="icon fa fa-plus-square"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Our payment structure is tailored to each project and is outlined in the project contract.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn">What sets Lassana Gedara Construction apart from other construction companies?<div class="icon fa fa-plus-square"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Our distinction lies in our commitment to quality, innovative design, and unwavering dedication to clients' visions.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">What financing options or assistance does Lassana Gedara offer for construction projects?<div class="icon fa fa-plus-square"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lassana Gedara Construction can assist with financing options and guide clients through securing construction loans.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">How do I initiate a construction project with Lassana Gedara, and what's the first step?<div class="icon fa fa-plus-square"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">To begin your project with Lassana Gedara, contact us through the provided phone or email. We will guide you through the initial consultation, site visit, and quote request process, which is the first step.</div>
                                </div>
                            </div>
                        </li> 

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End FAQ Section -->

<!-- Faq Form Section -->
<section class="faq-form-section" id="contact">
    <div class="auto-container">
        <div class="sec-title">
            <span class="float-text">Question</span>
            <h2>Your Question Tell</h2>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <!-- Faq Form -->
        <div class="faq-form">
            <form method="post" action="{{route('send_mail')}}">
                @csrf
                <div class="row">
                    <div class="form-group col-lg-6 col-md-12">
                        <input type="text" name="username" placeholder="Name" value="{{old('username')}}">
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-6 col-md-12">
                        <input type="text" name="phone" placeholder="Contact Number" value="{{old('contact')}}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-6 col-md-12">
                        <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-6 col-md-12">
                        <input type="text" name="company" placeholder="Company" value="{{old('company')}}">
                        @error('company')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group col-lg-12 col-md-12">
                        <textarea name="message" placeholder="Massage"></textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                   <!-- reCAPTCHA -->
                    <div class="form-group col-lg-12 col-md-12">
                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                      @if ($errors->has('captcha'))
                          <span class="text-danger">{{ $errors->first('captcha') }}</span>
                      @endif
                    </div>

                    <div class="form-group col-lg-12 col-md-12">
                        <button class="theme-btn btn-style-three" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</section>
<!--End Contact Section -->

@if (session('scroll'))
    <script>
        window.onload = function() {
            var element = document.getElementById("{{ session('scroll') }}");
            if (element) {
                element.scrollIntoView({ behavior: "smooth" });
            }
        }
    </script>
@endif

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection