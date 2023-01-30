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
	
	<h1>Adicionar Flor</h1>
	<form method="post" action="add_postFlor.php">
              Nome:</br>
		<input placeholder="Nome da Flor" name="nome"><br/><br/>
		Nome Científico:</br>
		<input placeholder="Nome científico" name="nome_cient"><br/><br/>
		Preço:</br>
		<input placeholder="Preço" name="preco"><br/><br/>
		<button type="submit" class="button">Salvar nova flor</button>&nbsp;
		<button type="reset" class="button">Limpar campos</button>&nbsp;
		<a class="button" href="http://florecultura.com.br/indexFlor.php">Retornar à listagem de flores</a>
	</form>  
</body>

</html>
