<?php
  require_once('./conexao.php');

   if(
     isset($_POST['id_usuario']) &&
     isset($_POST['id_evento']) &&
     isset($_POST['data_denuncia']) &&
     isset($_POST['denuncia'])
    )

    {
      $usuario       = $_POST['id_usuario'];
      $evento        = $_POST['id_evento'];
      $tipo_denuncia = $_POST['tipo_denuncia'];
      $data_denuncia = $_POST['data_denuncia'];
      $denuncia      = $_POST['denuncia'];

      $insert = "insert into denuncia (id_user_denuncia,id_evento_denuncia,tipo_denuncia,data_denuncia,denuncia) values ('$usuario','$evento','$tipo_denuncia','$data_denuncia','$denuncia');";

	mysqli_query($conexao,$insert);

      }

mysqli_close($conexao);

?>
