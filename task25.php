<?php
/*25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.
 */

$randLoop = [];
for ($i=1; $i<=10; $i++) {
    $randLoop[] = rand(1, 40);
}
print_r($randLoop);
echo "<br>";

$min = min($randLoop);
$max = max($randLoop);

$minKey = array_search($min, $randLoop);
$maxKey = array_search($max, $randLoop);

$randLoop[$minKey] = $max;
$randLoop[$maxKey] = $min;

print_r($randLoop);