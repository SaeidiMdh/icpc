<?php
$x = 0;
$y = 0;
do {
    $input = explode(" ", readline(''));
    $arr[] = $input;
    $answer[] = $input[0] . $input[1] . $input[2] . $input[3];
} while ($input[0] != "0000" or $input[1] != "0000" or $input[2] != "0000" or $input[3] != "0000");


for ($x = 0; $x < count($answer) - 1; $x++) {
    for ($y = 0; $y < 15; $y++) {
        if (($y % 2) == 0) {
            $m = $answer[$x][$y] * 2;
        }
        if ($m > 9) {
            $m = $m - 9;
        }
        $sum[] = $m;
    }
    array_sum($sum);
}

$sumeven = 0;
$y = 0;
$x = 0;
for ($x = 0; $x < count($answer) - 1; $x++) {
    if (($y % 2) != 0) {
        for ($y = 0; $y < 16; $y++) {
            $sumeven = $answer[$x][$y] + $sumeven;
            $steptwo[] = $sumeven;
        }
    }
}

