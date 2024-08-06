<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;

    protected $table = 'khach_hang';

    protected $fillable = [
        'ten',
        'email',
        'so_dien_thoai',
        'dia_chi',
    ];
}
