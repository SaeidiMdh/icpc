<?php
$p = (int)readline('');
$q=(int) readline('');
if($p<=50 and $q<=10){
    echo "White";
}else if($q>30){
    echo "Red";
}else {
    echo "Yellow";
}

