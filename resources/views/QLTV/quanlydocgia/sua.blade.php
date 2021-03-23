@extends('QLTV.template.master')
@section('content')
<div class="row col-12">
    <div class="col-12">
    <h1 class="mb-4 text-center" >SỬA ĐỘC GIẢ </h1>
    </div>

    <div class="col-6">

    <form action="{{route('xu-ly-sua-doc-gia',['id'=>$docGia->dg_id])}}" method="POST" >
            @csrf

                <div  class="form-group">
                    <label>Tên độc giả</label>
                <input class="form-control mr-sm-2" value="{{$docGia->dg_hoten}}" name="tendocgia" type="search" placeholder="Nhập tên độc giả . . ." aria-label="Search">
                </div>
                <div  class="form-group">
                    <label>ID độc giả</label>
                <input class="form-control mr-sm-2" value="{{$docGia->dg_id}}" name="idDocGia" type="search" placeholder="Nhập id độc giả . . ." aria-label="Search">
                </div>
                <div class="form-group">
                    <label>Giới tính </label>
                    <select name="gioitinh" class="form-control"  id="exampleFormControlSelect1">
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input class="form-control mr-sm-2"value="{{$docGia->dg_diachi}}" name="diachi" type="search" placeholder="Nhập địa chỉ . . ." aria-label="Search">
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input class="form-control mr-sm-2"value="{{$docGia->dg_sdt}}" name="sdt" type="search" placeholder="Nhập số điện thoại . . ." aria-label="Search">
                </div>

                {{-- <div class="form-group">
                    <label for="exampleInputTenloai">Sách</label>
                    <select name="tenSach" id=""class="form-control">
                        @foreach ( $sach as $item )

                            <option value="{{ $item->s_id }}" {{ $docGia->s_id == $item->s_id ? 'selected' : ''}}>{{ $item->s_ten }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputTenloai">Loại Sách</label>
                    <select name="tenLoaiSach" id=""class="form-control">
                        @foreach ( $loaiSach as $item )

                            <option value="{{ $item->ls_id }}" {{ $docGia->ls_id == $item->ls_id ? 'selected' : ''}}>{{ $item->ls_ten }}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class="form-group">
                    <label>Ngày mượn</label>
                    <input type="date" class="form-control mr-sm-2"value="{{$docGia->dg_ngaymuon}}" name="ngayMuon" type="search" placeholder="Nhập ngay muon . . ." aria-label="Search">
                </div>
                <div class="form-group">
                    <label>Hạn trả</label>
                    <input type="date" class="form-control mr-sm-2"value="{{$docGia->dg_hantra}}" name="hanTra" type="search" placeholder="Nhập hạn trả. . ." aria-label="Search">
                </div>

                <button type="submit" class="btn btn-success btn-lg">Cập Nhật</button>
                </form>
            </div>


        </div>



@endsection
