@extends('QLTV.template.master')
@section('title')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">

      </div><!-- /.col -->
      <div class="col-sm-6">

      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12">

            <h1 class="text-center">Danh sách các loại sách trong thư viện</h1>
                    <form action="#">
                        @csrf
                        {{-- <div class="form-group" style="margin-top: 30px">
                            <label for="formGroupExampleInput">Tìm kiếm</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tìm kiếm" name="tuKhoa">
                        </div> --}}

                    </form>

                <table class="table">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Loại sách</th>
                    <th scope="col">Số lượng</th>
                    {{-- <th scope="col">Mô tả</th> --}}
                    <th scope="col">Tác giả</th>
                    <th scope="col">Tình trạng</th>
                    <th scope="col">Hình ảnh</th>



                </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1
                    @endphp
                    @foreach ($sachTimDuoc as $item)
                    <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->s_ten}}</td>
                    <td>{{$item->ls_ten}}</td>
                    <td>{{$item->s_soluong}}</td>
                    {{-- <td>{{$item->s_mota}}</td> --}}
                    <td>{{$item->s_tacgia}}</td>

                    <td>{{$item->s_tinhtrang}}</td>
                    <td>
                        <img src="{{ asset('hinhanhsach') }}/{{ $item->s_hinhanh }}" style="width:180px; height=200px">
                    </td>


                    </tr>
                    @endforeach

                </tbody>

            </table>
            </div>
        </div>
    </div>
@endsection

