<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--<![endif]-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.back.head')
</head>
<body>
    <div id="page-loader"></div>
    <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
        <!-- Side Overlay-->
        @include('layouts.back.aside')
        <!-- END Side Overlay -->
                    
        <!-- Sidebar -->
        @include('layouts.back.sidebar')
        <!-- END Sidebar -->
        
        <!-- Header -->
        @include('layouts.back.header')
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Header -->
            <div class="content bg-image overflow-hidden" style="background-image: url('@yield('pageBgImage')');">
                <div class="push-10-t push-15">
                    <h1 class="h1 text-white animated zoomInUp">@yield('pageTitle', 'Dashboard')</h1>
                    <h2 class="h5 text-white-op animated zoomInDown">@yield('subTitlePage', 'Administrator')</h2>
                </div>
            </div>
            <!-- END Page Header -->

            @yield('content')
            
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        @include('layouts.back.footer')
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->
    
    @include('layouts.back.scripts')
    
</body>
</html>