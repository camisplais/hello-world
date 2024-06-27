<?php
$estudiantes=array('Carlos', 'Sergio', 'Max');

$estudiantes[0]='Fernando ';
echo $estudiantes[0];

#array asociativo 
$tutor=['nombre'=>'Carlos', 'Apellido'=>'Albores ', 'Edad'=>18];
echo $tutor['Apellido '];

#array de multiples dimensiones 
$tutor2=['nombre'=>'Andrea', 'Apellido'=>'Lopez', 'Edad'=>48 , 
'cursos'=>['PHP', 'Python', ' C++'] ];
echo $tutor['Edad']; 

echo $tutor2['cursos'][2];

echo count($tutor2,COUNT_RECURSIVE);