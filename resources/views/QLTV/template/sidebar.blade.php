<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin-template')}}/dist/img/tải xuống.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Quản Lý Thư Viện</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #476375;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin-template')}}/dist/img/hauuu.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Trương Công Hậu</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        {{----------------------- QUẢN LÝ ĐỘC GIẢ -----------------------------------}}

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
            <a href="{{route('danh-sach-doc-gia')}}" class="nav-link active">
                <i class="nav-icon fas fa-th "></i>
                <p>
                 Quản Lý Độc Giả

                </p>
              </a>
            </li>


             {{---------------------------------- QUẢN LÝ SÁCH ---------------------}}

          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
          <a href="{{ route('sach')}}" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Quản Lý Sách
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
          </li>
             {{---------------------------------- QUẢN LÝ LOẠI SÁCH ---------------------}}

          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
          <a href="{{route('loai-sach')}}" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Quản Lý Loại Sách
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
          </li>


          {{----------------------- QUẢN LÝ MƯỢN TRẢ ---------------------}}
          {{-- <li class="nav-item has-treeview menu-open">
          <a href="{{route('muon-tra')}}" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Quản Lý Mượn

              </p>
            </a>
          </li> --}}
          <li class="nav-item has-treeview menu-open">
          <a href="{{route('quan-ly-tra-sach')}}" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Quản Lý Trả
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
          </li>

          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
