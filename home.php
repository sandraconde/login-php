<?php
$nombre = htmlentities($_GET['nombre']); 
$fechanac = htmlentities($_GET['fechanac']);
$dni = htmlentities($_GET['dni']);
echo "Imprimiendo".$nombre."".$fechanac."".$dni;
?>