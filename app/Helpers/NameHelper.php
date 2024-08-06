<?php

namespace App\Helpers;

class NameHelper
{
    // Các danh sách họ, tên đệm và tên chính mở rộng
    protected static $firstNames = [
        'Nguyễn', 'Trần', 'Lê', 'Phạm', 'Vũ', 'Đặng', 'Hoàng', 'Hồ', 'Bùi', 'Dương',
        'Đỗ', 'Ngô', 'Mai', 'Lý', 'Tô', 'Hà', 'Nghiêm', 'Lương', 'Cao', 'Văn', 'Trịnh', 'Chu', 'Lê', 'Nguyễn', 'Bạch',
        'Triệu', 'Vương', 'Tạ', 'Đinh', 'Hạ', 'Bạch', 'Trịnh', 'Phan', 'Nguyễn', 'Lê', 'Thạch', 'Vương', 'Tạ', 'Mai',
        'Lục', 'Ngũ', 'Vương', 'Hồ', 'Cao', 'Lý', 'Thái', 'Lưu', 'Nguyễn', 'Trí', 'Bùi'
    ];

    protected static $middleNames = [
        'Văn', 'Thị', 'Minh', 'Quốc', 'Thành', 'Hồng', 'Thị', 'Thái', 'Tuấn', 'Hữu',
        'Ngọc', 'Thị', 'Bảo', 'Đức', 'Tấn', 'Thanh', 'Hà', 'Hữu', 'Xuân', 'Khoa',
        'Duy', 'Trí', 'Hương', 'Tâm', 'Anh', 'Sơn', 'Phương', 'Bích', 'Hoàng', 'Như',
        'Đức', 'Nhật', 'Khánh', 'Chí', 'Linh', 'Dương', 'Vỹ', 'Tuấn', 'Trâm', 'Linh'
    ];

    protected static $lastNames = [
        'An', 'Bích', 'Cường', 'Dũng', 'Hạnh', 'Hà', 'Hòa', 'Hương', 'Khoa', 'Nam',
        'Như', 'Thảo', 'Mai', 'Tú', 'Ngân', 'Diệp', 'Linh', 'Lan', 'Tâm', 'Sang',
        'Vỹ', 'Phúc', 'Tú', 'Hằng', 'Giang', 'Vân', 'Hòa', 'Linh', 'Bảo', 'Trâm',
        'Khanh', 'Lễ', 'Thi', 'Hoa', 'Thùy', 'Duy', 'Trí', 'Ngọc', 'Hằng', 'Mai',
        'Hương', 'Châu', 'Hằng', 'Hải', 'Tài', 'Thanh', 'Đặng', 'Thúy', 'Lê'
    ];

    /**
     * Generate a random Vietnamese full name.
     *
     * @return string
     */
    public static function generateVietnameseFullName()
    {
        $firstName = self::$firstNames[array_rand(self::$firstNames)];
        $middleName = self::$middleNames[array_rand(self::$middleNames)];
        $lastName = self::$lastNames[array_rand(self::$lastNames)];

        return "$firstName $middleName $lastName";
    }

    /**
     * Generate a random Vietnamese full name without middle name.
     *
     * @return string
     */
    public static function generateVietnameseFullNameWithoutMiddleName()
    {
        $firstName = self::$firstNames[array_rand(self::$firstNames)];
        $lastName = self::$lastNames[array_rand(self::$lastNames)];

        return "$firstName $lastName";
    }
}
