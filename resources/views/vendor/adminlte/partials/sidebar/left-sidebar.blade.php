<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if (request()->is('dokter*'))
            <li class="nav-item">
                <a href="/dokter/periksa" class="nav-link {{ request()->is('dokter/periksa') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-stethoscope"></i>
                    <p>Periksa</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/dokter/obat" class="nav-link {{ request()->is('dokter/obat') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-pills"></i>
                    <p>Obat</p>
                </a>
            </li>
        @else
            @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
        @endif
    </ul>

</aside>