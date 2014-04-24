<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
?>
<!DOCTYPE html>

<html>
<head>

    <title>Get Started</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="css/general.css" />
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
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
        </ol>
        
        <div class="carousel-inner">
            
            <div class="item active">
                <img src="img/slide2.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
						<h1>Getting Started with Business Model Innovator</h1>
						<h2>Introduction:</h2>
						<h4><p>This web based application will take you through various stages involved in coming up with a business model.</p></h4>
					</div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide3.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Stages Involved:</h1>
						<ol style="position:absolute; left:35%">
							<li>Understanding the problem</li>
							<li>Identify</li>
							<li>Problem selection</li>
							<li>Problem description</li>
							<li>Technology</li>
							<li>Idea selection</li>
							<li>Idea description</li>
						</ol>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <img src="img/slide7.jpg"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2><p>You have an idea but don't know how to manage it? How to make money from it?</p></h2>
						<h3><p>Follow the steps and you will see that your idea will fetch you money. :)</p></h3>
						<br/>
						<h4><p>We shall take you through a simple example to give you overview of what has to be done. Let us take an example of Indian Agriculture. We all know that India is an agricultural country. Each year hundreds of farmers commit suicide due to various reasons. One of the reason is that he doesn't get proper price for his crops. So let us try to solve this problem.</p></h4>
						<br/>
                        <p><a class="btn btn-large btn-primary" href="stageonepointone.php">Get Started</a></p>
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