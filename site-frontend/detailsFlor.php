<?php
       include('connection.php');
?>  
<head>
	<link rel="stylesheet" href="./indexcss.css">
</head>
<body>
	<header>
	       <section>
	       	<h1> <img src="./Logo.svg" alt="logo-F&C" id="logo"></h1>
	       	<h2> <a>Flor &</a><p>Cultura</p> </h2>
	       </section>
    	</header>

	<h1>
		Detalhes da Flor
	</h1>

	<?php 
	$query = 'SELECT * FROM flor WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
	while($row = mysqli_fetch_array($result)) {

		$id = $row['id'];
		$nome = $row['nome'];
		$nome_cient = $row['nome_cient'];
             	$preco = $row['preco'];

             
  	}
              
	?>
	<table>
		<tbody>
			<tr>
				<td><strong>Id:</strong></td>
				<td><?php echo $id; ?></td>
			</tr>
			<tr>
				<td><strong>Nome:</strong></td>
				<td><?php echo $nome; ?></td>
			</tr>
			<tr>
				<td><strong>Nome Científico:</strong></td>
				<td><?php echo $nome_cient; ?></td>
			<tr>
				<td><strong>Preço:</strong></td>
				<td>R$ <?php echo $preco; ?></td>
			</tr>

		</tbody>
	</table>
	<a class="button" href="indexFlor.php">Retornar à listagem de flores</a></td>

</body>

</html>
