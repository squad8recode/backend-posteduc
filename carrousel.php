<?php

  require_once('./conexao.php');

  $select = "select * from evento where verificado = true  order by id_evento desc limit 4 ;";

  $resp = mysqli_query($conexao,$select);

  print_r(json_encode($resp -> fetch_all(MYSQLI_ASSOC)));

  mysqli_close($conexao);

?>
