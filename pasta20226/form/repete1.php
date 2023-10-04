<h3>Números: </h3>

<?php

/* Números de 1 a 5:*/
if(isset($_GET['enviado'])) {
$x = $_GET["valor"];
$flag = $x+5;
while($x <= $flag) {
  echo "O número é: $x <br>";
  $x++;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
   <label for="nome">Números:</label>
   <input type="text" id="valor" name="valor"><p>
    <button name="enviado" type="submit">Enviar</button>
   <button type="reset">Limpar</button>
   </form>


</body>
</html>