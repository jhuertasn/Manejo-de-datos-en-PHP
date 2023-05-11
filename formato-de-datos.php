<?php

//alterar
$text = "<h1>PHP es un LENGUAJE, año 2020, programación</h1>"; //slug
//convertir el string a minuscula
//echo strtolower($text);
//echo strtoupper($text);
//primer elemento en mayuscula
//echo ucfirst($text);
//primera letra en miniscula
//echo lcfirst($text);

//Reemplazar
$slug = str_replace(' ', '-', $text);
//echo strtolower($slug);

//modificación
$code = 39;
//echo str_pad($code, 8 , '#', STR_PAD_BOTH);
//echo strip_tags($text);

//echo strtoupper($text); // monobyte
//corregir los formatos como ñ o asentos
echo mb_strtoupper($text); //multibyte
