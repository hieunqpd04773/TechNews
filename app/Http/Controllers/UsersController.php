<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    function __construct(){
        $allUser=User::all();
        view()->share('allUser', $allUser);
    }
    public function getAll()
    {
        return view('Admin.pages.user_list');
    }
    public function disable($id)
    {
        $user=User::find($id);
        $user->trangThai=0;
        $user->save();
        return redirect('admin/user/danhsach');
    }
    public function able($id)
    {
        $user=User::find($id);
        $user->trangThai=1;
        $user->save();
        return redirect('admin/user/danhsach');
    }
    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('admin/user/danhsach');
    }
    public function getById($id)
    {
        $user=User::find($id);
        return view('Admin.pages.user_update',['user'=>$user]);
    }
    public function update(Request $request)
    {
        $user=User::find($request->input('id'));
        $user->name=$request->input('hoTen');
        $user->email=$request->input('email');
        $user->hinhAnh=$request->input('hinhAnh');
        $user->trangThai=$request->input('trangThai');
        $user->vaiTro=$request->input('vaiTro');
        $user->save();
        return redirect('admin/user/danhsach');
    }
    public function loadCreate(Type $var = null)
    {
        return view('Admin.pages.user_create');
    }
    public function create(Request $request)
    {
        if($request->has('file_upload')){
            $file=$request->file_upload;
            $file_name= date('YmdHi').$file->getClientOriginalName();
            //dd($file_name);
            $file->move(public_path('images/taikhoan'),$file_name);
        }
        $request->merge(['hinhAnh'=>$file_name]);
        $user=new User();
        $user->name=$request->input('hoTen');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->hinhAnh=$request->input('hinhAnh');
        $user->trangThai=$request->input('trangThai');
        $user->vaiTro=$request->input('vaiTro');
        $user->save();
        return redirect('admin/user/danhsach');
    }
    public function loadLogin()
    {
        return view('Admin.pages.login');
    }
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('admin/danhmuc/');
        }
        else{
            return redirect('adminLoadLogin')->with('thongBao','Đăng nhập không thành công!');
        }
    }
}
