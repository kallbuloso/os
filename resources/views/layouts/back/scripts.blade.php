
    <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
    <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/jquery.scrollLock.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/js.cookie.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/base_ui_activity.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Page Plugins -->
    <script src="{{ asset('assets/js/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs/Chart.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('assets/js/pages/base_pages_dashboard.js') }}"></script>
    <script>
        jQuery(function () {
            // Init page helpers (Slick Slider plugin)
            App.initHelpers('slick');
        });
    </script>
    @stack('scripts')
