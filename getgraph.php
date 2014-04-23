<?php

	extract($_GET);
	session_start();
	$fname = $_SESSION['name'];
	$fh = fopen('database/'.$fname.'-graph.txt','r');
	while ($line = fgets($fh)) 
	{
		echo $line;
	}
	fclose($fh);
?>
