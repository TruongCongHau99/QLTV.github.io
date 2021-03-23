<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DangNhapController extends Controller
{
    public function DangNhap(){
        if(Auth::guard('thuthu')->check()){
            return view('QLTV.quanlydocgia.docgia');
        }
        return view('QLTV.trangchu.index1');
    }

    public function xuLyDangNhap(Request $request)
    {
        $username= $request->username;
        $password=$request->password;

        $arr=[
            'username'=>$username,
            'password'=>$password
        ];

        // dd($arr);

        if(Auth::guard('thuthu')->attempt($arr)){
        //    dd("đăng nhập thành công");
            return redirect()->route('danh-sach-doc-gia');
        }
        else{
        //    dd("tài khoản mật khẩu chưa chính xác");
            return view('QLTV.trangchu.index1');
        }
    }



    public function logout()
    {
        Auth::guard('thuthu')->logout();
        return redirect()->route('danh-sach-sach');
    }
    public function login()
    {
        Auth::guard('thuthu')->logout();
        return redirect()->route('Dang-Nhap');
    }
}

