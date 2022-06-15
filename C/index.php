<?php
	$head = $_GET ["head"];
	$body = $_GET ["body"];
	
	
	$file = fopen ($head "x.html" ,'w');
	
	fwrite ($file , "<meta charset="UTF-8"/> \n <link rel="stylesheet" href="x.css" type="text/css"/> \n <pre>"$body);
	
	echo "success 😀"
	
	
 ?>
