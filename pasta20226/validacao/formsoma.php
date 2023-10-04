<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php página única</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="" method="GET">
        <p class=error>* obrigatório</p>
        <label for="v1">Valor 1:</label>
        <input type="number" id="v1" name="v1" required><span class="error">*</span><br><br>
        <label for="v2">Valor 2:</label>
        <input type="number" id="v2" name="v2" required><span class="error">*</span><br><br>
        
        <p><button name="calcula" type="submit">Enviar</button>
        
        <?php
          if(isset($_GET['calcula'])){
            $vl1  = $_GET['v1'];
            $vl2 = $_GET['v2'];
            $soma  = $vl1+$vl2;
            
            echo "<p><b> Total: </b>" .$soma;                
          }
        ?>

    </form>
</body>
</html>