<?php
    $empresas = ['Casas Bahia', 'Loja Cem', 'Magazine Luiza'];
    $clientes = ['Fernando', 'Ana Clara','Maria'];
    $frutas = ['morango','banana','abacaxi'];
    $numeros = range (1,10);

    $elements = fn ($arr) => implode ("</li><li>", $arr);

    $arrayToList = fn ( $arr, $title="lista" ) => "
            <fieldset>
                <legend>{$title}</legend>
                <ul>
                <li>{$elements($arr)}</li>
                </ul>
            </fieldset>
        ";


    // function arrayToList ( $arr, $title="lista" ) {

    //     $elements = implode ("</li><li>", $arr);
    //     return "
    //         <fieldset>
    //             <legend>{$title}</legend>
    //             <ul>
    //                 <li>{$elements}</li>
    //             </ul>
    //         </fieldset>
    //     ";
    // } 

    echo $arrayToList ($empresas, "Empresas");
    echo $arrayToList ($clientes, "Clientes");
    echo $arrayToList ($frutas);
    echo $arrayToList ($numeros, "números");

// Exercício
//  $empresas = ['Casas Bahia', 'Loja Cem', 'Magazine Luiza'];
//  $clientes = ['Fernando', 'Ana Clara','Maria'];
//  $frutas = ['morango','banana','abacaxi'];
//  $numeros = range (1,10);
// 
// 1) Para todos os exercícios deverá ser criado um no array
// com base no existente.
//  a) Exibir todas as empresas em Maiúsculas.
//  b) Exibir todos os clientes com somente a primeira letra maiúscula de cada palavra.
//  c) Ordenar a lista de frutas de A-Z.
//  d) Exibir apenas o números ímpares que não são multiplos de 3.
//  e) Exibir o fatorial de cada número.
//  d) Exibir a soma de todos os números pares.