<?php
# Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
# текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

$days = array("1"=>"Понедельник","2"=>"Вторник","3"=>"Среда","4"=>"Четверг","5"=>"Пятница", "6"=>"Суббота", "7"=>"Воскресенье");
foreach($days as $key=>$item){
    $curDay=date('N');
    if($key>=$curDay){
        $day = $item;
        echo "<i style='color: red;'>$day</i>".", ";
    } else {
        echo "$item".", ";
    }
}