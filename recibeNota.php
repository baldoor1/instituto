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
               $id_nota = $_POST["id_nota"];
               $id_carre = $_POST["id_carre"];
               $id_asig = $_POST["id_asig"];
               $nota1 = $_POST["nota1"];
               $nota2 = $_POST["nota2"];
               $nota3 = $_POST["nota3"];
               $nota4 = $_POST["nota4"];

               
               echo "id nota:  $id_nota <br>";
               echo "id carrera:  $id_carre <br>";
               echo "id asignatura:  $id_asig <br>";
               echo "nota 1:  $nota1 <br>";
               echo "nota 2:  $nota2 <br>";
               echo "nota 3:  $nota3 <br>";
               echo "nota 4:  $nota4 <br>";
           ?> 
       </article>

       <article>
           <h2>Conexion</h2>
           <?php
               $servidor = "localhost";
               $usuario = "admin";
               $pass = "root";
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
               $sql = "insert into notas (id_nota, id_carre, id_asig, nota1, nota2, nota3, nota4) values($id_nota,$id_carre,$id_asig,$nota1,$nota2,$nota3,$nota4);";
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