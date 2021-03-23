@extends('QLTV.template.master')
@section('title')
<h4 class="text-left"><i>Chi tiết phiếu trả</i></h4>
@endsection
@section('content')

<div class="col-12">
@foreach ($PhieuTra as $item)
    <h5 class="text-center">Chi tiết phiếu trả: <b>{{ $item->pt_id }}</b></h5>
@endforeach
@foreach ($PhieuTra as $item)
    <h5><b>ID phiếu trả: </b> {{ $item->pt_id }}</h5>
    <h5><b>ID phiếu mượn: </b> {{ $item->dg_id }}</h5>
    <h5><b>Người trả: </b>
        @foreach ($DocGia as $temp)
            @if( $item->dg_id == $temp->dg_id )
                {{ $temp->dg_hoten }}
            @endif
        @endforeach
    </h5>
    <h5><b>Hạn trả: </b> {{ $item->dg_hantra }}</h5>
    <h5><b>Ngày trả: </b> {{ $item->pt_ngaytra }}</h5>
@endforeach

<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên sách mượn</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Số lượng trả</th>
            {{-- <th scope="col">Số lượng mượn</th> --}}
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1
        @endphp
        @foreach ($ChiTietPhieuTra as $item)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $item->s_ten }}</td>
            <td>
                @if($item->s_hinhanh == null)
                    chưa có hình ảnh
                @else
                    <img src="{{ asset('hinhanhsach') }}/{{ $item->s_hinhanh }}" style="width:90px; height:100px">
                @endif
            </td>
            <td>{{ $item->ctpt_soluongsachtra }}</td>

            {{-- @foreach ($soLuongSachMuon as $temp)
                <td>
                @if( $item->ctpm_id == $temp->ctpm_id )
                {{ $temp->ctpm_soluongsach }}
                @endif
                </td>
            @endforeach --}}

            {{-- <td>{{ $item->ctpm_soluongsach}}</td> --}}

        </tr>
         @endforeach

    </tbody>
</table>



@endsection
