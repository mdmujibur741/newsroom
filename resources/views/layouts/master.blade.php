@include('layouts.partial.html_head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.partial.topnav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('layouts.partial.sidenav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
               
        @yield('content')
        
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  
</div>
<!-- ./wrapper -->
@include('layouts.partial.script')
