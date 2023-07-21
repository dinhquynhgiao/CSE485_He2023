<?php
    $a = [
        'a' => [
            'b' => 0,
            'c' => 1
        ],
        'b' => [
            'e' => 2,
            'o' => [
                'b' => 3
                ]
            ]
        ];
    $valueb = $a['b']['o']['b'];
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= $valueb ?></p>
</body>
</html>