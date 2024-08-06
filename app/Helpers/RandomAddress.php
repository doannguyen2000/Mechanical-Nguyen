<?php

namespace App\Helpers;

class RandomAddress
{
    protected static function getJsonData()
    {
        $filePath = public_path('asset/vietnamAddress.json'); // Đường dẫn đến file JSON

        if (!file_exists($filePath)) {
            throw new \Exception("File JSON không tồn tại tại: " . $filePath);
        }

        $jsonContent = file_get_contents($filePath);

        return json_decode($jsonContent, true);
    }

    public static function getRandomAddress()
    {
        // Đọc dữ liệu JSON từ file
        $data = self::getJsonData();

        if (!is_array($data)) {
            throw new \Exception("Dữ liệu JSON không hợp lệ hoặc không thể giải mã.");
        }

        // Chọn ngẫu nhiên một tỉnh
        $province = $data[array_rand($data)];

        if (!isset($province['Districts']) || !is_array($province['Districts'])) {
            throw new \Exception("Dữ liệu không hợp lệ: Không có 'Districts' trong tỉnh.");
        }

        // Chọn ngẫu nhiên một quận/huyện trong tỉnh
        $district = $province['Districts'][array_rand($province['Districts'])];

        if (!isset($district['Wards']) || !is_array($district['Wards'])) {
            throw new \Exception("Dữ liệu không hợp lệ: Không có 'Wards' trong quận/huyện.");
        }

        // Chọn ngẫu nhiên một xã/phường trong quận/huyện
        $ward = $district['Wards'][array_rand($district['Wards'])];

        // Tạo địa chỉ ngẫu nhiên
        return sprintf(
            "%s, %s, %s",
            $ward['Name'] ?? 'Tên xã/phường không có',
            $district['Name'] ?? 'Tên quận/huyện không có',
            $province['Name'] ?? 'Tên tỉnh không có'
        );
    }
}
