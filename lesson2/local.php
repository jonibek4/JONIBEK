<!DOCTYPE html>
<html>
<body>

<?php

$dokon1 = array("brand" => "uzb shop", "cauntry" => "uzbekistan");
$dokon1 += ["sity" => "xorazm", "point" => "karvak"  ];

//Output the array:
var_dump($dokon1);


$dokon2 = array("macbook", "asus", "samsung"); 

foreach ($dokon2 as $x) {
  echo "$x <br>";
}

$dokon = array("macbook"=>"13 000 000", "asus"=>"8 000 000", "samsung"=>"6 000 000");
krsort($dokon);

foreach($dokon as $x => $x_value) {
  echo "dokon=" . $x . ", narx=" . $x_value;
  echo "<br>";
}

//$dokon1 = array("brand" => "uzb shop", "cauntry" => "uzbekistan");
//$dokon1 += ["sity" => "xorazm", "point" => "karvak"  ];

//Output the array:
//var_dump($dokon1);



//$dokon2 = array("macbook", "asus", "samsung"); 

//foreach ($dokon2 as $x) {
//  echo "$x <br>";
//}

//$dokon1 = array("brand" => "uzb shop", "cauntry" => "uzbekistan");
//$dokon1 += ["sity" => "xorazm", "point" => "karvak"  ];

//Output the array:
//var_dump($dokon1);

$cars = array (
  array("chehollar",22,18),
  array("telefonlar",15,13),
  array("kompiyuterlar",5,2),
  array("aksesuar",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}

$dokon3 = array (
  array("telefonlar",22,18),
  array("chehollar",15,13),
  array("kompiyuterlar",5,2),
  array("aksesuar",17,15)
);
  
echo $dokon3[0][0].": dokonda bor: ".$dokon3[0][1].", sotildi: ".$dokon3[0][2].".<br>";
echo $dokon3[1][0].": dokonda bor: ".$dokon3[1][1].", sotildi: ".$dokon3[1][2].".<br>";
echo $dokon3[2][0].": dokonda bor: ".$dokon3[2][1].", sotildi: ".$dokon3[2][2].".<br>";
echo $dokon3[3][0].": dokonda bor: ".$dokon3[3][1].", sotildi: ".$dokon3[3][2].".<br>";



//$a=[1,];




/*$ar=[1,2,4,66,8,9,0,1];
$arrr=[12,8,3,6,7,0];
$arr=[11,4,6,7];

echo $ar[0] . "<br>";

echo $arrr[1] . "<br>";

echo $arr[2] . "<br>";*/

$arr=[
  [12,22,33,55,67,],
  [12,3,4,],[6,99,75,]
];

$s=0;
for($i=0; $i<count($arr); $i++){
  for($j=0; $j<count($arr[$i]); $j==){
     if($arr[$i][$j]%2==0){
      $s=$s=$arr[$s][$j];                   
    }
  }
}

echo $s;










?>

</body>
</html>
