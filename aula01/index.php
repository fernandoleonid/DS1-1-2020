<html>
   <head>
      <title>Tabuada</title>
      <link rel="stylesheet" href="./css/bootstrap.css">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>
   <body>
      <div class="card border-success mx-auto mt-5" style="width:50vw">
         <div class="card-header">
            <h1 class="text-center" >Tabuada</h1>
         </div>

         <form class="card-body" name="tabuada" method="post" action="index.php">
            <div class="form-group">
               Número:
               <input class="form-control" type="text" name="numero" >
            </div>
            <div class="form-group">
               Contador:
               <input class="form-control" type="text" name="contador" >
            </div>
            <input class="btn btn-success" type="submit" name="calcular" value="Calcular">
            <div>
               <ul class="list-group mt-5">
                  <li class="list-group-item list-group-item-action list-group-item-success active text-center">Resultado</li>
                  <?php
                     echo include_once "tabuada.php";
                  ?>
               </ul>
            </div>
         </form>
      </div>
   </body>
</html>