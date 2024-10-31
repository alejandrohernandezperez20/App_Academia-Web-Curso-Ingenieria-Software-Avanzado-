<?php
$conexion = mysqli_connect("localhost", "root", "", "academia") or die("problemas con la conexion");
$registros = mysqli_query($conexion, "SELECT nombre,identificacion,calificacion FROM notas
 WHERE identificacion=$_REQUEST[identificacion]")
    or die("problemas en el select" . mysqli_error($conexion));
mysqli_close($conexion);
if ($reg = mysqli_fetch_array($registros)) {
    echo "<h1>nombre: <br>" . $reg['nombre'] . "</1><br>";
    if ($reg['calificacion'] == 1) {
        echo "<h1>calificacion:<br> Apto</h1>";
    }else{
        echo "<h1>calificacion:<br> No apto</h1>";
    }
}else{
    header("Location:registro_notas1.php");
}
