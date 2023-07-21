<?php
    function convertToLowerCase($array) {
        foreach ($array as &$value) {
            if (is_string($value)) {
                $value = strtolower($value);
            }
        }
        unset($value);
        return $array;
    }
    
    $arrs = ['1', 'B', 'C', 'E'];
    $newArrs = convertToLowerCase($arrs);
    print_r($newArrs);
    
    $arrs = ['a', 0, null, false];
    $newArrs = convertToLowerCase($arrs);
    print_r($newArrs);
?>