{{-- @extends('QLTV.template.master')
@section('title')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-12">
        <h1 class="mb-4 mt-3 text-dark text-center ">QUẢN LÝ THƯ VIỆN</h1>
      </div>

    </div>
  </div>

@endsection


@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-12">

         <h4 class="text-center">Danh sách sách trong thư viện</h4>
                 <form action="#">
                    @csrf
                     <div class="form-group" style="margin-top: 30px">
                         <label for="formGroupExampleInput">Tìm kiếm</label>
                         <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tìm kiếm" name="tuKhoa">
                     </div>

                 </form>

         <table class="table">
             <thead>
               <tr>
                 <th scope="col">STT</th>
                 <th scope="col">Tên sách</th>
                 <th scope="col">Loại sách</th>
                 <th scope="col">Số lượng</th>
                 <th scope="col">Mô tả</th>
                 <th scope="col">Tác giả</th>
                 <th scope="col">Tình trạng</th>



               </tr>
             </thead>
             <tbody>
                @php
                $i = 1
            @endphp
            @foreach ($danhSach as $item)
            <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$item->s_ten}}</td>
            <td>{{$item->ls_ten}}</td>
               <td>{{$item->s_soluong}}</td>
               <td>{{$item->s_mota}}</td>
               <td>{{$item->s_tacgia}}</td>
               <td>{{$item->s_tinhtrang}}</td>


                     <td>


                     </td>
                   </tr>
                 @endforeach

             </tbody>

           </table>
        </div>

    </div>
</div>

@endsection --}}


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>QLTV</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

@include('QLTV.template.css')



<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->



{{------------------------------- HEADerrrrrrr ----------------}}
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar navbar-dark bg-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('danh-sach-doc-gia')}}" class="nav-link">TRANG CHỦ</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">LIÊN HỆ</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>

      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>

      </li>
      {{-- <li class="nav-item">
      <a href="{{route('xu-Ly-Dang-Xuat')}}"  ></a>
      <i class="fas fa-sign-out-alt"onclick="return logout()">Đăng xuất</i>
      </li> --}}
      <li class="nav-item">
        {{-- <a class="nav-link" href="{{route('xu-Ly-Dang-Xuat')}}" role="button"> --}}
        <a class="nav-link" href="{{route('nut-dang-nhap')}}" role="button">
          <i class="fas fa-user" onclick="return logout()">Đăng Nhập</i>
        </a>
      </li>
    </ul>
  </nav>
  {{-- ---------------------------------------------------------------------- --}}

{{-- ------------------SIDEBAR -------------------------------------}}

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin-template')}}/dist/img/tải xuống.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Quản Lý Thư Viện</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
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
          {{-- @foreach ($danhSachSach as $item)
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('lay-loai-sach',['idLoai'=>$item->ls_id])}}" class="nav-link active">
                <i class="nav-icon fas fa-th "></i>
                <p>
                    {{$item->ls_ten}}
                </p>
              </a>
            </li>
          @endforeach --}}

          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



{{-- ------------------------------------------------------------------------- --}}
  <!-- /.navbar -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        @yield('title')
      </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            {{-- @yield('content') --}}
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">

                     <h1 class="text-center">Danh sách các loại sách trong thư viện</h1>
                             <form action="{{route('doc-gia-xu-ly-tim-kiem')}}" method="GET">
                                @csrf
                                 <div class="form-group" style="margin-top: 30px">
                                     <label for="formGroupExampleInput">Tìm kiếm</label>
                                     <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tìm kiếm" name="tuKhoa">
                                 </div>

                             </form>

                     <table class="table">
                         <thead>
                           <tr>
                             <th scope="col">STT</th>
                             <th scope="col">Mã sách</th>
                             <th scope="col">Tên sách</th>
                             <th scope="col">Loại sách</th>
                             <th scope="col">Số lượng</th>
                             {{-- <th scope="col">Mô tả</th> --}}
                             <th scope="col">Tác giả</th>
                             {{-- <th scope="col">Tình trạng</th> --}}



                           </tr>
                         </thead>
                         <tbody>
                            @php
                            $i = 1
                        @endphp
                        @foreach ($danhSach as $item)
                        <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$item->s_masach}}</td>
                        <td>{{$item->s_ten}}</td>
                        <td>{{$item->ls_ten}}</td>
                        <td>{{$item->s_soluong}}</td>
                        {{-- <td>{{$item->s_mota}}</td> --}}
                        <td>{{$item->s_tacgia}}</td>
                        {{-- <td>{{$item->s_tinhtrang}}</td> --}}

                               </tr>
                             @endforeach

                         </tbody>

                       </table>
                    </div>

                </div>
            </div>

      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
  </div>

  @include('QLTV.template.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery -->


@include('QLTV.template.js')

</body>
</html>
