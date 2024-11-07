<?php include 'administrador.php' ?>
<?php
$conexion = mysqli_connect("localhost", "root", "", "academia");
$registro = mysqli_query($conexion, "SELECT * FROM notas WHERE identificacion='$_REQUEST[identificacion]'") or die("problema en el select" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registro)) {
?>
<div style="margin-top:10%;margin-left:30%;border:2px solid black;background-color:burlywood;width:30%;padding:1%">
    <form action="modificar3.php" method="post">
        <span> IDENTIFICADOR A MODIFICAR:</span><br><br>
        <input type="text" class="form-control" style="margin-bottom: -2%;" name="nota_nueva" value="<?php echo $reg['identificacion'] ?>"><br><br>
        <input type="hidden" name="nota" value="<?php echo $reg['identificacion'] ?>">
        <input type="submit" class="btn btn-primary" value="modificar">
    </form>
</div>
<?php
}else{
    echo "NO EXISTE EL IDENTIFICADOR";
}
mysqli_close($conexion);
?>
