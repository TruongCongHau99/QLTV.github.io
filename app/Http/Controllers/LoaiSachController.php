<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class LoaiSachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhSachLoai = DB::table('loaisach')->get();
        return view('QLTV.quanlyloaisach.loaisach',compact('danhSachLoai'));
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
       try {
            //code...
            $addLoaiSach = DB::table('loaisach')->insert(
                [
                    'ls_ten' => $request->tenloaisach
                ]
                );

                Session::flash('alert-themloaisach','Thêm Thành Công');
            //dd('them thanh cong');
            return redirect()->route('loai-sach');
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('alert-themloaitb','có lỗi trong quá trình thêm');
            return redirect()->route('loai-sach');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $suaLoaiSach=DB::table('loaisach')->where('ls_id',$id)->first();
       return view('QLTV.quanlyloaisach.sua',compact('suaLoaiSach'));
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
        try{
            $updateLoaiSach=DB::table('loaisach')->where('ls_id',$id)->update([
                'ls_ten' =>$request ->tenloaisach
                ]);
                Session::flash('alert-sualoaisach','Sửa Thành Công');
                return redirect()->route('loai-sach');
        }catch (\Throwable $th) {
            Session::flash('alert-suathatbailoaisach','Sửa thất bại');
            return redirect()->route('loai-sach');
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
        try{
            $delLoaiSach= DB::table('loaisach')->where('ls_id',$id)->delete();
            Session::flash('alert-xoaloaisach','xóa thành công');
        return redirect()->route('loai-sach');
        }catch(\Throwable $th){
            //
        }
    }

    public function timkiem(Request $request)
    {
        $tuKhoa=$request->get('tuKhoa');
        $loaiSachTimDuoc=DB::table('loaisach')->where('ls_ten','like','%'.$tuKhoa.'%')->get();
        return view('QLTV.quanlyloaisach.timkiem',compact('loaiSachTimDuoc','tuKhoa'));
    }

}
