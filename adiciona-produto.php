<?php include("cabecalho.php");?>
				<?php
				
				function inseriProduto($conexao, $nome, $preco){
					$query = "INSERT INTO produtos (nome,preco) VALUES ('{$nome}',{$preco});";
					return mysqli_query($conexao,$query);

				}

				$nome = $_GET['nome'];
				$preco = $_GET['preco'];
				$conexao = mysqli_connect("localhost","root","","loja_php");

				if(inseriProduto($conexao,$nome,$preco)){
				?>

				<p class="text-success">Produto <?=$nome?>, <?=$preco?> adicionado com sucesso!</p>

				<?php }else{ 
					$msg = mysqli_error($conexao);
				?>

				<p class="text-danger">Produto <?=$nome?>, <?=$preco?> não foi adicionado: <?= $msg?> </p>

				<?php
				}
				mysqli_close($conexao);
				?>

<?php include("rodape.php");?>

