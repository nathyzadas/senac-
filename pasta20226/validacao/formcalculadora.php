<?php

if(isset($_GET['btnCalcular'])){

    $num01 = $_GET["txtNumero1"];
    $num02 = $_GET["txtNumero2"];
    $opera = $_GET["slOperacao"];
    $resul = "";

    if($num01  && $num02){ // ver a importância deste if
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
         <select name="slOperacao">
           <option value="+">Adição</option>
           <option value="-">Subtração</option>
           <option value="*">Multiplicação</option>
           <option value="/">Divisão</option>
         </select>
       </label><br>
       <button type="submit" name="btnCalcular">Calcular</button>
     </form>
   </body>
 </html>