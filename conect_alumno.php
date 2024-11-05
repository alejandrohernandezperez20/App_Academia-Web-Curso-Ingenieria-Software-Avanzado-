<?php 
$conexion = mysqli_connect("localhost","root","","academia") or die("problemas con la conexion");
echo $_REQUEST['horario']
/*mysqli_query($conexion,"INSERT INTO inscripciones(nombre,seguimiento,dni,direccion,telefono,curso,modalidad,correo) VALUES 
('$_REQUEST[nombre]','$_REQUEST[seguimiento]','$_REQUEST[dni]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[curso]','$_REQUEST[modalidad]','$_REQUEST[correo]')") 
or die("problemas con la conexion en el select" . mysqli_error($conexion));
mysqli_close($conexion);
header("Location:registro_profesores.php");*/
?>