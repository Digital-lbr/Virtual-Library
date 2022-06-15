<?php
	$head = $_POST ["head"];
	$body = $_POST ["body"];
	
	
	$file = fopen ($head "x.html" ,'a');
	
	fwrite ($file , "<meta charset="UTF-8"/> \n <link rel="stylesheet" href="x.css" type="text/css"/> \n <pre>"$body);
	
	echo "success 😀"
	
	
 ?>
