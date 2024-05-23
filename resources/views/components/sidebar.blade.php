<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin-Online-Shop</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('users') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link"><i class="fas fa-user"></i><span>Users</span></a>
            </li>
            <li class="{{ Request::is('products') ? 'active' : '' }}">
                <a href="{{ route('products.index') }}" class="nav-link"><i
                        class="fas fa-product-hunt"></i><span>Products</span></a>

            </li>
            <li class="{{ Request::is('categories') ? 'active' : '' }}">
                <a href="{{ route('categories.index') }}" class="nav-link"><i
                        class="fas fa-layer-group"></i><span>Categories</span></a>
            </li>



    </aside>
</div>
