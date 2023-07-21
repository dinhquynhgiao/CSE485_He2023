<?php
    function convertToUpperCase($array) {
        // Duyệt qua từng phần tử của mảng
        foreach ($array as &$value) {
            // Nếu phần tử của mảng là chuỗi, chuyển đổi thành chữ hoa
            if (is_string($value)) {
                $value = strtoupper($value);
            }
        }
        unset($value);
        // Trả về mảng đã chuyển đổi
        return $array;
    }
    
    // Áp dụng với mảng $arrs = ['1', 'b', 'c', 'd']
    $arrs = ['1', 'b', 'c', 'd'];
    $newArrs = convertToUpperCase($arrs);
    print_r($newArrs);
    
    // Áp dụng với mảng $arrs = ['a', 0, null, false]
    $arrs = ['a', 0, null, false];
    $newArrs = convertToUpperCase($arrs);
    print_r($newArrs);
?>