<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light">Lassana Gedara Construction</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="{{ route('get_profile', ['user' => auth()->user()->id]) }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>            
                </li>

                <!-- Contact Inquiry -->
                <li class="nav-item">
                    <a href="{{ route('contact_requests') }}" class="nav-link {{ request()->routeIs('contact_requests') ? 'active' : '' }}">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>Contact Inquiry</p>
                    </a>         
                </li>

                <!-- Quotation Inquiry -->
                <li class="nav-item {{ request()->is('quote-requests*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('quote-requests*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Quotation Inquiry
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('quote_requests', ['service' => 'Domestic-House']) }}" 
                               class="nav-link {{ request()->is('quote-requests/Domestic-House*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Domestic Houses</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('quote_requests', ['service' => 'Commercial-Building']) }}" 
                               class="nav-link {{ request()->is('quote-requests/Commercial-Building*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Commercial Building</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('quote_requests', ['service' => 'Interior-Designing-&-Fabrication']) }}" 
                               class="nav-link {{ request()->is('quote-requests/Interior-Designing-&-Fabrication*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Interior Designing & Fabrication</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('quote_requests', ['service' => 'Housing-Plan-Drawing']) }}" 
                               class="nav-link {{ request()->is('quote-requests/Housing-Plan-Drawing*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Housing Plan Drawing</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('quote_requests', ['service' => 'BOQ']) }}" 
                               class="nav-link {{ request()->is('quote-requests/BOQ*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>BOQ</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Add Quotation Inquiry -->
                <li class="nav-item">
                    <a href="{{ route('mainQuote') }}" class="nav-link {{ request()->routeIs('mainQuote') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Add Quotation Inquiry</p>
                    </a>            
                </li>

                <!-- User Register (Admin Only) -->
                @can('adminAccess', auth()->user())
                <li class="nav-item">
                    <a href="{{ route('get_register') }}" class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>User Register</p>
                    </a>            
                </li>
                @endcan

                <!-- User Logs (Admin Only) -->
                @can('adminAccess', auth()->user())
                <li class="nav-item">
                    <a href="{{ route('get_user_logs') }}" class="nav-link {{ request()->routeIs('get_user_logs*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>User Logs</p>
                    </a>            
                </li>
                @endcan

                <!-- Work Orders (Admin Only) -->
                @can('adminAccess', auth()->user())
                <li class="nav-item {{ request()->is('admin/work-orders*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/work-orders*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            Work Orders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.work-orders.internal.index') }}" 
                               class="nav-link {{ request()->routeIs('admin.work-orders.internal.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Internal Work Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.work-orders.freelance.index') }}" 
                               class="nav-link {{ request()->routeIs('admin.work-orders.freelance.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Freelance Work Orders</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan

                <!-- Profile -->
                <li class="nav-item">
                    <a href="{{ route('get_profile', ['user' => auth()->user()->id]) }}" class="nav-link {{ request()->routeIs('get_profile') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Profile</p>
                    </a>            
                </li>        

                <!-- Logout -->
                <li class="nav-item">
                    <a href="#" class="nav-link" id="logoutLink">
                        <i class="fas fa-sign-out-alt" style="padding-left: 5px;"></i>
                        <p style="padding-left: 10px;">Logout</p>
                    </a>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>      
        </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    document.getElementById('logoutLink').addEventListener('click', function(event) {
        event.preventDefault();  // Prevent default link behavior
        document.getElementById('logoutForm').submit();  // Submit the form
    });
</script>