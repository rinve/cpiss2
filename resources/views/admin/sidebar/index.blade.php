<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('../website/images/logo.png') }}" alt="CPISS" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                @include('admin.menu.index')
            </ul>
        </nav>
    </div>
</aside>
