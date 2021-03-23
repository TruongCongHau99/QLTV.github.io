<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//--------------------------------- ĐỘC GIẢ------------------------------------------
route::get('/dangnhap','DangNhapController@DangNhap')->name('Dang-Nhap');
route::post('/xuLyDangNhap','DangNhapController@xuLyDangNhap')->name('xu-Ly-Dang-Nhap');
route::get('/DangXuat','DangNhapController@logout')->name('xu-Ly-Dang-Xuat');
route::get('/Dangnhap','DangNhapController@login')->name('nut-dang-nhap');

Route::group(['middleware'=>['checkThuThu']],function(){
    Route::group(['prefix'=>'admin'],function(){
        route::get('/docgia','DocGiaController@index')->name('danh-sach-doc-gia');
        // route::get('/themdocgia','DocGiaController@themdocgia')->name('them-doc-gia');
        route::post('/xu-ly-them-doc-gia','DocGiaController@store')->name('xu-ly-them-doc-gia');
        route::get('/chi-tiet-phieu-muon/{id}','DocGiaController@show')->name('chi-tiet-phieu-muon');
        route::get('/xoadocgia/{id}','DocGiaController@destroy')->name('xoa-doc-gia');
        route::get('/suadocgia/{id}','DocGiaController@edit')->name('sua-doc-gia');
        route::post('/xu-ly-sua-doc-gia/{id}','DocGiaController@update')->name('xu-ly-sua-doc-gia');
        route::get('/timkiemdocgia','DocGiaController@timKiem')->name('xu-ly-tim-kiem-dg');
        route::get('/capnhattrangthai/{id}','DocGiaController@capNhatTrangThai')->name('cap-nhat-trang-thai');

        // ---------------------------------------------SÁCH----------------------------------------------

        route::get('/sach','SachController@index')->name('sach');
        route::post('/themsach','SachController@store')->name('xu-ly-them-sach');
        route::get('/suasach/{id}','SachController@edit')->name('sua-sach');
        route::post('/xu-ly-sua-sach/{id}','SachController@update')->name('xu-ly-sua-sach');
        route::get('/timkiemsach','SachController@timkiemsach')->name('xu-ly-tim-kiem');
        route::get('/xoasach/{id}','SachController@destroy')->name('xoa-sach');
        route::get('/chi-tiet-sach/{id}','SachController@show')->name('chi-tiet-sach');

        //------------------------------------------- LOẠI SÁCH--------------------------
        route::get('/loaisach','LoaiSachController@index')->name('loai-sach');
        route::post('/themloaisach','LoaiSachController@store')->name('xu-ly-them-loai');
        route::get('/xoaloaisach/{id}','LoaiSachController@destroy')->name('xoa-loai-sach');
        route::get('/timkiemloaisach','LoaiSachController@timkiem')->name('tim-kiem');
        route::get('/sualoaisach/{id}','LoaiSachController@edit')->name('sua-loai-sach');
        route::post('/xu-ly-sua-loai-sach/{id}','LoaiSachController@update')->name('xu-ly-sua-loai-sach');

        // ------------------------------------MƯỢN TRẢ-------------------------
        route::get('/muontra','MuonTraController@index')->name('muon-tra');
        route::post('/xulymuontra','MuonTraController@store')->name('xu-ly-muon-tra');
        route::get('/xoamuontra/{id}','MuonTraController@destroy')->name('xoa-muon-tra');
        route::get('/timkiemmuontra','MuonTraController@timKiem')->name('xu-ly-tim-kiem-mt');
        route::get('/phieutra','PhieuTraController@index')->name('quan-ly-tra-sach');
        route::get('/chitietphieutra/{id}','ChiTietPhieuTraController@ChiTietPhieuTra')->name('chi-tiet-phieu-tra');
        route::post('/xulytrasach','ChiTietPhieuTraController@XuLyPhieuTra')->name('xu-ly-phieu-tra');
        route::get('/xoaphieutra/{id}','PhieuTraController@destroy')->name('xoa-phieu-tra');
    });

});

route::get('/','DanhSachSachController@index')->name('danh-sach-sach');
// route::get('/layloai/{idLoai}','DanhSachSachController@layloaisach')->name('lay-loai-sach');

route::get('/docgiatimkiem','DanhSachSachController@docgiatimkiemsach')->name('doc-gia-xu-ly-tim-kiem');


// ------------------------------------MƯỢN TRẢ-------------------------
// route::get('/muontra','MuonTraController@index')->name('muon-tra');
// route::post('/xulymuontra','MuonTraController@store')->name('xu-ly-muon-tra');
