<?php

//$a=[1,];



//$ar=[1,2,4,66,8,9,0,1];
//$arrr=[12,8,3,6,7,0];
//$arr=[11,4,6,7];

//echo $ar[0] . "<br>";

//echo $arrr[1] . "<br>";

//echo $arr[2] . "<br>";

function tub ($a){
    $k=false;
    for($i=2; $i<=sqrt($a); $i++){
        if($a%$i==0){
            $k=true;
            break;
        }
    }
    if($k==false){
        return "tub son";
    }
    else{
        return "tub emas";
    }
}
$b=78;
$a=7;

echo tub($a);


?>
