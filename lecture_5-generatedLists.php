<?php
$array = [
    ["Список покупок"=>"Список покупок","Кофе" => "Кофе", "Чай" => "Чай", "Молоко" => "Молоко", "Колбаса" => "Колбаса", "Хлеб" => "Хлеб"],
];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>формирования html списков для массива</title>

</head>
<body>
<div class="container">
<!--    <h3>Список покупок</h3>-->
<!--    <ol>-->
<!--        <li>Кофе</li>-->
<!--        <li>Чай</li>-->
<!--        <li>Молоко</li>-->
<!--        <li>Колбаса</li>-->
<!--        <li>Хлеб</li>-->
<!--    </ol>-->
    <?php foreach ($array as $item) { ?>
        <h3><?= $item['Список покупок'] ?></h3>

        <ol>
            <li><?= $item['Кофе'] ?></li>
            <li><?= $item['Чай'] ?></li>
            <li><?= $item['Молоко'] ?></li>
            <li><?= $item['Колбаса'] ?></li>
            <li><?= $item['Хлеб'] ?></li>
        </ol>
    <?php } ?>
</div>

</body>
</html>