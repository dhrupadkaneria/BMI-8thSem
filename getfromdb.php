<?php

	extract($_GET);

	$doc = new DOMDocument();
	$doc->formatOutput = true;
	$doc->load('test.xml');
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
