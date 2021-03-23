<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MuonTraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhSachDocGia = DB::table('docgia')
        // ->join('sach','sach.s_id','docgia.s_id')
        // ->join('loaisach','loaisach.ls_id','docgia.ls_id')
        ->get();
        // $danhSachSach=DB::table('sach')->get();
        // $danhSachLoaiSach=DB::table('loaisach')->get();

        return view('QLTV.quanlymuontra.index',compact('danhSachDocGia'));
    }

    // public function muontra($id)
    // {
    //     $loaiSach=DB::table('loaisach')->where('ls_id',$id)->first();
    //     $muonTra=DB::table('muontra')
    //     ->join('sach','sach.s_id','muontra.s_id')
    //     ->where('muontra.ls_id',$id)
    //     ->get();
    //     return view('QLTV.quanlymuontra.index',compact('loaiSach','muonTra'));
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
        $tenDocGia=$request->tenDocGia;
        $tenSach=$request->tenSach;
        // $tenLoaiSach=$request->tenLoaiSach;
        $maSach=$request->maSach;
        $ngayMuon=$request->ngayMuon;
        $hanTra=$request->hanTra;

        $addSach= DB::table('muontra')->insert(
          [
              'mt_hoten'=>$tenDocGia,
              'mt_tensach'=>$tenSach,
            //   'ls_id'=>$tenLoaiSach,
              'mt_masach'=>$maSach,
              'mt_ngaymuon'=>$ngayMuon,
              'mt_hantra'=> $hanTra

          ]
          );
          return redirect()->route('muon-tra');
    }

    // public function muontra($id){
    //     $phieuMuon=DB::table('docgia')->where('dg_id',$id)->first();
    //     $sachMuon=DB::table('muontra')
    //     ->join('sach','sach.s_id','muontra.s_id')
    //     ->where('muontra.dg_id',$id)
    //     ->get();
    //     // dd($phieuMuon);
    //     return view('QLTV.quanlymuontra.index',compact('phieuMuon','sachMuon'));
    // }

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
        $delDocGia = DB::table('docgia')->where('dg_id',$id)->delete();

        // Session::flash('alert-dg','Xóa Thành Công');
        return redirect()->route('muon-tra');
    }
    public function timKiem(Request $request){
        $tuKhoa = $request -> get('tuKhoa');
        $docGiaTimDuoc = DB::table('docgia')
        // ->join('loaisach','loaisach.ls_id','docgia.ls_id')
        // ->join('sach','sach.s_id','docgia.s_id')
        ->where('dg_hoten','like','%'.$tuKhoa.'%')->get();
       //dd($docGiaTimDuoc);
        return view('QLTV.quanlymuontra.timkiem',compact('tuKhoa','docGiaTimDuoc'));
    }

}
