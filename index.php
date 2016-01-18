<!DOCTYPE html>
<?php
	include('redirect-search.php');
?>
<html>
	<head>
		<link rel="stylesheet" href="img/favicon2.ico">
		<title>Tweet Hunt for Busri</title>
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
			background: url(img/Logo3.jpg) 50% 0 fixed; 
			background-size: 100% 100%;
			background-position : center;
			font-size : 200%;
			height: 325 px;  
			margin: 0 auto; 
		    width: auto; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 250px 0;
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
			
			.carousel {
					background: url('img/Carousel2.jpg');
					position: relative;
					padding: 10px;     /* Shows as a border around the carousel */
				}
			
			
			.slide-wrapper{
				color:white;
				margin-top:10px;
				margin-bottom:20px;
				font-family: "Arial;
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
			.carousel{
				min-width: 100%;
			}
			.slide-content{
				min-width: 100%;
			}
			.carousel-inner .item{
				min-width: 100%;
				height:600px;
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
			.img-center {margin:0 auto;}
			@media screen and(max-width:960px){
				#myCarousel {
					min-height:700px;
				}
				.carousel-inner .item{
					min-height:100%;
					height:1000px;
				}
			}
}
		</style>
	</head>
	<body>
		<!--navigation-->
		<?php include('navbar.php');?>
		
		<!-- Section #1 -->
		<section id="intro" data-speed="6" data-type="background">
		<div class="container">
			<div class="row-fluid">
		        <div class="span4 text-center" style="color:white">
		          <h1>Tweet Hunt</h1>
		        </div>
		        <div class="span8 text-center" style="color:white">
		          Untuk pencarian sesuatu yang tidak penting di Twitter</br>
				  <i>Previously known as 'A Tweet For Busri'</i>
		        </div>
	    	</div>
		</div>
		</section>
		<!-- Section #1 end-->
		
		<!-- Section #2 -->
		<section id="home" data-speed="4" data-type="background">
		<div id="main">
			<div class="row" >
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active c1-1">
          <div class="container">
            <div class="carousel-caption">
				<img class="img-responsive img-center" src="img/detektif.jpg" width="300">
				<h1>Tweet Hunt</h1>
				<p>Tweet Hunt dapat mencari tweet-tweet ter-update sesuai kategori yang kamu mau!!</p>
				<p>Cukup dengan memasukkan kata dalam tweet yang anda cari, kami akan mencarikan</p>
				<p>kata yang anda mau dengan algoritma KMP atau Boyer-Moore</p>
				<p>Selamat Mencari!! :)</p>
            </div>
          </div>
        </div>
        <div class="item" id="c1-2">
			<div class="container">
				<div class="carousel-caption">
				<img id="gbr" class="img-responsive img-center" src="img/Ivan.jpg" width="300">
					<h1>Agent "The Boss" Chibi</h1>
					<p>Chibi was deployed as a secret agent of Mother Russia</p>
					<p>When he was on the mission to Indonesia, he visited Japan and learned about the term "Girlband" for the first time in his life</p>
					<p>Curious about it, he then joined Wota to deepen his knowledge about it.</p>
					<p>Chibi fell in love, decided to change his career, and opened up this website :)</p>
				</div>
			  </div>
        </div>
		<div class="item" id="c1-3">
			<div class="container">
				<div class="carousel-caption">
				<img id="gbr" class="img-responsive img-center" src="img/Wilhelm.jpg" width="300">
					<h1>Agent "Wong Cin*" Wilhelm</h1>
					<p>Wilhelm is not from China. Although his secret name do suggest so.</p>
					<p>Recently deployed on a secret mission to stop Chibi from assassinating Busri.</p>
					<p>When he came to Indonesia, he learned that Chibi has retired from secret agency world.</p>
					<p>He then was offered a better paying job as a worker on Tweet Hunt by Chibi, and gave Chibi the nod.</p>
				</div>
			  </div>
        </div>
		<div class="item" id="c1-4">
			<div class="container">
				<div class="carousel-caption">
				<img id="gbr" class="img-responsive img-center" src="img/Freddy.jpg" width="300">
					<h1>Agent "Mr.Invincible" Freddy</h1>
					<p>Freddy loves to sneak around. In fact, he does that all his life.</p>
					<p>That little thing made his name famous, and recognized by Mao Zedong,China.</p>
					<p>After Mao Zedong reign ended, he then was recruited by Kim Jong Un to be sent on a secret mission in Vietnam.</p>
					<p>He mistakenly thought that Indonesia was Vietnam. Found half-dead on the street and fed by Chibi.</p>
					<p>He then pledge loyalty to "The Boss".</p>
				</div>
			  </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>	
				<!-- Carousel nav -->
			</div>
			<!-- First Carousel End -->

			
			<div id="search-area">
				<div class="row">
					<div class="pagination-centered">
						</br></br>
						<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Search on Twitter</small></h3>
								</div>
								<div class="panel-body">
									<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
									<div class="row">
										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="form-label">
												Hashtag
											</div>
										</div>
										<div class="col-xs-8 col-sm-8 col-md-8">
											<div class="form-group">
												<input required type="text" name="keyword" class="form-control input-sm" placeholder="Keyword">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="form-label">
												Sport
											</div>
										</div>
										<div class="col-xs-8 col-sm-8 col-md-8">
											<div class="form-group">
												<input required type="text" name="category1" class="form-control input-sm" placeholder="Sport-related keywords">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="form-label">
												Hiburan
											</div>
											</div>
										<div class="col-xs-8 col-sm-8 col-md-8">
											<div class="form-group">
												<input required type="text" name="category2" class="form-control input-sm" placeholder="Hiburan-related keywords">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="form-label">
												Teknologi
											</div>
											</div>
										<div class="col-xs-8 col-sm-8 col-md-8">
											<div class="form-group">
												<input required type="text" name="category3" class="form-control input-sm" placeholder="Teknologi-related keywords">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="form-label">
												Health &  Beauty
											</div>
											</div>
										<div class="col-xs-8 col-sm-8 col-md-8">
											<div class="form-group">
												<input required type="text" name="category4" class="form-control input-sm" placeholder="Health & Beauty-related keywords">
											</div>
										</div>
									</div>
									
									<div class="row">
										<center>
										<div class="col-xs-12 col-sm-12 col-md-12">
											Type
											<div class="radio">
												<label><input type="radio" name="type" value="KMP" required>KMP</label>
											</div>
											<div class="radio">
												<label><input type="radio" name="type" value="BM">BM</label>
											</div>
										</div>
										</center>
									</div>

									<input type="submit" value="Get Tweets" class="btn btn-info btn-block">

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div navbar navbar-fixed-bottom id="footer">
				<div class="row">
					<center>
					(C) 2015 Tweet Hunt
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
		ctx.drawImage(img,-75,-75,300,300);


      		// rotate 45 degrees clockwise
      		
		}
		</script>
	<body>
</html>
			