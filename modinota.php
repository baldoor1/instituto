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
               $id_nota = $_POST["id_nota"];
               $id_carre = $_POST["id_carre"];
               $id_asig = $_POST["id_asig"];
               $nota1 = $_POST["nota1"];
               $nota2 = $_POST["nota2"];
               $nota3 = $_POST["nota3"];
               $nota4 = $_POST["nota4"];

               
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
               $sql = "update notas set id_carre = $id_carre, id_asig = $id_asig, nota1 = $nota1, nota2 = $nota2, nota3 = $nota3, nota4 = $nota4 where id_nota = $id_nota";
               /* Se realiza el ingreso [query($sql)] y se comprueba
                si esta correcto */
               if ($conexion -> query($sql) == TRUE) {
                   echo "<h1>Datos ingresados con exito!</h1>";
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