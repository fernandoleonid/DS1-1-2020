<?php

    $jsonToObj = fn($json) => json_decode (file_get_contents ($json));

    $json = file_get_contents ("./clientes.json");
  
    $dados = json_decode ($json);

    $clientes = $jsonToObj ('./clientes.json');

    $cep = $jsonToObj ('https://viacep.com.br/ws/18135300/json/');

    var_dump ($cep);
    
    mostrarDados ($clientes, "teste");

    function mostrarDados ( $clientes, $titulo ) {
        echo "<h3>$titulo</h3>";
        foreach ($clientes as $cliente) {
            $areas = implode (",",$cliente->areas);
            echo "$cliente->codigo ";
            echo "$cliente->nome ";
            echo "$cliente->uf ";
            echo "$areas<br>";
        }
    }

    function clienteSP ( $cliente ) {
        return $cliente->uf == "sp";
    }
    $clientesSP = array_filter ($dados, "clienteSP");

    function salario100 ( $cliente ) {
        return $cliente->idade + 100;
    }
    $salarios100 = array_map ("salario100",$dados);

    function somar ( $tot, $cliente ) {
        return $tot + $cliente->idade;
    }

    $totalSalarios = array_reduce ( $dados, "somar");

    mostrarDados ( $dados, "Todos os clientes" );
    mostrarDados ( $clientesSP, "Cliente de São Paulo" );
    echo $totalSalarios;