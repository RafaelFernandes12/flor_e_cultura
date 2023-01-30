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
		Editar Buquê
	</h1>

	<?php 
	$query = 'SELECT * FROM buque WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	while($row = mysqli_fetch_array($result)) {

		$id=$row['id'];
		$nome=$row['nome'];
		$preco=$row['preco'];
		$flor_id=$row['flor_id'];
	}
              
	?>
	<form method="post" action="edit_postBuque.php">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	    Nome:</br>
		<input placeholder="Nome" name="nome" value="<?php echo $nome; ?>"><br/><br/>
		Preço:</br>
		<input placeholder="Preço" name="preco" value="<?php echo $preco; ?>"><br/><br/>
		Flor do conjunto:</br>
		<?php
		
		$query1="SELECT nome,id FROM flor ORDER BY nome";

		echo "<select name=flor_id value=''>Flor</option>";

		foreach ($db->query($query1) as $row){
			echo "<option value=$row[id]>$row[nome]</option>";
		}

		echo "</select>";
		?>
		</br>
		<button type="submit" >Atualizar buquê</button>
		<a class="button" href="http://florecultura.com.br/indexBuque.php">Retornar à listagem de buquês</a>

	</form>  
</body>

</html>
