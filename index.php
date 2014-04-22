<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
?>
<!DOCTYPE html>

<html>
<head>
    <title>Business Model Innovator - Index</title>
    
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	
	<style type="text/css">
		.navbar-default 
		{
			background-color: aqua;
			border-color: aqua;
		}
		.navbar-default .navbar-brand 
		{
			color: #777777;
		}
		div.carousel-caption
		{
			position:absolute;
			top:20%;
		}
		img
		{
			height:500px;
			width:1366px;
		}
	</style>
	
	<script type="text/javascript">
	
	$(document).ready(function() {
		$('.carousel').carousel({
		  interval: 2000
		})
	});
	
	</script>
</head>

<body>
    
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
					<li><a href="logout.php">Log Out</a></li>
                </ul>
            </div>
            
        </div>
    </div>
	
	
	<!-- Carousel
    =========================-->
    
    <div id="myCarousel" class="carousel slide">
        
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">
            
            <div class="item active">
                <img src="img/slide1.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Welcome to Business Model Innovator</h1>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide2.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Guide: Dr. Kavi Mahesh</h1>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide3.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Final Year Project by Dhrupad, Rahul and Ayush</h1>
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