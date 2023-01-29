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
	
	<h1>Flores a venda</h1>
	<br/>

	<div class="Post">
		<a class="button" href="indexBuque.php"> Listagem de Buquês</a>
		<a class="button" href="http://florecultura.backend.biz/addFlor.php">Adicionar nova flor</a>
	</div>
	
	<br/><br/>
	<table> 
		<thead>
			<tr>
				<th>Nome da flor</th>
				<th>Nome científico</th>
				<th>Preço da flor (R$)</th>
				<th>Operações</th>
			</tr>
		</thead>
		<tbody>
			<?php                  
			$query = 'SELECT * FROM flor';
			$result = mysqli_query($db, $query) or die (mysqli_error($db));

			while ($row = mysqli_fetch_assoc($result)) {
                                
				echo '<tr>';
					echo '<td>'. $row['nome'].'</td>';
					echo '<td>'. $row['nome_cient'].'</td>';
					echo '<td>'. $row['preco'].'</td>';
					echo '<td>';
						echo '<div class="Post">';
							echo '<a class="button" href="detailsFlor.php?id='.$row['id'].'" >Detalhes</a>';
							echo '<a class="button" href="http://florecultura.backend.biz/editFlor.php?id='.$row['id'].'">Editar</a>';
							echo '<a class="button" href="http://florecultura.backend.biz/removeFlor.php?id='.$row['id'].'">Remover</a>';
						echo '</div>';
					echo '</td>';
				echo '</tr> ';

			}
			?> 
                                    
		</tbody>
	</table>

</body>

</html>
