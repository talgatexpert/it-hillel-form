<?php

$array = [
    "Кофе",
    "Чай",
    "Молоко",
    "Колбаса",
];
//, string $header, string $type
function generateUl(array $array, $type = "ul", $header = null  )
{
    $html = '';

    if (!is_null($header)){
    $html .= '<h3>' . $header. '</h3>';
}
    $html .= '<'. $type .'>';
    foreach ($array as $item) {
        $html .= "<li>$item</li>";
        $html .= "<br>";
    }
    $html .= '<' . $type .'>';

    return $html;
}

//print_r(generateOl($array));
//print_r(generateUl($array,'ul', 'Список покупок'));
//'Список покупок', 'ul'
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
<?= generateUl($array,'ul', 'Список покупок') ?>
</body>
</html>