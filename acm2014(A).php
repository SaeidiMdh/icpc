<?php

do{
    list($a,$b,$c,$d)= explode(" ",readline(''));
    $outs[] =(($c - $b)." ".($d - $a));

}while ($a !=0  and $b!=0 and $c!=0 and $d!=0);
foreach ($outs as $out ){
    if ($out == "0"." "."0"){
    break;
    }
    echo $out."\n";

}