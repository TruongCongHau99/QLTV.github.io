{{-- @extends('QLTV.template.master')
@section('content')

        <div class="col-9">
            <h2 class="text-center">THÊM ĐỘC GIẢ MƯỢN SÁCH</h2>
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
</div>
        </div>
    </div>
@endsection --}}
