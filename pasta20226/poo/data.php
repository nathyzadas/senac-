<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nasc">Nascimento</label>
        <input type="text" name="nasc">    
        <p>
          <button type="submit" name="enviado">Enviar</button>
        </p>  
    </form>


    <?php
    if(isset($_POST['enviado'])) {
        $nasc = $_POST['nasc'];
        if(!empty($nasc)) {  // se a data for preenchida
            $pedacos = explode('/', $nasc);  // $pedacos recebe um array, com o explode, retirando a /
            if(count($pedacos) == 3) { // para a data é necessário haver 3 partes
                $nasc = implode ('-', array_reverse($pedacos)); // junta o os pedaços, com o simbolo "-" de forma reversa
                echo "<p> Data reversa $nasc";
            } else {
                $erro = "A data de nascimento deve seguir o padrão dia/mes/ano.";
                echo $erro;
            }
        }
    }
    ?>
</body>
</html>
