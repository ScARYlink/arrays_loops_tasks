<?php
# 14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
# проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
# выведите на экран 'Есть!', иначе выведите 'Нет!'.

$carpet = [4, 2, 5, 19, 13, 0, 10];
$e = ['key2' =>2, 'key3' =>3, 'key4' =>4];
foreach ($carpet as $point) {
    foreach ($e as $key => $item) {
        if ($point===$item) {
            echo "Есть!"." $key"."<br/>";
        }
    }
    echo "Нет!<br/>";
}