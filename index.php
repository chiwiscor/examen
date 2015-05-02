<?php 
$string="hola mundo de programacion";
$buscar="o";
$sustituir="x";
$incrementar="x";

/*
	strpos ($string,$palabraBuscada)
		//Encuenta la posicion de la primera ocurriensia de un substring en un string
	implode ($separador,$array)
		//Convierte array->string
	str_split ($string,$limite)
		//Convierte un string en un array
	strlen ($string)
		//longitud
	substr_replace($string,$remplazar,$posicion,$limite)
		//remplaza un substring
	substr_count ()
		//cuenta el numero de aparasiciones del substring
	str_ireplace
	stripos //NO CANSE SENSITIVE

	
*/

//SOLUCION #1 CON ARRAY Y SETEANDO EL VALOR
/*
	FUNCIONES/CICLOS UTILIZADOS
		-foreach,if
		-str_split
		-strpos

	EXPLICACION
		-Cada letra del string es convertido en un array
		-Se itera mediante el foreach
			-si el valor es o, se setea por el nuevo valor
			-se incrementa una x
		-se imprime en una sola linea los valores dentro del foreach
	RESULTADO (En una sola linea)
		hxla mundxx de prxxxgramacixxxxn
*/
/*
if (strpos($string, $buscar)) {
	$letras=str_split($string);
	foreach ($letras as $key => $value) {
		if ($value===$buscar) {			
			$value=$sustituir;
			//echo $value."aqui hay una o"."</br>";
			$sustituir.=$incrementar;
		}
		echo $value;
	}
}
*/



//SOLUCION #2
 /*
	FUNCIONES/CICLOS UTILIZADOS
		-while,if
		-strpos
		-strlen
		-substr_replace

	EXPLICACION
		-si encuentra una coincidencia entra en el ciclo
		-se ireta mediante un while, tomando la longitud del string
		-si vuelve encuentra una coincidencia se remplazara por la x
		-se imprime la linea modificada
		-incrementamos la x

	RESULTADO 

 
	hxla mundo de programacion
	hxla mundxx de programacion
	hxla mundxx de prxxxgramacion
	hxla mundxx de prxxxgramacixxxxn
 */
/*
$pos=strpos($string,$buscar);
if($pos){	
	$i=0;
	while ($i<= strlen($string)) {
		$pos=strpos($string,$buscar);
		if ($pos) {
			$string=substr_replace($string,$sustituir,$pos,1);	
			echo $string."</br>";
			$sustituir.=$incrementar;
		}		
		$i++;
	}	
}
*/
//SOLUCION 3 (LA MAS OPTIMA SE ITERA SOLO 4 VECES)

/*
	FUNCIONES/CICLOS UTILIZADOS
		-if,for
		-strpos
		-substr_count
		-substr_replace

	EXPLICACION
		-buscamos el numero de coincidencias
		-si es mayor de 0 entra en el ciclo
		-se itera las veces que encontro la coincidencia
		-remplazamos
		-incrementamos

	RESULTADO 
		hxla mundo de programacion
		hxla mundxx de programacion
		hxla mundxx de prxxxgramacion
		hxla mundxx de prxxxgramacixxxxn
 */

$coincidencias=substr_count($string,$buscar);

if($coincidencias>0){	
	for ($i=1; $i <=$coincidencias ; $i++) { 
		$pos=strpos($string,$buscar);
		$string=substr_replace($string,$sustituir,$pos,1);	
		echo $string."</br>";
		$sustituir.=$incrementar;

	}
}

