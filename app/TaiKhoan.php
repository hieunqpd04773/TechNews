<?php

namespace App;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TaiKhoan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table='taikhoan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $attributes=[
        'tk_hinhAnh'=>'',
        'tk_trangThai'=>1,
        'tk_vaiTro'=>1
    ];
    protected $fillable = [
        'tk_hoTen',
        'tk_tenDangNhap',
        'tk_matKhau',
        'tk_email',
        'tk_hinhAnh',
        'tk_trangThai',
        'tk_vaiTro'
    ];
    public $timestamps = false;
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
        // 'email_verified_at' => 'datetime',
    // ];
    public function getAuthPassword()
    {
      return $this->passcode;
    }
}
