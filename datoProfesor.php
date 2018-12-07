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

$sql = "SELECT rut_prof, nom_prof, id_asig, id_carre FROM profesores";

$resultados = $conexion -> query($sql);

if ($resultados -> num_rows > 0) {
    
    echo 
    '<table class="table table-bordered">' .
  "<thead>" .
    "<tr>" .
      '<th width="230" scope="col">Rut profesor</th>' .
      '<th width="260" scope="col">Nombre profesor</th>' .
      '<th width="150" scope="col">ID asignatura</th>' .
      '<th width="150" scope="col">ID carrera</th>' .
    "</tr>" .
    "</thead>" .
    "</tbody>" .
    "</table><br>";
    while($row = $resultados -> fetch_assoc()){
    echo 
    
    '<table class="table table-bordered">' .  
  "<tbody>" .
    "<center><tr>" .
      '<th width="230" scope="row">' . $row["rut_prof"] . '</th>' .
      '<td width="260">' . $row["nom_prof"] . '</td>' .
      '<td width="150">' . $row["id_asig"] . '</td>' .
      '<td width="150">' . $row["id_carre"] . '</td>' .
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