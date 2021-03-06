<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreSanPhamPost;
use App\Models\San_pham;
class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = DB::table('slider')->where('trang_thai',1)->get();
        $dsLoaiSanPham = DB::table('loai_san_pham')->select('id','ten_loai')->take(3)->get();
        $dsSPTheoLoai=array();
        foreach($dsLoaiSanPham as $item){
            $dsSPTheoLoai[$item->ten_loai]=DB::table('san_pham')->where('ma_loai',$item->id)->take(3)->get()->toArray();
        }
        $dssp = DB::table('san_pham')->get();
        return view('sanpham.index',['dsSPTheoLoai'=>$dsSPTheoLoai,'sliders'=>$sliders]);
    }
    public function index2()
    {
        $dssp = DB::table('san_pham')->where('xoa',0)->orderBy('ma_loai')->paginate(12);
        return view('sanpham.index2',['dssp'=>$dssp]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaiSanPham = DB::table('loai_san_pham')->select('id','ten_loai')->get();
        return view('sanpham.create',['lsp'=>$loaiSanPham]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSanPhamPost $request)
    {
        // $this->validate($request,[
        //     'ten_san_pham'=>'required',
        //     'mo_ta_tom_tat'=>'required',
        //     'hinh_san_pham' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $validated = $request->validated();
        $name_hinh='';
        if ( $request->hasFile('hinh_san_pham')){
            if ($request->file('hinh_san_pham')->isValid()){
                $file = $request->file('hinh_san_pham');
                $name = $file->getClientOriginalName();
                $file->move('resources/hinh/hinh_san_pham' , $name);
                $name_hinh = $name;
            }
        }
        $result = DB::table('san_pham')->insert(
            [
                'ten_san_pham'=>$request->ten_san_pham,
                'ma_loai'=>$request->ma_loai,
                'ten_url'=>$this->bo_dau_vn($request->ten_san_pham),
                'mo_ta_tom_tat'=>$request->mo_ta_tom_tat,
                'hinh_san_pham'=>$name_hinh,
                'chi_tiet'=>$request->chi_tiet,
                'gia_size_s'=>$request->gia_size_s,
                'gia_size_m'=>$request->gia_size_m,
                'giam_gia'=>0,
                'trang_thai'=>1,
                'hot'=>0,
                'like'=>0,
                'xoa'=>0
            ]
        );
        if($result)
            return redirect('san-pham/them-san-pham')->with('alert','Add success');
        else
            return redirect('san-pham/them-san-pham')->with('alert','Add not success');
    }
    function bo_dau_vn ($str){
        
        $unicode = array(
         
        'a'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???',
         
        'd'=>'??',
         
        'e'=>'??|??|???|???|???|??|???|???|???|???|???',
         
        'i'=>'??|??|???|??|???',
         
        'o'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???',
         
        'u'=>'??|??|???|??|???|??|???|???|???|???|???',
         
        'y'=>'??|???|???|???|???',
         
        'A'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???',
         
        'D'=>'??',
         
        'E'=>'??|??|???|???|???|??|???|???|???|???|???',
         
        'I'=>'??|??|???|??|???',
         
        'O'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???',
         
        'U'=>'??|??|???|??|???|??|???|???|???|???|???',
         
        'Y'=>'??|???|???|???|???',
         
        );
         
        foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        $str = str_replace(' ','-',$str);
        $str=strtolower($str);
        return $str;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $arrId=explode('-',$id);
        $id =$arrId[count($arrId)-1];
        $sanpham = DB::table('san_pham')->where('id',$id)->first();
        return view('sanpham.show',['sanpham'=>$sanpham]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $san_pham = San_pham::find($id);
        $loaiSanPham = DB::table('loai_san_pham')->select('id','ten_loai')->get();
        return view('sanpham.edit',['san_pham'=>$san_pham,'lsp'=>$loaiSanPham]);
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
        $this->validate($request,[
            'ten_san_pham'=>'required',
            'mo_ta_tom_tat'=>'required',
            #'hinh_san_pham' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $san_pham = San_pham::find($id);
        $loaiSanPham = DB::table('loai_san_pham')->select('id','ten_loai')->get();
        
        $name_hinh=$san_pham->hinh_san_pham;
        if ( $request->hasFile('hinh_san_pham')){
            if ($request->file('hinh_san_pham')->isValid()){
                $file = $request->file('hinh_san_pham');
                $name = $file->getClientOriginalName();
                $file->move('resources/hinh/hinh_san_pham' , $name);
                $name_hinh = $name;
            }
        }

        $san_pham->ten_san_pham=$request->ten_san_pham;
        $san_pham->ma_loai=$request->ma_loai;
        $san_pham->ten_url=$this->bo_dau_vn($request->ten_san_pham);
        $san_pham->mo_ta_tom_tat=$request->mo_ta_tom_tat;
        $san_pham->hinh_san_pham=$name_hinh;
        $san_pham->chi_tiet=$request->chi_tiet;
        $san_pham->gia_size_s=$request->gia_size_s;
        $san_pham->gia_size_m=$request->gia_size_m;
        $san_pham->giam_gia=0;
        $san_pham->trang_thai=1;
        $san_pham->hot=0;
        $san_pham->like=0;
        $san_pham->xoa=0;
        $result = $san_pham->save();
        if($result)
            return redirect('san-pham/cap-nhat-san-pham/'.$id)->with('alert','Add success');
        else
            return redirect('san-pham/cap-nhat-san-pham/'.$id)->with('alert','Add not success');
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
