<?php

	require_once('./conexao.php');

	$select = 'select * from sugestoes';

	$resposta = mysqli_query($conexao,$select);

	print_r(json_encode($resposta -> fetch_all(MYSQLI_ASSOC)));

	mysqli_close($conexao);
?>
