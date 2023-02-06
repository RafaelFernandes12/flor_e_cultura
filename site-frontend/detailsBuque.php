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
		Detalhes do Buquê
	</h1>

	<?php 
	$query = 'SELECT * FROM buque WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	

	
	
	while($row = mysqli_fetch_array($result)) {

		$id = $row['id'];
              $nome = $row['nome'];
	       $preco = $row['preco'];
	       $flor_id = $row['flor_id'];
             
  	}

  	$resultflor = mysqli_query($db,"SELECT nome FROM flor WHERE id = '$flor_id'");
	$rowflor = mysqli_fetch_assoc($resultflor);
              
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
				<td><strong>Preço:</strong></td>
				<td><?php echo $preco; ?></td>
			</tr>
			<tr>
				<td><strong>Flor:</strong></td>
				<td><?php echo $rowflor['nome']; ?></td>
		</tbody>
	</table>
	<a class="button" href="indexBuque.php">Retornar à listagem de buquês</a></td>

</body>

</html>