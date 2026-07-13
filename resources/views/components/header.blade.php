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
                                <li class="{{ request()->routeIs('quick_project_check.*') ? 'current' : '' }}">
                                    <a href="{{route('quick_project_check.create')}}">Quick Check</a>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <!-- Outer Box-->
                    <div class="outer-box">
                        <!--Search Box-->                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--End Main Header -->

