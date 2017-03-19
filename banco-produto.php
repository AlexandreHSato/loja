<?php 

function listaProdutos($conexao){
	$resultado = mysqli_query($conexao,"SELECT * FROM produtos;");
	$produtos = array();
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos,$produto);
	}
	return $produtos;

}

function inseriProduto($conexao, $nome, $preco,$descricao){
	$query = "INSERT INTO produtos (nome,preco,descricao) VALUES ('{$nome}',{$preco},'{$descricao}');";
	return mysqli_query($conexao,$query);

}


function removeProduto($conexao, $id){
	echo " id:".$id."<br>";
	echo " id:".$id."<br>";
	$query = "DELETE FROM produtos WHERE id={$id};";
	return mysqli_query($conexao,$query);

}