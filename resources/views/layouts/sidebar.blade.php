@include('layouts.menu')

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ asset('asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">   
    
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="{{ route('contact_list') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Contact
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="subcription" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Category
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('subcription') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add_subcription') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category </p>
                </a>
              </li>
              
               </ul>
          </li>
          <li class="nav-item">
            <a href="subcription" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Package
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('package_list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Package List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add_package') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Package </p>
                </a>
              </li>
             
             
             
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
            Destination
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
            <li class="nav-item">
                <a href="{{ route('destination_list') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Destination List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add_destination') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Destination </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
               Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog Leads</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog Tags</p>
                </a>
              </li>
            </ul>
          </li>
         
         
          
         
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
              Logout
              </p>
            </a>
          </li>
         
        
         
         
        
         
        
        
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>