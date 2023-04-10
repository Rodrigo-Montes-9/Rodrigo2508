<?php
include "Conexion.php";
$consulta_sql= "SELECT * FROM persona";

$resultado=$conexion->query($consulta_sql);

$count=mysqli_num_rows($resultado);

?>
<table border="2px">
    <tr>
        <th>Numero</th>
        <th>Nombre de Usuario</th>
        <th>Carrera</th>
    </tr>
<?php
    //Logica para listar los registros de todos los usuarios
    if ($count>0) {
        while($row=mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>".$row['numero']."</td>";
            echo "<td>".$row['nombre_usuario']."</td>";
            echo "<td>".$row['carrera']."</td>";
            echo "</tr>";
        }
    }else{
        echo "<h1>Sin registros</h1>";
    }
?>

</table>