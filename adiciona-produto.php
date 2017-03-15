<?php include("cabecalho.php");?>
				<?php
				$nome = $_GET['nome'];
				$preco = $_GET['preco'];


				$conexao = mysqli_connect("localhost","root","","loja_php");

				$query = "INSERT INTO produtos (nome,preco) VALUES ('{$nome}',{$preco});";

				if(mysqli_query($conexao,$query)){
				?>

				<p class="alert-success">Produto <?=$nome?>, <?=$preco?> adicionado com sucesso!</p>

				<?php }else{ ?>

				<p class="alert-danger">Produto <?=$nome?>, <?=$preco?> adicionado com sucesso!</p>

				<?php
				}
				mysqli_close($conexao);
				?>

<?php include("rodape.php");?>

