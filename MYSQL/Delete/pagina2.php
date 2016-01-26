<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

include 'config.php';
        $conexion = new mysqli($host, $username, $password, $db_name);
            if ($conexion->connect_errno) {
                die("Error de conexion: $conexion->connect_error");
            }
$registros=mysqli_query($conexion, "select codigo from alumnos
                        where mail='$_REQUEST[mail]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=  mysqli_fetch_array($registros))
{
        mysqli_query($conexion, "delete from alumnos where mail='$_REQUEST[mail]'") or
                die("Problemas en el select:".mysqli_error($conexion));
            echo "Se efectuo el borrado del alumno con dicho mail.";
}
else
{
    echo "No existe un alumno con ese mail.";
}
mysqli_close($conexion);
?>
</body>
</html>