<?php 
$conexion=mysqli_connect("localhoost","root","","academia") or die("Problemas con la conexion");
$registro="INSERT INTO libro_diario(date1,cuenta1,debe1,haber1,total_debe1,total_haber1,
date2,cuenta2,debe2,haber2,total_debe2,total_haber2,
date3,cuenta3,debe3,haber3,total_debe3,total_haber3,
date4,cuenta4,debe4,haber4,total_debe4,total_haber4,
date5,cuenta5,debe5,haber5,total_debe5,total_haber5) 
VALUES('$_REQUEST[date1]','$_REQUEST[cuenta1]','$_REQUEST[debe1]','$_REQUEST[haber1]','$_REQUEST[total_debe1]','$_REQUEST[total_haber1]',
'$_REQUEST[date2]','$_REQUEST[cuenta2]','$_REQUEST[debe2]','$_REQUEST[haber2]','$_REQUEST[total_debe2]','$_REQUEST[total_haber2]',
'$_REQUEST[date3]','$_REQUEST[cuenta3]','$_REQUEST[debe3]','$_REQUEST[haber3]','$_REQUEST[total_debe3]','$_REQUEST[total_haber3]',
'$_REQUEST[date4]','$_REQUEST[cuenta4]','$_REQUEST[debe4]','$_REQUEST[haber4]','$_REQUEST[total_debe4]','$_REQUEST[total_haber4]',
'$_REQUEST[date5]','$_REQUEST[cuenta5]','$_REQUEST[debe5]','$_REQUEST[haber5]','$_REQUEST[total_debe5]','$_REQUEST[total_haber5]',)";
mysqli_query($conexion,$registro) or die("problemas en el select" . mysqli_error($conexion));
mysqli_close($conexion);
header('Location:libro.php');
?>