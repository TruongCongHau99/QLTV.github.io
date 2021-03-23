@extends('QLTV.template.master')
@section('title')

<div class="container-fluid">

    <div class="row mb-2">
      <div class="col-12">
        <h1 class="mb-1 mt-1 text-dark text-center ">QUẢN LÝ SÁCH</h1>
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
         <button type="button" class="btn btn-info btn-lg active" data-toggle="modal" data-target="#exampleModal">Thêm Sách</button>
    <div class="row mb-2">
        <div class="col-12">

         <h4 class="text-center">Danh sách sách trong thư viện</h4>
                 <form action="{{route('xu-ly-tim-kiem')}}">
                    @csrf
                     <div class="form-group" style="margin-top: 30px">
                         <label for="formGroupExampleInput">Tìm kiếm</label>
                         <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tìm kiếm" name="tuKhoa">
                     </div>

                 </form>
                 {{-- @if (Session::has('alert-sua'))
                 <p style="color: blue" class="text-center">
                 {{Session::get('alert-sua')}}
                     @endif --}}
                 {{-- @if (Session::has('alert-suathatbai'))
                 <p style="color: rgb(255, 0, 13)" class="text-center">
                 {{Session::get('alert-suathatbai')}}
                     @endif --}}
                     @if (Session::has('alert-xoa'))
                     <p style="color: rgb(0, 255, 0)" class="text-center">
                     {{Session::get('alert-xoa')}}
                         @endif
                    {{-- @if (Session::has('alert'))
                         <p style="color: rgb(0, 255, 0)" class="text-center">
                         {{Session::get('alert')}}
                          @endif
                    @if (Session::has('alert-themthatbai'))
                         <p style="color: rgb(255, 0, 0)" class="text-center">
                         {{Session::get('alert-themthatbai')}}
                          @endif --}}
         <table class="table">
             <thead>
               <tr>
                 <th scope="col">STT</th>
                 <th scope="col">Mã Sách</th>
                 <th scope="col">Tên sách</th>
                 <th scope="col">Loại sách</th>
                 <th scope="col">Số lượng</th>
                 {{-- <th scope="col">Mô tả</th> --}}
                 {{-- <th scope="col">Tác giả</th> --}}
                 {{-- <th scope="col">Tình trạng</th> --}}
                 <th scope="col">Hình Ảnh</th>
                 <th scope="col">Thao tác</th>

               </tr>
             </thead>
             <tbody>
                 @php
                     $i = 1
                 @endphp
                 @foreach ($danhSachSach as $item)
                 <tr>
                 <th>{{$i++}}</th>
                 <td>{{$item->s_masach}}</td>
                 <td>{{$item->s_ten}}</td>
                 <td>{{$item->ls_ten}}</td>
                 <td>{{$item->s_soluong}}</td>
                 {{-- <td>{{$item->s_mota}}</td> --}}
                 {{-- <td>{{$item->s_tacgia}}</td> --}}
                 {{-- <td>{{$item->s_tinhtrang}}</td> --}}
                 <td>
                  @if($item->s_hinhanh == null)
                     Chưa có hình ảnh sản phẩm
                  @else
                <img src="{{ asset('hinhanhsach') }}/{{ $item->s_hinhanh }}" style="width:180px; height=200px">
                @endif
                </td>


                     <td>
                     <a href="{{route('sua-sach',['id'=>$item->s_id])}}"class="btn btn-success">Sửa</a>
                     <a href="{{route('xoa-sach',['id'=>$item->s_id])}}" class="btn btn-danger" onclick="return xoa()">Xóa</a>
                     <a href="{{route('chi-tiet-sach', ['id'=>$item->s_id])}}" class='btn btn-primary'>Chi tiết</a>
                     </td>
                   </tr>
                 @endforeach

             </tbody>

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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('xu-ly-them-sach')}}" method="POST" enctype="multipart/form-data">
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
                        <h4 class="text-center">Thêm Sách</h4>
                        <label style="margin-top: 22px">Tên sách</label>
                        <input class="form-control mr-sm-2" name="tenSach" type="search" placeholder="Nhập tên sách . . ." aria-label="Search">
                    </div>


                   <div class="form-group">
                       <label>Loại sách</label>
                       <select class="form-control" name="tenLoaiSach"id="exampleFormControlSelect1">


                         @foreach ($danhSachLoai as $item)
                             <option value="{{$item->ls_id}}">{{ $item->ls_ten }}</option>


                         @endforeach
                       </select>
                   </div>



                    <div class="form-group">
                       <label>Số lượng </label>
                       <input class="form-control mr-sm-2" name="soLuong" type="search" placeholder="Nhập số lượng . . ." aria-label="Search">
                   </div>
                    {{-- <div class="form-group">
                       <label>Địa chỉ </label>
                       <input class="form-control mr-sm-2" name="diaChi" type="search" placeholder="Nhập địa chỉ . . ." aria-label="Search">
                   </div> --}}

                   <div class="form-group">
                       <label>Mô tả </label>
                       <textarea name="moTa"  cols="63" rows="4"></textarea>
                   </div>
                   <div class="form-group">
                       <label>Tác giả </label>
                       <input class="form-control mr-sm-2" name="tacGia" type="search" placeholder="Nhập tên tác giả. . ." aria-label="Search">
                   </div>
                   {{-- <div class="form-group">
                       <label>Tình trạng </label>
                       <select name="tinhTrang" class="form-control" id="exampleFormControlSelect1">
                           <option value="Đã mượn"> Đã mượn</option>

                           <option value="Chưa mượn">Chưa mượn</option>
                       </select>
                   </div> --}}
                   <div class="form-group">
                    <label for="exampleFormControlFile1" >Hình ảnh</label>
                    <input type="file" name="hinhAnh" class="form-control-file" id="exampleFormControlFile1">
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
