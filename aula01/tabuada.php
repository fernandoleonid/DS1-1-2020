<?php

   header("Content-Type: text/html; charset=utf-8");

   $resultado = "";
   $numero = "";
   $contador = "";
   
   if ( isset ($_POST["numero"]) && isset ( $_POST["contador"])){
      $numero = $_POST["numero"];
      $contador = $_POST["contador"];
      for ( $cont=1; $cont <= $contador; $cont++) {
         $multi = $numero * $cont;
         $resultado .= "<li class='list-group-item list-group-item-success list-group-item-action text-center'> $numero X $cont = $multi </li>" ;
      }
   }

   return $resultado;