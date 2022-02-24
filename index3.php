<?php
//Giai phuong trinh bac nhat ax + b = 0;
$a = 5;
$b = 6;
if($a == 0){
    if($b == 0){
        echo 'Phuong trinh co vo so nghiem';
    }else{
        echo 'Phuong trinh vo nghiem';
    }
}else{
    $x = - $b / $a;
    echo "Pt co nghiem: $x";
}
?>