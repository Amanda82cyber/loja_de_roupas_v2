<?php
	header("Content-type: applicacao/json");

	include("conexao.php");
	
	$id = $_POST["id"];
	
	$sql = "SELECT * FROM roupa WHERE id_roupa = '$id'";
	
	$resultado = mysqli_query($conexao,$sql);
	
	$linha = mysqli_fetch_assoc($resultado);
	
	echo json_encode($linha);
?>