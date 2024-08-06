<?php

namespace Database\Factories;

use App\Helpers\JobHelper;
use App\Models\KhachHang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CongViecFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ten' => JobHelper::getRandomJob(),
            'mo_ta' => JobHelper::getRandomJob(),
            'khach_hang_id' => KhachHang::factory(), // Giả sử bạn có factory cho KhachHang
        ];
    }
}
