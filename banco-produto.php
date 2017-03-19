<?php 

function listaProdutos($conexao){
	$resultado = mysqli_query($conexao,"SELECT p.*,c.nome as categoria_nome FROM produtos AS p JOIN categorias AS c ON p.categoria_id=c.id;");
	$produtos = array();
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos,$produto);
	}
	return $produtos;

}

function inseriProduto($conexao, $nome, $preco,$descricao,$categoria){
	$query = "INSERT INTO produtos (nome,preco,descricao,categoria_id) VALUES ('{$nome}',{$preco},'{$descricao}',{$categoria});";
	return mysqli_query($conexao,$query);

}


function removeProduto($conexao, $id){
	echo " id:".$id."<br>";
	echo " id:".$id."<br>";
	$query = "DELETE FROM produtos WHERE id={$id};";
	return mysqli_query($conexao,$query);

}