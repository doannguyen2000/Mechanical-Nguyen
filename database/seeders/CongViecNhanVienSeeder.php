<?php

namespace Database\Seeders;

use App\Models\CongViec;
use App\Models\NhanVien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CongViecNhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nhanViens = NhanVien::all();
        $congViecs = CongViec::all();

        foreach ($nhanViens as $nhanVien) {
            $congViecsRandom = $congViecs->random(rand(1, 3)); // Gán ngẫu nhiên từ 1 đến 3 công việc cho mỗi nhân viên

            foreach ($congViecsRandom as $congViec) {
                $nhanVien->congViecs()->attach($congViec->id, [
                    'thoi_gian_bat_dau' => now(),
                    'thoi_gian_ket_thuc' => now()->addDays(rand(1, 10)),
                ]);
            }
        }
    }
}
