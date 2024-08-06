<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CongViec extends Model
{
    use HasFactory;

    protected $table = 'cong_viec';

    protected $fillable = [
        'ten',
        'mo_ta',
        'khach_hang_id'
    ];

    public function nhanViens()
    {
        return $this->belongsToMany(NhanVien::class, 'cong_viec_nhan_vien')
            ->withPivot('thoi_gian_bat_dau', 'thoi_gian_ket_thuc')
            ->withTimestamps();
    }
}
