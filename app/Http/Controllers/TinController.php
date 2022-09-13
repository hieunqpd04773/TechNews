<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\Tin;
use App\Models\User;
class TinController extends Controller
{
    public function __construct()
    {
        $allDM=DanhMuc::all();
        view()->share('allDM', $allDM);
        $allTin=Tin::orderBy('id','DESC')->get();
        view()->share('allTin', $allTin);
    }
   
    public function indexListDienThoai()
    {
        return Tin::where('danhMuc_id', 1)->orderBy('id','DESC')->limit(4)->get();
    }
    public function indexListSocial()
    {
        return Tin::where('danhMuc_id', 2)->orderBy('id','DESC')->limit(4)->get();
    }
    public function indexListBlockChain()
    {
        return Tin::where('danhMuc_id', 3)->orderBy('id','DESC')->limit(4)->get();
    }
    function indexTinPhoBien()
    {
        return Tin::orderBy('tin_luotXem','DESC')->limit(5)->get();
    }
    public function index()
    {
        $tin= new Tin();
        $listTinDienThoai=TinController::indexListDienThoai();
        $listTinSocial=TinController::indexListSocial();
        $listTinBlockChain=TinController::indexListBlockChain();
        
        return view('News.pages.index',['listTinDienThoai'=>$listTinDienThoai,
        'listTinSocial'=>$listTinSocial,'listTinBlockChain'=>$listTinBlockChain
    ]);
    }
    public function getAll()
    {
        return view('Admin.pages.tin');
    }
    public function loadCreate()
    {
        $users=User::where('vaiTro',1)->get();
        return view('Admin.pages.tin_create',['users'=>$users]);
    }
    public function create(Request $request)
    {
        if($request->has('file_upload')){
            $file=$request->file_upload;
            $file_name= date('YmdHi').$file->getClientOriginalName();
            //dd($file_name);
            $file->move(public_path('images/tin'),$file_name);
        }
        $request->merge(['tin_anhBia'=>$file_name]);
        $tin=new Tin();
        $tin->danhMuc_id=$request->input('danhMuc_id');
        $tin->tin_tieuDe=$request->input('tin_tieuDe');
        $tin->tin_tomTat=$request->input('tin_tomTat');
        $tin->tin_anhBia=$request->input('tin_anhBia');
        $tin->tin_noiDung=$request->input('tin_noiDung');
        $tin->tin_ngayDang=$request->input('tin_ngayDang');
        $tin->tin_trangThai=$request->input('tin_trangThai');
        $tin->tacGia_id=$request->input('tacGia_id');
        $tin->save();

        return redirect('admin/tin/index');
    }
    public function loadUpdate($id)
    {
        $tin=Tin::find($id);
        $users=User::where('vaiTro',1)->get();
        return view('Admin.pages.tin_update',['tin'=>$tin,'users'=>$users]);
    }
    public function update(Request $request)
    {
        if($request->file_upload==''){
            $anhBia=$request->input('tin_anhBia');
        }
        else if($request->has('file_upload')){
            $file=$request->file_upload;
            $file_name= $file->getClientoriginalName();
            $file->move(public_path('images/tin'),$file_name);
            $anhBia=$file_name;
        }
        $tin=Tin::find($request->input('id'));
        $tin->danhMuc_id=$request->input('danhMuc_id');
        $tin->tin_tieuDe=$request->input('tin_tieuDe');
        $tin->tin_tomTat=$request->input('tin_tomTat');
        $tin->tin_anhBia=$anhBia;
        $tin->tin_noiDung=$request->input('tin_noiDung');
        $tin->tin_ngayDang=$request->input('tin_ngayDang');
        $tin->tin_trangThai=$request->input('tin_trangThai');
        $tin->tacGia_id=$request->input('tacGia_id');
        $tin->save();

        return redirect('admin/tin/index');
    }
    public function delete($id)
    {
        $tin=Tin::find($id);
        $tin->delete();
        return redirect('admin/tin/index');
    }
}
