<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themewagon.github.io/corona-free-dark-bootstrap-admin-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 09:27:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    @include('admin.head')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidenav')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          @yield('content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('/assets/js/misc.js')}}"></script>
    <script src="{{asset('/assets/js/settings.js')}}"></script>
    <script src="{{asset('/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>

<!-- Mirrored from themewagon.github.io/corona-free-dark-bootstrap-admin-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 09:27:45 GMT -->
</html>