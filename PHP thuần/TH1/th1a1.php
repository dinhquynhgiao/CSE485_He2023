<?php
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

    $sum = array_sum($arrs);

    $product = array_product($arrs);

    $diff = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++){
        $diff -= $arrs[$i];
    }

    $quotient = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++){
        if ($arrs[$i] == 0){
            $quotient = "Undefined";
            break;
        }
        $quotient /= $arrs[$i];
    }
?>