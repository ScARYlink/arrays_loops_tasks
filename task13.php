<?php
# 13. Вывести таблицу умножения

$rows=10;
$cols=10;

echo '<table border="2">';
for ($tr=1; $tr<=$rows; $tr++) {
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++) {
        echo '<td>'.$tr*$td.'</td>';
    }
    echo '</tr>';
}
echo '</table>';