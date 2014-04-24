<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
?>
<!DOCTYPE html>

<html>
<head>

    <title>Stage Two - Template One</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="css/general.css" />
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/storetodb.js"></script>
	<script src="js/getfromdb.js"></script>
	<script type="text/javascript">
		
		function createdropdown1()
		{
			var mydiv = document.getElementById('b1');
			mydiv.removeChild(mydiv.lastChild);
			var newnode = document.createElement('select');
			newnode.id = 'mydropdown1';
			for(var i = 2111; i <= 2117; i++)
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
		var myid = 214;
		function set2()
		{
			myid = 214;
		}
		function init()
		{
			for(myid = 2111; myid <= 2117; ++myid)
			{
				getfromdb();
			}
			for(myid = 2131; myid <= 2140; ++myid)
			{
				getfromdb();
			}
			myid = 214;
			getfromdb();
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
						<h3>Users:</h3>
						<p>Write down all the user segments that are related to the problem selected in the previous stage. For example, if the challenge selected was about farmer not updated with the latest price for the crops, the user would be farmer, middle men and commission agent.</p>
						<h3>Main User Segment:</h3>
						<p>From the users entered in the previous section, select one user that you would like to focus on. Suppose th user to be focussed on is farmer, then choose farmer from the drop-down menu.</p>
						<h3>Problem Areas:</h3>
						<p>Write down all the problem areas that your user faces. Say the user is farmer, then all his problems will be written in the text area provided. Example: high cost of fertilizers, unaware of the latest technology, improper transportation, improper supply of electricity etc.</p>
						<h3>New Insight about your user:</h3>
						<p>Now that you have selected your user, provide some insight about this user. The characterisitics, present situation, the recent updates and changes, help given by the government and the banks etc.</p>
					</div>
                </div>
            </div>
			
            <div class="item">
                <img src="img/slide5.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h1>Stage 2 - Template 1</h1>
                        <h2>Users: (1 of 4)</h2>
						<h3>Based on the sub-challenges from previous stage - list the different user segments you have identified.</h3>
						<h4>Please click the "submit" button after entering the users.</h4>
                        <div id = "a1">
							<label> #1 :&nbsp;&nbsp;</label><input id = "2111" type="text" onblur="savedata(event)"/><br/>
							<label> #2 :&nbsp;&nbsp;</label><input id = "2112" type="text" onblur="savedata(event)"/><br/>
							<label> #3 :&nbsp;&nbsp;</label><input id = "2113" type="text" onblur="savedata(event)"/><br/>
							<label> #4 :&nbsp;&nbsp;</label><input id = "2114" type="text" onblur="savedata(event)"/><br/>
							<label> #5 :&nbsp;&nbsp;</label><input id = "2115" type="text" onblur="savedata(event)"/><br/>
							<label> #6 :&nbsp;&nbsp;</label><input id = "2116" type="text" onblur="savedata(event)"/><br/>
							<label> #7 :&nbsp;&nbsp;</label><input id = "2117" type="text" onblur="savedata(event)"/><br/>
						</div>
						<div>
							<br/>
							<input type="button" class='btn btn-primary' onclick="createdropdown1()" value="Confirm"/>
						</div>
					</div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide6.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Select Your main user segment: (2 of 4)</h2>
						<div id = 'b1'>
						</div>
					</div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide7.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Problem areas: (3 of 4)</h2>
						<h3>List all your user problems - be very specific (when how where)</h3>
                        <div id = "a2">
							<label> #1 :&nbsp;&nbsp;</label><input id = "2131" type="text" onblur="savedata(event)"/><br/>
							<label> #2 :&nbsp;&nbsp;</label><input id = "2132" type="text" onblur="savedata(event)"/><br/>
							<label> #3 :&nbsp;&nbsp;</label><input id = "2133" type="text" onblur="savedata(event)"/><br/>
							<label> #4 :&nbsp;&nbsp;</label><input id = "2134" type="text" onblur="savedata(event)"/><br/>
							<label> #5 :&nbsp;&nbsp;</label><input id = "2135" type="text" onblur="savedata(event)"/><br/>
							<label> #6 :&nbsp;&nbsp;</label><input id = "2136" type="text" onblur="savedata(event)"/><br/>
							<label> #7 :&nbsp;&nbsp;</label><input id = "2137" type="text" onblur="savedata(event)"/><br/>
							<label> #8 :&nbsp;&nbsp;</label><input id = "2138" type="text" onblur="savedata(event)"/><br/>
							<label> #9 :&nbsp;&nbsp;</label><input id = "2139" type="text" onblur="savedata(event)"/><br/>
							<label> #10 :&nbsp;</label><input id = "2140" type="text" onblur="savedata(event)"/><br/>
						</div>
                    </div>
                </div>
            </div>
			
			<div class="item">
                <img src="img/slide8.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>New Insight about your User: (4 of 4)</h2>
						<p><textarea id='214' rows='6' cols='100' onfocus='set2()' onblur='savetodb()' placeholder='Data points from expert interviews and online research'></textarea></p>
						<br/>
						<p><a class="btn btn-large btn-primary" href="stagetwopointtwo.php">Next</a></p>
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
                        Users:
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
					Write down all the user segments that are related to the problem selected in the previous stage. For example, if the challenge selected was about farmer not updated with the latest price for the crops, the user would be farmer, middle men and commission agent.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Your main user segment:
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
					From the users entered in the previous section, select one user that you would like to focus on. Suppose th user to be focussed on is farmer, then choose farmer from the drop-down menu.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Problem Areas:
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
					Write down all the problem areas that your user faces. Say the user is farmer, then all his problems will be written in the text area provided. Example: high cost of fertilizers, unaware of the latest technology, improper transportation, improper supply of electricity etc.
				</div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        New Insights about your User:
                    </a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
					Now that you have selected your user, provide some insight about this user. The characterisitics, present situation, the recent updates and changes, help given by the government and the banks etc.
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