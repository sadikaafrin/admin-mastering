@php
    $systemSetting = App\Models\SystemSetting::first();

    function isActiveRoute($routeNames, $output = 'active')
    {
        if (in_array(Route::currentRouteName(), (array)$routeNames)) {
            return $output;
        }
        return null;
    }

    function areActiveRoutes($routeNames, $output = 'active')
    {
        if (in_array(Route::currentRouteName(), (array)$routeNames)) {
            return $output;
        }
        return null;
    }
@endphp


<div class="side-header">
    <a class="header-brand1" href="{{ route('dashboard') }}">
        @if (isset($systemSetting->logo) && !empty($systemSetting->logo))
            <img src="{{ asset($systemSetting->logo) }}" class="header-brand-img light-logo1" alt="logo">
        @else
            <img src="{{ asset('backend/images/brand/logo-3.png') }}" class="header-brand-img light-logo1" alt="logo">
        @endif
    </a><!-- LOGO -->
</div>



<div class="main-sidemenu">
    <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
            fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
        </svg>
    </div>
    <ul class="side-menu">

        <li class="slide {{ isActiveRoute(['dashboard']) }}">
            <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('dashboard') }}">
                <!-- SVG Icon -->
                <span class="side-menu__label">Dashboard</span>
            </a>
        </li>


        <li class="slide {{ isActiveRoute(['profile.setting', 'system.index', 'mail.setting']) }}">
            <a class="side-menu__item" data-bs-toggle="slide" href="">
                <!-- SVG Icon -->
                <span class="side-menu__label">Settings</span><i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">
                <li><a href="{{ route('profile.setting') }}" class="slide-item {{ isActiveRoute(['profile.setting']) }}">Profile Setting</a></li>
                <li><a href="{{ route('system.index') }}" class="slide-item {{ isActiveRoute(['system.index']) }}">System Settings</a></li>
                <li><a href="{{ route('mail.setting') }}" class="slide-item {{ isActiveRoute(['mail.setting']) }}">Mail Settings</a></li>
                <li><a href="{{ route('dynamic_page.index') }}" class="slide-item {{ isActiveRoute(['dynamic_page.index']) }}">Dynamic Page Settings</a></li>


            </ul>
        </li>


</div>
