<?php
do {$customer = explode(" ",readline(''));
    $min  = $customer[0];
    $data = $customer[1];
    if($min==0 and $data==0){
        break;
    }
    $num1 = ($min * 30) + ($data * 40);
    $num2 = ($min * 35) + ($data * 30);
    $num3 = ($min * 40) + ($data * 20);
    $goldkey[]= (min($num1, $num2, $num3));
 }while ($min!=0 and $data!=0);
foreach ($goldkey as $cost){
    echo $cost."\n";
}