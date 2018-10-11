<!DOCTYPE html>
<html>
<body>
<?php

function burbuja($array)
{
    for($i=1;$i<count($array);$i++){

        for($j=0;$j<count($array)-$i;$j++){

            if($array[$j]>$array[$j+1]){

                $k=$array[$j+1];
                $array[$j+1]=$array[$j];
                $array[$j]=$k;

            }
        }
    }
 
    return $array;
}
 
$a=array(59,98,4,75,38,8,2,1,6);
 
echo "Iniciales<br>";
for($i=0;$i<count($a);$i++){
  echo $a[$i]."\n";
}
  
 
$arrayB=burbuja($a);
 
echo "<br><br>Ordenados<br>";
for($i=0;$i<count($arrayB);$i++){
    echo $arrayB[$i]."\n";
	}
?>
</body>
</html>