<?php

	extract($_GET);
	$fh = fopen('graph.txt','r');
	while ($line = fgets($fh)) 
	{
		echo $line;
	}
	fclose($fh);
?>
