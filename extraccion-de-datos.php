<?php

//$data = 'Estudio PHP';

//echo $data[0];

$post =" Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ullam tempore minima aspernatur excepturi laboriosam recusandae maiores porro magni dicta vel earum expedita fuga, deleniti incidunt, explicabo perferendis amet exercitationem.";

$extract = substr($post,0,20);

//echo "$extract... [ver más]";
/*
$data = 'javascript, php, laravel'; // campo tag de mi formulario
$tags = explode(', ',$data);
echo "<pre>";
var_dump($tags);
*/

//$courses = ['javascript', 'php', 'laravel'];
//echo implode(', ',$courses);

$course = "   Curso PHP   ";
//eliminar espacios
$course = trim($course);
echo "<pre>";
echo "Quiero aprender $course, y otro texto";