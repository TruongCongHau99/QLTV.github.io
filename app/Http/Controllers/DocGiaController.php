<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class DocGiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhSachDocGia = DB::table('docgia')

        //->join('loaisach','loaisach.ls_id','docgia.ls_id')
        ->get();
        $danhSachSach=DB::table('sach')->get();
       // $danhSachLoaiSach=DB::table('loaisach')->get();

        return view('QLTV.quanlydocgia.docgia',compact('danhSachDocGia','danhSachSach'));
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
    // public function themdocgia(){
    //     $danhSachDocGia = DB::table('docgia')
    //     ->join('sach','sach.s_id','docgia.s_id')
    //     ->join('loaisach','loaisach.ls_id','docgia.ls_id')
    //     ->get();
    //     $danhSachSach=DB::table('sach')->get();
    //     $danhSachLoaiSach=DB::table('loaisach')->get();
    //     return view('QLTV.quanlydocgia.them',compact('danhSachDocGia','danhSachSach','danhSachLoaiSach'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try{
        $hoTenDocGia= $request->hoTenDocGia;
        $idDocGia= $request->idDocGia;
        $gioiTinh= $request->gioiTinh;
        $diaChi= $request->diaChi;
        $sdt= $request->sdt;
       // $tenSach=$request->tenSach;
        //$tenLoaiSach=$request->tenLoaiSach;
        $ngayMuon=$request->ngayMuon;
        $hanTra=$request->hanTra;
       // $trangThai=$request->$trangThai;
        //phung moi them
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

        $addDocGia = DB::table('docgia')->insert(
            [

            'dg_hoten' => $hoTenDocGia,
            'dg_id' => $idDocGia,
            'dg_gioitinh' => $gioiTinh,
            'dg_diachi' => $diaChi,
            'dg_sdt' => $sdt,
            //'s_id'=>$tenSach,
           // 'ls_id'=>$tenLoaiSach,
            'dg_ngaymuon'=>$ngayMuon,
            'dg_hantra'=>$hanTra,
            //'dg_trangthai'=>$trangThai
            ]
        );
        if($tenSach1 != null){
            $addChiTietPhieuMuon = DB::table('chitietphieumuon')->insert([
                'dg_id' =>  $idDocGia,
                's_id' => $tenSach1,
                'ctpm_soluongsach' => $soLuong1
            ]);
            $Sach1 = DB::table('sach')->where('s_id','=',$tenSach1)->first();
            $upDateSach1 = DB::table('sach')->where('s_id','=',$tenSach1)->update([
                's_soluong' => $Sach1->s_soluong - $soLuong1
            ]);
        }
        if($tenSach2 != null){
            $addChiTietPhieuMuon = DB::table('chitietphieumuon')->insert([
                'dg_id' =>  $idDocGia,
                's_id' => $tenSach2,
                'ctpm_soluongsach' => $soLuong2
            ]);
            $Sach2 = DB::table('sach')->where('s_id','=',$tenSach2)->first();
            $upDateSach2 = DB::table('sach')->where('s_id','=',$tenSach2)->update([
                's_soluong' => $Sach2->s_soluong - $soLuong2
            ]);
        }
        if($tenSach3 != null){
            $addChiTietPhieuMuon = DB::table('chitietphieumuon')->insert([
                'dg_id' =>  $idDocGia,
                's_id' => $tenSach3,
                'ctpm_soluongsach' => $soLuong3
            ]);
            $Sach3 = DB::table('sach')->where('s_id','=',$tenSach3)->first();
            $upDateSach3 = DB::table('sach')->where('s_id','=',$tenSach3)->update([
                's_soluong' => $Sach3->s_soluong - $soLuong3
            ]);
        }
        if($tenSach4 != null){
            $addChiTietPhieuMuon = DB::table('chitietphieumuon')->insert([
                'dg_id' =>  $idDocGia,
                's_id' => $tenSach4,
                'ctpm_soluongsach' => $soLuong4
            ]);
            $Sach4 = DB::table('sach')->where('s_id','=',$tenSach4)->first();
            $upDateSach4 = DB::table('sach')->where('s_id','=',$tenSach4)->update([
                's_soluong' => $Sach4->s_soluong - $soLuong4
            ]);
        }
        if($tenSach5 != null){
            $addChiTietPhieuMuon = DB::table('chitietphieumuon')->insert([
                'dg_id' =>  $idDocGia,
                's_id' => $tenSach5,
                'ctpm_soluongsach' => $soLuong5
            ]);
            $Sach5 = DB::table('sach')->where('s_id','=',$tenSach5)->first();
            $upDateSach5 = DB::table('sach')->where('s_id','=',$tenSach5)->update([
                's_soluong' => $Sach5->s_soluong - $soLuong5
            ]);
        }


        Session::flash('alert','Thêm Thành Công');
        //dd('them thanh cong');
        // dd($addDocGia);
         return redirect()->route('danh-sach-doc-gia');
        // }catch (\Throwable $th) {

        //     Session::flash('alert-themthatbai','Có lỗi trong quá trình thêm');
        //      return redirect()->route('danh-sach-doc-gia');

        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $PhieuMuon=DB::table('docgia')->where('dg_id',$id)->get();
        $ChiTietPhieuMuon= DB:: table('chitietphieumuon')
        ->join('sach','sach.s_id','chitietphieumuon.s_id')
        ->where('chitietphieumuon.dg_id',$id)->get();
        //moiiiiiiiiiiiiiiiiiiiiiiiiiiiii
        $PhieuTra = DB::table('phieutra')
            ->join('docgia', 'docgia.dg_id', 'phieutra.dg_id')
            ->join('chitietphieutra', 'chitietphieutra.pt_id', 'phieutra.pt_id')
            ->get();
            $ChiTietPhieuTra = DB::table('chitietphieutra')
         ->join('phieutra', 'phieutra.pt_id', 'chitietphieutra.pt_id')
            ->join('sach', 'sach.s_id', 'chitietphieutra.s_id')

           // ->join('chitietphieumuon', 'chitietphieumuon.ctpm_id', 'chitietphieutra.ctpm_id')
            ->where('phieutra.pt_id', $id)
            ->get();
        return view('QLTV.quanlydocgia.chitiet',compact('PhieuMuon','ChiTietPhieuMuon','PhieuTra','ChiTietPhieuTra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docGia= DB:: table('docgia')
        ->where('dg_id',$id)->first();
        // ->join('loaisach','loaisach.ls_id','docgia.ls_id')
        // ->join('sach','sach.s_id','docgia.s_id')->first();
        // $loaiSach=DB::table('loaisach')->get();
        // $sach=DB::table('sach')->get();
        return view('QLTV.quanlydocgia.sua',compact('docGia'));
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
        $hoTenDocGia= $request->hoTenDocGia;
        $idDocGia= $request->idDocGia;
        $gioiTinh= $request->gioiTinh;
        $diaChi= $request->diaChi;
        $sdt= $request->sdt;
        //$tenSach=$request->tenSach;
       // $tenLoaiSach=$request->tenLoaiSach;
        $ngayMuon=$request->ngayMuon;
        $hanTra=$request->hanTra;
        try{
            $updateDocGia=DB::table('docgia')->where('dg_id',$id)->update([
                'dg_hoten' =>$request ->tendocgia,
                'dg_id' => $idDocGia,
                'dg_gioitinh' =>$request ->gioitinh,
                'dg_diachi' =>$request ->diachi,
                'dg_sdt' =>$request ->sdt,
                // 's_id'=>$request->tenSach,
                // 'ls_id'=>$request->tenLoaiSach,
                'dg_ngaymuon' =>$request ->ngayMuon,
                'dg_hantra' =>$request ->hanTra
                ]);
                Session::flash('alert-sua','Sửa Thành Công');
                return redirect()->route('danh-sach-doc-gia');
        }catch (\Throwable $th) {
            Session::flash('alert-suathatbai','Sửa thất bại');
            return redirect()->route('danh-sach-doc-gia');
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
        $delDocGia = DB::table('docgia')->where('dg_id',$id)->delete();

        Session::flash('alert-dg','Xóa Thành Công');
        return redirect()->route('danh-sach-doc-gia');
    }


    public function timKiem(Request $request){
        $tuKhoa = $request -> get('tuKhoa');
        $docGiaTimDuoc = DB::table('docgia')
        // ->join('loaisach','loaisach.ls_id','docgia.ls_id')
        // ->join('sach','sach.s_id','docgia.s_id')
        ->where('dg_hoten','like','%'.$tuKhoa.'%')->get();
       //dd($docGiaTimDuoc);
        return view('QLTV.quanlydocgia.timkiem',compact('tuKhoa','docGiaTimDuoc'));
    }

    // public function soluong(Request $request){
    //     $soLuongHienTai=DB::table('sach')->where('s_id',$value->id)->first();
    //     $soLuongGiam=DB::table('sach')->where('s_id',$value->id)->update(
    //         [
    //             's_soluong'=>$soLuongHienTai->s_soluong - $value->quantity
    //         ]
    //     );
    //     return redirect()->back();

    // }


    public function capNhatTrangThai(Request $request)
    {
        // $soLuongTra= $request->soLuongTra;
        // $ChiTiet= DB::table('chitietphieumuon')->first();
        // $upDateSach5 = DB::table('sach')->where('s_id','=',$tenSach5)->update([
        //     's_soluong' => $Sach5->s_soluong - $soLuong5
        // ]);
        // return redirect()->route('danh-sach-doc-gia');
    }

}
