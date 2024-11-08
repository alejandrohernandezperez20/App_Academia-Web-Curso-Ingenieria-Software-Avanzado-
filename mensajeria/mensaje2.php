<?php include '../profesor.html' ?>
<script>
    document.getElementById("logo").setAttribute("src","../img/1.png");
</script>
<script src="../js/js2.js"></script>
<link rel="stylesheet" href="../css/mensaje.css">
<div
    class="container"
    style="margin-top: 5%;"
>
<form action="men2.php" method="post" id="formulario-mensaje">
    <label class="form-label">Fecha:</label><br>
    <input class="form-control" type="date" name="fecha"><br>
    <label class="form-label">Destinatario:</label><br>
    <input class="form-control"type="text" name="nombre"><br>
    <label class="form-label">Asunto:</label><br>
    <input class="form-control" type="text" name="asunto"><br>
    <label class="form-label">Mensaje:</label><br>
    <textarea class="form-control" name="mensaje" id=""></textarea><br>
    <button class="btn btn-primary" type="submit" onclick="mensaje()">ENVIAR MENSAJE</button>
    <button class="btn btn-primary" type="reset">BORRAR</button>

</form>
<div style="margin-top: 5%;">
<?php
$db_host="localhost";
$db_nombre="academia";
$db_usuario="root";
$db_contra="";
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
mysqli_set_charset($conexion,"utf8");
$consulta="SELECT * FROM mensaje";
$resultado=mysqli_query($conexion,$consulta);
while(($file=mysqli_fetch_row($resultado))==true){
    echo $file[0] . " ";
    echo $file[1] . " ";
    echo $file[2] . " ";
    echo $file[3] . " ";
}
?>
</div>
</div>