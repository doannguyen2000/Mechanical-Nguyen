<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;

    protected $table = 'nhan_vien';

    protected $fillable = [
        'ten',
        'email',
        'so_dien_thoai',
        'dia_chi'
    ];

    public function congViecs()
    {
        return $this->belongsToMany(CongViec::class, 'cong_viec_nhan_vien')
            ->withPivot('thoi_gian_bat_dau', 'thoi_gian_ket_thuc')
            ->withTimestamps();
    }
}
