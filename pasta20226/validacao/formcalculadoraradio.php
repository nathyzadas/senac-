<?php

if(isset($_GET['btnCalcular'])){

    $num01 = $_GET["txtNumero1"];
    $num02 = $_GET["txtNumero2"];
    $opera = $_GET["slOperacao"];
    $resul = "";

    if($num01  && $num02){ 
        switch($opera){
            case "+":
                $resul = ($num01 + $num02);
            break;
            case "-":
                $resul = ($num01 - $num02);
            break;
            case "*":
                $resul = ($num01 * $num02);
            break;
            case "/":
                $resul = ($num01 / $num02);
            break;
        }
    }
    echo "<h1>" . $resul ."</h1>";  
}

?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Operações</title>
     <link rel="stylesheet" href="style.css">
   </head>
   <body>
     <form method="get">
       <label>Número 1: <input type="text" name="txtNumero1" required/></label><br>
       <label>Número 2: <input type="text" name="txtNumero2" required/></label><br>
       <label>Operação:
        /* Selecionar apenas 1 opção */ 
        <input type="radio" name="slOperacao" value="+">Adição
        <input type="radio" name="slOperacao" value="-">Subtração
        <input type="radio" name="slOperacao" value="*">Multiplicação
        <input type="radio" name="slOperacao" value="/">Divisão
       </label><p>
       <button type="submit" name="btnCalcular">Calcular</button>
     </form>
   </body>
 </html>