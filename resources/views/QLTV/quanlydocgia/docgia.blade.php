@extends('QLTV.template.master')
@section('title')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-12">
        <h1 class="mb-4 mt-3 text-dark text-center ">QUẢN LÝ ĐỘC GIẢ</h1>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">THÊM ĐỘC GIẢ</button>
            {{-- <a href="{{route('them-doc-gia')}}" type="button" class="btn btn-primary">THÊM ĐỘC GIẢ</a> --}}
         <h4 class="text-center">Danh sách thông tin độc giả mượn sách</h4>
                 <form action="{{route('xu-ly-tim-kiem-dg')}}" method="GET">
                    @csrf
                     <div class="form-group" style="margin-top: 30px">
                         <label for="formGroupExampleInput">Tìm kiếm</label>
                         <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tìm kiếm" name="tuKhoa">
                         {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button> --}}
                     </div>
                 </form>
                 @if (Session::has('alert-sua'))
                 <p style="color: blue" class="text-center">
                 {{Session::get('alert-sua')}}
                     @endif
                 @if (Session::has('alert-suathatbai'))
                 <p style="color: rgb(255, 0, 13)" class="text-center">
                 {{Session::get('alert-suathatbai')}}
                     @endif
                     @if (Session::has('alert-dg'))
                     <p style="color: rgb(10, 48, 218)" class="text-center">
                     {{Session::get('alert-dg')}}
                         @endif
                    @if (Session::has('alert'))
                         <p style="color: rgb(0, 255, 0)" class="text-center">
                         {{Session::get('alert')}}
                          @endif
                    @if (Session::has('alert-themthatbai'))
                         <p style="color: rgb(255, 0, 0)" class="text-center">
                         {{Session::get('alert-themthatbai')}}
                          @endif
         <table class="table">
             <thead>
               <tr>
                 <th scope="col">STT</th>
                 <th scope="col">Họ tên</th>
                 <th scope="col">Giới tính</th>
                 <th scope="col">Địa Chỉ</th>
                 <th scope="col">Số Điện Thoại</th>
                 {{-- <th scope="col">Trạng Thái</th> --}}
                 {{-- <th scope="col">Tên Sách</th>
                 <th scope="col">Loai</th>
                 <th scope="col">Mượn</th>
                 <th scope="col">Trả</th> --}}
                 <th scope="col">Thao tác</th>


               </tr>
             </thead>
             <tbody>
                 @php
                     $i = 1
                 @endphp
                 @foreach ($danhSachDocGia as $item)
                 <tr>
                 <th scope="row">{{$i++}}</th>
                    <td>{{$item->dg_hoten}}</td>

                    <td>{{$item->dg_gioitinh}}</td>
                    <td>{{$item->dg_diachi}}</td>
                    <td>{{$item->dg_sdt}}</td>
                    {{-- <td>
                       @if($item->dg_trangthai==1)
                            Đang mượn
                        @endif
                       @if($item->dg_trangthai==2)
                            Đã trả
                        @endif
                       @if($item->dg_trangthai==3)
                            Quá hạn
                        @endif

                    </td> --}}
                    {{-- <td>{{$item->s_ten}}</td>
                    <td>{{$item->ls_ten}}</td>
                    <td>{{$item->dg_ngaymuon}}</td>
                    <td>{{$item->dg_hantra}}</td> --}}


                     <td>
                     <a href="{{route('sua-doc-gia',['id'=>$item->dg_id])}}"class="btn btn-success">Sửa</a>
                     <a href="{{route('xoa-doc-gia',['id'=>$item->dg_id])}}"class="btn btn-danger" onclick="return xoa()">Xóa</a>
                     <a href="{{route('chi-tiet-phieu-muon',['id'=>$item->dg_id])}}"class="btn btn-primary">Chi tiết</a>
                     </td>
                   </tr>
                 @endforeach

             </tbody>

           </table>
        </div>
        {{-- <div class="col-3">
            <h2 class="text-center">Thêm độc giả</h2>
            <form action="{{route('xu-ly-them-doc-gia')}}" method="POST">
            @csrf

            <div class="form-group">

                <label style="margin-top: 22px">Tên Độc Giả</label>
                <input class="form-control mr-sm-2" name="hoTenDocGia" type="search" placeholder="Nhập tên độc giả . . ." aria-label="Search">
            </div>

            <div class="form-group">
               <label>Giới tính </label>
               <select name="gioiTinh" class="form-control" id="exampleFormControlSelect1">
                   <option value="Nam">Nam</option>
                   <option value="Nữ">Nữ</option>
               </select>
           </div>

            <div class="form-group">
               <label>Địa chỉ </label>
               <input class="form-control mr-sm-2" name="diaChi" type="search" placeholder="Nhập địa chỉ . . ." aria-label="Search">
           </div>

           <div class="form-group">
               <label>Số điện thoại </label>
               <input class="form-control mr-sm-2" name="sdt" type="search" placeholder="Nhập số điện thoại. . ." aria-label="Search">
           </div>

           <div class="form-group">
               <label>Tên Sách</label>


               <select name="tenSach"class="form-control" id="exampleFormControlSelect1">
                   @foreach ($danhSachSach as $item)
               <option value="{{$item->s_id}}">{{$item->s_ten}}</option>
                   @endforeach
               </select>
           </div>

           <div class="form-group">
               <label>Tên Loại Sách</label>
               <select name="tenLoaiSach"class="form-control" id="exampleFormControlSelect1">
                   @foreach ($danhSachLoaiSach as $item)
               <option value="{{$item->ls_id}}">{{$item->ls_ten}}</option>
                   @endforeach
               </select>
           </div>
           <div class="form-group">
               <label>Ngày mượn </label>
               <input type="date" class="form-control" name="ngayMuon" type="search" placeholder="Nhập ngày mượn. . ." aria-label="Search">
           </div>
           <div class="form-group">
               <label>Hạn trả </label>
               <input type="date" class="form-control" name="hanTra" >
           </div>


            <button type="submit" class="btn btn-primary">Thêm</button>

            </form>
</div> --}}
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
        <form action="{{route('xu-ly-them-doc-gia')}}" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">QUẢN LÝ THƯ VIỆN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

                @csrf
                    @php
                function rand_string( $length ) {
                    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                    $size = strlen( $chars );
                    $str="";
                    for( $i = 0; $i < $length; $i++ ) {
                        $t = $chars[ rand( 0, $size - 1 ) ];
                        $str=$str.$t;
                    }
                    return $str;
                }
                $vidu=5;
                $my_string = rand_string($vidu);
                    @endphp

                    <div class="form-group">
                        <h4 class="text-center">Thêm độc giả</h4>
                        <label style="margin-top: 22px">Tên Độc Giả</label>
                        <input class="form-control mr-sm-2"  name="hoTenDocGia" type="search" placeholder="Nhập tên độc giả . . ." aria-label="Search">
                    </div>
                    <div class="form-group">
                        <label style="margin-top: 22px">ID Độc Giả</label>
                        <input class="form-control mr-sm-2" value="{{ $my_string }}" name="idDocGia" type="search" placeholder="Nhập id độc giả . . ." aria-label="Search">
                    </div>

                    <div class="form-group">
                       <label>Giới tính </label>
                       <select name="gioiTinh" class="form-control" id="exampleFormControlSelect1">
                           <option value="Nam">Nam</option>
                           <option value="Nữ">Nữ</option>
                       </select>
                   </div>

                    <div class="form-group">
                       <label>Địa chỉ </label>
                       <input class="form-control mr-sm-2" name="diaChi" type="search" placeholder="Nhập địa chỉ . . ." aria-label="Search">
                   </div>

                   <div class="form-group">
                       <label>Số điện thoại </label>
                       <input class="form-control mr-sm-2" name="sdt" type="search" placeholder="Nhập số điện thoại. . ." aria-label="Search">
                   </div>

                   {{-- <div class="form-group">
                    <label>Tên Sách</label>
                    <select name="tenSach"class="form-control" id="exampleFormControlSelect1">
                        @foreach ($danhSachSach as $item)
                    <option value="{{$item->s_id}}">{{$item->s_ten}}</option>
                        @endforeach
                    </select>
                </div> --}}
{{-- ----------------------------------phụng mới --------------------------------}}
                <div class="form-group">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="d-flex">
                                <th class="col-9">Tên sách</th>
                                <th class="col-2">SL</th>
                                <th class="col-1">Dis</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                            $j = 6
                        @endphp
                        @for($i=1; $i<$j; $i++)
                            <tr class="d-flex">
                                <th class="col-9">
                                    <select name="tenSach{{ $i }}" id="dis{{ $i }}" class="form-control" >
                                        @foreach ($danhSachSach as $item)
                                            <option value="{{ $item->s_id }}">{{ $item->s_ten }} </option>
                                        @endforeach
                                    </select>
                                </th>
                                <th class="col-2"><input type="number" min="1" max="5" id="{{ $i }}" value="1" name="soLuong{{ $i }}" class="form-control"></th>
                                <th class="col-1"><a value="dis{{ $i }}" id="{{ $i }}" class="btn btn-secondary" onclick="dis{{ $i }}()" >x</a></th>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
{{-- ----------------------------------phụng mới ----------------------------------}}

                   <div class="form-group">
                       <label>Ngày mượn </label>
                       <input type="date" class="form-control" name="ngayMuon" type="search" placeholder="Nhập ngày mượn. . ." aria-label="Search">
                   </div>
                   <div class="form-group">
                       <label>Hạn trả </label>
                       <input type="date" class="form-control" name="hanTra" >
                   </div>
                   {{-- <div class="form-group">
                    <label>Trạng thái </label>
                    <select name="trangThai" class="form-control" id="exampleFormControlSelect1">
                    <option value="Đang mượn">Đang mượn</option>
                    <option value="Đã trả">Đã trả</option>
                    <option value="Quá hạn">Quá hạn</option>

                    </select>
                </div> --}}

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
