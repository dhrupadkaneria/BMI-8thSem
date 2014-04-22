<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stage Four - Template One</title>
	
	<link type="text/css" rel="stylesheet" href="css/examples.css"/>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/jquery.flot.js"></script>
	
	<style type="text/css">
	img
	{
		height:500px;
		width:1366px;
	}
	textarea
	{
		resize:none;
	}
	div.carousel-caption
	{
		position:absolute;
		top:15%;
	}
	.navbar-default 
	{
		background-color: aqua;
		border-color: aqua;
	}
	.navbar-default .navbar-brand 
	{
		color: #777777;
	}
	</style>
	
	<script type="text/javascript">
	
	var priority = [];
	var idea = new Array();
	var u = new Array();
	var v = new Array();

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
		for(var j1 = 0; j1 < v.length; ++j1)
		{
			if(v[j1] == x)
			{
				if(u[j1] == y)
				{
					return idea[j1];
				}
			}
		}
	}
	$(function() 
	{
		var plot = $.plot("#placeholder", [{data: priority}], options);

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
					$("#tooltip").html("Idea: "+ mystr +"<br/>Value: " + x + "<br/>Uniqueness: " + y).css({top: item.pageY+15, left: item.pageX+15}).fadeIn(200);
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
		//window.addEventListener("click", getcoordinates);
		var getgraph = new XMLHttpRequest();
		getgraph.onreadystatechange = function()
		{
			if (getgraph.readyState==4 && getgraph.status==200)
			{
				lines = getgraph.responseText.split("\n");
				for(k = 0; k < lines.length; ++k)
				{
					retval = lines[k].split(";");
					if(retval[0] == 2 && retval[1] != "")
					{
						idea.push(retval[1]);
						v.push(retval[2]);
						u.push(retval[3]);
						priority.push([retval[2], retval[3]]);
						var plot = $.plot("#placeholder", [{ data: priority}], options);
					}
				}
			}
		};
		getgraph.open("GET","getgraph.php",false);
		getgraph.send();
	}
	
	function getcoordinates(e)
	{	
		var ide = document.getElementById('ide');
		if(ide.value != "")
		{
			var parentOffset = $(this).parent().offset();
		
			x = (((event.pageX - parentOffset.left)-36.5)/79).toFixed(2);
			y = (10 - (((event.pageY - parentOffset.top)-28)/38.3)).toFixed(2);
		
			idea.push(ide.value);
			v.push(x);
			u.push(y);
		
			var storegraph = new XMLHttpRequest();
			storegraph.onreadystatechange = function()
			{
				if (storegraph.readyState==4 && storegraph.status==200)
				{
				}
			};
			storegraph.open("GET","savegraph.php?ch=2&cont="+ide.value+"&x="+x+"&y="+y,false);
			storegraph.send();
			
			for(j = 0; j < v.length; ++j)
			{
				priority.push([v[j], u[j]]);
			}
			
			var plot = $.plot("#placeholder", [{ data: priority}], options);
			ide.value = "";
		}
	}

	</script>
</head>
<body onload="init()">

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
					<li><a href="index.php">Home</a></li>
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
	
	<label>Ideas:</label><input id = "ide" type="text">
	<div id="content">
		<div class="demo-container">
			<div id="placeholder" class="demo-placeholder" style="color:blue;"></div>
		</div>
		<p><label><input id="enableTooltip" type="checkbox" checked="checked"></input>Enable tooltip</label></p>
	</div>
	<br/>
	<a class="btn btn-large btn-primary" href="stagefourpointtwo.php">Next</a>
	
	
	<!-- Collapse
    =========================-->
	
	<div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                         Value:
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
					The value of the occurring problem can be selected from the drop down menu
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Uniqueness:
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
					The uniqueness of the problem can also be selected from the drop down menu
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
					Tooltip gives you details of the problem and its corresponding value and uniqueness values that you have selected. When you mark check on the enable tooltip button it will show the coordinate values of value and uniqueness next to the point
					plotted on the graph
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
		header("location:mylogin.html");
	}
?>