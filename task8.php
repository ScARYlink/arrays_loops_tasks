<?php
# 8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
# '­1­2­3­4­5­6­7­8­9­'.

$unique_arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$sosage = '';
foreach ($unique_arr as $item) {
    $sosage .= $item;
}
var_dump($sosage);
