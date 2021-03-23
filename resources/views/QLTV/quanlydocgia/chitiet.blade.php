@extends('QLTV.template.master')
@section('title')
<h3 class="text-left"><i>Chi tiết phiếu mượn</i></h3>
@endsection
@section('content')
<div class="col-12">
{{-- @foreach ($PhieuMuon as $item)
    <h5 class="text-center">Chi tiết phiếu mượn</h5>
@endforeach --}}
@foreach ($PhieuMuon as $item)
    <h5><b>ID phiếu mượn: </b> {{ $item->dg_id }}</h5>
    <h5><b>Người mượn: </b> {{ $item->dg_hoten }}</h5>
    <h5><b>Ngày mượn: </b> {{ $item->dg_ngaymuon }}</h5>
    <h5><b>Hạn trả: </b> {{ $item->dg_hantra }}</h5>
@endforeach

{{-- </div> --}}
{{-- <div class="col-12"> --}}
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên sách mượn</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Số lượng mượn</th>
            {{-- <th scope="col">Số lượng trả</th> --}}
            {{-- <th scope="col">Tình trạng</th> --}}
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1
        @endphp
        @foreach ($ChiTietPhieuMuon as $item)
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
            <td id="id">{{ $item->ctpm_soluongsach }}</td>
            {{-- moiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii --}}
            @php
                $j = 0
            @endphp
            @foreach ($ChiTietPhieuTra as $temp)
            {{-- @if( ($item->s_id == $temp->s_id) && ($item->dg_id == $temp->dg_id) )
                @php
                    $j= $j + $temp->ctpt_soluongsachtra
                @endphp
            @endif --}}

            <td>{{$item->ctpt_soluongsachtra}}</td>
            @endforeach

            {{-- <script type=”text/javascript”>

                function gettext(){
                    var s = document.getElementById(“id”).value;
                    return
                }
            </script>
            @php
                $j=int(gettext())
            @endphp
            <td><input type="number" id="id" name="{{$i}}" value="0" min="0" max="{{$item->ctpm_soluongsach}} onclick=”gettext()”"></td>

            @endphp --}}

        </tr>
         @endforeach
    </tbody>
</table>
</div>
@endsection
