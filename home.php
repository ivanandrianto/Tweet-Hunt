<!DOCTYPE html>
<html>
	<head>
		<title>Twitter</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Bootstrap-->
		<link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Optional theme -->
		<link rel="stylesheet" href="src/bootstrap/css/bootstrap-theme.min.css">
		<!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5.shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<!-- If lt IE 7 -->
		<!-- Latest compiled and minified JavaScript -->
		<script src="src/bootstrap/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			var elMain = document.getElementById('main');
			setMainDims();
			document.body.onresize=setMainDims;
			function setMainDims(){
				elMain.style.height = (document.body.clientHeight - 200) + 'px';
				elMain.style.width = '99%'
				setTimeout("elMain.style.width = '100%'", 0);
			}
		</script>
		<style type="text/css">
		#intro { 
			background: url(img/Desert.jpg) 50% 0 fixed; 
			background-size: 100% 100%;
			height: auto;  
			margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 200px 0;
		}
		#home { 
			
			margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 0px 0;
		}
		#about { 
			background: url(images/about.png) 50% 0 fixed; 
			height: auto;
			margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 100px 0;
		    color: #fff;
		}

		.media-object { width: 64px; height: 64px; padding-bottom: 30px }
	</style>
		<style>
			#myCarousel{
				height:500px;
			}
			#myCarousel2{
				
			}

			
			#c1-1{
				/*background:
				linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px,
				linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0px,
				linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
				linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
				linear-gradient(90deg, #1b1b1b 10px, transparent 10px),
				linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);
				background-color: #131313;
				background-size: 100% 100%;*/
				background: url('img/bg5.jpg');
			}
			#c1-2{
				background-color:blue;
			}
			#c2-1{
				background-color:pink;
			}
			#c2-2{
				background-color:green;
			}
			.slide-wrapper{
				color:white;
				margin-top:10px;
				margin-bottom:50px;
				font-family: "Arial;
			}
			img{
				box-shadow: 5px 5px 5px #444444;
			}
			.crcltxt{
				margin-top:10px;
				margin-bottom:20px;
			}
			
			
			#main {
				width: 100%;
				top: 50px;
				bottom: 0;
			}
			#myCanvas{
				margin-left: 0;
				top: 0;
			}
			.carousel-inner .item{
				height:500px;
			}
			.form-label{
				color:#000000;
			}
			#footer{
				padding-top:20px;
				padding-bottom:20px;
				background-color:black;
				color:white;
			}
		</style>
	</head>
	<body>
		<!--navigation-->
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  <a class="navbar-brand" href="#">A Tweet For Busri</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li class="dropdown">
				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Menu 1-1</a></li>
					<li><a href="#">Menu 1-2</a></li>
					<li><a href="#">Menu 1-3</a></li>
				  </ul>
				</li>
				<li><a href="#">Terms of Service</a></li>
				
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		<!--navigation end-->
		
		<!-- Section #1 -->
		<section id="intro" data-speed="6" data-type="background">
		<div class="container">
			<div class="row-fluid">
		        <div class="span4 text-center" style="color:white">
		          <h1>A Tweet For Busri</h1>
		        </div>
		        <div class="span8 text-center" style="color:white">
		          Untuk pencarian sesuatu yang tidak penting di Twitter
		        </div>
	    	</div>
		</div>
		</section>
		<!-- Section #1 end-->
		
		
		<!-- Section #2 -->
		<section id="home" data-speed="4" data-type="background">
		<div id="main">
			<div class="row" >
				<div id="myCarousel" class="carousel slide">
					<!-- Carousel indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>

					</ol>
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="item active" id="c1-1">
							<div class="container">
								<div class="slide-wrapper">
									<div class="row">
										<div class="col-lg-6">
											<div class="slide-image">
												<img style="display:none" id="gbr" src="chibi.png" width="50px" height="50px">
												<canvas id="myCanvas" width="500px" height="300px"></canvas>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="slide-content">
												<h1>Title</h1>
												<p>Cherrybelle adalah girlband yang berasal dari Indonesia dan terdiri dari 9 personil yang unyu-unyu.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item" id="c1-2">
							<div class="container">
								<div class="slide-wrapper">
									<div class="row">
										<div class="pagination-centered">
											<br/><br/><br/><br/>
											<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h3 class="panel-title">Search on Twitter</small></h3>
													</div>
													<div class="panel-body">
														<form role="form">
														<div class="row">
															<div class="col-xs-4 col-sm-4 col-md-4">
																<div class="form-label">
																	Hashtag
																</div>
															</div>
															<div class="col-xs-8 col-sm-8 col-md-8">
																<div class="form-group">
																	<input type="text" name="last_name" class="form-control input-sm" placeholder="Hashtag">
																</div>
															</div>
														</div>
														
														<div class="row">
															<div class="col-xs-4 col-sm-4 col-md-4">
																<div class="form-label">
																	Kategori1
																</div>
															</div>
															<div class="col-xs-8 col-sm-8 col-md-8">
																<div class="form-group">
																	<input type="text" name="last_name" class="form-control input-sm" placeholder="Kategori1 keywords">
																</div>
															</div>
														</div>

														<div class="row">
															<div class="col-xs-4 col-sm-4 col-md-4">
																<div class="form-label">
																	Kategori2
																</div>
																</div>
															<div class="col-xs-8 col-sm-8 col-md-8">
																<div class="form-group">
																	<input type="text" name="last_name" class="form-control input-sm" placeholder="Kategori2 keywords">
																</div>
															</div>
														</div>

														<input type="submit" value="Get Tweets" class="btn btn-info btn-block">

														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="icon-prev"></span></a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="icon-next"></span></a>
				</div>
				<!-- Carousel nav -->
			</div>
			<!-- First Carousel End -->

			
			

			<div id="footer">
				<div class="row">
					<center>
					(C) 2015 Twitter Banci
					</center>
				</div>
			</div>	
		</div>
		</section>
		<!-- Section #2 end-->
		
		<script src="src/bootstrap/js/bootstrap.js"></script>
		<script>
		window.onload = function(){
		var c=document.getElementById("myCanvas");
		var ctx=c.getContext("2d");
		var img=document.getElementById("gbr");
		ctx.rotate(-0.2);
		ctx.translate(160, 200);
		ctx.drawImage(img,-75,-75,250,150);


      		// rotate 45 degrees clockwise
      		
		}
		</script>
	<body>
</html>
			