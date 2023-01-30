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
	
	<h1>Adicionar buquê</h1>
	<form method="post" action="add_postBuque.php">
		Nome do item:</br>
		<input placeholder="Nome do item" name="nome"><br/><br/>
		Preço:</br>
		<input placeholder="Preço" name="preco"><br/><br/>
		Flor do conjunto:</br>
		<?php
		
		$query="SELECT nome,id FROM flor ORDER BY nome"; 

		echo "<select name=flor_id value=''>Flor</option>";

		foreach ($db->query($query) as $row){
			echo "<option value=$row[id]>$row[nome]</option>";
		}

		echo "</select>";
		?>	
		<br/>
		<button type="submit" class="btn btn-success">Salvar novo buquê</button>&nbsp;
		<button type="reset" class="btn btn-warning">Limpar dados</button>&nbsp;
		<a class="button" href="http://florecultura.com.br/indexBuque.php">Retornar à listagem de buquês</a>

	</form>  
</body>

</html>
