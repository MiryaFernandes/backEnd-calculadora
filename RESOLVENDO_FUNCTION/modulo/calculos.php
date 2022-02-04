<?php



/******************************
 * objetivo: arquivo de funçoes matematicas que podera ser utilizado dentro do projeto
 * autor: mirya 
 * data: 04/02/2022
 * versao: 1.0 
 *****************************/

function operacaoMatematica($numero1, $numero2, $operacao)
{
    //declaraçao de variaveis locais da funçao (todas as variaveis recebem os dados 
    //do parametro do parametro da function)
    $num1 =(double) $numero1; 
    $num2 =(double) $numero2;
    $tipoCalc =(double) $operacao;
    $result=(double) 0;

    switch($tipoCalc)
    {

        case("SOMAR"):

            $result = $num1 + $num2;

        break;

        case("SUBTRAIR"):
            
            $result = $num1 - $num2;

        break;

        case("MULTIPLICAR"):

            $result = $num1 * $num2;

        break;
            
        case("DIVIDIR"):   
            
            if($num2 == 0)

                echo('<script> alert ("nao é possivel realizar uma divisao onde o valor 2 seja igual a zero")</script>');

            else

            $result = $num1 / $num2;

        break;
                
    }


    $result = round($result, 2);
    return $result;
    
}

/*

    gettype() -> permite verificar qual o tipo de dados de uma variavel
    settype() -> permite modificar p tipo de dados de uma variavel 

*/

/*
    exemplo de uma variavel que nasce do tipo inteiro e depois é
    convertida para string

    $nome = 10;

    echo(gettype($nome));

    settype($nome, "string");

    echo(gettype($nome));

    strtoupper() -> permite converter um texto para maiusculo
    strtolower() -> permite converter um texto para maiusculo

*/
//validaçao pra verificar se o botao foi clicado


?>