<html>
<head>
<title>tu quiere Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect ("localhost","sepulveda","luis0703","alumnos") or
die ("Problemas con la conexion");

mysqli_query($conexion, "update estudiantes set mail='$_REQUEST[mailnuevo]'
 where mail='$_REQUEST[mailviejo]'") or
die ("Problemas en el select:".mysqli_error($conexion));
echo "El mail fue modificado con exito";
?>
</body>
</html>