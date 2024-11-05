<?php 
$conexion = mysqli_connect("localhost","root","","academia") or die("problemas con la conexion");
$exp=preg_match('/^\d{1,2}:\d{2}\s[a]\s\d{1,2}:\d{2}$/', $_REQUEST["horario"]);//Este lo que hace es la comprbacion de que el horario cumpla con el formato mm:ss a mm:ss
//Si es mayor que 0 cumple con el formato de la expresion regular del horario
if($exp>0){
    mysqli_query($conexion,"INSERT INTO profesores(nombre,curso,horario,telefono,observacion) VALUES 
    ('$_REQUEST[nombre]','$_REQUEST[curso]','$_REQUEST[horario]','$_REQUEST[telefono]','$_REQUEST[observacion]')") 
    or die("problemas con la conexion en el select" . mysqli_error($conexion));
}
mysqli_close($conexion);
header("Location:registro_profesores.php");
?>