<?php

namespace App\Helpers;

class JobHelper
{
    // Danh sách các công việc cơ khí
    protected static $jobs = [
        'Làm cửa nhôm',
        'Làm cửa sắt',
        'Làm mái tôn',
        'Làm khung cửa sắt',
        'Làm lan can sắt',
        'Làm tường chắn',
        'Làm cầu thang sắt',
        'Làm bồn chứa',
        'Làm giá đỡ thiết bị',
        'Làm hầm kỹ thuật',
        'Làm kệ sắt',
        'Làm lồng bảo vệ',
        'Làm vách ngăn',
        'Làm mái che',
        'Làm cửa cuốn',
        'Làm cửa tự động',
        'Làm vỏ máy',
        'Làm khung máy',
        'Làm ống dẫn',
        'Làm cấu kiện thép',
        'Làm hệ thống thông gió',
        'Làm khung nhà xưởng',
        'Làm bồn nước',
        'Làm bảng hiệu',
        'Làm thiết bị công nghiệp',
        'Làm cửa sắt nghệ thuật',
        'Làm hệ thống tấm ốp',
        'Làm sàn thép',
        'Làm cửa lưới',
        'Làm bảng điều khiển',
        'Làm bộ khung giàn',
        'Làm công trình cơ khí',
        'Làm bình áp lực',
    ];

    /**
     * Lấy một công việc ngẫu nhiên từ danh sách
     *
     * @return string
     */
    public static function getRandomJob()
    {
        return self::$jobs[array_rand(self::$jobs)];
    }
}
