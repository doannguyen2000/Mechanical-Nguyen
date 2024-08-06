<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CongViecNhanVien extends Model
{
    use HasFactory;

    protected $table = 'cong_viec_nhan_vien';

    protected $fillable = [
        'cong_viec_id',
        'nhan_vien_id',
        'thoi_gian_bat_dau',
        'thoi_gian_ket_thuc'
    ];
}
