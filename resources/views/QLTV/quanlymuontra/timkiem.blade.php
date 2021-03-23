@extends('QLTV.template.master')
@section('title')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-12">
        <h1 class="mb-4 mt-3 text-dark text-center ">QUẢN LÝ MƯỢN TRẢ</h1>
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
        <div class="col-12">

         <h4 class="text-center">Danh sách độc giả mượn sách được tìm kiếm theo tên</h4>
            <form action="{{route('xu-ly-tim-kiem-mt')}}" method="GET">
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
                 <th scope="col">Họ tên</th>
                 <th scope="col">Địa chỉ</th>
                 <th scope="col">Số điện thoại</th>
                 <th scope="col">Tên sách</th>
                 <th scope="col">Loại sách</th>
                 <th scope="col">Ngày mượn</th>
                 <th scope="col">Hạn trả</th>
                 <th scope="col">Thao tác</th>


               </tr>
             </thead>
             <tbody>
                 @php
                     $i = 1
                 @endphp
                 @foreach ($docGiaTimDuoc as $item)
                 <tr>
                 <th scope="row">{{$i++}}</th>
                    <td>{{$item->dg_hoten}}</td>
                    <td>{{$item->dg_diachi}}</td>
                    <td>{{$item->dg_sdt}}</td>
                    <td>{{$item->s_ten}}</td>
                    <td>{{$item->ls_ten}}</td>
                    <td>{{$item->dg_ngaymuon}}</td>
                    <td>{{$item->dg_hantra}}</td>


                     <td>
                     <a href="{{route('sua-doc-gia',['id'=>$item->dg_id])}}"class="btn btn-success">Sửa</a>
                     <a href="{{route('xoa-muon-tra',['id'=>$item->dg_id])}}"class="btn btn-danger" onclick="return xoa()">Xóa</a>
                     {{-- <a href="{{route('chi-tiet-phieu-muon',['id'=>$item->dg_id])}}"class="btn btn-primary">Chi tiết</a> --}}
                     </td>
                   </tr>
                 @endforeach

             </tbody>

           </table>
        </div>
@endsection
