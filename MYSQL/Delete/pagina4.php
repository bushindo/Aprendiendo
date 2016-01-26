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
$registros=mysqli_query($conexion, "select nombrecurso from cursos
                        where nombrecurso='$_REQUEST[nombre]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=  mysqli_fetch_array($registros))
{
        mysqli_query($conexion, "delete from cursos where nombrecurso='$_REQUEST[nombre]'") or
                die("Problemas en el select:".mysqli_error($conexion));
            echo "Se efectuo el borrado del curso.";
}
else
{
    echo "No existe un curso con ese nombre.";
}
mysqli_close($conexion);
?>
</body>
</html>