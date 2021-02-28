<?php

require_once('./conexao.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$genero = $_POST['genero'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$escola = base64_encode($_POST['escola']);
$ano_letivo = base64_encode($_POST['ano_letivo']);
$tipo_escola = base64_encode($_POST['tipo_escola']);
$nome_usuario = $_POST['nome_usuario'];
$senha = md5($_POST['senha']);

$sql = "INSERT INTO usuario (nome, sobrenome, genero, nascimento, email, telefone, bairro, cidade, uf, escola, ano_letivo, tipo_escola, nome_usuario, senha ) VALUES ('$nome', '$sobrenome', '$genero', '$nascimento', '$email', '$telefone', '$bairro', '$cidade', '$uf', '$escola', '$ano_letivo', '$tipo_escola', '$nome_usuario', '$senha')";
$result = $conexao->query($sql);  
mysqli_close($conexao);     

?>
