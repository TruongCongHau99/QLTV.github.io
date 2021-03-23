@extends('QLTV.template.master')
@section('content')
<div class="row col-12">
    <div class="col-12">
    <h1 class="mb-4 text-center" >SỬA SÁCH </h1>
    </div>

    <div class="col-6">

    <form action="{{route('xu-ly-sua-sach',['id'=>$suaSach->s_id])}}" method="POST" enctype="multipart/form-data">
            @csrf

                <div  class="form-group">
                    <label>Mã sách</label>
                <input class="form-control mr-sm-2" value="{{$suaSach->s_masach}}" name="maSach" type="search" placeholder="Nhập tên độc giả . . ." aria-label="Search">
                </div>
                <div  class="form-group">
                    <label>Tên sách</label>
                <input class="form-control mr-sm-2" value="{{$suaSach->s_ten}}" name="tenSach" type="search" placeholder="Nhập tên độc giả . . ." aria-label="Search">
                </div>
                <div class="form-group">
                    <label for="exampleInputTenloai">Loại Sách</label>
                    <select name="tenLoaiSach" id=""class="form-control">
                        @foreach ($loaiSach as $item)
                            {{-- <option value="{{ $item->l_id }}">{{ $item->l_ten }}</option> --}}
                            <option value="{{ $item->ls_id }}" {{ $suaSach->ls_id == $item->ls_id ? 'selected' : ''}}>{{ $item->ls_ten }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Số lượng</label>
                    <input class="form-control mr-sm-2"value="{{$suaSach->s_soluong}}" name="soLuong" type="search" placeholder="Nhập địa chỉ . . ." aria-label="Search">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input class="form-control mr-sm-2"value="{{$suaSach->s_mota}}" name="moTa" type="search" placeholder="Nhập số điện thoại . . ." aria-label="Search">
                </div>
                <div class="form-group">
                    <label>Tác giả</label>
                    <input class="form-control mr-sm-2"value="{{$suaSach->s_tacgia}}" name="tacGia" type="search" placeholder="Nhập số điện thoại . . ." aria-label="Search">
                </div>
                {{-- <div class="form-group">
                    <label>Tình trạng </label>
                    <select name="tinhTrang" class="form-control"value="{{$suaSach->s_tinhtrang}}" id="exampleFormControlSelect1">
                        <option value="Đã mượn"> Đã mượn</option>

                        <option value="Chưa mượn">Chưa mượn</option>
                    </select>
                </div> --}}
                <div class="form-group">
                    <label for="exampleFormControlFile1">Hình ảnh</label>
                    <input type="file" name="hinhAnh" class="form-control-file" id="exampleFormControlFile1">
                    <img src="{{asset('hinhanhsach')}}/{{$suaSach->s_hinhanh}}" style = "width:150px">
                </div>
                <button type="submit" class="btn btn-success btn-lg">Cập Nhật</button>
                </form>
            </div>


        </div>



@endsection
