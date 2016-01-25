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

$registros=mysqli_query($conexion,"select codigo,nombrecurso
                        from cursos") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg=  mysqli_fetch_array($registros))
{
    echo "Codigo: ".$reg['codigo']."<br>";
    echo "Nombre Curso: ".$reg['nombrecurso']."<br>";   
   
    echo "<hr>";
}

mysqli_close($conexion);
?>

</body>
</html>