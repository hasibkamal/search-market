<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ url('/assets/backend/img/upload.png') }}" alt="{{ env('APP_NAME','Market Search') }}" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ env('APP_NAME','Market Search') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview {{ (request()->is(['admin/dashboard*','admin/markets*','admin/shops*','admin/appointments*','admin/contact-us*','admin/users*'])) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is(['admin/dashboard*','admin/markets*','admin/shops*','admin/appointments*','admin/contact-us*','admin/users*'])) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>Administration<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard.index') }}" class="nav-link {{ (request()->is('admin/dashboard*') ? 'active' : '') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.markets.index') }}" class="nav-link {{ (request()->is('admin/markets*') ? 'active' : '') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Markets</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.shops.index') }}" class="nav-link {{ (request()->is('admin/shops*') ? 'active' : '') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Shops</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.contact-us.index') }}" class="nav-link {{ (request()->is('admin/contact-us*') ? 'active' : '') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact Us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}" class="nav-link {{ (request()->is('admin/users*') ? 'active' : '') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
