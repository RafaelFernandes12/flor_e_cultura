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
	
	<h1>Buquês a venda</h1>
	
	<br/>
	<div class="Post">
		<a class="button" href="indexFlor.php"> Listagem de flores</a>
		<a class="button" href="http://florecultura.backend.biz/addBuque.php">Adicionar novo buquê</a>
	</div>
	<br/><br/>
	<table> 
		<thead>
			<tr>
				<th>Nome do Buquê</th>
				<th>Preço do Buquê (R$)</th>
				<th>Flor</th>
				<th>Operações</th>
			</tr>
		</thead>
		<tbody>
			<?php                  
			$query = 'SELECT * FROM buque';
			$result = mysqli_query($db, $query) or die (mysqli_error($db));

			while ($row = mysqli_fetch_assoc($result)) {   
				echo '<tr>';

					$id = $row['flor_id'];

					$resultflor = mysqli_query($db,"SELECT nome FROM flor WHERE id = '$id'");
					$rowflor = mysqli_fetch_assoc($resultflor);

					echo '<td>'. $row['nome'].'</td>';
					echo '<td>'. $row['preco'].'</td>';
					echo '<td>'. $rowflor['nome'].'</td>';
					echo '<td>';
						echo '<div class="Post">';
							echo '<a class="button" href="detailsBuque.php?id='.$row['id'].'" >Detalhes</a>';
							echo '<a class="button" href="http://florecultura.backend.biz/editBuque.php?id='.$row['id'].'">Editar</a>';
							echo '<a class="button" href="http://florecultura.backend.biz/removeBuque.php?id='.$row['id'].'">Remover</a>';
						echo '</div>';
					echo '</td>';
				echo '</tr> ';

			}
			?> 
                                    
		</tbody>
	</table>

</body>

</html>
