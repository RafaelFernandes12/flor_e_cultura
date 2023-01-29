<?php
	$db = mysqli_connect('192.168.100.20', 'ifrn', 'ifrn') or die ('Impossivel conectar. Cheque os parâmetros da conexão.');
	mysqli_select_db($db, 'florecultura') or die (mysqli_error($db));
	$frontend = 'florecultura.com.br';
?>
