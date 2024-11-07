<?php include 'administrador.php' ?>
<?php
$conexion = mysqli_connect("localhost", "root", "", "academia");
$registro = mysqli_query($conexion, "SELECT * FROM notas WHERE identificacion='$_REQUEST[identificacion]'") or die("problema en el select" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registro)) {
?>
    <form action="modificarnombre2.php" method="post">
        INGRESAR NOMBRE A MODIFICAR:<br><br>
        <input type="text" name="nota_nueva" value="<?php echo $reg['nombre'] ?>"><br><br>
        <input type="hidden" name="nota" value="<?php echo $reg['identificacion'] ?>">
        <input type="submit" value="modificar">
    </form>
<?php
}else{
    echo "NO EXISTE EL IDENTIFICADOR";
}
mysqli_close($conexion);
?>
