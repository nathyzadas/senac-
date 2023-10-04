<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="" method="POST">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf"><br><br>
        <label for="rg">RG</label>
        <input type="text" name="rg">  
        <p>
          <button type="submit" name="enviado">Enviar</button>
        </p>  
    </form>


    <?php
    // if(isset($_POST['enviado']))
    if(count($_POST) > 0) {

        $cpf ="";
        if(!empty($_POST['cpf'])){
          $parte1 = substr($_POST['cpf'],0,3);
          $parte2 = substr($_POST['cpf'],3,3);
          $parte3 = substr($_POST['cpf'],4,3);
          $parte4 = substr($_POST['cpf'],5,2);
          $cpf = "$parte1.$parte2.$parte3-$parte4";
          echo "<p>CPF: " . $cpf;
        }   

        echo "<br>";
            
        $rg ="";
        if(!empty($_POST['rg'])){
            $parte1 = substr($_POST['rg'],0,2);
            $parte2 = substr($_POST['rg'],3,3);
            $parte3 = substr($_POST['rg'],4,3);
            $parte4 = substr($_POST['rg'],5,1);
            $rg = "$parte1.$parte2.$parte3-$parte4";
            echo "<p>RG: " . $rg;
        }    
    
            
    }
    ?>
</body>
</html>