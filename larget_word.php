<?php
// Your code here!
$str = 'How was uour day';

$p = explode(' ', $str);

$temp = '';

if(count($p)>0){
    
    $temp = $p[0];
    for($i=0; $i<count($p); $i++){
    
        if(strlen($p[$i]) >= strlen($temp)){
          $temp =  $p[$i];
        }
    }
    
 }else{
    $temp = $p;
 }
 
 echo $temp;

?>
