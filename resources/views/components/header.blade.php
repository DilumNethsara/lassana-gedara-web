<style>
.main-header .auto-container {
    max-width: 1350px !important; 
}</style>
<!-- Main Header-->
<header class="main-header header-style-one">
    <div class="auto-container">
        <div class="header-lower">
            <div class="clearfix main-box">
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('home') }}"><img src="{{asset('assets/images/lgLogo.png')}}" alt="Lassana Gedara Logo" title=""></a></div>
                </div>

                <div class="clearfix nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md ">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>

                        <div class="clearfix collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="clearfix navigation">
                                <li class="{{ request()->routeIs('home') ? 'current' : '' }}">
                                    <a href="{{route('home')}}">Home</a>                                    
                                </li>
                                
                                <li class="{{ request()->routeIs('about') ? 'current' : '' }}">
                                    <a href="{{route('about')}}">About</a>                                    
                                </li>
                                
                                <li class="{{ request()->is('services') || request()->is('services/*') ? 'current' : '' }}">
                                    <a href="{{route('services')}}">Services</a>                                    
                                </li>

                                {{-- <li class="{{ request()->routeIs('projectsX') ? 'current' : '' }}">
                                    <a href="{{route('projectsX')}}">Projects</a>                                    
                                </li> --}}

                               <li class="dropdown {{ request()->routeIs('projects') ? 'current' : '' }}">
                                    <div class="dropdown-toggle-wrapper">
                                        <a href="{{ route('projects') }}">Projects</a>
                                    </div>
                                    <ul class="dropdown-menu" id="projectsDropdown">
                                        <li><a href="{{ route('Domestic') }}" class="{{ request()->routeIs('Domestic') ? 'active' : '' }}">Domestic Houses</a></li>
                                        <li><a href="{{ route('Commercial') }}" class="{{ request()->routeIs('Commercial') ? 'active' : '' }}">Commercial Buildings</a></li>
                                        <li><a href="{{ route('Interior') }}" class="{{ request()->routeIs('Interior') ? 'active' : '' }}">Interior Designing & Fabrication</a></li>
                                        <li><a href="{{ route('Industrial') }}" class="{{ request()->routeIs('Industrial') ? 'active' : '' }}">Industrial Buildings</a></li>
                                        
                                        <li><a href="{{ route('Coatings') }}" class="{{ request()->routeIs('Coatings') ? 'active' : '' }}">Marine and High Performance Protective Coatings</a></li>
                                    </ul>
                                </li> 

                                </li>
                              <li class="{{ request()->routeIs(['Architectural', 'architectural_1', 'architectural_2']) ? 'current' : '' }}">
                              <a href="{{ route('Architectural') }}">
                              Architectural Drawing
                              </a>
                            </li>
                                {{-- <li class="dropdown {{ request()->is('project') || request()->is('our-team') ? 'current' : '' }}">
    <!-- Make the parent link clickable by adding a valid route -->
    <a href="{{ route('projectsX') }}" class="dropdown-toggle">Projects</a>
    <ul class="dropdown-menu">
        <li><a href="{{ route('Domestic') }}">Domestic Houses</a></li>
        <li><a href="{{ route('Commercial') }}">Commercial Buildings</a></li>
        <li><a href="{{ route('Interior') }}">Interior Designing & Fabrication</a></li>
        <li><a href="{{ route('Industrial') }}">Industrial Buildings</a></li>
        <li><a href="{{ route('Coatings') }}">Marine and High Performance Protective Coatings</a></li>
    </ul>
</li> --}}
                                
                              {{-- <li class="dropdown">
                                    <a href="{{ route('projectsX') }}" class="{{ Request::routeIs('projectsX') ? 'active' : '' }}">Projects</a>
                                   <ul class="dropdown-menu">
                                       <li><a href="{{ route('projectsX') }}" class="{{ request()->routeIs('Domestic') ? 'active' : '' }}">Domestic Houses</a></li>
                                       <li><a href="{{ route('Commercial') }}" class="{{ request()->routeIs('Commercial') ? 'active' : '' }}">Commercial Buildings</a></li>
                                       <li><a href="{{ route('Interior') }}" class="{{ request()->routeIs('Interior') ? 'active' : '' }}">Interior Designing & Fabrication</a></li>
                                       <li><a href="{{ route('Industrial') }}" class="{{ request()->routeIs('Industrial') ? 'active' : '' }}">Industrial Buildings</a></li>
                                       <li><a href="{{ route('Architectural') }}" class="{{ request()->routeIs('Architectural') ? 'active' : '' }}">Architectural Drawing</a></li>
                                       <li><a href="{{ route('Coatings') }}" class="{{ request()->routeIs('Coatings') ? 'active' : '' }}">Marine and High Performance Protective Coatings</a></li>
                                   </ul>
                               </li>  --}}
                               
                                                      
                                {{-- <li class="{{ request()->routeIs('blog') ? 'current' : '' }}"><a href="{{route('blog')}}">Blog</a>                                    
                                </li>                                 --}}
                                <li class="{{ request()->routeIs('contact') ? 'current' : '' }}">
                                    <a href="{{route('contact')}}">Contact</a>
                                </li>
                                <li class="dropdown {{ request()->is('faq') || request()->is('our-team') ? 'current' : '' }}"><a href="#">Team & FAQ</a>                                                 
                                    <ul>                                                    
                                        <li><a href="{{route('faq')}}">FAQ's</a></li>
                                        <li><a href="{{route('our_team')}}">Our Team</a></li>                                                    
                                    </ul>                                
                                </li>
                                <li class="{{ request()->is('quote') || request()->is('quote/*') ? 'current' : '' }}">
                                    <a href="{{route('mainQuote')}}">Get Quote</a>
                                </li>
                                <!--<li class="{{ request()->routeIs('quick_project_check.*') ? 'current' : '' }}">-->
                                <!--    <a href="{{route('quick_project_check.create')}}">Quick Check</a>-->
                                <!--</li>-->
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <!-- Outer Box-->
                    <div class="outer-box">
                        <!--Search Box-->                        
                    </div>
                </div>

                <div class="header-quick-check">
                    <a
                        href="{{ route('quick_project_check.create') }}"
                        class="header-quick-check-btn {{ request()->routeIs('quick_project_check.*') ? 'is-active' : '' }}"
                    >
                        <span class="header-quick-check-icon">✓</span>
                        <span>Quick Check</span>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</header>
<style>

/* Header foundation */
.main-header .header-lower .main-box {
    position: relative;
    min-height: 100px;
}

/* Quick Check positioning */
.header-quick-check {
    position: absolute;
    right: 0;
    z-index: 50;
}

/* Quick Check button */
.header-quick-check-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-width: 145px;
    height: 48px;
    padding: 0 19px;
    color: #fff !important;
    background: linear-gradient(135deg, #ad7a25, #d2a650);
    border: 1px solid #ad7a25;
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(173,122,37,.24);
    font-size: 13px;
    font-weight: 700;
    line-height: 1;
    text-decoration: none !important;
    white-space: nowrap;
    transition:
        transform .2s ease,
        background .2s ease,
        border-color .2s ease,
        box-shadow .2s ease;
}

.header-quick-check-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 21px;
    width: 21px;
    height: 21px;
    color: #ad7a25;
    background: #fff;
    border-radius: 50%;
    font-size: 12px;
    font-weight: 900;
}

.header-quick-check-btn:hover {
    color: #fff !important;
    background: linear-gradient(135deg, #263642, #3c505e);
    border-color: #263642;
    box-shadow: 0 10px 24px rgba(38,54,66,.25);
    transform: translateY(-2px);
}

.header-quick-check-btn.is-active {
    color: #fff !important;
    background: linear-gradient(135deg, #147c4c, #20a466);
    border-color: #147c4c;
    box-shadow: 0 8px 20px rgba(20,124,76,.24);
}

.header-quick-check-btn.is-active .header-quick-check-icon {
    color: #147c4c;
}

/* Large desktop */
@media only screen and (min-width: 1200px) {
    .main-header .nav-outer {
        margin-right: 165px;
    }
}

/* Small desktop */
@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .main-header .nav-outer {
        margin-right: 130px;
    }

    .header-quick-check-btn {
        min-width: 118px;
        height: 44px;
        padding: 0 13px;
        font-size: 12px;
    }

    .header-quick-check-icon {
        display: none;
    }
}

/* Tablet */
@media only screen and (min-width: 768px) and (max-width: 991px) {
    .main-header .nav-outer {
        margin-right: 118px;
    }

    .header-quick-check-btn {
        min-width: 108px;
        height: 42px;
        padding: 0 12px;
        font-size: 11px;
    }

    .header-quick-check-icon {
        display: none;
    }
}

/* Mobile */
@media only screen and (max-width: 767px) {

    .main-header .header-lower .main-box {
        min-height: 82px;
    }

    .main-header .nav-outer {
        margin-right: 0;
    }

    /*
     * Right space is reserved for the mobile menu button.
     * Quick Check stays between the logo and menu toggle.
     */
    .header-quick-check {
        right: 54px;
    }

    .header-quick-check-btn {
        min-width: 108px;
        height: 40px;
        padding: 0 12px;
        gap: 6px;
        border-radius: 7px;
        font-size: 11px;
    }

    .header-quick-check-icon {
        flex-basis: 18px;
        width: 18px;
        height: 18px;
        font-size: 10px;
    }
}

/* Small mobile */
@media only screen and (max-width: 575px) {
    .main-header .logo-box .logo img {
        width: auto;
        max-width: 145px;
        height: auto;
    }

    .header-quick-check {
        right: 49px;
    }

    .header-quick-check-btn {
        min-width: 94px;
        height: 38px;
        padding: 0 10px;
        font-size: 10px;
    }

    .header-quick-check-icon {
        display: none;
    }
}

/* Very small mobile */
@media only screen and (max-width: 390px) {
    .main-header .logo-box .logo img {
        max-width: 125px;
    }

    .header-quick-check {
        right: 44px;
    }

    .header-quick-check-btn {
        min-width: 82px;
        height: 36px;
        padding: 0 8px;
        font-size: 9px;
    }
}

/* Extra-small screens */
@media only screen and (max-width: 340px) {
    .main-header .logo-box .logo img {
        max-width: 110px;
    }

    .header-quick-check {
        right: 41px;
    }

    .header-quick-check-btn {
        min-width: 72px;
        padding: 0 6px;
    }

    .header-quick-check-text {
        font-size: 0;
    }

    .header-quick-check-text::after {
        content: "Check";
        font-size: 9px;
    }
}




/* Keep Quick Check inside the top logo row on mobile */
@media only screen and (max-width: 767px) {
    .header-quick-check {
        position: absolute !important;
        top: 13px !important;
        right: 55px !important;
        bottom: auto !important;
        transform: none !important;
        z-index: 9999 !important;
    }

    .header-quick-check-btn {
        min-width: 105px;
        height: 40px;
        padding: 0 12px;
        font-size: 11px;
    }
}

@media only screen and (max-width: 575px) {
    .header-quick-check {
        top: 14px !important;
        right: 47px !important;
    }

    .header-quick-check-btn {
        min-width: 92px;
        height: 37px;
        padding: 0 10px;
        font-size: 10px;
    }

    .header-quick-check-icon {
        display: none;
    }
}

@media only screen and (max-width: 390px) {
    .header-quick-check {
        top: 14px !important;
        right: 43px !important;
    }

    .header-quick-check-btn {
        min-width: 78px;
        height: 35px;
        padding: 0 7px;
        font-size: 9px;
    }
}

@media only screen and (min-width: 768px) {
    .header-quick-check {
        top: 25%;
        transform: translateY(-50%);
    }
}





/* Reserve desktop space for button */
@media only screen and (min-width: 1200px) {
    .main-header .nav-outer {
        margin-right: 165px;
    }
}

@media only screen and (min-width: 768px) and (max-width: 1199px) {
    .main-header .nav-outer {
        margin-right: 125px;
    }

    .header-quick-check-btn {
        min-width: 112px;
        height: 42px;
        padding: 0 12px;
        font-size: 11px;
    }

    .header-quick-check-icon {
        display: none;
    }
}

/* Mobile header row */
@media only screen and (max-width: 767px) {
    .main-header .header-lower .main-box {
        position: relative;
        min-height: 66px;
    }

    /* Logo row */
    .main-header .logo-box {
        display: flex !important;
        align-items: center !important;
        min-height: 66px;
        padding: 0 !important;
    }

    .main-header .logo-box .logo {
        display: flex;
        align-items: center;
    }

    .main-header .logo-box .logo img {
        display: block;
        width: auto;
        max-width: 140px;
        max-height: 54px;
    }

    /* Quick Check: centre of the same 66px row */
    .header-quick-check {
        position: absolute !important;
        top: 33px !important;
        right: 52px !important;
        bottom: auto !important;
        transform: translateY(-50%) !important;
        z-index: 9999 !important;
    }

    .header-quick-check-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 102px;
        height: 38px;
        padding: 0 11px;
        gap: 6px;
        border-radius: 7px;
        font-size: 10px;
    }

    .header-quick-check-icon {
        width: 17px;
        height: 17px;
        flex: 0 0 17px;
        font-size: 9px;
    }

    /* Hamburger: centre of the same 66px row */
    .main-header .main-menu .navbar-header {
        position: absolute !important;
        top: 0 !important;
        right: 0 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: flex-end !important;
        width: 42px;
        height: 66px !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    .main-header .main-menu .navbar-toggler {
        position: static !important;
        top: auto !important;
        right: auto !important;
        margin: 0 !important;
        padding: 0 !important;
        transform: none !important;
    }

    .main-header .nav-outer {
        margin-right: 0 !important;
    }
}

/* Small mobile */
@media only screen and (max-width: 575px) {
    .main-header .logo-box .logo img {
        max-width: 125px;
        max-height: 50px;
    }

    .header-quick-check {
        right: 47px !important;
    }

    .header-quick-check-btn {
        min-width: 88px;
        height: 36px;
        padding: 0 9px;
        font-size: 9px;
    }

    .header-quick-check-icon {
        display: none;
    }
}

/* Very small mobile */
@media only screen and (max-width: 390px) {
    .main-header .logo-box .logo img {
        max-width: 110px;
    }

    .header-quick-check {
        right: 44px !important;
    }

    .header-quick-check-btn {
        min-width: 76px;
        height: 34px;
        padding: 0 7px;
        font-size: 9px;
    }
}

/* Extremely narrow devices */
@media only screen and (max-width: 340px) {
    .main-header .logo-box .logo img {
        max-width: 100px;
    }

    .header-quick-check {
        right: 41px !important;
    }

    .header-quick-check-btn {
        min-width: 65px;
        padding: 0 6px;
    }

    .header-quick-check-text {
        font-size: 0;
    }

    .header-quick-check-text::after {
        content: "Check";
        font-size: 9px;
    }
}
</style>
<!--End Main Header -->

