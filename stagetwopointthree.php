<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
?>
<!DOCTYPE html>
<html>
<head>

    <title>Stage Two - Template Three</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="css/general.css" />
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/storetodb.js"></script>
	<script src="js/getfromdb.js"></script>
	<script type="text/javascript">
	
		var myid = 231;
		function set1()
		{
			myid = 231;
		}
		function set2()
		{
			myid = 232;
		}
		function set3()
		{
			myid = 233;
		}
		function updateuser(evt)
		{
			savetodb();
			var quantity;
			var myxmlhttp=new XMLHttpRequest();
			myxmlhttp.onreadystatechange = function(){};
			if(myid == 231)
			{
				quantity = document.getElementById("231").value;
				myxmlhttp.open("GET","storetodb.php?myid=423&val="+quantity,false);
				myxmlhttp.send();
			}
			else if(myid == 232)
			{
				quantity = document.getElementById("232").value;
				myxmlhttp.open("GET","storetodb.php?myid=421&val="+quantity,false);
				myxmlhttp.send();
			}
		}
		function init()
		{
			for(myid = 231; myid <= 233; ++myid)
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
	
	
    <!-- Carousel
    =========================-->
    
    <div id="myCarousel" class="carousel slide" data-interval="false">
        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			
        </ol>
        
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/black.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h3>User:</h3>
						<p>Describe your user in the given place. Give reasons and explanations of why you have chosen this user as your final user.</p>
						<h3>Problem:</h3>
						<p>Briefly describe the core problem and make a list of all the other sub related problems. In-short describe your core problem as generic as possible so that anyone may understand.</p>
						<h3>Problem Statement:</h3>
						<p>Summarize one proper sentence to descibe the problem that you intend to solve. This should be as precise as possible. Make sure you include all the important features that needs to be solved.</p>
					</div>
                </div>
            </div>
			
            <div class="item">
                <img src="img/slide6.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h1>Stage 2 - Template 3</h1>
                        <h2>User: (1 of 3)</h2>
						<h3>Describe your final user segment and the reason for selecting it.</h3>
                        <p><textarea id='231' rows='6' cols='100' onfocus='set1()' onblur='updateuser(event)' placeholder='Describe your final user segment and why you have chosen to focus on this user'></textarea></p>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide7.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Problem: (2 of 3)</h2>
						<h3>Describe your core problem and other related sub-problems.</h3>
						<p><textarea id='232' rows='6' cols='100' onfocus='set2()' onblur='updateuser(event)' placeholder='Give a brief description of the core problem and make a list of other related sub-problem'></textarea></p>
                       
                    </div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide8.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Problem Statement: (3 of 3)</h2>
						<h3>Give a very precise sentence that summarizes exactly the problem that you want to solve.</h3>
                        <p><textarea id='233' rows='2' cols='100' onfocus='set3()' onblur='savetodb()' placeholder='Formulate one very precise sentence that summarizes exactly the problem you want to solve'></textarea></p>
						<br/>
						<p><a class="btn btn-large btn-primary" href="stagethreepointone.php">Next Stage</a></p>
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
                         User:
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
					Describe your user in the given place. Give reasons and explanations of why you have chosen this user as your final user.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Problem:
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
					Briefly describe the core problem and make a list of all the other sub related problems. In-short describe your core problem as generic as possible so that anyone may understand.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Problem Statement:
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
					Summarize one proper sentence to descibe the problem that you intend to solve. This should be as precise as possible. Make sure you include all the important features that needs to be solved.
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
		header("location:index.html");
	}
?>