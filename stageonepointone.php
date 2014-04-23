<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
?>
<!DOCTYPE html>

<html>
<head>

    <title>Stage One - Template One</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/storetodb.js"></script>
	<script src="js/getfromdb.js"></script>
	
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
		function createdropdown()
		{
			var mydiv = document.getElementById('b1');
			mydiv.removeChild(mydiv.lastChild);
			var newnode = document.createElement('select');
			newnode.id = 'mydropdown';
			for(var i = 1131; i <= 1140; i++)
			{
				var newopt = document.createElement('option');
				var myvalue = document.getElementById(i);
				newopt.innerHTML = myvalue.value;
				if(newopt.innerHTML != '')
				{
					newnode.appendChild(newopt);
				}
			}
			mydiv.appendChild(newnode);
		}
		function savedata(e)
		{
			var evnt = e.target;
			myid = evnt.id;
			savetodb();
		}
		var myid = 111;
		function set1()
		{
			myid = 111;
		}
		function set2()
		{
			myid = 112;
		}
		function init()
		{
			myid = 111;
			getfromdb();
			myid = 112;
			getfromdb();
			for(myid = 1131; myid <= 1140; ++myid)
			{
				getfromdb();
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
	
	
    <!-- Carousel
    =========================-->
    
    <div id="myCarousel" class="carousel slide" data-interval="false">
        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/black.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h3>Key facts & data:</h3>
						<p>For the problem under consideration, the key facts and data will be the statistics available for consideration. The user has to write the statistics that are available inside the box provided.</p>
						<h3>Insights (Research/Observe):</h3>
						<p>Insights about the domain and its observations are to be written in the space provided. The research and progress that has been carried out till now should be written in this box.</p>
						<h3>Challenges:</h3>
						<p>The various challenges are to be written here. The main challenge is broken down into sub-challenges and written here. For the specified probelm the sub-challenges will be the farmers not exposed to new technologies, improper transportation of the produce by the farmers to the market, not updated with the latest prices of his crops, involvement of the commission agent etc. </p>
						<h3>Select a particular Challenge that will be focussed:</h3>
						<p>From the challenges that were entered in the previous stage, choose one challenge that will be focussed hence forth. After choosing this problem, proceed to the next stage.</p>
					</div>
                </div>
            </div>
			
            <div class="item">
                <img src="img/slide3.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h1>Stage 1 - Template 1</h1>
                        <h2>Key facts & data: (1 of 4)</h2>
                        <p><textarea id='111' rows='6' cols='100' onfocus='set1()' onblur='savetodb()' placeholder='What are the main facts, figures, statistics, data points and background information of relevance here?'></textarea></p>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide4.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Insights (Research/Observe): (2 of 4)</h2>
                        <p><textarea id='112' rows='6' cols='100' onfocus='set2()' onblur='savetodb()' placeholder='List below anything you have researched or observed which may be useful in understanding the case? Consider environmental technology and business trends. Can you think of failure or success stories in this space?'></textarea></p>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide5.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Challenges: (3 of 4)</h2>
						<div id = 'a1'>
							<label> #1 :&nbsp;&nbsp;</label><input id = "1131" type="text" onblur="savedata(event)"/><br/>
							<label> #2 :&nbsp;&nbsp;</label><input id = "1132" type="text" onblur="savedata(event)"/><br/>
							<label> #3 :&nbsp;&nbsp;</label><input id = "1133" type="text" onblur="savedata(event)"/><br/>
							<label> #4 :&nbsp;&nbsp;</label><input id = "1134" type="text" onblur="savedata(event)"/><br/>
							<label> #5 :&nbsp;&nbsp;</label><input id = "1135" type="text" onblur="savedata(event)"/><br/>
							<label> #6 :&nbsp;&nbsp;</label><input id = "1136" type="text" onblur="savedata(event)"/><br/>
							<label> #7 :&nbsp;&nbsp;</label><input id = "1137" type="text" onblur="savedata(event)"/><br/>
							<label> #8 :&nbsp;&nbsp;</label><input id = "1138" type="text" onblur="savedata(event)"/><br/>
							<label> #9 :&nbsp;&nbsp;</label><input id = "1139" type="text" onblur="savedata(event)"/><br/>
							<label> #10:&nbsp;</label><input id = "1140" type="text" onblur="savedata(event)"/><br/>
						</div>
						<div>
							<br/>
							<input type="button" class='btn btn-primary' onclick="createdropdown()" value="Confirm"/>
						</div>
                    </div>
                </div>
            </div>
			
			<div class="item">
                <img src="img/slide6.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Select a particular Challenge that will be focussed: (4 of 4)</h2>
						<div id = 'b1'>
						</div>
						<br/>
                        <p><a class="btn btn-large btn-primary" href="stagetwopointone.php">Next Stage</a></p>
					</div>
                </div>
            </div>
        </div>
        
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        
    </div>
	
	
	<!-- Collapse
    =========================-->
	
	<div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        Key facts & data:
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
				For the problem under consideration, the key facts and data will be the statistics available for consideration. The user has to write the statistics that are available inside the box provided.
				</div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Insights (Research/Observe):
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
					Insights about the domain and its observations are to be written in the space provided. The research and progress that has been carried out till now should be written in this box.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Challenges:
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    The various challenges are to be written here. The main challenge is broken down into sub-challenges and written here. For the specified probelm the sub-challenges will be the farmers not exposed to new technologies, improper transportation of the produce by the farmers to the market, not updated with the latest prices of his crops, involvement of the commission agent etc. 
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
		header("location:mylogin.html");
	}
?>