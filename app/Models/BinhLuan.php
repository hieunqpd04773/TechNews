<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $table='binhluan';
    protected $primaryKey='id';
    protected $attributes=[
        'bl_trangThai'=>1
    ];
    public $timestamps= TRUE;
    protected $fillable=[
        'bl_noiDung',
        'tin_id',
        'bl_trangThai',
        'nguoiDung_id'
    ];
    /**
     * Get the user that owns the BinhLuan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Tin()
    {
        return $this->belongsTo('App\Models\Tin', 'tin_id', 'id');
    }
    public function User()
    {
        return $this->belongsTo('App\Models\User', 'nguoiDung_id', 'id');
    }
}
