<?php

namespace App\Http\Controllers;
use App\Models\Loai_san_pham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreLoaiSanPhamPost;
class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dslsp = Loai_san_pham::get();
        return view('loaisanpham.index',['dslsp'=>$dslsp]);
    }
    public function index2()
    {
        $dslsp = Loai_san_pham::where('trang_thai',1)->paginate(4);
        return view('loaisanpham.index2',['dslsp'=>$dslsp]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loaisanpham.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoaiSanPhamPost $request)
    {
        // $this->validate($request,[
        //     'ten_loai'=>'required',
        //     'hinh' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $validated = $request->validated();
        $name_hinh='';
        if ( $request->hasFile('hinh')){
            if ($request->file('hinh')->isValid()){
                $file = $request->file('hinh');
                $name = $file->getClientOriginalName();
                $file->move('resources/hinh' , $name);
                $name_hinh = $name;
            }
        }
        $loai_san_pham = new Loai_san_pham;
        $loai_san_pham->ten_loai = $request->ten_loai;
        $loai_san_pham->hinh = $name_hinh;
        $loai_san_pham->ghi_chu = $request->ghi_chu;
        $loai_san_pham->trang_thai = isset($request->trang_thai)?$request->trang_thai:false;
        $result=$loai_san_pham->save();

        if($result)
            return redirect('loai-san-pham/them')->with('alert','Add success');
        else
            return redirect('loai-san-pham/them')->with('alert','Add not success');
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
        $loai_san_pham = Loai_san_pham::find($id);
        return view('loaisanpham.edit',['loai_san_pham'=>$loai_san_pham]);
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
            'ten_loai'=>'required',
            'hinh' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $name_hinh='';
        if ( $request->hasFile('hinh')){
            if ($request->file('hinh')->isValid()){
                $file = $request->file('hinh');
                $name = $file->getClientOriginalName();
                $file->move('resources/hinh' , $name);
                $name_hinh = $name;
            }
        }
        $loai_san_pham = Loai_san_pham::find($id);
        if($name_hinh=='')
            $sanpham = $loai_san_pham->hinh;
        $loai_san_pham->ten_loai = $request->ten_loai;
        $loai_san_pham->hinh = $name_hinh;
        $loai_san_pham->ghi_chu = $request->ghi_chu;
        $loai_san_pham->trang_thai = isset($request->trang_thai)?$request->trang_thai:false;
        $result=$loai_san_pham->save();

        if($result)
            return redirect('loai-san-pham/cap-nhat/'.$id)->with('alert','Edit success');
        else
            return redirect('loai-san-pham/cap-nhat/'.$id)->with('alert','Edit not success');
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
