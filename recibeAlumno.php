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
               $rut_alum = $_POST["rut_alum"];
               $id_nota = $_POST["id_nota"];
               $nom_alum = $_POST["nom_alum"];
               $id_carre = $_POST["id_carre"];
               
               echo "rut:  $rut_alum <br>";
               echo "id nota:  $id_nota <br>";
               echo "nombre alumno:  $nom_alum <br>";
               echo "id carrera:  $id_carre <br>"; 
               
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
               
               $sql = "insert into alumnos (rut_alum, id_nota, nom_alum, id_carre) values('$rut_alum',$id_nota,'$nom_alum',$id_carre);";
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
           <button><a href="bd.html">Volver</a></button>
       </article>
               
   </section>
</body>
</html>