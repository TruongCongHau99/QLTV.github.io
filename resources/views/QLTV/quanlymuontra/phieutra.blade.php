@extends('QLTV.template.master')
@section('title')
<h4 class="text-left"><i>Quản lý trả sách</i></h4>
@endsection
@section('content')

    <div class="col-6">
        <form action="" method="get" class="form-inline">
            <select name="thuocTinh" id="" class="form-control form-control-navbar">
                <option value="id">ID</option>
                <option value="nguoiMuon">Người mượn</option>
            </select>
            <input class="form-control mr-sm-2" type="search" name="tuKhoa" placeholder="Tìm kiếm phiếu mượn..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="col-5" style="text-align: right;">
        <a href="#" data-toggle="modal" data-target="#modalPhieuTra" class="btn btn-primary">Phiếu trả</a>
    </div>

<div class="col-12">
    <h5 class="text-center"><b>Danh sách phiếu trả</b></h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Mã phiếu trả</th>
                <th scope="col">Người trả</th>
                <th scope="col">Ngày trả</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1
            @endphp
            @foreach ($PhieuTra as $item)
            <tr>
                <th>{{$i++}}</th>
                <th>{{ $item->pt_id }}</th>
                <td>
                    @foreach ($DocGia as $temp)
                        @if( $item->dg_id == $temp->dg_id )
                            {{ $temp->dg_hoten }}
                        @endif
                    @endforeach
                </td>
                <td>{{ $item->pt_ngaytra }}</td>
                <td>
                    <a href="{{ route('chi-tiet-phieu-tra', ['id'=> $item->pt_id]) }}" class="btn btn-info">Chi tiết</a>
                    <a href="{{ route('xoa-phieu-tra', ['id'=> $item->pt_id]) }}"class="btn btn-danger"onclick="return xoa()">Xóa</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
<script>
    function xoa(){
        const a = confirm("Bạn có muốn xóa không?");
        if(a == true){
            return true;
        }return false;
    }
</script>

<div class="modal fade" id="modalPhieuTra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('xu-ly-phieu-tra') }}" method="POST" >

            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Phiếu Trả sách</h5>
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
                    <label >ID phiếu trả</label>
                    <input type="text" name="idPhieuTra" id="disabledTextInput" class="form-control" value="{{ $my_string }}" >
                </div>
                <div class="form-group">
                    <label >ID phiếu mượn</label>
                    <input type="text"  name="idDocGia" id="txt_ide" class="form-control" list="id1" >
                    <datalist id="id1" >
                        <select class="form-control" >
                            @foreach ($DocGia as $item)
                            <option value="{{ $item->dg_id }}">{{ $item->dg_hoten }} </option>
                            @endforeach
                        </select>
                    </datalist>
                </div>

                <div class="form-group">
                    <label >Ngày trả</label>
                    <input type="date" name="ngayTra" id="disabledTextInput" class="form-control" >
                </div>
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
                                        @foreach ($Sach as $item)
                                            <option value="{{ $item->s_id }}">{{ $item->s_ten }} </option>
                                        @endforeach
                                    </select>
                                </th>
                                <th class="col-2"><input type="number" min="1" max="5" value="1" name="soLuong{{ $i }}" class="form-control"></th>
                                <th class="col-1"><a value="dis{{ $i }}" id="{{ $i }}" class="btn btn-secondary" onclick="dis{{ $i }}()" >x</a></th>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
            </div>
        </form>
  </div>
</div>




@endsection
