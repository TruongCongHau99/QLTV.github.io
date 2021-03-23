@extends('QLTV.template.master')
@section('title')
    <div class="container-fluid">
        <div class="row">
            <div>
                <h2 class="m-0 text-dark text-center" style="margin-bottom: 60px">CHI TIẾT SÁCH</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-1">
                    <div class="image_selected">
                        <img src="{{ asset('hinhanhsach') }}/{{ $chiTietSach->s_hinhanh }}" style="width:350px;height:350px">
                    </div>
                </div>
                <!-- Description -->
                <div class="col-md-6 order-2">
                    <form>
                        <ul class="list-group mt-5">
                            {{-- <li class="list-group-item border-none"><b>Thông tin sách</b></li> --}}
                            <li class="list-group-item border-none"><label> Tên sách: </label>  {{ $chiTietSach->s_ten }}</li>
                            <li class="list-group-item border-none"><label> Mã sách: </label>  {{ $chiTietSach->s_masach }}</li>
                            <li class="list-group-item border-none">
                               <label>Loại sách: </label>  {{ $chiTietSach->ls_ten}}
                            </li>
                            <li class="list-group-item border-none"><label> Tác Giả: </label>  {{ $chiTietSach->s_tacgia }}</li>
                        </ul>
                    </form>
                    <div class="col-md-12 mt-5 order-3">
                        <h4><b>Mô tả sách:</b> </h4>
                        <p> {{ $chiTietSach->s_mota }}</p>
                    </div>
                </div>
            </div>

        </div>


@endsection
