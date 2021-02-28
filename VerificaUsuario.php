<?php

  require_once('./conexao.php');
  header('Content-Type: application/json; charset=utf-8');
    
  $json = file_get_contents('php://input');
  $obj = json_decode($json);
  $itens = [];
  
  foreach($obj as $item){
    array_push($itens,$item);
  }

  $id_usuario   = mysqli_real_escape_string($conexao, $itens[0]);
  $senha        = mysqli_real_escape_string($conexao, md5($itens[1]));
  $sql          = "select * from usuario where id_usuario = '$id_usuario' and senha = '$senha'; ";
  $result       = mysqli_query($conexao, $sql);
  $row          = mysqli_num_rows($result);

  if($row){
    if($row == 1) {
      print_r(json_encode($result -> fetch_all(MYSQLI_ASSOC)));
    }
  }else{
    $erro = array('mensagem'=>'erro');
    print_r(json_encode($erro));
  }

  mysqli_close($conexao)
?>