<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<?php
		$id=$_POST['id'];
		$nome=$_POST['nome'];
		$preco=$_POST['preco'];
		$flor_id=$_POST['flor_id'];
		
		include('connection.php');
		
		$query = 'UPDATE buque set nome ="'.$nome.'",
				preco ="'.$preco.'", flor_id="'.$flor_id.'"WHERE
				id ="'.$id.'"';
		$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
		?>	

		<script type="text/javascript">
			alert("Atualizado com sucesso!");
			window.location = "http://florecultura.com.br/indexBuque.php";
		</script>
	</body>
</html>
