<?php

$one = 1;
$two = 2;

$three = $one + $two;

//echo ($three === 3) ? '1 plus 2 equals 3!' : 'Something is terribly wrong';

echo date('H:i:s') . '<br>';
for($i=1; $i<10000000; $i++) {
    $three++;
}
echo date('H:i:s');