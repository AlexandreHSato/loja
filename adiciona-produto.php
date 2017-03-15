<html>
	<head>
		<title>Minha Loja</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/loja.css">
	</head>
	<body>
		<div class="container">
			<div class="principal">
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


			</div>
		</div>
	</body>

</html>