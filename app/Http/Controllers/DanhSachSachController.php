<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DanhSachSachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $danhSach=DB::table('sach')->get();

        // return view('QLTV.trangchu.danhsachsach',compact('danhSach'));

        $danhSach=DB::table('sach')
        ->join('loaisach','loaisach.ls_id','sach.ls_id')
        ->get();
        $danhSachLoaiSach = DB::table('loaisach')->get();
        return view('QLTV.trangchu.danhsachsach',compact('danhSach','danhSachLoaiSach'));
    }


    // public function layloaisach($idLoai)
    // {
    //     $layLoai=DB::table('sach')->where('ls_id',$idLoai)->get();
    //     return view('QLTV.trangchu.danhsachsach',compact('layLoai'));
    // }

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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function docgiatimkiemsach(Request $request){
        $tuKhoa = $request -> get('tuKhoa');
        $docGiaTimDuocSach = DB::table('sach')
        ->join('loaisach','loaisach.ls_id','sach.ls_id')
        ->where('s_ten','like','%'.$tuKhoa.'%')->get();

      // dd($loaiSanPhamTimDuoc);
        return view('QLTV.trangchu.docgiatimkiemsach',compact('tuKhoa','docGiaTimDuocSach'));
    }
}
