<?php


   if(isset($_GET['btnCalc']))
   $num1 = $_GET[txtn1];

   
   $rdoSmr = null;
   $rdoSbt = null;
   $rdoMtp = null;
   $rdoDvd = null;

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

            <div id="form">
                <form name="frmcalculadora" method="get" action="">
						Valor 1:<input type="text" name="txtn1" value="<?php echo($num1)?>" > <br>
						Valor 2:<input type="text" name="txtn2" value="<?php echo($num2)?>" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdoSmr" value="somar" checked>Somar <br>
							<input type="radio" name="rdoSbt" value="subtrair" >Subtrair <br>
							<input type="radio" name="rdoMtp" value="multiplicar" >Multiplicar <br>
							<input type="radio" name="rdoDvd" value="dividir" >Dividir <br>
							
							<input type="submit" name="btnCalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
						0
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

