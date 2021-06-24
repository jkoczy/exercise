<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\Cookie;

class AuthManagementController extends Controller
{
    public function getlogin()
    {
        return view('AuthManagement.login');
    }
    public function postLogin(Request $request)
    {
       $this->validate($request,[
        'email'=>'required',
        'dien_thoai'=>'required'
       ]);
       //Lay thong tin dang nhap
       $email = $request->input('email');
       $dien_thoai = $request->input('dien_thoai');
       $khach_hang = DB::table('khach_hang')->where(['dien_thoai'=>$dien_thoai,'email'=>$email])->first();
       if($khach_hang)
       {
           //Tao session
           $request->session()->put('ho_ten_kh',$khach_hang->ho_kh . ' ', $khach_hang->ten_kh);
           $request->session()->put('id_kh',$khach_hang->id);
           //Kiem tra ghi nho
           if($request->has('ghi_nho'))
           {
               return redirect('/')->cookie('ho_ten_kh',$khach_hang->ho_kh . ' ' . $khach_hang->ten_kh, 10080)
               ->cookie('id_kh',$khach_hang->id, 10080);//Ve trang theo y muon va tao cookie
           }
           return redirect('/');
        }
           else return redirect()->back()->with('alert','Đăng nhập không thành công');
       }
    public function getLogout(Request $request)
    {
        if($request->session()->has('id_kh')){
            $request->session()->forget('id_kh');
            $request->session()->forget('ho_ten_kh');
        }
        if(\Cookie::has('id_kh')){
            $id_kh = \Cookie::forget('id_kh');
            $ho_ten_kh=\Cookie::forget('ho_ten_kh');
            return redirect('/')->withCookie($id_kh)->withCookie($ho_ten_kh);
        }
        return redirect('/');    
    }
}
