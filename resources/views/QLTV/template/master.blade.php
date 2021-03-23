<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Quản Lý Thư Viện</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

@include('QLTV.template.css')



<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper"  >

  <!-- Navbar -->
  @include('QLTV.template.header')
  @include('QLTV.template.sidebar')
  <!-- /.navbar -->
  <div class="content-wrapper" style="background-color: rgb(198, 202, 240)">
    <!-- Content Header (Page header) -->
    <div class="content-header" >
        @yield('title')
      </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            @yield('content')
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
