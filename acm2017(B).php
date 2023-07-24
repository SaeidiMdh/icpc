<?php
$x = 0;
$y = 0;
$answer = [];

do {
    $input =explode(" ", readline(''));
    if( $input[0] == "0000" or $input[1] == "0000" or $input[2] == "0000" or $input[3] == "0000"){
        break;
    }
    $input2 =str_split($input[0].$input[1].$input[2].$input[3]);
    $card = [];
    $i = 1;
    foreach ($input2 as $char)
        $card[$i++] = $char;
    for ($i = 1; $i <= 16; $i++) {
        if ($i % 2 != 0) {
            $card[$i] *= 2;
            if ($card[$i] > 9) {
                $card[$i] -= 9;
            }
        }
    }
    $sum = array_sum($card);
    if ($sum % 10 == 0) {
        $answer[] = "Yes";
    } else {
        $answer[] = "No";
    }

} while ($input[0] != "0000" or $input[1] != "0000" or $input[2] != "0000" or $input[3] != "0000");
foreach ($answer as $gold){
    echo $gold ."\n";
}
