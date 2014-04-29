<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stage Two - Template Two</title>
	
	<link type="text/css" rel="stylesheet" href="css/examples.css"/>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="css/general.css" />
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/jquery.flot.js"></script>
	<style type="text/css">
		select 
		{
			padding:3px;
			margin: 0;
			-webkit-border-radius:4px;
			-moz-border-radius:4px;
			border-radius:4px;
			-webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
			-moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
			box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
			background: #f8f8f8;
			color:#888;
			border:none;
			outline:none;
			display: inline-block;
			-webkit-appearance:none;
			-moz-appearance:none;
			appearance:none;
			cursor:pointer;
		}
		label {position:relative}
		label:after {
			content:'<>';
			font:11px "Consolas", monospace;
			color:#aaa;
			-webkit-transform:rotate(90deg);
			-moz-transform:rotate(90deg);
			-ms-transform:rotate(90deg);
			transform:rotate(90deg);
			right:8px; top:2px;
			padding:0 0 2px;
			border-bottom:1px solid #ddd;
			position:absolute;
			pointer-events:none;
		}

	</style>
	<script type="text/javascript">
	
	var priority = [];
	var m = new Array();
	var freq = new Array();
	var importance = new Array();
	
	var options = {
			series: 
			{
				lines: 
				{
					show: false
				},
				points: 
				{
					show: true
				}
			},
			grid: 
			{
				hoverable: true,
				clickable: true
			},
			yaxis: 
			{
				min: 0,
				max: 10
			},
			xaxis: 
			{
				min: 0,
				max: 10
			}
		};
	function getstr(x, y)
	{
		for(var j1 = 0; j1 < importance.length; ++j1)
		{
			if(importance[j1] == x)
			{
				if(freq[j1] == y)
				{
					return m[j1];
				}
			}
		}
	}
	function ispresent(x)
	{
		for(var j1 = 0; j1 < m.length; ++j1)
		{
			if(m[j1] == x)
			{
				return true;
			}
		}
		return false;
	}
	
	$(function() 
	{
		var plot = $.plot("#placeholder", [{ data: priority}], options);

		$("<div id='tooltip'></div>").css({
			position: "absolute",
			display: "none",
			border: "1px solid #fdd",
			padding: "2px", "background-color": "#fee",
			opacity: 0.80
		}).appendTo("body");

		$("#placeholder").bind("plothover", function (event, pos, item) {
			if ($("#enableTooltip:checked").length > 0) 
			{
				if (item) 
				{
					var x = item.datapoint[0].toFixed(2),
						y = item.datapoint[1].toFixed(2);
					var mystr = getstr(x, y);

					$("#tooltip").html("Problem: "+ mystr +"<br/>Importance: " + x + "<br/>Frequency: " + y)
						.css({top: item.pageY+15, left: item.pageX+15})
						.fadeIn(200);
				} 
				else 
				{
					$("#tooltip").hide();
				}
			}
		});
	});
	
	function init()
	{
		var place = document.getElementById('placeholder');
		place.addEventListener("click", getcoordinates);
	
		var getgraph = new XMLHttpRequest();
		getgraph.onreadystatechange = function()
		{
			if (getgraph.readyState==4 && getgraph.status==200)
			{
				lines = getgraph.responseText.split("\n");
				for(k = 0; k < lines.length; ++k)
				{
					retval = lines[k].split(";");
					if(retval[0] == 1&& retval[1] != "")
					{
						m.push(retval[1]);
						importance.push(retval[2]);
						freq.push(retval[3]);
						priority.push([retval[2], retval[3]]);
						var plot = $.plot("#placeholder", [{ data: priority}], options);
					}
				}
			}
		};
		getgraph.open("GET","getgraph.php",false);
		getgraph.send();
		
		
		var mydiv = document.getElementById('mydd');
		var newnode = document.createElement('select');
		newnode.id = 'mydropdown';
		for(var i = 2131; i <= 2140; i++)
		{
			var newopt = document.createElement('option');
			xmlreqget = new XMLHttpRequest();
			xmlreqget.onreadystatechange = function()
			{
				if (xmlreqget.readyState==4 && xmlreqget.status==200)
				{
					newopt.value = xmlreqget.responseText;
					newopt.id = i;
					newopt.innerHTML = xmlreqget.responseText;
					if(newopt.innerHTML != "")
					{
						var ispres = ispresent(xmlreqget.responseText);
						if(!ispres)
						{
							newnode.appendChild(newopt);
						}
					}
				}
			};
			xmlreqget.open("GET","getfromdb.php?myid="+i,false);
			xmlreqget.send();
		}
		mydiv.appendChild(newnode);
	}
	
	function getcoordinates(e)
	{	
		var mdd = document.getElementById('mydropdown');
		if(mdd.value != "")
		{
			var parentOffset = $(this).parent().offset();
			
			x = (((event.pageX - parentOffset.left)-36.5)/79).toFixed(2);
			y = (10 - (((event.pageY - parentOffset.top)-28)/38.3)).toFixed(2);
			m.push(mdd.value);
			importance.push(x);
			freq.push(y);
			
			var storegraph = new XMLHttpRequest();
			storegraph.onreadystatechange = function()
			{
				if (storegraph.readyState==4 && storegraph.status==200)
				{
				}
			};
			storegraph.open("GET","savegraph.php?ch=1&cont="+mdd.value+"&x="+x+"&y="+y,false);
			storegraph.send();
			
			for(j = 0; j < importance.length; ++j)
			{
				priority.push([importance[j], freq[j]]);
			}
			
			var plot = $.plot("#placeholder", [{ data: priority}], options);
			mdd.removeChild(document.getElementById(mdd.options[mydropdown.selectedIndex].id));
		}
	}

	</script>
</head>
<body onload="init()" background="img/slide12.jpg">

	
	<!-- Fixes Navigation Bar
    ======================================================-->
    
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand">B-M-I</span>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
					<li><a href="myindex.php">Home</a></li>
					<li><a href="getstarted.php">Get Started</a></li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stage 1 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="stageonepointone.php">Template 1 - Understand</a></li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stage 2 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="stagetwopointone.php">Template 1 - Identify</a></li>
                            <li><a href="stagetwopointtwo.php">Template 2 - Problem Selection</a></li>
                            <li><a href="stagetwopointthree.php">Template 3 - Problem Description</a></li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stage 3 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="stagethreepointone.php">Template 1 - Technology</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stage 4 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="stagefourpointone.php">Template 1 - Idea Selection</a></li>
                            <li><a href="stagefourpointtwo.php">Template 2 - Idea Description</a></li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stage 5 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="stagefivepointone.php">Template 1 - Types of Business Model</a></li>
                            <li><a href="stagefivepointtwo.php">Template 2 - Business Model Canvas</a></li>
                        </ul>
                    </li>
					<li><a style="position:fixed; right:200px" >Welcome <?php echo $_SESSION['name']; ?>,</a></li>
					<li><a style="position:fixed; right:100px" href="logout.php">Log Out</a></li>
                </ul>
            </div>
            
        </div>
    </div>
	
	<br/><br/><br/>
	<div>
		<div style="position:relative; left:50%">
			<label>Problems: </label>
			<label id = "mydd"></label>
		</div>
		<div style="position:relative; left:25%">
			<h4>Note: Think carefully before plotting the problems onto the graph. Once plotted, it cannot be changed.</h4>
			<h5>x-axis : Importance of the problem<br/>y-axis : Frequency of occurance of the problem</h5>
		</div>
		<div id="content">
			<div class="demo-container"style="position:relative; top:10%">
				<div id="placeholder" class="demo-placeholder"></div>
			</div>
			<div style="position:relative; left:50%">
				<input id="enableTooltip" type="checkbox" checked="checked"></input><label>Enable tooltip</label><br/>
				<a class="btn btn-large btn-primary" href="stagetwopointtwonext.php">Next</a>
			</div>
		</div>
		<br/>
	</div>
	
	
	<!-- Collapse
    =========================-->
	
	<div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                         Frequency:
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
					The frequency factor is plotted on the Y-axis. One should think of concentrating on such a problem which has high frequency of occurring. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Importance:
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
					The importance factor is plotted on the X-axis. Higher the importance, means it affects large amount of people. Hence problems with higher frequency and high importance should be focussed on.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Tooltip:
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
					Tooltip gives you details of the problem and its corresponding frequency and importance values that you have selected. When you mark check on the enable tooltip button it will show the coordinate values of frequency and importance next to the point
					plotted on the graph.
				</div>
            </div>
        </div>
	</div>
	
	
	<!-- Footer and Modal
    ==========================-->
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <hr/>
                <p>Copyright &copy; PES Institute Of Technology
                    <a data-toggle="modal" href="#myModal">Terms and Conditions</a>
                </p>
                
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabinex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Terms and Conditions</h2>
                            </div>
                            <div class="modal-body">
                                <p>The text will go here.....</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
<?php
	}
	else
	{
		header("location:index.html");
	}
?>