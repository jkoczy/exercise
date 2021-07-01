<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Khach_hang;
use App\Models\San_pham;
use App\Http\Requests\StoreKhachHangPost;
use App\Mail\SendEmail;
use Cart;
use Illuminate\Support\Facades\Mail;

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
            return json_encode(array('n'=>'1','count'=>Cart::count()));
        }
        
    }
    public function ThongTinGioHang(Request $request)
    {
        return view('khachhang/thong_tin_gio_hang');
    }
    public function CapNhatGioHang(Request $request)
    {
        $rowid =$request->Th_rowID;
        $soluong = $request->Th_soluong*1;
        Cart::update($rowid,$soluong);
        return redirect('khach-hang/thong-tin-gio-hang');
    }
    public function XoaMatHang(Request $request, $id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
    public function TienHanhDatHang()
    {
        return view('khachhang/them_khach_hang_moi');
    }
    public function store(StoreKhachHangPost $request)
    {
		$validated = $request->validated();
		//create post
        $idkh = DB::table('khach_hang')->insertGetId(
		    ['ho_kh' => $request->ho_kh, 'ten_kh' => $request->ten_kh, 'dia_chi' => $request->dia_chi, 'dien_thoai' => $request->dien_thoai, 'email' => $request->email, 'dien_thoai' => $request->dien_thoai,'thanh_vien'=>0, 'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]
		);
		$idhd = DB::table('hoa_don')->insertGetId(
		    ['ngay_hoa_don' => date('Y-m-d H:m:s'), 'id_ma_kh' => $idkh, 'tong_tien' => str_replace(',', '', Cart::total()), 'dat_coc' => 0, 'con_lai' => str_replace(',', '', Cart::total()), 'tinh_trang' => 0, 'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]
		);
		$dsMH=array();
		foreach (Cart::content() as $row) {
			$dsMH[]=array('id_sohd'=>$idhd,'ma_san_pham'=>$row->id, 'so_luong'=>$row->qty,'don_gia'=>$row->price,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s'));
		}
		DB::table('ct_hoa_don')->insert($dsMH);
        Cart::destroy();
        return redirect('khach-hang/don-dat-hang/'.$idhd);		
    }
    public function DonDatHang($id){
		$DonDatHang = DB::table('hoa_don')
            ->join('khach_hang', 'khach_hang.id', '=', 'hoa_don.id_ma_kh')
            ->join('ct_hoa_don', 'hoa_don.id', '=', 'ct_hoa_don.id_sohd')
            ->join('san_pham', 'san_pham.id', '=', 'ct_hoa_don.ma_san_pham')
            ->select('hoa_don.id','hoa_don.ngay_hoa_don','hoa_don.id_ma_kh','hoa_don.tong_tien','hoa_don.dat_coc','hoa_don.con_lai','khach_hang.ho_kh','khach_hang.ten_kh','khach_hang.dia_chi','khach_hang.dien_thoai','khach_hang.email', 'ct_hoa_don.so_luong', 'ct_hoa_don.don_gia','san_pham.id as MaSP', 'san_pham.ten_san_pham','san_pham.hinh_san_pham')
            ->where('hoa_don.id',$id)
            ->get();
          if(count($DonDatHang)===0)
          	return redirect("/");
        Mail::to($DonDatHang[0]->email)->send(new SendEmail($DonDatHang));
		return view('khachhang/don_dat_hang', ['DonDatHang'=>$DonDatHang]);
	}
}