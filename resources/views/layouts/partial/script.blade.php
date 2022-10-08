
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('master/asset/plugins/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('master/asset/plugins/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('master/asset/js/adminlte.js')}}"></script>
<!-- fontAwesome -->
<script src="{{asset('master/asset/plugins/fontawesome.min.js')}}"></script>
 {{-- Script  --}}
 <script src="{{asset('master/asset/plugins/toastr/toastr.min.js')}}"></script>
 <script>
  @if (Session::has('success'))
      toastr.success("{{ Session::get('success') }}");
  @endif
</script>
@yield('script')


</body>
</html>