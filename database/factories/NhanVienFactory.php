<?php

namespace Database\Factories;

use App\Helpers\PhoneNumberHelper;
use App\Helpers\RandomAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NhanVienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ten' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'so_dien_thoai' => PhoneNumberHelper::generateVietnamesePhoneNumber(),
            'dia_chi' => RandomAddress::getRandomAddress()
        ];
    }
}
