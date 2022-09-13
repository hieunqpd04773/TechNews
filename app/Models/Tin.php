<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory;
    protected $table='tin';
    protected $primaryKey='id';
    protected $dates=['tin_ngayDang'];
    public $timestamps = true;
    protected $attributes=[
        'tin_anhBia'=>'',
        'tin_trangThai'=>'1',
        'tin_luotXem'=>0
    ];
    protected $fillable=[
        'danhMuc_id',
        'tin_tieuDe',
        'tin_tomTat',
        'tin_anhBia',
        'tin_noiDung',
        'tin_ngayDang',
        'tin_trangThai',
        'tin_luotXem',
        'tacGia_id'
    ];
    public function DanhMuc()
    {
        return $this->belongsto('App\Models\DanhMuc','danhMuc_id','id');
    }
    public function User()
    {
        return $this->belongsto('App\Models\User','tacGia_id', 'id');
    }
}
