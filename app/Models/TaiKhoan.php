<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    use HasFactory;
    protected $table='taikhoan';
    protected $primaryKey='id';
    protected $fillable=[
        'tk_hoTen',
        'tk_tenDangNhap',
        'tk_matKhau',
        'tk_email',
        'tk_hinhAnh',
        'tk_trangThai',
        'tk_vaiTro'
    ];
}
