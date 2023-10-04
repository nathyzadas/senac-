<?php
    echo md5("joao1234");
    // <hr> cria uma linha horizontal
    echo "<hr>";

    $password = "joao1234";
    $hash = password_hash($password, PASSWORD_DEFAULT);
  // PASSWORD_DEFAULT é o método (um bom método) de criptografia
  echo "<p>" . $hash;
  // veja a diferença da mudança dos algorítmo md5

  echo "<hr>";
  echo "<p>" . password_verify($password, '$2y$10$8IqhCKi5gug94PrEWFZthOPYlCQi.xMM34KNKlSNecT8Fahw9QOXW');


?>