<?php
  require_once('./conexao.php');
  header('Content-Type: application/json; charset=utf-8');
  
  $json  = file_get_contents('php://input');
  $nome_usuario   = json_decode($json);

  $sql       = "select nome_usuario from usuario where nome_usuario = '$nome_usuario';";
  $pesquisa  = mysqli_query($conexao,$sql);
  $resultado = mysqli_num_rows($pesquisa);

  if($resultado){
    if($resultado == 1){
      print_r(json_encode($pesquisa -> fetch_all(MYSQLI_ASSOC)));
    }
  }else{
    $erro = array('mensagem' => 'nao existe');
    print_r(json_encode($erro));
  }

  mysqli_close($conexao);

?>