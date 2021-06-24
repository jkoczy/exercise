<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Khach_hang;
use App\Models\San_pham;
use App\Http\Requests\StoreKhachHangPost;
use Cart;
class KhachHangController extends Controller
{
    public function ThemVaoGioHang(Request $request, $id)
    {
        $sl = $request->sl;
        $sanpham = DB::table('san_pham')->where('id',$id)->first();
        if($sanpham==null)
            return json_encode(array('n'=>0));
        else
        {
            Cart::add($sanpham->id,$sanpham->ten_san_pham,$sl,$sanpham->gia_size_s,['hinh'=>$sanpham->hinh_san_pham]);
            return json_encode(array('n'=>'1'));
        }
        
    }
}