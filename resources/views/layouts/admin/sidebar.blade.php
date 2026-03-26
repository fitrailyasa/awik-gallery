<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link border-bottom">
        <span class="brand-text text-white">Awik Gallery</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link text-white {{ Request::routeIs('admin.dashboard') ? 'aktif' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.product.index') }}"
                        class="nav-link text-white {{ Request::routeIs('admin.product.index') ? 'aktif' : '' }}">
                        <i class="nav-icon fas fa-database"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}"
                        class="nav-link text-white {{ Request::routeIs('admin.category.index') ? 'aktif' : '' }}">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>Category</p>
                    </a>
                </li>

                <!-- Logout -->
                <li class="nav-header text-white">Setting</li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                        @csrf
                    </form>
                    <a href="#" class="nav-link text-white"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
