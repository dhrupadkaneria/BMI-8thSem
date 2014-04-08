<?php

	extract($_GET);
	$fh = fopen('graph.txt','a');
	$data = "\n".$ch.";".$cont.";".$x.";".$y;
	fwrite($fh, $data);
	fclose($fh);
?>
