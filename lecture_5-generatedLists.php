<?php
$a = ["Список покупок" => "Список покупок"];
$array = [
    [
        "Кофе" => "Кофе",
        "Чай" => "Чай",
        "Молоко" => "Молоко",
        "Колбаса" => "Колбаса",
        "Хлеб" => "Хлеб"]
];


//$array2 = [
//    ["Список покупок 2" => "Список покупок2",
//        "Кофе" => "Кофе",
//        "Чай" => "Чай",
//        "Молоко" => "Молоко",
//        "Колбаса" => "Колбаса",
//        "Хлеб" => "Хлеб"]
//];

function generateOl(array $array )
{
    $arrayKeys = $array[0];
    $html = '<h3>';

    //ul lists-----------------
    $html = '<ul>';
    //prepare keys
    foreach ($arrayKeys as $key) {
        $html .= "<li>$key</li>";
        $html .= '<br>';
    }
    $html .= '</li>';
    $html .= '<ul>';

    return $html;
}

//print_r(generateOl($array));
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
<?= generateOl($array) ?>


</body>
</html>