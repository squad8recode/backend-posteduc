<?php
  require_once('./conexao.php');

  $sql = 'select * from evento where verificado = true ';

  /*resultado da consulta*/
  $dados = mysqli_query($conexao,$sql);

  if($dados){
      print_r(json_encode($dados-> fetch_all(MYSQLI_ASSOC)));
  }

  mysqli_close($conexao);
?>
