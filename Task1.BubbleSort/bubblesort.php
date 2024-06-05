<?php

$array = [60, 50, 30, 70, 20, 10, 5, 17, 46, 32];
print_r($array);
echo "<br>";
for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = 0; $j < count($array) -$i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $old = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $old;
        }
    }
}

print_r($array);