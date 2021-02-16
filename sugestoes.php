<?php
  require_once('./conexao.php');


      $nome        = $_POST['nome'];
      $email       = $_POST['email'];
      $sugestao    = $_POST['sugestao'];

      $sql = "INSERT INTO sugestoes (nome, email, sugestao) values ('$nome', '$email', '$sugestao');";

	mysqli_query($conexao,$sql);


  mysqli_close($conexao);

?>
