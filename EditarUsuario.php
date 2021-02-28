<?php
  require_once('./conexao.php');

  $id_usuario  = $_POST['id_usuario'];
  $nome        = $_POST['nome'];
  $sobrenome   = $_POST['sobrenome'];
  $genero      = $_POST['genero'];
  $telefone    = $_POST['telefone'];
  $bairro      = $_POST['bairro'];
  $cidade      = $_POST['cidade'];
  $uf          = $_POST['uf'];
  $escola      = base64_encode($_POST['escola']);
  $ano_letivo  = base64_encode($_POST['ano_letivo']);
  $tipo_escola = base64_encode($_POST['tipo_escola']);
  $senha       = md5($_POST['senha']);

  $sql = "update usuario set nome='$nome',sobrenome='$sobrenome',genero='$genero',telefone='$telefone',bairro='$bairro',cidade='$cidade',uf='$uf',escola='$escola',ano_letivo='$ano_letivo',tipo_escola='$tipo_escola',senha='$senha' where id_usuario = '$id_usuario';";

  mysqli_query($conexao,$sql);

  mysqli_close($conexao);
?>