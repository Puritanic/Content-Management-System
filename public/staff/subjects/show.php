<?php 
	// null coalescing operator
	// if there is 'id' value use it, else use '1'
	$id = $_GET['id'] ?? '1';

	echo $id;

 ?>