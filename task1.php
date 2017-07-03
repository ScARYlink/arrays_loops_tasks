<?php
# Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.

$language = ['html', 'css', 'php', 'js', 'jq'];
foreach ($language as $item) {
    echo "$item<br>";
}