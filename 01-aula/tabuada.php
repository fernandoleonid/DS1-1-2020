<?php

$resultado = "";

if ( isset ($_POST['numero']) && isset($_POST['contador'])) {
   $numero = $_POST['numero'];
   $contador = $_POST['contador'];

   for ($i=1; $i <= $contador; $i++){
      $mult = $numero * $i;
      $resultado .= "<li class='list-group-item list-group-item-success list-group-item-action text-center>
                        $i x $numero = $mult
                     </li>";
   }
}

return $resultado;