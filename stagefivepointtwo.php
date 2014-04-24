<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
?>
<!DOCTYPE html>

<html>
<head>

    <title>Stage Five - Template Two</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="css/general.css" />
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/storetodb.js"></script>
	<script src="js/getfromdb.js"></script>
	
	<script type="text/javascript">
	
		var myid = 521;
		function set1()
		{
			myid = 521;
		}
		function set2()
		{
			myid = 522;
		}
		function set3()
		{
			myid = 523;
		}
		function set4()
		{
			myid = 524;
		}
		function set5()
		{
			myid = 525;
		}
		function set6()
		{
			myid = 526;
		}
		function set7()
		{
			myid = 527;
		}
		function set8()
		{
			myid = 528;
		}
		function set9()
		{
			myid = 529;
		}
		function init()
		{
			for(myid = 521; myid <= 529; ++myid)
			{
				getfromdb();
			}
		}
		
		function getpdf()
		{
			var kp = document.getElementById("521").value;
			var ka = document.getElementById("522").value;
			var kr = document.getElementById("523").value;
			var vp = document.getElementById("524").value;
			var cr = document.getElementById("525").value;
			var ch = document.getElementById("526").value;
			var cs = document.getElementById("527").value;
			var cst = document.getElementById("528").value;
			var rs = document.getElementById("529").value;
			//window.parent.location.href = "getpdf.php?kp="+kp+"&ka="+ka+"&kr="+kr+"&vp="+vp+"&cr="+cr+"&ch="+ch+"&cs="+cs+"&cst="+cst+"&rs="+rs;
			window.open("getpdf.php?kp="+kp+"&ka="+ka+"&kr="+kr+"&vp="+vp+"&cr="+cr+"&ch="+ch+"&cs="+cs+"&cst="+cst+"&rs="+rs, '_blank');
		}
	</script>
</head>

<body onload = "init()">
	
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
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
			<li data-target="#myCarousel" data-slide-to="7"></li>
			<li data-target="#myCarousel" data-slide-to="8"></li>
			<li data-target="#myCarousel" data-slide-to="9"></li>
			<li data-target="#myCarousel" data-slide-to="10"></li>
        </ol>
        
        <div class="carousel-inner">
			<div class="item active">
                <img src="img/black.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<p>Considering the previously chosen problem and idea, the following components should be filled.</p>
						<h3>Key Partners:</h3>
						<p>Key partners will be telecom service provider, a call center that speaks in local language etc.</p>
						<h3>Key Activities:</h3>
						<p>Providing a sms service on either weekly basis or daily basis for the farmers who know to read english. And for the rest, an automated phone call in their local language.</p>
						<h3>Key Resources:</h3>
						<p>Key resources in our idea will be the latest crop prices, weather forecast etc.</p>
						<h3>Value Propositions:</h3>
						<p>The farmers are updated with the latest crop prices, the recent technologies etc. We are focussing only on the small scale farmers who are not educated.</p>
						<h3>Customer Relationships:</h3>
						<p>The customer would like us to keep them updated as and when they need. The present situation is with the help of middlemen and commission agents. They donot tell the farmers with the correct prices and hence the farmers donot get the proper returns for their yield.</p>
					</div>
                </div>
            </div>
			<div class="item">
                <img src="img/black.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h3>Channels:</h3>
						<p>We will be reaching them with the help of sms and phone calls, we also plan to arrange workshops and melas. The current situation is better in some places where the connectivity to outside world is good.</p>
						<h3>Customer Segements:</h3>
						<p>We are creating values to small scale farmers who live in interior parts of India. Our main focus is on farmers that are not educated.</p>
						<h3>Cost Structure:</h3>
						<p>Once the network is eshtablished, the maintainance of the call center will be costly. Creating the automated voice call and maintaining the databse of the farmers will require a few computer engineers. Integrating with the service provider will cost us. The extra cost will be for the payment for the newspaper articles.</p>
						<h3>Revenue Streams:</h3>
						<p>The main revenue will be from the farmers. They will have to activate a plan and pay for it in order to avail the service. The farmers will be charged a minimun amount depending on the plan which they take.</p>
					</div>
                </div>
            </div>
            <div class="item">
                <img src="img/slide11.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Stage 5 - Template 2</h1>
                        <h2>Key Partners: (1 of 9)</h2>
                        <p><textarea id='521' rows='6' cols='100' onfocus='set1()' onblur='savetodb()' placeholder='What are the key partners? Who are our key suppliers? Which key resources are we acquiring from suppliers? Which key activities do partners perform?'></textarea></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/slide10.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Key Activities: (2 of 9)</h2>
						 <p><textarea id='522' rows='6' cols='100' onfocus='set2()' onblur='savetodb()' placeholder='What key activities do our value proposition require? Our distribution channels? Customer relationships? Revenue stream?'></textarea></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/slide9.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Key Resources: (3 of 9)</h2>
                        <p><textarea id='523' rows='6' cols='100' onfocus='set3()' onblur='savetodb()' placeholder='What key resources do value propositions require? Our distribution channels? Customer relationships? Revenue streams? '></textarea></p>
                    </div>
                </div>
            </div>
			<div class="item">
                <img src="img/slide8.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Value Propositions: (4 of 9)</h2>
						<p><textarea id='524' rows='6' cols='100' onfocus='set4()' onblur='savetodb()' placeholder='What value do we deliver to the customer? Which one of our customers problem are we helping to solve? What bundles of products and services are we offering to each customer segment? Which customer needs are we satisfying?'></textarea></p>                       
                    </div>
                </div>
            </div>
			<div class="item">
				<img src="img/slide7.jpg"/>
				<div class="container">
					<div class="carousel-caption">
						<h2>Customer Relationships: (5 of 9)</h2>
						<p><textarea id='525' rows='6' cols='100' onfocus='set5()' onblur='savetodb()' placeholder='What type of relationship does each of our customer Segments expect us to establish and maintain with them? Which ones have we established? How are they integrated with the rest of the business model? How costly are they?'></textarea></p>   
					</div>
				</div>
			</div>
			<div class="item">
				<img src="img/slide6.jpg"/>
				<div class="container">
					<div class="carousel-caption">
						<h2>Channels: (6 of 9)</h2>
						<p><textarea id='526' rows='6' cols='100' onfocus='set6()' onblur='savetodb()' placeholder='Through which channels do our customer segments want to be reached? How are we reaching them now? How are our channels integrated? Which ones work best? Which ones are most cost-efficient? How are we integrating them with customer routines?'></textarea></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="img/slide5.jpg"/>
				<div class="container">
					<div class="carousel-caption">
						<h2>Customer Segments: (7 of 9)</h2>
						<p><textarea id='527' rows='6' cols='100' onfocus='set7()' onblur='savetodb()' placeholder='For whom are we creating value? Who are our most important customers?'></textarea></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="img/slide4.jpg"/>
				<div class="container">
					<div class="carousel-caption">
						<h2>Cost Structure: (8 of 9)</h2>
						<p><textarea id='528' rows='6' cols='100' onfocus='set8()' onblur='savetodb()' placeholder='What are the most important costs inherent in our business? Which key resources are most expensive? Which key activities are most expensive? '></textarea></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="img/slide3.jpg"/>
				<div class="container">
					<div class="carousel-caption">
						<h2>Revenue Streams: (9 of 9)</h2>
						<p><textarea id='529' rows='6' cols='100' onfocus='set9()' onblur='savetodb()' placeholder='For what value are our customers willing to pay? For what do they currently pay? How are they currently paying? How would they prefer to pay? How much does each revenue stream contribute to overall revenues?'></textarea></p>
						<br/>
                        <p><a class="btn btn-large btn-primary" href="javascript:void(0)" onclick="getpdf()">Generate PDF</a></p>
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
                        Key Partners:
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
					What are the key partners? Who are our key suppliers? Which key resources are we acquiring from suppliers? Which key activities do partners perform?
					Key partners will be telecom service provider, a call center that speaks in local language etc.
				</div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Key Activities:
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
					What key activities do our value proposition require? Our distribution channels? Customer relationships? Revenue stream?
					Providing a sms service on either weekly basis or daily basis for the farmers who know to read english. And for the rest, an automated phone call in their local language.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Key Resources:
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
					What key resources do value propositions require? Our distribution channels? Customer relationships? Revenue streams?
					Key resources in our idea will be the latest crop prices, weather forecast etc.
				</div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        Value Proposition:
                    </a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
					What value do we deliver to the customer? Which one of our customers problem are we helping to solve? What bundles of products and services are we offering to each customer segment? Which customer needs are we satisfying?
					The farmers are updated with the latest crop prices, the recent technologies etc. We are focussing only on the small scale farmers who are not educated.
				</div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                        Customer Relationships:
                    </a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
					What type of relationship does each of our customer Segments expect us to establish and maintain with them? Which ones have we established? How are they integrated with the rest of the business model? How costly are they? 
					The customer would like us to keep them updated as and when they need. The present situation is with the help of middlemen and commission agents. They donot tell the farmers with the correct prices and hence the farmers donot get the proper returns for their yield.
				</div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                        Channels:
                    </a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
					Through which channels do our customer segments want to be reached? How are we reaching them now? How are our channels integrated? Which ones work best? Which ones are most cost-efficient? How are we integrating them with customer routines?
					We will be reaching them with the help of sms and phone calls, we also plan to arrange workshops and melas. The current situation is better in some places where the connectivity to outside world is good.
				</div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                        Customer Segments:
                    </a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
					For whom are we creating value? Who are our most important customers?
					We are creating values to small scale farmers who live in interior parts of India. Our main focus is on farmers that are not educated.
                </div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                        Cost Structure:
                    </a>
                </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
                <div class="panel-body">
					What are the most important costs inherent in our business? Which key resources are most expensive? Which key activities are most expensive?
					Once the network is eshtablished, the maintainance of the call center will be costly. Creating the automated voice call and maintaining the databse of the farmers will require a few computer engineers. Integrating with the service provider will cost us. The extra cost will be for the payment for the newspaper articles.
                </div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                        Revenue Streams:
                    </a>
                </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse">
                <div class="panel-body">
					For what value are our customers willing to pay? For what do they currently pay? How are they currently paying? How would they prefer to pay? How much does each revenue stream contribute to overall revenues?
					The main revenue will be from the farmers. They will have to activate a plan and pay for it in order to avail the service. The farmers will be charged a minimun amount depending on the plan which they take.
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