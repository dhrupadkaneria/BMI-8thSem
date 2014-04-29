<?php

	extract($_GET);
	session_start();
	$fname = $_SESSION['name'];
	$doc = new DOMDocument();
	$doc->formatOutput = true;
	$doc->load('database/'.$fname.'-db.xml');
	$mynode = $doc->getElementsByTagName('_'.$myid);
	if($mynode->length > 0)
	{
		foreach ($mynode as $mn) 
		{
			echo $mn->nodeValue;
		}
	}
	else
	{
		echo "";
	}
?>
