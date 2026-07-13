@extends('layout.front')

@section('title', 'Contact Lassana Gedara | Building Your Vision With Us')

@section('meta_description', 'Connect with Lassana Gedara for expert construction, design, and project management solutions. Call +94 706 920 600 or email info@lassanagedara.com to start your luxury, affordable, or commercial construction project today.')

@section('meta_keywords', 'contact Lassana Gedara, construction company Gampaha, interior design Sri Lanka, project management, fabrication, eco-friendly construction, construction quote, building services')


@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets/images/background/contact-us.jpg')}});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Contact Us</h1>
                <span class="title">Let’s Build Together</span>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Page Section -->
<section class="contact-page-section" id="contact">
    <div class="auto-container">
        <div class="row">
            <!-- Form Column -->
            <div class="form-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="float-text">informaer</span>
                        <h2>Contact Us</h2>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="contact-form">
                        <form action="{{route('send_mail')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="username" placeholder="Name" value="{{old('username')}}">
                                    @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>                                

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="phone" placeholder="Phone" value="{{old('phone')}}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror                                
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="company" placeholder="Company" value="{{old('company')}}">
                                    @error('company')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>                                

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>                                

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="message" placeholder="Massage" value="{{old('message')}}"></textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>                                

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                                    @if ($errors->has('captcha'))
                                       <span class="text-danger">{{ $errors->first('captcha') }}</span>
                                     @endif
                                 </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button class="theme-btn btn-style-three" type="submit" name="submit-form">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="contact-info">
                        <div class="row">
                            <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <h4>Location</h4>
                                    <p>199, 6th floor, Ward City Shopping Complex, Merybiso Mw, Gampaha, Sri Lanka</p>
                                </div>
                            </div>

                            <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <h4>Call Us</h4>
                                    <p>+94 706 920 600</p>
                                </div>

                            </div>

                            <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <h4>Email</h4>
                                    <p><a href="#">info@lassanagedara.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                     <div class="map-outer">
                        <iframe class="map-canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.286287891697!2d79.99604087454215!3d7.0927764162871805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fb8d4f0399e5%3A0x6dab901d4c744608!2sWard%20City%20Shopping%20Complex!5e0!3m2!1sen!2slk!4v1739531680965!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Page Section -->

<!--Clients Section-->
<section class="clients-section style-two">
    <div class="auto-container">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/1.png')}}" alt="arcadian"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/2.png')}}" alt="ascentra"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/3.png')}}" alt="asthana holdings"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/4.png')}}" alt="bed rock"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/5.png')}}" alt="invent to invest"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/6.png')}}" alt="jump on travels"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/7.png')}}" alt="keen rabbits"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/8.png')}}" alt="lassana gedara"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/9.png')}}" alt="manferd"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/10.png')}}" alt="mysellbay"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/11.png')}}" alt="netsys"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/12.png')}}" alt="perkwill holdings"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/13.png')}}" alt="pure world"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/14.png')}}" alt="ran aswenna"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/15.png')}}" alt="royal ally"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/16.png')}}" alt="starluxe"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/17.png')}}" alt="uk engineering"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/18.png')}}" alt="vindoba"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/19.png')}}" alt="wella professionals"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/20.png')}}" alt="xizi"></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#!"><img src="{{asset('assets/images/clients/21.png')}}" alt="vindoba"></a></figure></li>              
            </ul>
        </div>
    </div>
</section>
<!--End Clients Section-->

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