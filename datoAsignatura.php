<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
$usuario = "admin";
$contrasenia = "root";
$nombreBD = "instituto";
$conexion = new mysqli($servidor, $usuario, $contrasenia, $nombreBD);
if ($conexion -> connect_error) { 
    die("conexion fallida".$conexion -> connect_error);
}
echo "<center>Conexión realizada con exito! </center><br><br>";

$sql = "SELECT id_asig, nom_asig, id_carre, descripcion FROM asignaturas";

$resultados = $conexion -> query($sql);

if ($resultados -> num_rows > 0) {
    
    echo 
    '<table class="table table-bordered">' .
  "<thead>" .
    "<tr>" .
      '<th width="150" scope="col">ID asignatura</th>' .
      '<th width="200" scope="col">Nombre asignatura</th>' .
      '<th width="150" scope="col">ID carrera</th>' .
      '<th width="300" scope="col">Descripcion</th>' .
    "</tr>" .
    "</thead>" .
    "</tbody>" .
    "</table><br>";
    while($row = $resultados -> fetch_assoc()){
    echo 
    
    '<table class="table table-bordered">' .  
  "<tbody>" .
    "<center><tr>" .
      '<th width="150" scope="row">' . $row["id_asig"] . '</th>' .
      '<td width="200">' . $row["nom_asig"] . '</td>' .
      '<td width="150">' . $row["id_carre"] . '</td>' .
      '<td width="300">' . $row["descripcion"] . '</td>' .
    "</tr></center>" .
  "</tbody>" .
    "</table><br>" ;
    
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