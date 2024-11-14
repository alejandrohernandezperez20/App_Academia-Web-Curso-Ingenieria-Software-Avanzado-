<?php
$conexion=mysqli_connect("localhost","root","","academia") or die("problema de conexion");
if(strtolower($_REQUEST['nombre'])=="alumno"){
    $inyect_sql="INSERT INTO mensaje3(fecha,nombre,asunto,mensaje,propietario) VALUES('$_REQUEST[fecha]','$_REQUEST[nombre]','$_REQUEST[asunto]','$_REQUEST[mensaje]','$_REQUEST[propietario]')";
    mysqli_query($conexion,$inyect_sql) or die("problemas en el select" . mysqli_error($conexion));
}else if(strtolower($_REQUEST['nombre'])=="secretaria"){
    $inyect_sql="INSERT INTO mensaje(fecha,nombre,asunto,mensaje,propietario) VALUES('$_REQUEST[fecha]','$_REQUEST[nombre]','$_REQUEST[asunto]','$_REQUEST[mensaje]','$_REQUEST[propietario]')";
    mysqli_query($conexion,$inyect_sql) or die("problemas en el select" . mysqli_error($conexion));
}else if(strtolower($_REQUEST['nombre'])=="admin"){
    $inyect_sql="INSERT INTO mensaje2(fecha,nombre,asunto,mensaje,propietario) VALUES('$_REQUEST[fecha]','$_REQUEST[nombre]','$_REQUEST[asunto]','$_REQUEST[mensaje]','$_REQUEST[propietario]')";
    mysqli_query($conexion,$inyect_sql) or die("problemas en el select" . mysqli_error($conexion));
}
mysqli_close($conexion);
header("Location:mensaje2.php");
?>