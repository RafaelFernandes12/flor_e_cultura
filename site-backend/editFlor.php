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
		Editar Flor
	</h1>

	<?php 
	$query = 'SELECT * FROM flor WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	while($row = mysqli_fetch_array($result)) {

		$id= $row['id'];
		$nome= $row['nome'];
		$nome_cient= $row['nome_cient'];
		$preco=$row['preco'];

	}
              
	?>
	<form method="post" action="edit_postFlor.php">

	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	    Nome:</br>
		<input placeholder="Nome" name="nome" value="<?php echo $nome; ?>"><br/><br/>
		Nome Científico:</br>
		<input placeholder="Nome Científico" name="nome_cient" value="<?php echo $nome_cient; ?>"><br/><br/>
		Preço:</br>
		<input placeholder="Preço" name="preco" value="<?php echo $preco; ?>"><br/><br/>
		<button type="submit" >Atualizar flor</button>
		<a class="button" href="http://florecultura.com.br/indexFlor.php">Retornar à listagem de flores</a>

	</form>  
</body>

</html>
