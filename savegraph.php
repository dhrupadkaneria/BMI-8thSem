<?php

	extract($_GET);
	session_start();
	$fname = $_SESSION['name'];
	$fh = fopen('database/'.$fname.'-graph.txt','a');
	$data = "\n".$ch.";".$cont.";".$x.";".$y;
	fwrite($fh, $data);
	fclose($fh);
?>
