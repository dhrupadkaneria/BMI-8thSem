<!DOCTYPE html>

<html>
<head>

    <title>Stage Five - Template One</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	
	<style type="text/css">
	img
	{
		height:500px;
		width:1366px;
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
					<h3>Types of Business Models:</h3>
					<p>This Templete will give you a better picture of your business model. It will allow you to get familiar with commonly used business models. Videos are provided inorder to explain you better.</p>
					<h3>Bait and Hook Model:</h3>
					<p>This involves offering a basic product at a very low cost, often at a loss (the bait), then charging compensatory recurring amounts for refills or associated products or services (the hook).</p>
					<h3>Freemium and Connection Platform:</h3>
					<p>Business model that works by offering basic Web services, or a basic downloadable digital product, for free, while charging a premium for advanced or special features.</p>
					</div>
                </div>
            </div>
			
            <div class="item">
                <img src="img/slide9.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h1>Stage 5 - Template 1</h1>
                        <h2>Types of Business Models: (1 of 3)</h2>
						<ol>
							<li>Hook and Bait Model</li>
							<li>Freemium</li>
							<li>Connection Platform</li>
							<li>and many others</li>
						</ol>
					</div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide10.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h2>Bait & Hook Model: (2 of 3)</h2>
						<video id="video1" width="420" controls>
							<source src="videos/Bait&HookModel.mp4" type="video/mp4">
							Your browser does not support HTML5 video.
						</video>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide11.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h2>Freemium and Connection Platform: (3 of 3)</h2>
                        <video id="video1" width="420" controls>
							<source src="videos/Freemium&ConnectionPlatformModel.mp4" type="video/mp4">
							Your browser does not support HTML5 video.
						</video>
						<br/>
                        <p><a class="btn btn-large btn-primary" href="stagefivepointtwo.php">Next</a></p>
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
                        Types of Business Models: 
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
					This Templete will give you a better picture of your business model. It will allow you to get familiar with commonly used business models. Videos are provided inorder to explain you better. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        Bait & Hook Model:
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
					This involves offering a basic product at a very low cost, often at a loss (the bait), then charging compensatory recurring amounts for refills or associated products or services (the hook).
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        Freemium and Connection Platform:
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                   Business model that works by offering basic Web services, or a basic downloadable digital product, for free, while charging a premium for advanced or special features.
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
