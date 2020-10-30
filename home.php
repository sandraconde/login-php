<?php
$id = htmlentities($_GET['id']);
$nombre = htmlentities($_GET['nombre']);
$edad = htmlentities($_GET['edad']);
echo "IMPRIMIENDO...".$id." ".$nombre." ".$edad." ";
/*
$nombre = htmlentities($_GET['nombre']); 
$fechanac = htmlentities($_GET['fechanac']);
$dni = htmlentities($_GET['dni']);
echo "Imprimiendo".$nombre."".$fechanac."".$dni;
*/
?>