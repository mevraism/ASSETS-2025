<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <img img src="https://i.ibb.co/99TL2Gf/asssets.jpg"
             alt="asssets"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Assets</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
    
</aside>

