<?php
//convierte todaslas letras de las claves en mayusculas 
$array1 = array("FirSt" => 1, "SecOnd" => 4);
$array2 = array("FirSt" => 3, "SecOnd" => 5);
print_r(array_change_key_case($array1, CASE_UPPER));

//COMPARAR
//Compara $array1 con uno o más arrays y devuelve los valores 
//de $array1 que no estén presentes en cualquiera de los demás arrays.
print_r(array_diff($array1, $array2));

//Compara $array1 con $array2 y devuelve la diferencia, pero esta vez 
//comparando values y keys. Se aceptan también más arrays opcionales.
print_r(array_diff_assoc($array1, $array2));

//Combina dos o más arrays, de modo que los valores de uno se unen al 
//final del anterior.
print_r(array_merge($array1, $array2));

//ORDENAR
?>
Nombre de la función	Ordena por	Mantiene asociación con las key	 Orden de clasificación
sort()	                valor	                    no	                 Menor a mayor
rsort()	                valor	                    no	                 Mayor a menor
asort()	                valor	                    sí	                 Menor a mayor
arsort()	              valor	                    sí	                 Mayor a menor
ksort()	                 key	                    sí	                 Menor a mayor
krsort()	               key	                    sí	                 Mayor a menor
usort()	                valor	                    no	                 Definido por el usuario
uasort()	              valor	                    sí	                 Definido por el usuario
uksort()	               key	                    sí	                 Definido por el usuario
natsort()	              valor	                    sí	                 Natural
natcasesort()	          valor	                    sí	                 Natural (case insensitive)
shuffle()	              valor	                    no	                 Aleatorio
array_multisort()	      valor	                    sí                   (asociativa)	no (numérica). Primer array u opciones de clasificación

<?php
  //RELLENAR
  //Llena un array $num veces (debe ser mayor que cero) con el valor $value 
  //desde el key _$startindex. Si _$startindex es negativo, el primer valor 
  //tendrá como key ese valor negativo y los demás comenzarán desde cero.
  //array array_fill (int $start_index, int $num, mixed $value)
  $array3 = array_fill(3, 2, 'perro');
  print_r($array3);
  //3 desde donde empieza
  //2 el tamaño del array

  //Elimina una porción del array y la reemplaza por algo. Comienza la 
  //eliminación desde $offset (si es negativo, comienza por el final).
  //array array_splice (array &$input, int $offset [, int $length [, mixed $replacement = array() ]] )
  array_splice($array3, 2);
  print_r($array3);
  //Elimino desde las segunta posicion lo demas valores

  //nserta uno o más elementos al final de un array. Viene a ser lo mismo que insertar un elemento a 
  //un array $array[] = valor, pero se pueden insertar varios de vez.
  //int array_push (array &$array, mixed $value1 [, mixed $... ])
  array_push($array3, 'gato');
  print_r($array3);
  //añado gato al array
?>
