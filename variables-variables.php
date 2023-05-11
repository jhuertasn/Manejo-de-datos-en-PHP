<?php
/*
echo 'Un texto de una línea
varias líneas
comilla simple \' backslash \\ continuar con mas texto';
*/
$name = 'italo';
echo "Mi nombre es $name <br>";

$courses = [
    'backend' => [
        'PHP'
    ]
];


/*class User 
{
    public $name ='Jordan';
}

$user = new User;

//echo "$user->name quiere aprender {$courses['backend']}";
*/
$teacher = 'Jordan';
$Jordan = 'Profesor de PHP';

echo "$teacher es ${$teacher} <br>";

function getTeacher(){
    return 'teacher'; 
}

$teacher = 'Jordan';

echo "${getTeacher()} enseña PHP";
