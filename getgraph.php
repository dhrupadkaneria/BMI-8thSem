<?php

	extract($_GET);
	$fh = fopen('graph.txt','r');
	while ($line = fgets($fh)) 
	{
		/*$lines = explode(";", $line);
		for($i = 0; $i < count($lines); ++$i)
		{
			echo $lines[$i]."<br/>";
		}*/
		echo $line;
	}
	fclose($fh);
?>
