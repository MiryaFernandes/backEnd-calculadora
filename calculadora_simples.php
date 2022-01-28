<?php

//declaraçao de variveis

$valor1 =(double) 0;
$valor2 =(double) 0;
$resultado =(double) 0;
$opcao =(string) null;

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

    echo(isset('<script> alert ("favor escolher uma operaçao valida"); </script>');

    else

    

    
    //processamento do calculo das operaçoes
    if($opcao == 'SOMAR') 

        $resultado = $valor1 + $valor2;

     else if ($opcao == 'SUBTRAIR')

        $resultado = $valor1 - $valor2;

     else if ($opcao == 'MULTIPLICAR')

        $resultado = $valor1 * $valor2;

     else if ($opcao == 'DIVIDIR')

        $resultado = $valor1 / $valor2;

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
						Valor 1:<input type="text" name="txtn1" value="<?php echo($valor1)?>" > <br>
						Valor 2:<input type="text" name="txtn2" value="<?php echo($valor2)?>" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdoCalc" value="somar">Somar <br>
							<input type="radio" name="rdoCalc" value="subtrair" >Subtrair <br>
							<input type="radio" name="rdoCalc" value="multiplicar" >Multiplicar <br>
							<input type="radio" name="rdoCalc" value="dividir" >Dividir <br>
							
							<input type="submit" name="btnCalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
						 <?=$resultado;?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

