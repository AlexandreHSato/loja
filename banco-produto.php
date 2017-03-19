<?php 

function listaProdutos($conexao){
	$resultado = mysqli_query($conexao,"SELECT * FROM produtos;");
	$produtos = array();
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos,$produto);
	}
	return $produtos;

}

function inseriProduto($conexao, $nome, $preco){
	$query = "INSERT INTO produtos (nome,preco) VALUES ('{$nome}',{$preco});";
	return mysqli_query($conexao,$query);

}


function removeProduto($conexao, $id){
	echo " id:".$id."<br>";
	echo " id:".$id."<br>";
	$query = "DELETE FROM produtos WHERE id={$id};";
	return mysqli_query($conexao,$query);

}