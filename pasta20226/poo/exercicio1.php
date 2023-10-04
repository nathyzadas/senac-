<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form action="" method="POST">
        <label for="valor">Valor</label>
        <input type="text" name="valor">    
        <p>
          <button type="submit" name="enviado">Enviar</button>
        </p>  
    </form>


    <?php
    if(isset($_POST['enviado'])) {
        $valor = $_POST['valor'];
        if(!empty($valor)) {  // se a data for preenchida
            $pedacos = explode(',', $valor);  // $pedacos recebe um array, com o explode, retirando a /
            if(count($pedacos) == 2) { // para a data é necessário haver 3 partes
                $valor = implode ('.', $pedacos); // junta o os pedaços, com o simbolo "-" de forma reversa
                echo "<p> Valor: $valor";
            } else {
                $erro = "O valor deve seguir o padrão Ex.: 10,00";
                echo $erro;
            }
        }
    }
    ?>
</body>
</html>