<?php
# 18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
# выходные дни следует вывести жирным.

$days = array("1"=>"Понедельник","2"=>"Вторник","3"=>"Среда","4"=>"Четверг","5"=>"Пятница", "6"=>"Суббота", "7"=>"Воскресенье");
foreach($days as $key=>$item){
    $curDay=date('N');
    if($key>=6){
        echo "<b style='color: red;'>$item</b>".", ";
    } else {
        echo "<i style='color: blue;'>$item</i>".", ";
    }
}