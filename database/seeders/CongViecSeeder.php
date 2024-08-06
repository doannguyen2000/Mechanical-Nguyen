<?php

namespace Database\Seeders;

use App\Models\CongViec;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CongViecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CongViec::factory()->count(1000)->create();
    }
}
