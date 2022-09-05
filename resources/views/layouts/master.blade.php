

@include('layouts.partial.html_head')


    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       @include('layouts.partial.sidenav')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
         @include('layouts.partial.topnav')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper" style="background: #408EC4 !important">
            
            
                @yield('content')

             
          </div>
          <!-- content-wrapper ends -->
        
        
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('sweetalert::alert')
    @include('layouts.partial.script')