<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BinhLuan;

class BinhLuanController extends Controller
{
    function __construct()
    {
        $allBl=BinhLuan::all();
        view()->share('allBl', $allBl);
    }
    public function getAll()
    {
        return view('Admin.pages.binhluan');
    }
    public function hidden($id)
    {
        $bl=BinhLuan::find($id);
        $bl->bl_trangThai=0;
        $bl->save();
        return redirect('admin/binhluan/index');

    }
    public function delete($id)
    {
        $bl=BinhLuan::find($id);
        $bl->delete();
        return redirect('admin/binhluan/index');

    }
}
