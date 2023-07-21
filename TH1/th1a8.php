<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

    $max = $min = $array[0];
    $max_length = $min_length = strlen($array[0]);
    
    foreach ($array as $value) {
        $length = strlen($value);
        if ($length > $max_length) {
            $max = $value;
            $max_length = $length;
        }
        if ($length < $min_length) {
            $min = $value;
            $min_length = $length;
        }
    }
    
    echo "Chuỗi lớn nhất là $max, độ dài = $max_length<br>";
    echo "Chuỗi nhỏ nhất là $min, độ dài = $min_length";
?>