<?php
	if($_GET)
	{	
		$Dough = $_GET
		['Dough'];
		$Volume = $_GET
		['Volume'];
		$density= $Dough 
		/ $Volume;
		echo " Dough".$Dough." /  Volume".$Volume." = ".$density; 
	}
?>