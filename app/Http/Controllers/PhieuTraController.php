<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PhieuTraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sach = DB::table('sach')->get();
        $DocGia = DB::table('docgia')->get();
        $PhieuTra = DB::table('phieutra')
            ->join('docgia', 'docgia.dg_id', 'phieutra.dg_id')
            ->get();

        return view('QLTV.quanlymuontra.phieutra', compact('PhieuTra', 'Sach', 'DocGia'));
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
        $dellSach = DB::table('phieutra')->where('pt_id', $id)->delete();
        // Session::flash('alert2', 'Xóa thành công');
        return redirect()->route('quan-ly-tra-sach');
    }
}
