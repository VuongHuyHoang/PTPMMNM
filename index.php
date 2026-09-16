<?php 
for ($a=1;$a<=10;$a++){
    echo "Bảng cửu chương $a". "<br>";
    for ($i=1;$i<=10;$i++){
        echo "$a * $i =".$a*$i. "<br>";
    }
    echo "\n";
}
?>



<?php

$random = rand(1,100);
echo "Số tự nhiên ngẫu nhiên từ 1--> 100 $random". "<br>" ;
echo " số chẵn nằm trong khoảng đó: ";
for ($i=1;$i<=$random;$i++){
if($i%2==0){
     echo"[$i],  ";
}
}



?>
