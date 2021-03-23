@extends('QLTV.template.master')
@section('title')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-12">
        <h1 class="mb-4 mt-3 text-dark text-center ">QUẢN LÝ LOẠI SÁCH</h1>
      </div><!-- /.col -->
      {{-- <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right"> --}}
          {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v1</li> --}}
        {{-- </ol> --}}
      {{-- </div><!-- /.col --> --}}
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->

@endsection


@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-9">

         <h4 class="text-center">Danh sách loại sách tìm kiếm theo tên</h4>
                 <form action="">
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
                 <th scope="col">ID</th>
                 <th scope="col">Tên Loại</th>
                 <th scope="col">Thao tác</th>

               </tr>
             </thead>
             <tbody>
                 @php
                     $i = 1
                 @endphp
                 @foreach ($loaiSachTimDuoc as $item)
                 <tr>
                 <th scope="row">{{$i++}}</th>
                    <td>{{$item->ls_id}}</td>
                    <td>{{$item->ls_ten}}</td>


                     <td>
                         <a href="#"class="btn btn-success">Sửa</a>
                     <a href="{{route('xoa-loai-sach',['id'=>$item->ls_id])}}"class="btn btn-danger">Xóa</a>

                     </td>
                   </tr>
                 @endforeach

             </tbody>

             {{-- @if (Session::has('alert-themloaisach'))
             <p style="color: rgb(0, 255, 0)" class="text-center">
             {{Session::get('alert-themloaisach')}}
              @endif
        @if (Session::has('alert-themloaitb'))
             <p style="color: rgb(255, 0, 0)" class="text-center">
             {{Session::get('alert-themloaitb')}}
              @endif

            @if (Session::has('alert-xoaloaisach'))
            <p style="color:rgb(0, 255, 0)" class="text-center">
            {{Session::get('alert-xoaloaisach')}}
            @endif --}}
           </table>
        </div>
        <div class="col-3">
        <form action="{{route('xu-ly-them-loai')}}" method="POST">
             @csrf
                 <div class="form-group">
                     <h4 class="text-center">Thêm loại</h4>
                     <label style="margin-top: 22px">Tên loại</label>
                     <input class="form-control mr-sm-2" name="tenloaisach" type="search" placeholder="Nhập tên loại . . ." aria-label="Search">
                 </div>

                 <button type="submit" class="btn btn-primary">Thêm</button>

           </form>
        </div>
    </div>
</div>
{{-- <script>
    function xoa(){
        const a = confirm("Bạn có muốn xóa không?");
        if(a == true){
            return true;
        }return false;
    }
</script> --}}
@endsection
