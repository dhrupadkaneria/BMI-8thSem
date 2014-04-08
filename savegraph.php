<?php

	extract($_GET);
	$fh = fopen('graph.txt','a');
	$data = "\n".$ch.";".$idea.";".$v.";".$u;
	fwrite($fh, $data);
	fclose($fh);
?>
