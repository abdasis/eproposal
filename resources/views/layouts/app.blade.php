<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>SIRASTI APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistem management pengajuan proposal" name="description" />
    <meta content="Abd. Asis" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Plugins css -->
    <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap-material.min.css') }}" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="{{ asset('assets/css/app-material.min.css') }}" rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" type="text/css">


    <!-- icons -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    @stack('css')
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
</head>

<body
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar":{"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('includes.navbar')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('includes.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page" data-turbolinks-permanent>
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    {{ $slot }}

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            @include('includes.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    @livewireScripts
    <script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- App js-->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <x-livewire-alert::scripts />
    @stack('js')

</body>

</html>
