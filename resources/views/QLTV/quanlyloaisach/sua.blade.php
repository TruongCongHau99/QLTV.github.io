@extends('QLTV.template.master')
@section('content')
    <div class="row col-12">
        <div class="col-12">
            <h1 class="mb-4 text-center" >SỬA LOẠI SÁCH </h1>
        </div>

        <div class="col-6">


            <form action="{{route('xu-ly-sua-loai-sach',['id'=>$suaLoaiSach->ls_id])}}" method="POST">
                @csrf
                <div  class="form-group">
                    <label>Tên Loại</label>
                    <input class="form-control mr-sm-2"value="{{$suaLoaiSach->ls_ten}}"  name="tenloaisach" type="search" placeholder="Nhập tên loại sách . . ." aria-label="Search">
                </div>

                <button type="submit" class="btn btn-success btn-lg">Cập Nhật</button>
            </form>

        </div>
    </div>



@endsection
