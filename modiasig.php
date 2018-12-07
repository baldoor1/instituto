<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>PHP</title>
</head>
<body>
   <header></header>
   <section>
       <article>
             <?php
               $id_asig = $_POST["id_asig"];
               $nom_asig = $_POST["nom_asig"];
               $id_carre = $_POST["id_carre"];
               $descripcion = $_POST["descripcion"];
               
           ?> 
       </article>

       <article>
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
           <?php
               $sql = "update asignaturas set nom_asig = '$nom_asig', id_carre = $id_carre, descripcion = '$descripcion' where id_asig = '$id_asig'";
               /* Se realiza el ingreso [query($sql)] y se comprueba
                si esta correcto */
               if ($conexion -> query($sql) == TRUE) {
                   echo "<h1>Datos actualizados con exito!</h1>";
               }else{
                   echo "ERROR: " . $sql. " ".$conexion -> connect_error;
               }
               $conexion -> close();
           ?>

       </article>

       <article>
           <button><a href="bd.html">Volver</a></button>
       </article>
               
   </section>
</body>
</html>