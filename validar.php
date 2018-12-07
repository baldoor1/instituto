<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Validar</title>
</head>
<body>
   <header><h1></h1></header>
   <section>
       <article>
             <?php
               $usuario = $_POST["usuario"]; 
               $pass = $_POST["pass"];  
     
           ?> 
       </article>
 
       <article>
           <h2>Usuario u contraseña incorrectos</h2>
           <?php
               if ($usuario == "admin" && $pass == "admin123") {
                header('Location: bd.html');
               }
              
           ?>

       </article>

       <article>
           <button><a href="iniciarsesion.html">Volver</a></button>
       </article>
               
   </section>
</body>
</html>