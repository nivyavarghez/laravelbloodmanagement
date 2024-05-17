<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content here -->
</head>
<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="orange">
            @include('partials.sidebar')
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            @include('partials.navbar')
            <!-- End Navbar -->
            @yield('content')
            @include('partials.footer')
        </div>
    </div>
    <!-- Core JS Files -->
    <script src="{{ asset('public/assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/core/bootstrap.min.js') }}"></script>
    <!-- Plugins -->
    <script src="{{ asset('public/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('public/assets/js/plugins/chartjs.min.js') }}"></script>
    <!-- Notifications Plugin -->
    <script src="{{ asset('public/assets/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Now Ui Dashboard JS -->
    <script src="{{ asset('public/assets/js/now-ui-dashboard.js?v=1.0.1') }}"></script>
    <!-- Demo JS -->
    <script src="{{ asset('public/assets/demo/demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            demo.initDashboardPageCharts();
        });
    </script>
</body>
</html>
