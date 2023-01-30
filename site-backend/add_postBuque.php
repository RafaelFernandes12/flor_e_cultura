<html>

	<?php
		include('connection.php');
	?>   

<body>

	<?php
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$flor_id = $_POST['flor_id'];

				
	$query = "INSERT INTO buque
			(nome,preco, flor_id)
			VALUES ('".$nome."','".$preco."','".$flor_id."')";
	mysqli_query($db,$query) or die ('Error in Database: '.mysqli_error($db));
					
	?>
	
	<script type="text/javascript">
		alert("Adicionado com sucesso!");
		window.location = "http://florecultura.com.br/indexBuque.php";
	</script>

</body>

</html>
