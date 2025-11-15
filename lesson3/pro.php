<?php

function tub ($a){
    $k=false;
    for($i=2; $i<=sqrt($a); $i++){
        if($a%$i==0){
            $k=true;
            break;
        }
    }
    if($k==false){
        return true;
    }
    else{
        return false;
    }
}
$m=1000;
$n=2000;
$k=0;
if($n==2){
    echo 1;
}
else{
    for($i=$m; $i<=$n; $i++){
        if(tub($i)){
            $k++;
        }
    }
    echo $k; 
}






?>