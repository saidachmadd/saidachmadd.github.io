<?php

$start=375;
$y=2020;
$m=8;


for($id=0;$id<=25;$id++){
    echo "UPDATE `pemakaian_obats` SET tanggal='";
    
    echo $y;

    echo "-";
    
    if($m<10){
        echo "0".$m;

    }
    if($m>9){
        echo $m;

    }

    $m++;
    if ($m>12){
        $m=1;
        $y=$y+1;
    }
    
    echo "-01' ";
    echo "WHERE `id`=".$start+$id.";";
    echo "<br>";
} 




?>