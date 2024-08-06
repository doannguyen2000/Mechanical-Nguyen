<?php

namespace App\Helpers;

class PhoneNumberHelper
{
    /**
     * Generate a random Vietnamese phone number.
     *
     * @return string
     */
    public static function generateVietnamesePhoneNumber()
    {
        $prefixes = ['090', '091', '092', '093', '094', '095', '096', '097', '098', '099'];
        $prefix = $prefixes[array_rand($prefixes)];
        $number = str_pad(rand(1000000, 9999999), 7, '0', STR_PAD_LEFT); // 7 chữ số
        return $prefix . $number;
    }
}
