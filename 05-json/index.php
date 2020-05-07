<?php

    // $json = file_get_contents ($json);
    // $dados = json_decode ($json);

    // Função versão antes da 7.4
    // $json2Obj = function ($json) {
    //     return json_decode (file_get_contents ($json));
    // };

    $json2Obj = fn ($json) => json_decode (file_get_contents ($json));

    $dados = $json2Obj ('./clientes.json');
   
    foreach ( $dados as $cliente) {
        $areas = implode(",",$cliente->areas);
        echo $cliente->codigo;
        echo $cliente->nome;
        echo $cliente->idade;
        echo $cliente->uf;
        echo $areas;
        echo "<hr>";
    }
