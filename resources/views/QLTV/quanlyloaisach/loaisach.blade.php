@extends('QLTV.template.master')
@section('title')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-12">
        <h1 class="mb-1 mt-3 text-dark text-center ">QUẢN LÝ LOẠI SÁCH</h1>
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
    <label  style="margin-left:50px "></label>
         <button type="button" class="btn btn-primary btn-lg active" data-toggle="modal" data-target="#exampleModal2">Thêm Loại Sách</button>
    <div class="row mb-2">
        <div class="col-12">
         <h4 class="text-center">Danh sách loại sách trong thư viện</h4>
        <form action="{{route('tim-kiem')}}" method="GET">
                    @csrf
                     <div class="form-group" style="margin-top: 20px">
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
                 @foreach ($danhSachLoai as $item)
                 <tr>
                 <th scope="row">{{$i++}}</th>
                    <td>{{$item->ls_id}}</td>
                    <td>{{$item->ls_ten}}</td>


                     <td>
                     <a href="{{route('sua-loai-sach',['id'=>$item->ls_id])}}"class="btn btn-success">Sửa</a>
                     <a href="{{route('xoa-loai-sach',['id'=>$item->ls_id])}}"class="btn btn-danger" onclick="return xoa()">Xóa</a>

                     </td>
                   </tr>
                 @endforeach

             </tbody>

             @if (Session::has('alert-themloaisach'))
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
            @endif

            @if (Session::has('alert-sualoaisach'))
            <p style="color: blue" class="text-center">
            {{Session::get('alert-sualoaisach')}}
            @endif
            @if (Session::has('alert-suathatbailoaisach'))
            <p style="color: rgb(255, 0, 13)" class="text-center">
            {{Session::get('alert-suathatbailoaisach')}}
            @endif
           </table>
        </div>
        <div class="col-3">

        </div>
    </div>
</div>
<script>
    function xoa(){
        const a = confirm("Bạn có muốn xóa không?");
        if(a == true){
            return true;
        }return false;
    }
</script>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form action="{{route('xu-ly-them-loai')}}" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">QUẢN LÝ THƯ VIỆN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

                @csrf
                    <div class="form-group">
                        <h4 class="text-center">Thêm loại</h4>
                        <label style="margin-top: 22px">Tên loại</label>
                        <input class="form-control mr-sm-2" name="tenloaisach" type="search" placeholder="Nhập tên loại . . ." aria-label="Search">
                    </div>

                    {{-- <button type="submit" class="btn btn-primary">Thêm</button> --}}


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
      </div>
    </form>
    </div>
  </div>
@endsection
