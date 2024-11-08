<?php
$conexion=mysqli_connect("localhost","root","","academia") or die("problema de conexion");
$inyect_sql="INSERT INTO mensaje2(fecha,nombre,asunto,mensaje) VALUES('$_REQUEST[fecha]','$_REQUEST[nombre]','$_REQUEST[asunto]','$_REQUEST[mensaje]')";
mysqli_query($conexion,$inyect_sql) or die("problemas en el select" . mysqli_error($conexion));
mysqli_close($conexion);
header("Location:mensaje2.php");
?>