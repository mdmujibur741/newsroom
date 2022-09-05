   <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('master')}}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('master')}}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{asset('master')}}/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{asset('master')}}/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="{{asset('master')}}/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{asset('master')}}/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    {{-- <script src="{{asset('master')}}/js/off-canvas.js"></script> --}}
    {{-- <script src="{{asset('master')}}/js/hoverable-collapse.js"></script> --}}
    <script src="{{asset('master')}}/js/misc.js"></script>
    <script src="{{asset('master')}}/js/settings.js"></script>
    <script src="{{asset('master')}}/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('master')}}/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    {{-- Script  --}}
    <script src="{{asset('master')}}/plugin/toastr/toastr.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- bootstrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      @if (Session::has('success'))
          toastr.success("{{ Session::get('success') }}");
      @endif
  </script>

  {{-- fotawesome js --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  @yield('script')


  </body>
</html>