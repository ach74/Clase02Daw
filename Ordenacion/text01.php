<!DOCTYPE html>
<html>
<body>
	<?php

	/**
	 * Nos genera una array desordenada dependiendo del metodo  de ordenacion elegido
	 * @return array
	 */
	function tipoArray(){
		global $opSelect2,$valoresTeclado,$tamaño;
		if ($opSelect2==1) {
			echo "<br> Aleatoria  <br>";
			$arrayAleatoria = array();
			for($i=0;$i<$tamaño-1;$i++){
				$arrayAleatoria[$i]= rand(0, 100);
			}
			return $arrayAleatoria;
		}elseif ($opSelect2==2) {
			echo " <br> Teclado <br>";
			$arrayTeclado =explode(",",$valoresTeclado);
			return $arrayTeclado;
		}elseif ($opSelect2==3) {
			echo " <br> Aun no funciona <br> ";
		}elseif($opSelect2==4)  {
			echo " <br> Por defecto <br> ";
			$arrayDefecto = array(95,8,-1,32,48,76,14,26,14);
			return $arrayDefecto;
		}
	}

	/**
	 * Metodo de ordenacion por burbuja
	 * @param type $array 
	 * @return type $array 
	 */
	function burbuja($array){
		for($i=1;$i<count($array);$i++){
			for($j=0;$j<count($array)-$i;$j++){
				if($array[$j]>$array[$j+1]){
					$a=$array[$j+1];
					$array[$j+1]=$array[$j];
					$array[$j]=$a;
				}
			}
		}
		return $array;
	}

	/**
	 * Metodo de ordenacion por selecion directa
	 * @param type $array 
	 * @return type
	 */
	function selecion($array){
		for ($i=0; $i<(count($array)-1); $i++){
			$min=$i;
			for($j=$i+1; $j<count($array); $j++){
				if($array[$min] > $array[$j]){
					$min=$j;
				}
			}$aux=$array[$min];
			$array[$min]=$array[$i];
			$array[$i]=$aux;
		}
		return $array;
	}

	/**
	 * Metodo de ordenacion por inserción directa
	 * @param type $array 
	 * @return type
	 */
	function directa($array){
		for ($i=1; $i<(count($array)); $i++){
			$aux=$array[$i];
			for($j=$i-1;$j>=0 && $array[$j]>$aux; $j--){
				$array[$j+1]=$array[$j];
				$array[$j]=$aux;
			}	
		}
		return $array;
	}


	//Hacer main

	$tamaño = $_POST["tamañoArray"];
	$valoresTeclado =  $_POST["valoresTeclado"];
	$opSelect1 = $_POST["select1"];
	$opSelect2 = $_POST["select2"];

	if ($opSelect1==1) {

		echo "<br><br> <h2>Burbuja </h2><br>";	

		$arrayDesordenada = tipoArray();

		echo "<hr> Array desordenada : <br> <br> ";

		print_r($arrayDesordenada);

		echo "<hr> Array ordenada : <br> <br>";

		$arrayOrdenada = burbuja($arrayDesordenada);

		print_r ($arrayOrdenada);

	}elseif ($opSelect1==2) {
		echo "<br><br> <h2>Inserción Directa </h2><br>";	

		$arrayDesordenada = tipoArray();

		echo "<hr> Array desordenada : <br> <br> ";

		print_r($arrayDesordenada);

		echo "<hr> Array ordenada : <br> <br>";

		$arrayOrdenada = directa($arrayDesordenada);

		print_r ($arrayOrdenada);
	}elseif ($opSelect1==3) {

		echo "<br><br> <h2>Selección directa </h2><br>";	

		$arrayDesordenada = tipoArray();

		echo "<hr> Array desordenada : <br> <br> ";

		print_r($arrayDesordenada);

		echo "<hr> Array ordenada : <br> <br>";

		$arrayOrdenada = selecion($arrayDesordenada);

		print_r ($arrayOrdenada);
	}
	

	?>
</body>
</html>