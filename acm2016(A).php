<?php
do{ $income =readline('');
    if($income <= 1000000 ){
         if($income==0){
            break;
        }
 $goldkey[] =$income; 
}else 
if($income >1000000 and $income <= 5000000){
   
 $tax    = $income/10;
 $income = $income - $tax;
 $goldkey[] =$income;
}else{
    $tax    = ($income*2)/10;
    $income = $income - $tax;
   $goldkey[] = $income;
}} while ($income!=0); 
foreach ($goldkey as $answer){
    echo $answer."\n";
}