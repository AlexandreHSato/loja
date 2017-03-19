<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
				<?php
				
				

				$nome = $_GET['nome'];
				$preco = $_GET['preco'];
				

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

