<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>PHP</title>
</head>
<body>
   <header><h1>Recibe Datos</h1></header>
   <section>
       <article>
           <h2>Datos:</h2>
             <?php
               $id_carre = $_POST["id_carre"];
               $nom_carre = $_POST["nom_carre"];
               $jefe_carre = $_POST["jefe_carre"];
               $jornada = $_POST["jornada"];
               $descripcion = $_POST["descripcion"];
               
               echo "id carrera:  $id_carre <br>";
               echo "nombre carrera:  $nom_carre <br>";
               echo "jefe carrera:  $jefe_carre <br>";
               echo "jornada:  $jornada <br>"; 
               echo "descripcion:  $descripcion <br>"; 
               
           ?> 
       </article>

       <article>
           <h2>Conexion</h2>
           <?php
               $servidor = "localhost";
               $usuario = "root";
               $pass = "";
               #Nombre de la BD
               $nombreBD = "instituto";
               #se crea la conexion
               $conexion = new mysqli($servidor, $usuario, $pass, $nombreBD);
               #chequeamos la conexion
               if ($conexion -> connect_error) {   #conexion.conecct_error()
                   die("conexion fallida ".$conexion -> connect_error);
               }
               echo "Conexion Realizada con exito!";
           ?>
       </article>

       <article>
           <h2>Ingresar Datos:</h2>
           <?php
               $sql = "insert into carreras (id_carre, nom_carre, jefe_carre, jornada, descripcion) values($id_carre,'$nom_carre','$jefe_carre','$jornada','$descripcion');";
               /* Se realiza el ingreso [query($sql)] y se comprueba
                si esta correcto */
               if ($conexion -> query($sql) == TRUE) {
                   echo "Datos ingresados con exito!";
               }else{
                   echo "ERROR: " . $sql. " ".$conexion -> connect_error;
               }
               $conexion -> close();
           ?>

       </article>

       <article>
           <button><a href="insertar.html">Volver</a></button>
       </article>
               
   </section>
</body>
</html>