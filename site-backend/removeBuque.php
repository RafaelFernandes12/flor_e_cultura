<html>
	<?php
	include('connection.php');
	?>  

	<body>

	<?php

	$query = 'DELETE FROM buque WHERE id = '.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
	?>
		
	<script type="text/javascript">
		alert("Removido com sucesso!");
		window.location = "http://florecultura.com.br/indexBuque.php";
	</script>				
				
	</body>
</html>
