@php
    $isDashboard = url()->current() == route('dashboard');
    $isForm = url()->current() == route('forms');
    $isFormLayout = url()->current() == route('forms.layout');
    $isTable = url()->current() == route('tables');
    $isError = url()->current() == route('errors');

    $isFormTable = $isForm || $isTable || $isFormLayout;
@endphp

<aside class="sidebar">
    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <img src="assets/images/logo-icon.png" class="sidebar-logo" alt="logo">

        <h4 class="sidebar-title">SysName</h4>

        <button class="sidebar-toggle">
            <i class="bi bi-list"></i>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="sidebar-nav">
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('dashboard') }}" class="menu-link {{ $isDashboard ? 'active' : '' }}">
                    <span class="menu-icon"><i class="fa-solid fa-house"></i></span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="menu-group {{ $isFormTable ? 'open' : '' }}">
                <button class="menu-parent has-arrow">
                    <span class="menu-icon"><i class="fa-solid fa-file"></i></span>
                    <span class="menu-title">Forms & Tables</span>
                </button>
                <ul class="menu-children">
                    <li><a href="{{ route('forms') }}" class="{{ $isForm ? 'active' : '' }}">Form</a></li>
                    <li><a href="{{ route('forms.layout') }}" class="{{ $isFormLayout ? 'active' : '' }}">Form Layouts</a></li>
                    <li><a href="{{ route('tables') }}" class="{{ $isTable ? 'active' : '' }}">Data Table</a></li>
                </ul>
            </li>

            <li class="menu-label">Group Tab Name</li>

            <li>
                <a href="{{ route('errors') }}" class="menu-link {{ $isError ? 'active' : '' }}">
                    <span class="menu-icon"><i class="fa-solid fa-triangle-exclamation"></i></span>
                    <span class="menu-title">Page 404</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
