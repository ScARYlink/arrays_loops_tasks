<?php
/*22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx*/

for ($i=1; $i<=5; $i++) {
    $j=1;
    while ($i>=$j) {
        echo "xx";
        $j++;
    }
    echo "<br>";
}
