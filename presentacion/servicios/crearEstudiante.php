<?php
$Estudiante = new Estudiante();
$Estudiante = $Estudiante -> crear();

if(isset($_POST["crear"])){
    $Estudiante = new Estudiante($_POST["codigo"], $_POST["nombre"], $_POST["apellido"], $_POST["fecha_n"]);
    $Estudiante -> crear();
}
?>