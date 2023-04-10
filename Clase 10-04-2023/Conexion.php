<?php
$host_db="sql207.epizy.com";
$user_db="epiz_33685870";
$pass_db="24KQBmv2BwpA0J";
$name_db="epiz_33685870_DBweb1";

$conexion = new mysqli($host_db, $user_db, $pass_db, $name_db);

if($conexion -> connect_error){
    echo "<h1>Error en la conexión a la DB</h1>";
}else {
    echo "<h1>Conexión con éxito</h1>";
}

?>
