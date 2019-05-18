<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <h1>Great Meal</h1>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub{{ Request::is('admin/dashboard*') ? ' active' : '' }}">
                    <a class="js-arrow" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="{{ Request::is('admin/slider*') ? 'active' : '' }}">
                    <a href="{{ route('slider.index') }}">
                        <i class="fas fa-play-circle"></i>Sliders</a>
                </li>
                <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                    <a href="{{ route('category.index') }}">
                        <i class="fas fa-th-list"></i>Categories</a>
                </li>
                <li class="{{ Request::is('admin/item*') ? 'active' : '' }}">
                    <a href="{{ route('item.index') }}">
                        <i class="fas fa-th"></i>Items</a>
                </li>
                <li class="{{ Request::is('admin/reservation*') ? 'active' : '' }}">
                    <a href="{{ route('reservation.index') }}">
                        <i class="fa fa-check-square"></i>Reservations</a>
                </li>
                <li class="{{ Request::is('admin/contact*') ? 'active' : '' }}">
                    <a href="{{ route('contact.index') }}">
                        <i class="fa fa-commenting"></i>Contact Message</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
