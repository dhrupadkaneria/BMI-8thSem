<?php

	extract($_GET);
	session_start();
	$fname = $_SESSION['name'];
	$doc = new DOMDocument();
	$doc->formatOutput = true;
	$doc->load('database/'.$fname.'-db.xml');
	//$doc->load('test.xml');
	$mynode = $doc->getElementsByTagName('_'.$myid);
	if($mynode->length > 0)
	{
		foreach ($mynode as $mn) 
		{
			if(strcmp($mn->nodeValue,$val) != 0)
			{
				$mn->nodeValue = $val;
				$doc->save('database/'.$fname.'-db.xml');
			}
		}
	}
	else
	{
		$root = $doc->lastChild;
		$b = $doc->createElement('_'.$myid);
		$t = $doc->createTextNode($val);
		$b = $root->appendChild($b);
		$t = $b->appendChild($t);
		$doc->save('database/'.$fname.'-db.xml');
	}
?>
