<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cong_viec_nhan_vien', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cong_viec_id')
                ->constrained('cong_viec')
                ->onDelete('cascade');
            $table->foreignId('nhan_vien_id')
                ->constrained('nhan_vien')
                ->onDelete('cascade');
            $table->timestamp('thoi_gian_bat_dau')->nullable();
            $table->timestamp('thoi_gian_ket_thuc')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cong_viec_nhan_vien');
    }
};
