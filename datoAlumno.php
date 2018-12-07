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

$sql = "SELECT rut_alum, id_nota, nom_alum, id_carre FROM alumnos";

$resultados = $conexion -> query($sql);

if ($resultados -> num_rows > 0) {
    
    /*
    '<table class="table table-sm">' . 
    "<tbody><tr> <td>RUT: </td><td>" . $row["rut_alum"] . "</td></tr>
    <tr><td>ID NOTA: </td><td>" . $row["id_nota"] . "</td></tr>
    <tr><td>NOMBRE: </td><td>" . $row["nom_alum"] . "</td></tr>
    <tr><td>ID CARRERA: </td><td>" . $row["id_carre"] . "</td></tr>
    </tbody></table><br>";
    */
    echo 
    '<table class="table table-bordered">' .
  "<thead>" .
    "<tr>" .
      '<th width="150" scope="col">Rut Alumno</th>' .
      '<th width="130" scope="col">ID nota</th>' .
      '<th width="200" scope="col">Nombre</th>' .
      '<th width="130" scope="col">ID carrera</th>' .
    "</tr>" .
    "</thead>" .
    "</tbody>" .
    "</table><br>";
    while($row = $resultados -> fetch_assoc()){
    echo 
    
    '<table class="table table-bordered">' .  
  "<tbody>" .
    "<center><tr>" .
      '<th width="150" scope="row">' . $row["rut_alum"] . '</th>' .
      '<td width="130">' . $row["id_nota"] . '</td>' .
      '<td width="200">' . $row["nom_alum"] . '</td>' .
      '<td width="130">' . $row["id_carre"] . '</td>' .
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