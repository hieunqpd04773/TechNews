<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\Tin;

class DanhMucController extends Controller
{
    /**
     * Store a new flight in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $allDanhMuc=DanhMuc::all();
        view()->share('allDanhMuc', $allDanhMuc);
    }
    public function getAll()
    {
        return view('Admin.pages.danhmuc');
    }
    public function add(Request $request)
    {
        $danhMuc= new DanhMuc();
        $danhMuc->danhMuc_ten=$request->input('danhMuc_ten');
        $danhMuc->save();
        return redirect('admin/danhmuc/index');
    }
    public function delete($id)
    {
        $danhMuc=DanhMuc::find($id);
        $danhMuc->delete();
        return redirect('admin/danhmuc/index');
    }
    public function loadUpdate($id)
    {
        $danhMuc=DanhMuc::find($id);
        return view('Admin.pages.danhmuc_update',['danhMuc'=>$danhMuc]);
    }
    public function update(Request $request)
    {
        $danhMuc=DanhMuc::find($request->input('id'));
        $danhMuc->danhMuc_ten=$request->input('danhMuc_ten');
        $danhMuc->save();
        return redirect('admin/danhmuc/index');
    }
}
