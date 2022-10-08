<aside class="main-sidebar sidebar-dark-primary elevation-4 bg">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="{{route('dashboard')}}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
        
            </p>
          </a>
        
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link {{ request()->is('admin/post') || request()->is('admin/post/create') ? 'active' : '' }}">
            <i class="fa-solid fa-signs-post nav-icon"></i>
            <p>
           Post
              <i class="fas fa-angle-left right"></i>
            
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('post.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Create</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('post.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Index</p>
              </a>
            </li>
           
       
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link {{ request()->is('admin/category') || request()->is('admin/category/create') ? 'active' : '' }}">
            <i class="nav-icon fas fa-copy"></i>
            <p>
             Category
              <i class="fas fa-angle-left right"></i>
            
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('category.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('category.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Category Index</p>
              </a>
            </li>
           
       
          </ul>
        </li>
      


        <li class="nav-item">
          <a href="#" class="nav-link {{ request()->is('admin/user') || request()->is('admin/user/create') ? 'active' : '' }}">
            <i class="nav-icon fa-solid fa-users"></i>
            <p>
          User
              <i class="fas fa-angle-left right"></i>
            
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('user.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('user.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User Index</p>
              </a>
            </li>
           
       
          </ul>
        </li>


        <li class="nav-item">
          <a href="#" class="nav-link {{ request()->is('admin/tag') || request()->is('admin/tag/create') ? 'active' : '' }}">
            <i class="nav-icon fa-solid fa-tags"></i>
            <p>
            Tag
              <i class="fas fa-angle-left right"></i>
           
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('tag.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Tag</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('tag.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tag Index</p>
              </a>
            </li>
           
       
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{route('setting.index')}}" class="nav-link {{ request()->is('admin/setting') ? 'active' : '' }}">
            <i class="nav-icon fa-solid fa-gears"></i>
            <p>
          Setting
             
            </p>
          </a>
        </li>

        
        <li class="nav-item">
          <a href="{{route('contact.index')}}" class="nav-link {{ request()->is('admin/contact') ? 'active' : '' }}">
            <i class="nav-icon fa-solid fa-envelope-open-text"></i>
            <p>
         Contact
             
            </p>
          </a>
        </li>

        <li class="nav-item">
         
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
           <button type="submit" class="btn btn-none text-light ps-0 ms-0"> <i class="nav-icon fa-solid fa-right-from-bracket"></i> Logout</button>
        </form>

        </li>
     
     
  
       
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

  