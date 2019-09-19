<html>
<head>
<title>problema</title>
</head>
<body>
<?php

$conexion=mysqli_connect("localhost","sepulveda","luis0703","alumnos") or
die ("Problemas con la conexion");

$registros=mysqli_query($conexion,"select*from estudiantes where mail='$_REQUEST[mail]'") or
die ("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
    ?>
    <form action="browser_3.php" method="post">
    ingrese nuevo mail:
    <input type="text" name="mailnuevo" value="<?php echo $reg['mail']?>">
    <br>
    <input type="hidden" name="mailviejo" value="<?php echo $reg['mail']?>">
    <input type="submit" value="Modificar">
</form>
<?php
}
else 
echo "no existe alumno con dicho mail";
?>
</body>
</html>