<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;
    protected $table='danhmuc';
    protected $primaryKey='id';
    public $timestamps = FALSE;
    protected $fillable=[
        'danhMuc_ten'
    ];
    /**
     * Get all of the comments for the DanhMuc
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Tins()
    {
        return $this->hasManyThrough('App\Models\User','App\Models\Tin','danhMuc_id','id');
    }
    public function Tin()
    {
        return $this->hasMany('App\Models\Tin','danhMuc_id','id');
    }
}
