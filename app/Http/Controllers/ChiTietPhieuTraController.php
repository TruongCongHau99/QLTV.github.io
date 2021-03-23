<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ChiTietPhieuTraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ChiTietPhieuTra=table('chitietphieutra')
        // $chiTietPhieuTra=DB::table('chiTietPhieuTra')
        // ->join('chitietphieumuon', 'chitietphieumuon.ctpm_id', 'chitietphieutra.ctpt_id')
        // ->get();
        // return view('QLTV.quanlymuontra.chitietphieutra', compact('chiTietPhieuTra'));
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
    public function XuLyPhieuTra(Request $request)
    {
        $idPhieuTra = $request->idPhieuTra;
        $idDocGia = $request->idDocGia;
        $ngayTra = $request->ngayTra;
        $tenSach1 = $request->tenSach1;
        $tenSach2 = $request->tenSach2;
        $tenSach3 = $request->tenSach3;
        $tenSach4 = $request->tenSach4;
        $tenSach5 = $request->tenSach5;
        $soLuong1 = $request->soLuong1;
        $soLuong2 = $request->soLuong2;
        $soLuong3 = $request->soLuong3;
        $soLuong4 = $request->soLuong4;
        $soLuong5 = $request->soLuong5;
        $addPhieuTra = DB::table('phieutra')->insert([
            'tt_id' => 1,
            'pt_id' => $idPhieuTra,
            'dg_id' => $idDocGia,
            'pt_ngaytra' => $ngayTra
        ]);
        if($tenSach1 != null){
            $addChiTietPhieuTra = DB::table('chitietphieutra')->insert([
                'pt_id' =>  $idPhieuTra,
                's_id' => $tenSach1,
                'ctpt_soluongsachtra' => $soLuong1
            ]);
            $Sach1 = DB::table('sach')->where('s_id','=',$tenSach1)->first();
            $upDateSach1 = DB::table('sach')->where('s_id','=',$tenSach1)->update([
                's_soluong' => $Sach1->s_soluong + $soLuong1
            ]);
        }
        if($tenSach2 != null){
            $addChiTietPhieuTra = DB::table('chitietphieutra')->insert([
                'pt_id' =>  $idPhieuTra,
                's_id' => $tenSach2,
                'ctpt_soluongsachtra' => $soLuong2
            ]);
            $Sach2 = DB::table('sach')->where('s_id','=',$tenSach2)->first();
            $upDateSach2 = DB::table('sach')->where('s_id','=',$tenSach2)->update([
                's_soluong' => $Sach2->s_soluong + $soLuong2
            ]);
        }
        if($tenSach3 != null){
            $addChiTietPhieuTra = DB::table('chitietphieutra')->insert([
                'pt_id' =>  $idPhieuTra,
                's_id' => $tenSach3,
                'ctpt_soluongsachtra' => $soLuong3
            ]);
            $Sach3 = DB::table('sach')->where('s_id','=',$tenSach3)->first();
            $upDateSach3 = DB::table('sach')->where('s_id','=',$tenSach3)->update([
                's_soluong' => $Sach3->s_soluong + $soLuong3
            ]);
        }
        if($tenSach4 != null){
            $addChiTietPhieuTra = DB::table('chitietphieutra')->insert([
                'pt_id' =>  $idPhieuTra,
                's_id' => $tenSach4,
                'ctpt_soluongsachtra' => $soLuong4
            ]);
            $Sach4 = DB::table('sach')->where('s_id','=',$tenSach4)->first();
            $upDateSach4 = DB::table('sach')->where('s_id','=',$tenSach4)->update([
                's_soluong' => $Sach4->s_soluong + $soLuong4
            ]);
        }
        if($tenSach5 != null){
            $addChiTietPhieuTra = DB::table('chitietphieutra')->insert([
                'pt_id' =>  $idPhieuTra,
                's_id' => $tenSach5,
                'ctpt_soluongsachtra' => $soLuong5
            ]);
            $Sach5 = DB::table('sach')->where('s_id','=',$tenSach5)->first();
            $upDateSach5 = DB::table('sach')->where('s_id','=',$tenSach5)->update([
                's_soluong' => $Sach5->s_soluong + $soLuong5
            ]);

        }
        return redirect()->route('quan-ly-tra-sach');

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
    public function ChiTietPhieuTra($id)
    {
        $DocGia=DB::table('docgia')->get();
        $PhieuTra = DB::table('phieutra')->where('pt_id',$id)
            ->join('docgia', 'docgia.dg_id', 'phieutra.dg_id')
            ->get();
        $ChiTietPhieuTra = DB::table('chitietphieutra')
            ->join('phieutra', 'phieutra.pt_id', 'chitietphieutra.pt_id')
            ->join('sach', 'sach.s_id', 'chitietphieutra.s_id')
           // ->join('chitietphieumuon', 'chitietphieumuon.ctpm_id', 'chitietphieutra.ctpm_id')
            ->where('phieutra.pt_id', $id)
            ->get();
        // $soLuongSachMuon = DB::table('chitietphieutra')
        // ->join('docgia', 'docgia.dg_id', 'chitietphieumuon.dg_id')
        // ->get();
            // ->join('chitietphieumuon', 'chitietphieumuon.ctpm_id', 'chitietphieutra.ctpm_id')

            // ->get();
        return view('QLTV.quanlymuontra.chitietphieutra', compact('DocGia', 'ChiTietPhieuTra', 'PhieuTra'));
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
}

