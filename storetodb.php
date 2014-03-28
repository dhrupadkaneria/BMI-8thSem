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
			if(strcmp($mn->nodeValue,$val) != 0)
			{
				$mn->nodeValue = $val;
				$doc->save('test.xml');
				//echo $mn->nodeValue."<br/>";
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
		$doc->save('test.xml');
	}
	//echo "Database Updated Successfully!!";
?>
