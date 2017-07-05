<?php
# Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
# русские — в массив $ru.

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $item) {
    $en[] = $key;
    $ru[] = $item;
}
var_dump($en);
echo "<br>";
var_dump($ru);