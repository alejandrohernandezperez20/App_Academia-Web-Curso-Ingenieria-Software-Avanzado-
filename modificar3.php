<?php 
$conexion = mysqli_connect("localhost", "root", "", "academia");
$registro = mysqli_query($conexion, "UPDATE notas set identificacion='$_REQUEST[nota_nueva]' WHERE identificacion='$_REQUEST[nota]'") or die("problema en el select" . mysqli_error($conexion));
?>