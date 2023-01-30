<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<?php
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$nome_cient = $_POST['nome_cient'];
		$preco = $_POST['preco'];
		
		include('connection.php');
		
		$query = 'UPDATE flor set nome ="'.$nome.'",
				preco ="'.$preco.'", nome_cient ="'.$nome_cient.'" WHERE
				id ="'.$id.'"';
		$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
		?>	

		<script type="text/javascript">
			alert("Atualizado com sucesso!");
			window.location = "http://florecultura.com.br/indexFlor.php";
		</script>
	</body>
</html>
