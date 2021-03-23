<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class SachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $danhSachSach=DB::table('sach')
        ->join('loaisach','loaisach.ls_id','sach.ls_id')
        ->get();
        $danhSachLoai = DB::table('loaisach')->get();
        return view('QLTV.quanlysach.sach',compact('danhSachSach','danhSachLoai'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tenSach=$request->tenSach;
        $tenLoaiSach=$request->tenLoaiSach;
        $soLuong=$request->soLuong;
        $moTa=$request->moTa;
        $tacGia=$request->tacGia;
        $tinhTrang=$request->tinhTrang;
        $hinhAnh=$request->hinhAnh;

        if($hinhAnh !=null){
        $tenHinhanh=$hinhAnh->getClientOriginalName();
        $hinhAnh->move('hinhanhsach',$tenHinhanh);
        $addSach= DB::table('sach')->insert(
          [
              's_masach'=>rand(1000,9999),
              's_ten'=>$tenSach,
              'ls_id'=>$tenLoaiSach,
              's_soluong'=>$soLuong,
              's_mota'=>$moTa,
              's_tacgia'=>$tacGia,
              's_tinhtrang'=>$tinhTrang,
              's_hinhanh'=>$tenHinhanh
          ]
          );
        }
        else{
            $addSach= DB::table('sach')->insert(
                [
                    's_masach'=>rand(1000,9999),
                    's_ten'=>$tenSach,
                    'ls_id'=>$tenLoaiSach,
                    's_soluong'=>$soLuong,
                    's_mota'=>$moTa,
                    's_tacgia'=>$tacGia,
                    's_tinhtrang'=>$tinhTrang
                ]
                );
        }
          return redirect()->route('sach');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chiTietSach = DB::table('sach')
        ->where('s_id',$id)
        ->join ('loaisach','loaisach.ls_id','sach.ls_id')->first();
        return view('QLTV.quanlysach.chitiet',compact('chiTietSach'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suaSach=DB::table('sach')->where('s_id',$id)-> join('loaisach','loaisach.ls_id','sach.ls_id')->first();
        $loaiSach=DB::table('loaisach')->get();
        return view('QLTV.quanlysach.sua',compact('suaSach','loaiSach'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $maSach=$request->maSach;
        $tenSach=$request->tenSach;
        $tenLoaiSach=$request->tenLoaiSach;
        $soLuong=$request->soLuong;
        $moTa=$request->moTa;
        $tacGia=$request->tacGia;
        $tinhTrang=$request->tinhTrang;
        $hinhAnh = $request->hinhAnh;

        if($hinhAnh == ''){
            $updateSach=DB::table('sach')->where('s_id',$id)->update([

                's_masach'=>$request->maSach,
                's_ten'=>$request->tenSach,
                'ls_id'=>$request->tenLoaiSach,
                's_soluong'=>$request->soLuong,
                's_mota'=>$request->moTa,
                's_tacgia'=>$request->tacGia,
                's_tinhtrang'=>$request->tinhTrang
            ]);
            return redirect()->route('sach');
        }
        else{
            $tenHinhAnh=$hinhAnh->getClientOriginalName();
            $hinhAnh->move('hinhanhsach',$tenHinhAnh);
            $updateSach=DB::table('sach')->where('s_id',$id)->update([
                's_masach'=>$request->maSach,
                's_ten'=>$request->tenSach,
                'ls_id'=>$request->tenLoaiSach,
                's_soluong'=>$request->soLuong,
                's_mota'=>$request->moTa,
                's_tacgia'=>$request->tacGia,
                's_tinhtrang'=>$request->tinhTrang,
                's_hinhanh'=>$tenHinhAnh
            ]);
            return redirect()->route('sach');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $xoaSach=DB::table('sach')->where('s_id',$id)->delete();
        Session::flash('alert-xoa','Xóa Thành Công');
        return redirect()->route('sach');
    }

    public function timkiemsach(Request $request){
        $tuKhoa = $request -> get('tuKhoa');
        $sachTimDuoc = DB::table('sach')
        ->join('loaisach','loaisach.ls_id','sach.ls_id')
        ->where('s_ten','like','%'.$tuKhoa.'%')->get();

      // dd($loaiSanPhamTimDuoc);
        return view('QLTV.quanlysach.timkiem',compact('tuKhoa','sachTimDuoc'));
    }
}
