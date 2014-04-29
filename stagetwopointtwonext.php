<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stage Two - Template Two</title>

	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="css/general.css" />
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
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
		var str1 = str2 = "";
		function lineDistance(x1, y1)
		{
			return Math.sqrt((x1 * x1) + (y1 * y1) );
		}
		function init()
		{
			var d1 = d2 = d = 0;
			var s1 = s2 = s = "";
			var getgraph = new XMLHttpRequest();
			getgraph.onreadystatechange = function()
			{
				if (getgraph.readyState==4 && getgraph.status==200)
				{
					lines = getgraph.responseText.split("\n");
					for(k = 0; k < lines.length; ++k)
					{
						retval = lines[k].split(";");
						if(retval[0] == 1 && retval[1] != "")
						{
							d = lineDistance(retval[2], retval[3]);
							if(d > d1)
							{
								d2 = d1;
								d1 = d;
								s2 = s1;
								s1 = "Problem: "+retval[1]+"&nbsp;&nbsp;&nbsp;Importance: "+retval[2]+"&nbsp;&nbsp;&nbsp;Frequency: "+retval[3];
								str2 = str1;
								str1 = retval[1];
							}
							else if(d > d2)
							{
								d2 = d;
								s2 = "Problem: "+retval[1]+"&nbsp;&nbsp;&nbsp;Importance: "+retval[2]+"&nbsp;&nbsp;&nbsp;Frequency: "+retval[3];
								str2 = retval[1];
							}
						}
					}
				}
			};
			getgraph.open("GET","getgraph.php",false);
			getgraph.send();
			
			var mydiv = document.getElementById('ideaselect');
			var newnode = document.createElement('select');
			newnode.id = "myselect";
			var newopt = document.createElement('option');
			newopt.innerHTML = s1;
			if(newopt.innerHTML != '')
			{
				newnode.appendChild(newopt);
			}
			newopt = document.createElement('option');
			newopt.innerHTML = s2;
			if(newopt.innerHTML != '')
			{
				newnode.appendChild(newopt);
			}
			mydiv.appendChild(newnode);
		}
		function problem()
		{
			var e = document.getElementById("myselect");
			var quantity= e.options[e.selectedIndex].text;
			//alert(quantity);
			xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){};
			if(e.selectedIndex == 0)
			{
				var value = str1;
			}
			else if(e.selectedIndex == 1)
			{
				var value = str2;
			}
			alert("The problem that you have chosen is: "+value);
			xmlhttp.open("GET","storetodb.php?myid=232&val="+value,false);
			xmlhttp.send();
			xmlhttp.open("GET","storetodb.php?myid=421&val="+value,false);
			xmlhttp.send();
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
		<div style="position:relative; left:20%; width:65%">
			<h3>Based on the problems that you have plotted on the previous page, we find that one of the following two problems are likely to be your problem of focus.</h3><br/>
			<h4>Please choose one of the given problem to proceed further. You can always change it as you go further.</h4>
		</div>
		<br/><br/>
		<div style="position:relative; left:30%">
			<label><div id="ideaselect"></div><label>
			<br/><br/>
			<a style="position:relative; left:30%" class="btn btn-large btn-primary" href="stagetwopointthree.php" onclick="problem()">Next</a>
		</div>
		<br/>
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
                               <p>These terms and conditions shall govern your use of our website.By using our website, you accept these terms and conditions in full accordingly, if you disagree with these terms and conditions or any part of these terms and conditions, you must not use our website.[Our website uses sessions; by using our website or agreeing to these terms and conditions, you consent to our use of sessions</p>
								<p> You may view pages from our website in a web browser, download pdfs from our website, view video files from our website. You may only use our website for your business purposes, and you must not use our website for any other purposes. </p>
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