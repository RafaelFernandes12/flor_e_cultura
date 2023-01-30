<html>

	<?php
	include('connection.php');
	?>   

<body>

	<?php
	$nome = $_POST['nome'];
	$nome_cient = $_POST['nome_cient'];
	$preco = $_POST['preco'];
		
	$query = "INSERT INTO flor
			(nome, nome_cient, preco)
			VALUES ('".$nome."','".$nome_cient."', '".$preco."')";
	mysqli_query($db,$query) or die ('Error in Database: '.mysqli_error($db));
					
	?>
	
	<script type="text/javascript">
		alert("Adicionado com sucesso.");
		window.location = "http://florecultura.com.br/indexFlor.php";
	</script>

</body>

</html>
