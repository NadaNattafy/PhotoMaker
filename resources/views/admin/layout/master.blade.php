<!DOCTYPE html>
<html lang="en">

    @include('admin.layout.header')

    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('admin.layout.topbar')
            <!-- end Topbar -->

            @include('admin.layout.sidebar')

            <div class="clearfix"></div>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    @yield('content')
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>


        <!-- END wrapper -->

        @include('admin.layout.footer')

        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('_dashboard/assets/js/vendor.min.js')}}"></script>

        <!-- knob plugin -->
        <script src="{{asset('_dashboard/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{asset('_dashboard/assets/libs/morris-js/morris.min.js')}}"></script>
        <script src="{{asset('_dashboard/assets/libs/raphael/raphael.min.js')}}"></script>

        <!-- Dashboard init js-->
        <script src="{{asset('_dashboard/assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('_dashboard/assets/js/app.min.js')}}"></script>

  <!-- App js -->

@stack('script')

    </body>
</html>

