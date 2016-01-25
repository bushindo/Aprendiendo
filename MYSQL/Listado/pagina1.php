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

$registros=mysqli_query($conexion,"select codigo,nombre, mail, codigocurso
                        from alumnos") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg=  mysqli_fetch_array($registros))
{
    echo "Codigo: ".$reg['codigo']."<br>";
    echo "Nombre: ".$reg['nombre']."<br>";
    echo "Mail: ".$reg['mail']."<br>";
    echo "Curso: "; 
    switch ($reg['codigocurso']) {
        case 1:echo "PHP";
            break;
        case 2:echo "ASP";
            break;
        case 3:echo "JSP";
            break;        
    }
    echo "<br>";
    echo "<hr>";
}

mysqli_close($conexion);
?>

</body>
</html>