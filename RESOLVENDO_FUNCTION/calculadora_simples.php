<?php

//declaraçao de variveis

$valor1 =(double) 0;
$valor2 =(double) 0;
$resultado =(double) 0;
$opcao =(string) null;

function double operacaoMatematica($numero1, $numero2, $operacao)
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

if(isset($_POST['btnCalc'])){

    //recebe os dados do formulario
    $valor1 = $_POST['txtn1'];
    $valor2 = $_POST['txtn2'];
    $opcao = strtoupper($_POST['rdoCalc']);



    if($_POST['txtn1'] == "" || $_POST['txtn2'] == "")

       echo('<script> alert("favor preencer todas as caixas");</script>');
    else 
    {


            if(!isset($_POST['rdoCalc']))

                echo('<script> alert("favor escolher uma operaçao valida");</script>');

            else
            {

                //validaçao de tratamento para a entrada de string ao inves de numeros
                if(!is_numeric($valor1) || !is_numeric($valor2))

                    echo('<script> alert("nao é possivel realizar calculos com dados não numericos")</script>');

                    else 
                    {

                        $opcao = strtoupper($_POST['rdoCalc']);

                        //chamada de funçao de calculos matemticos, passamos os valores
                        //e o tipo da operaçao recebemos o valor do resultado 
                        $resultado = operacaoMatematica($valor1, $valor2, $opcao);
                        
 
                       

                        //processamento do calculo das operaçoes
                        /*if($opcao == 'SOMAR') 

                             = $valor1 + $valor2;

                        else if ($opcao == 'SUBTRAIR')

                             = $valor1 - $valor2;

                        else if ($opcao == 'MULTIPLICAR')

                             = $valor1 * $valor2;

                        else if ($opcao == 'DIVIDIR')

                        {
                            if($valor2 == 0)

                                echo('<script> alert("nao é possivel realizar uma divisao onde o valor 2 seja igual a zero");</script>');
                             
                            else
                            
                                  = $valor1 / $valor2;
                        }*/

                            //round() -> permite ajustar a quantidade de casas decimais realizando o arredondamento
                            // = round(, 5);
                            //4resultado_format -> permite ajustar a quantiade de casa decimais realizando o arredondamento
                
                    }

            }
    

    }

}

?>

<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form" >
                <form name="frmcalculadora" method="post" action="calculadora_simples.php">
						Valor 1:<input type="text" name="txtn1" value="<?=$valor1;?>" > <br>
						Valor 2:<input type="text" name="txtn2" value="<?=$valor2;?>" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdoCalc" value="somar">Somar <?=$opcao == 'SOMARR' ? 'checked' : null; ?> <br>
							<input type="radio" name="rdoCalc" value="subtrair" <?=$opcao == 'SUBTRAIR' ? 'checked' : null; ?> >Subtrair <br>
							<input type="radio" name="rdoCalc" value="multiplicar" <?=$opcao == 'MULTIPLICAR' ? 'checked' : null; ?> >Multiplicar <br>
							<input type="radio" name="rdoCalc" value="dividir" <?=$opcao == 'DIVIDIR' ? 'checked' : null; ?> >Dividir <br>
							
							<input type="submit" name="btnCalc" value ="Calcular" >
							
						</div>	
						<div id=">
						 <?=;?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

