<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;
use App\Models\DanhMuc;
use App\Models\BinhLuan;
use App\Http\Controllers\TinController;
use App\Modes\User;
class PagesController extends Controller
{
    function __construct()
    {
        $allDanhMuc=DanhMuc::all();
        $tinPhoBien=Tin::orderBy('tin_luotXem','DESC')->limit(5)->get();;
        view()->share('allDanhMuc', $allDanhMuc);
        view()->share('tinPhoBien', $tinPhoBien);
    }
    public function index()
    {
        
        $listTinDienThoai=Tin::where('danhMuc_id', 1)->where('tin_trangThai',1)
        ->select('tin.id AS tinID','tin_tieuDe','tin_anhBia','tin_ngayDang','tacGia_id')
        ->orderBy('tin.id','DESC')->limit(4)->get();
        $listTinSocial=Tin::where('danhMuc_id', 2)->where('tin_trangThai',1)
        ->select('tin.id AS tinID','tin_tieuDe','tin_anhBia','tin_ngayDang','tacGia_id')
        ->orderBy('tin.id','DESC')->limit(4)->get();
        $listTinBlockChain=Tin::where('danhMuc_id', 3)->where('tin_trangThai',1)
        ->select('tin.id AS tinID','tin_tieuDe','tin_anhBia','tin_ngayDang','tacGia_id')
        ->orderBy('tin.id','DESC')->limit(4)->get();;
        $data=[
            'listTinDienThoai'=>$listTinDienThoai,
            'listTinSocial'=>$listTinSocial,
            'listTinBlockChain'=>$listTinBlockChain,
        ];
        return view('News.pages.index',['data'=>$data]);
        
    }
    public function getTin($id)
    {
        $tin=Tin::where('tin.id', $id)
        ->first();
        $tin->tin_luotXem=$tin->tin_luotXem+=1;
        $binhLuan=BinhLuan::where('tin_id',$tin->id)->where('bl_trangThai', 1)->get();
        $tin->save();
        return view('News.pages.tinchitiet',['chitiettin'=>$tin,'binhLuan'=>$binhLuan]);
    }
    public function getTinByDanhMuc($id)
    {
        $listTin=Tin::where('danhMuc_id',$id)->where('tin_trangThai',1)->get();
        //var_dump($listTin);
        if(count($listTin)==0){
           
            return view('News.pages.tindanhmuc');
        }
        else{
            
            return view('News.pages.tindanhmuc',['listTin'=>$listTin]);
        }
        
    }
    public function search(Request $request)
    {
        $tukhoa=$request->tukhoa;
        $listTin=Tin::where('tin_tieuDe', 'LIKE', '%'.$tukhoa.'%')
        ->orWhere('tin_tomTat', 'LIKE', '%'.$tukhoa.'%')
        ->orWhere('tin_noiDung', 'LIKE', '%'.$tukhoa.'%')
        ->get();
        if(count($listTin)==0){
            return view('News.pages.tindanhmuc');
        }
        else{
            return view('News.pages.tindanhmuc',['listTin'=>$listTin]);
        }

    }
    public function addComment(Request $request)
    {
        $bl=new BinhLuan();
        $bl->bl_noiDung=$request->bl_noiDung;
        $bl->tin_id=$request->tin_id;
        $bl->nguoiDung_id=$request->nguoiDung_id;
        $bl->save();

        return redirect('tin/'.$request->tin_id);

    }
}
