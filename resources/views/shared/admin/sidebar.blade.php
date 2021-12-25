<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('public/admin_asset')}}/index3.html" class="brand-link">
      <img src="{{asset('public/admin_asset')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/admin_asset')}}/dist/img/2.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Sale Smart</a>
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
               <li class="nav-header">Dashboard</li>

               <li class="nav-item menu-is-opening menu-open">
                <a href="" class="nav-link">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                  <p>
                    Category
                    <i class="right fas fa-angle-right"></i>
                   {{--  <i class="fa-solid fa-angle-right"></i> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: block; height: 41.6px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                  <li class="nav-item">
                    <a href="{{ action('Admin\Category\Categorycontroller@index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Category</p>
                    </a>
                  </li>


                </ul>

                <ul class="nav nav-treeview" style="display: block; height: 41.6px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                    <li class="nav-item">
                      <a href="{{ action('Admin\subcategory\subcategoryController@index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sub Category</p>
                      </a>
                    </li>


                  </ul>
              </li>

              <li class="nav-item">
                <a href="{{action('Admin\Product\ProductController@index')}} " class="nav-link">
                    <i class="fas fa-store"></i>
                <p>
                    Product
                </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-list-ul"></i>
                <p>
               Order
                </p>
                </a>
           </li>

           <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-shopping-cart"></i>
            <p>
            Cart
            </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ action('Admin\reviews\ReviewController@index') }}" class="nav-link">
                <i class="fas fa-comments"></i>
            <p>
            Reviews
            </p>
            </a>
       </li>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
