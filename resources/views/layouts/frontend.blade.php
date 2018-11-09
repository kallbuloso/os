<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--<![endif]-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.front.head')  
</head>
<body>
    <div id="page-container" class="header-navbar-fixed header-navbar-transparent">
            <!-- Header -->
            @include('layouts.front.header')
            <!-- END Header -->
            
            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero Content -->
                @include('layouts.front.hero')
                <!-- END Hero Content -->

                @include('layouts.front.content.app')
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            @include('layouts.front.footer')
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        @include('layouts.front.scripts')
    </div>
</body>
</html>
