<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
<?php



	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria = $_POST['categoria_id'];

	if(array_key_exists('usado', $_POST)){
		$usado = "true";
	}else{
		$usado = "false";
	}



	if(inseriProduto($conexao,$nome,$preco,$descricao,$categoria,$usado)){
?>

	<p class="text-success">Produto <?=$nome?>, <?=$preco?> adicionado com sucesso!</p>

<?php 
	}else{ 
		$msg = mysqli_error($conexao);
?>

	<p class="text-danger">Produto <?=$nome?>, <?=$preco?> não foi adicionado: <?= $msg?> </p>

<?php
	}
	mysqli_close($conexao);
?>

<?php include("rodape.php");?>

