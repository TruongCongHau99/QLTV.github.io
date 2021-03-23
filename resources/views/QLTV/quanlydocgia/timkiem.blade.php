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
    <div class="row">
        <div class="col-9">
         <h2 class="text-center" style="margin-bottom:50px ">DANH SÁCH ĐỘC GIẢ MƯỢN SÁCH TÌM KIẾM THEO TÊN</h2>
                 <form action="#">
                    @csrf
                    <div class="form-group" style="margin-top: 30px">
                        <label for="formGroupExampleInput">Tìm kiếm</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tìm kiếm" name="tuKhoa">
                    </div>


                     </div>

                 </form>

         <table class="table">
             <thead>
               <tr>
                 <th scope="col">STT</th>
                 <th scope="col">Họ tên</th>
                 <th scope="col">Giới tính</th>
                 <th scope="col">Địa Chỉ</th>
                 <th scope="col">Số Điện Thoại</th>
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
                     <td>{{ $item->dg_hoten }}</td>
                     <td>{{$item->dg_gioitinh}}</td>
                     <td>{{$item->dg_diachi}}</td>
                     <td>{{$item->dg_sdt}}</td>
                     <td>
                         <a href="{{ route('sua-doc-gia', ['id'=> $item->dg_id]) }}"class="btn btn-success">Sửa</a>
                         <a href="{{ route('xoa-doc-gia', ['id'=> $item->dg_id]) }}"class="btn btn-danger" onclick="return xoa()">Xóa</a>
                         <a href="{{route('chi-tiet-phieu-muon',['id'=>$item->dg_id])}}"class="btn btn-primary">Chi tiết</a>
                     </td>

                   </tr>
                 @endforeach


             </tbody>
           </table>
        </div>
        {{-- <div class="col-3">
         <form action="{{route('xu-ly-them-doc-gia')}}" method="POST">
             @csrf

                 <div class="form-group">
                     <h6>Tên Độc Giả</h6>
                     <input class="form-control mr-sm-2" name="hoTenDocGia" type="search" placeholder="Nhập tên độc giả. . ." aria-label="Search">

                 </div>

                 <button type="submit" class="btn btn-primary">Thêm</button>

           </form>
        </div> --}}
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
@endsection
