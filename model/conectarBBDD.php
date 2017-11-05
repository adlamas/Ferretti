<?php


$conexion = new mysqli("localhost", "root", "", "Ferretti");
if($conexion->connect_errno){
    echo "hubo un error";
}

$conexion->set_charset("utf8");
$sql = "SELECT * FROM users";

$resultados = $conexion->query($sql);

while($fila = $resultados->fetch_assoc()){
    
    echo $fila["username"] . '<br>';
}