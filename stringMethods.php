<?php

// Devuelve la longitud
// - 5
$text = "texto";
echo strlen($text);
echo '</p>';

// Devuelve la posicion
// - 11
$text = "ejemplo de texto";
echo strpos($text, "texto");
echo '</p>';

// Extrae string entre dos posiciones
// - ejemplo
$text = "ejemplo de texto";
echo substr($text, 0, 7);
echo '</p>';

// Remplaza todas todas las ocurrencias
// - ejemplo de cambiado y cambiado
$text = "ejemplo de texto y texto";
echo str_replace("texto", "cambiado", $text);
echo '</p>';

// Convierte a mayúsculas.
// - EJEMPLO DE TEXTO
$text = "ejemplo de texto";
echo strtoupper($text);
echo '</p>';

// Borra espacios del inicio y final.
// - ejemplo de texto
$text = " ejemplo de texto ";
echo trim($text);
echo '</p>';

// Invierte el string.
// - otxet ed olpmeje
$text = "ejemplo de texto";
echo strrev($text);
echo '</p>';

// Comparar string (case sensitive):
// + Devuelve 0 si son iguales.
// + Devuelve positivo si el primer string es mayor.
// + Devuelve negativo si el segundo string es mayor.
// - -1
$text1 = "ejemplo corto";
$text2 = "ejemplo mas largo";
echo strcmp($text1, $text2);
//echo strcmp($text1, $text2); case insensitive
echo '</p>';

// Buscar primera ocurrencia string.
// - texto corto
$text = "ejemplo de texto corto";
echo strstr($text, "texto"); //case sensitive
//echo strstr($text, "texto"); //case insensitive
//echo strchr($text, "texto"); //ultima ocurrencia
echo '</p>';

// Desordenar caracteres del string.
// - oemetdo jplext e
$text = "ejemplo de texto";
echo str_shuffle($text);
echo '</p>';

// Convertir en array usando un separador (al revés con implode).
$text = "ejemplo,de,texto";
print_r(explode(',', $text));
echo '</p>';


// Capitalizar todas las palabras
// - Ejemplo De Texto.
$text = "ejemplo de texto";
echo ucwords($text);
echo ucfirst($text); //Capitalizar el primer caracter.
echo '</p>';


// Basicamente un toString.
// - 40
$text = 40;
echo strval($text);
echo '</p>';