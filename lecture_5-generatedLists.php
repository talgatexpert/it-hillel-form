<?php
$a = ["Список покупок" => "Список покупок"];
$array = [
    [
        "Кофе" => "Кофе",
        "Чай" => "Чай",
        "Молоко" => "Молоко",
        "Колбаса" => "Колбаса",
        "Хлеб" => "Хлеб"],
    "Кофе",
    "Чай",
    "Молоко",
    "Колбаса",
];

function generateUl(array $array)
{
    $arrayKeys = $array[0];
    $html = '<h3>';
//ul lists-----------------
    $html = '<ul>';
//prepare keys
    foreach ($arrayKeys as $key) {
        $html .= "<li>$key</li>";
        $html .= '<br>';
        $html = '<h3> Список покупок </h3>';
        $html .= '<ul>';
        foreach ($array[0] as $item) {
            $html .= "<li>$item</li>";
        }
        $html .= '</li>';
        $html .= '<ul>';

        return $html;
    }
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
<?= generateUl($array) ?>
</body>
</html>