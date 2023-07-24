<?php
$ch1=explode(" ",readline(''));//     پرسپولیس میزبان
$ch2=explode(" ",readline('')); //     استقلال میزبان 
$p1=$ch1[0];
$s1=$ch1[1];
$p2=$ch2[1];
$s2=$ch2[0];
$pers =$p1+$p2;
$est  =$s1+$s2;
if ($pers > $est){
    echo "Perspolis";
}else if($pers < $est ){
    echo "Esteghlal";
}else{
    if ($s1 > $p2){
        echo "Esteghlal";
    }else if($s1 < $p2) {
        echo "Perspolis";
    }
else{
    echo "Penalty";
}
}