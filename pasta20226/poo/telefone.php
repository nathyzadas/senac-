<!-- mudar a visualização do telefone -->
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
        <label for="tel">Telefone</label>
        <input type="text" name="tel">      
        <p>
          <button type="submit" name="enviado">Enviar</button>
        </p>  
    </form>


    <?php
    // if(isset($_POST['enviado']))
       if(count($_POST) > 0) {
        $telefone ="";
        if(!empty($_POST['tel'])){
          $ddd = substr($_POST['tel'],0,2);
          $parte1 = substr($_POST['tel'],2,5);
          $parte2 = substr($_POST['tel'],7);
          $telefone = "($ddd) $parte1-$parte2";
          echo "<p>" . $telefone;
        }    
    }
    ?>
</body>
</html>
