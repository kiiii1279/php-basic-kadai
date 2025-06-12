<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $personal_inf = ['id' => 1, '名前' => '侍太郎', '年齢' => 30];

    foreach ($personal_inf as $key => $value) {

    echo "{$key}:{$value}" . '<br>';
    }
    ?>
</body>
</html>