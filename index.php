<?php

$str = 'abcde';

for ($i = 0; $i <= 10; $i++) {
    echo "Жека быдло<br>";
}


// Получили данные из БД
$workers = [
    [
        'name' => 'Алексей',
        'second_name' => 'Любимов',
        'sallary' => 1000,
        'currency' => 'тг.'
    ],
    [
        'name' => 'Иван',
        'second_name' => 'Semen-ов',
        'sallary' => 500,
        'currency' => 'руб.'
    ]
];

// Фильтруем и приводин к нужному результату
$filterData = [];
foreach ($workers as $worker) {
    $filterData[] = [
        'full_name' => ucfirst($worker['name']) . " " . ucfirst($worker['second_name']),
        'sallary' => $worker['sallary'] . " " . $worker['currency'],
    ];
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <?php foreach ($filterData as $user): ?>
    <tr>
        <td>
            <?= $user['full_name'] ?>
        </td>
        <td>
            <?= $user['sallary'] ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</body>
</html>

