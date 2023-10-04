
<h3>Estrutura com o "For"</h3>

<?php
if(isset($_GET['enviado'])) {
for ($x = $_GET["valor"]; $x <= $_GET["valor"]+10; $x++) {
  echo "O número é: $x <br>";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<body>

<form action="" method="get">
   <label for="nome">Número:</label>
   <input type="text" id="valor" name="valor"><p>
    <button name="enviado" type="submit">Enviar</button>
   <button type="reset">Limpar</button>
   </form>


</body>
</html>
