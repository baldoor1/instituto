<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Datos</title>
</head>
<body>
    <header>
        
    </header>
<nav></nav>
<section>
    <article>
    
    <?php
$servidor = "localhost";
$usuario = "root";
$contrasenia = "";
$nombreBD = "instituto";
$conexion = new mysqli($servidor, $usuario, $contrasenia, $nombreBD);
if ($conexion -> connect_error) { 
    die("conexion fallida".$conexion -> connect_error);
}
echo "<center>Conexión realizada con exito! </center><br><br>";

$sql = "SELECT rut_alum, id_nota, nom_alum, id_carre FROM alumnos";

$resultados = $conexion -> query($sql);

if ($resultados -> num_rows > 0) {
    
    while($row = $resultados -> fetch_assoc()){
    echo 
    '<table border="1" align="center">' . 
    "<tr><td>RUT: </td><td>" . $row["rut_alum"] . 
    "</td></tr><tr><td>ID NOTA: </td><td>" . $row["id_nota"] . 
    "</td></tr><tr><td>NOMBRE: </td><td>" . $row["nom_alum"] . 
    "</td></tr><tr><td>ID CARRERA: </td><td>" . $row["id_carre"] . "</td></tr></table><br>";
    }

}else{
    echo "no hay datos <br>";
}
$conexion -> close();
?>


    </article>
</section>

</body>
</html>