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
               $rut_alum = $_POST["rut_alum"];
               $id_nota = $_POST["id_nota"];
               $nom_alum = $_POST["nom_alum"];
               $id_carre = $_POST["id_carre"];
               
              
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
               
               $sql = "update alumnos set id_nota = $id_nota, nom_alum = '$nom_alum', id_carre = $id_carre where rut_alum = '$rut_alum'";
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