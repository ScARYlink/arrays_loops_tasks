<?php
# 16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
# выведите на экран столбец элементов массива, как показано на картинке.
# 1, 2, 3
# 4, 5, 6
# 7, 8, 9

$by_three = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$count = 0;
foreach ($by_three as $item) {
    $count++;
    if ($count<3) {
        echo $item .", ";
    } elseif ($count==3) {
        echo $item ."<br>";
    } elseif ($count>3 && $count<6) {
        echo $item .", ";
    } elseif ($count==6) {
        echo $item . "<br>";
    } elseif ($count>6 && $count<9) {
        echo $item .", ";
    } else {
        echo $item;
    }
}