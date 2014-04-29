<?php

	extract($_GET);
	session_start();
	$fname = $_SESSION['name'];
	$doc = new DOMDocument();
	$doc->formatOutput = true;
	$doc->load('database/'.$fname.'-db.xml');
	$mynode = $doc->getElementsByTagName('_'.$myid);
	function keyword_count_sort($first, $sec)
	{
		return $sec[1] - $first[1];
	}
	function extract_keywords($str, $minWordLen = 3, $minWordOccurrences = 2, $asArray = false)
	{
	$str = preg_replace('/[^\p{L}0-9 ]/', ' ', $str);
	$str = trim(preg_replace('/\s+/', ' ', $str));
 
	$words = explode(' ', $str);
	$keywords = array();
	while(($c_word = array_shift($words)) !== null)
	{
		if(strlen($c_word) < $minWordLen) continue;
 
		$c_word = strtolower($c_word);
		if(array_key_exists($c_word, $keywords)) $keywords[$c_word][1]++;
		else $keywords[$c_word] = array($c_word, 1);
	}
	usort($keywords, 'keyword_count_sort');
 
	$final_keywords = array();
	foreach($keywords as $keyword_det)
	{
		if($keyword_det[1] < $minWordOccurrences) break;
		array_push($final_keywords, $keyword_det[0]);
	}
	return $asArray ? $final_keywords : implode(', ', $final_keywords);
	}
	if($mynode->length > 0)
	{
		foreach ($mynode as $mn) 
		{
			$str1= $mn->nodeValue;
			$str1 = $str1 . " " . $myword . " ".$myword;
		}
	}
	else
	{
		echo "";
	}
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="css/general.css" />
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>    
    <script src="js/getfromdb.js"></script>    
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Your Search Query</title>
    <script src="https://www.google.com/jsapi" type="text/javascript"></script>
		<style>
		 #mycontrol .gs-webResult .gs-snippet { display : none; }
		.gsc-search-box
		{
			visibility: hidden;
		}
		.gsc-tabHeader 
		{
			visibility:hidden;
		}
		.gsc-result-info
		{
				visibility:hidden;
		}
		.gsc-cursor
		{
			visibility:hidden;
		}
		
		#searchcontrol
		{
		height:100px;
		width:100px;
	
		}
		#suggestion
		{
		height:300px;
		width:600px;
		position:absolute;
		left:50px;
		top:100px;
		}
		.gsc-results gsc-webResult
		{
		position:relative;
		right:100px;
		top:100px;
		}
		</style>
    <script language="Javascript" type="text/javascript">
	
    //<!
    google.load('search', '1');

    function OnLoad()
	{
      // Create a search control
      var searchControl = new google.search.SearchControl();
		searchControl.setResultSetSize(3);
      var options = new google.search.SearcherOptions();
	  options.setRoot(document.getElementById("searchcontrol"));
	  options.setExpandMode(google.search.SearchControl.EXPAND_MODE_PARTIAL );
      searchControl.addSearcher(new google.search.WebSearch(),options);
	  options.setRoot(document.getElementById("suggestion"));
      //searchControl.addSearcher(new google.search.BlogSearch(),options);
    //  searchControl.addSearcher(new google.search.PatentSearch(),options);
	 

   	  var drawOptions = new google.search.DrawOptions();
	  drawOptions.setDrawMode(google.search.SearchControl.DRAW_MODE_TABBED);
      searchControl.draw(document.getElementById("searchcontrol"),drawOptions);
	  
	  
		
		var myvar = <?php echo json_encode(extract_keywords($str1,5,1)); ?>
      // execute an inital search
      searchControl.execute(myvar);
	 

    }
    google.setOnLoadCallback(OnLoad);
    //]]>
    </script>
  </head>
  <body>
    <div id="searchcontrol"  class="modal-body" >Loading</div>
	<div id="suggestion" class="scrollable" ></div>
	
  </body>
</html>