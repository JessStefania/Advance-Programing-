<?php
	if($_GET)
	{	
		$t1 = $_GET
		['t1'];
		$t2 = $_GET
		['t2'];
		$suma = $t1 
		+ $t2;
		echo "La suma de ".$t1." y ".$t2." = ".$suma; 
	}
?>