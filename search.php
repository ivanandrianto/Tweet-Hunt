<!DOCTYPE html>
<?php
	include('redirect-search.php');
?>
<html>
<head>
	<link rel="icon" href="img/favicon2.ico">
	<title>Search | Twitter</title>
	<script type="text/javascript" src="assets/js/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
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
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/jquery.min.js"></script>
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
	<style type="text/css"></style>
	<script>
	$(document).ready(function(){
			$("#search-form").hide();
			$("#other-search").show();
			$("#cancel-search").hide();
			
			$("#other-search").click(function(){
				$("#search-form").show();
				$("#other-search").hide();
				$("#cancel-search").show();
			});
			$("#cancel-search").click(function(){
				$("#search-form").hide();
				$("#other-search").show();
				$("#cancel-search").hide();
			});
			
			$("#hiburan").show();
			$("#teknologi").hide();
			$("#sport").hide();
			$("#healthbeauty").hide();
			$("#unknown").hide();
			
			$("#hiburan-toggler").click(function(){
				$("#hiburan").show();
				$("#teknologi").hide();
				$("#sport").hide();
				$("#healthbeauty").hide();
				$("#unknown").hide();
			});
			
			$("#teknologi-toggler").click(function(){
				$("#teknologi").show();
				$("#hiburan").hide();
				$("#sport").hide();
				$("#healthbeauty").hide();
				$("#unknown").hide();
			});
			
			$("#sport-toggler").click(function(){
				$("#sport").show();
				$("#teknologi").hide();
				$("#hiburan").hide();
				$("#healthbeauty").hide();
				$("#unknown").hide();
			});
			$("#healthbeauty-toggler").click(function(){
				$("#healthbeauty").show();
				$("#teknologi").hide();
				$("#hiburan").hide();
				$("#sport").hide();
				$("#unknown").hide();
			});
			$("#unknown-toggler").click(function(){
				$("#unknown").show();
				$("#teknologi").hide();
				$("#hiburan").hide();
				$("#sport").hide();
				$("#healthbeauty").hide();
			});
		});
	</script>
	<style type="text/css">
	.nav-sidebar{
		padding-top:50px;
	}
	#other-search {
		  background: #3498db;
		  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
		  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
		  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
		  background-image: -o-linear-gradient(top, #3498db, #2980b9);
		  background-image: linear-gradient(to bottom, #3498db, #2980b9);
		  -webkit-border-radius: 5;
		  -moz-border-radius: 5;
		  border-radius: 14px;
		  font-family: Arial;
		  color: #ffffff;
		  font-size: 20px;
		  padding: 14px 20px 10px 20px;
		  text-decoration: none;
	}	
	#other-search:hover {
		  background: #3cb0fd;
		  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
		  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
		  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
		  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
		  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
		  text-decoration: none;
	}
	#cancel-search {
		  background: #3498db;
		  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
		  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
		  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
		  background-image: -o-linear-gradient(top, #3498db, #2980b9);
		  background-image: linear-gradient(to bottom, #3498db, #2980b9);
		  -webkit-border-radius: 5;
		  -moz-border-radius: 5;
		  border-radius: 14px;
		  font-family: Arial;
		  color: #ffffff;
		  width: 250px;
		  font-size: 20px;
		  padding: 14px 20px 10px 20px;
		  text-decoration: none;
	}

	#cancel-search:hover {
		  background: #d93434;
		  background-image: -webkit-linear-gradient(top, #d93434, #b82b2b);
		  background-image: -moz-linear-gradient(top, #d93434, #b82b2b);
		  background-image: -ms-linear-gradient(top, #d93434, #b82b2b);
		  background-image: -o-linear-gradient(top, #d93434, #b82b2b);
		  background-image: linear-gradient(to bottom, #d93434, #b82b2b);
		  text-decoration: none;
		  width: 250px;
	}
	
	#sport-toggler:hover {
		-webkit-border-radius: 5;
		-moz-border-radius: 5;
		border-radius: 5px;
		font-family: Arial;
		color: #ffffff;
		font-size: 20px;
		font-color: #ffffff;
		background: #3cb0fd;
		padding: 10px 20px 10px 20px;
		text-decoration: none;
	}
	
	#hiburan-toggler:hover {
		-webkit-border-radius: 5;
		-moz-border-radius: 5;
		border-radius: 5px;
		font-family: Arial;
		color: #ffffff;
		font-size: 20px;
		font-color: #ffffff;
		background: #3cb0fd;
		padding: 10px 20px 10px 20px;
		text-decoration: none;
	}
	#teknologi-toggler:hover {
		-webkit-border-radius: 5;
		-moz-border-radius: 5;
		border-radius: 5px;
		font-family: Arial;
		color: #ffffff;
		font-size: 20px;
		font-color: #ffffff;
		background: #3cb0fd;
		padding: 10px 20px 10px 20px;
		text-decoration: none;
	}
	#healthbeauty-toggler:hover {
		-webkit-border-radius: 5;
		-moz-border-radius: 5;
		border-radius: 5px;
		font-family: Arial;
		color: #ffffff;
		font-size: 20px;
		font-color: #ffffff;
		background: #3cb0fd;
		padding: 10px 20px 10px 20px;
		text-decoration: none;
	}
	
	#unknown-toggler:hover {
		-webkit-border-radius: 5;
		-moz-border-radius: 5;
		border-radius: 5px;
		font-family: Arial;
		color: #ffffff;
		font-size: 20px;
		font-color: #ffffff;
		background: #3cb0fd;
		padding: 10px 20px 10px 20px;
		text-decoration: none;
	}
	
	#footer{
		padding-top:20px;
		padding-bottom:20px;
		background-color:black;
		color:white;
	}
	body { padding-bottom: 100px; }
	#search-toggler, #search-form{
		padding-top:50px;
	}
	</style>
</head>
<?php
$res_string="";
$keyword_valid = $type_valid = $cat1_valid = $cat2_valid = $cat3_valid = $cat4_valid = false;

if (empty($_GET["keyword"])){
	$keyword= "";
} else {
	$keyword = $_GET["keyword"];
	$keyword_valid = true;
}

if (empty($_GET["type"])){
	$type= "";
} else {
	$type = $_GET["type"];
	$type_valid = true;
}

if (empty($_GET["cat1"])){
	$cat1= "";
} else {
	$cat1 = unserialize(urldecode($_GET['cat1']));
	$cat1_valid = true;
}
if($cat1_valid){
	$cat1length = count($cat1);
	$sport_keywords='';
	for($x=0;$x<$cat1length;$x++){
		if($x != 0){ $sport_keywords .= '--'; }
		$sport_keywords .= trim($cat1[$x]);
	}
}


if (empty($_GET["cat2"])){
	$cat2= "";
} else {
	$cat2 = unserialize(urldecode($_GET['cat2']));
	$cat2_valid = true;
}
if($cat2_valid){
	$cat2length = count($cat2);
	$hiburan_keywords='';
	for($x=0;$x<$cat2length;$x++){
		if($x != 0){ $hiburan_keywords .= '--'; }
		$hiburan_keywords .= trim($cat2[$x]);
	}
}

if (empty($_GET["cat3"])){
	$cat3= "";
} else {
	$cat3 = unserialize(urldecode($_GET['cat3']));
	$cat3_valid = true;
}
if($cat3_valid){
	$cat3length = count($cat3);
	$teknologi_keywords='';
	for($x=0;$x<$cat3length;$x++){
		if($x != 0){ $teknologi_keywords .= '--'; }
		$teknologi_keywords .= trim($cat3[$x]);
	}
}
if (empty($_GET["cat4"])){
	$cat4= "";
} else {
	$cat4 = unserialize(urldecode($_GET['cat4']));
	$cat4_valid = true;
}
if($cat4_valid){
	$cat4length = count($cat4);
	$health_beauty_keywords='';
	for($x=0;$x<$cat4length;$x++){
		if($x != 0){ $health_beauty_keywords .= '--'; }
		$health_beauty_keywords .= trim($cat4[$x]);
	}
}
?>
<body>
	<!--navigation-->
	<?php include('navbar.php');?>
	
		<section id="search-form">
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
		</section>
		<section id="search-toggler">
			
		<center>		
			<div id="other-search">
				<p>Perform another search</p>
			</div>
			<div id="cancel-search">
				Cancel search
			</div>
		</center>
		</section>
	<!-- Section #1 -->
		<section id="intro" data-speed="6" data-type="background">
		<div class="container">
			<div class="row-fluid" id="error">
			</div>
			<div class="row-fluid">
				<div class="col-xs-4 col-sm-4 col-md-4">
					<nav class="nav-sidebar">
						<ul class="nav" id = "toggler">
							<li class="active" id = "sport-toggler"><a href="javascript:;">Sport</a></li>
							<li id = "hiburan-toggler"><a href="javascript:;">Hiburan</a></li>
							<li id = "teknologi-toggler"><a href="javascript:;">Teknologi</a></li>
							<li id = "healthbeauty-toggler"><a href="javascript:;">Health & Beauty</a></li>
							<li id = "unknown-toggler"><a href="javascript:;">Unknown</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8">
					<div id = "results">
						<div id = "sport"><h2>Hasil Sport</h2></div>
						<div id = "hiburan"><h2>Hasil Hiburan</h2></div>
						<div id = "teknologi"><h2>Hasil Teknologi</h2></div>
						<div id = "healthbeauty"><h2>Hasil Health & Beauty</h2></div>
						<div id = "unknown"><h2>Hasil Unknown</h2></div>
					</div>
				</div>
			</div>
		</section>
		<!-- Section #1 end-->



<?php
ini_set('max_execution_time', 300);

if(($keyword_valid) && ($type_valid) && ($cat1_valid) && ($cat2_valid) && ($cat3_valid) && ($cat4_valid)){
		//session_start();
		ob_end_flush();
		ob_start();
		$descriptorspec = array(
			0 => array("pipe", "r"),   // stdin is a pipe that the child will read from
			1 => array("pipe", "w")   // stdout is a pipe that the child will write to
			//2 => array("pipe", "w")    // stderr is a pipe that the child will write to
		);
		$count = 0;
		$count_found = 1;
		$count_sport = 0;
		$count_hiburan = 0;
		$count_teknologi = 0;
		$count_healthbeauty = 0;
		$count_unknown = 0;
		$process = proc_open("java -cp .;twitter4j/lib/twitter4j-core-4.0.3.jar Main ".escapeshellarg($keyword)." ".escapeshellarg($type)." ".escapeshellarg($sport_keywords)." ".escapeshellarg($hiburan_keywords)." ".escapeshellarg($teknologi_keywords)." ".escapeshellarg($health_beauty_keywords), $descriptorspec, $pipes);
		//$process = proc_open("java main2", $descriptorspec, $pipes);
		$percent = 0;
		$finish = false;
		if (is_resource($process)) {
			echo '<script language="javascript"> document.getElementById("searchname").innerHTML = "Hasil pencarian untuk <strong>'.$keyword.'</strong>';
			while(($count<100) && (!$finish)){
				$str = stream_get_line($pipes[1],1024,"[");
				$tag = stream_get_line($pipes[1],1024,"]");
				if((strcmp($tag,"sport") == 0) || (strcmp($tag,"hiburan") == 0) || (strcmp($tag,"teknologi") == 0) || (strcmp($tag,"healthbeauty") == 0)|| (strcmp($tag,"unknown") == 0)){
					$str = stream_get_line($pipes[1],1024,"[user]");
					$user = stream_get_line($pipes[1],1024,"[/user]");					
					$str = stream_get_line($pipes[1],1024,"[tweet]");
					$tweet = stream_get_line($pipes[1],1024,"[/tweet]");
					$tweet = str_replace("\n","<br>",$tweet);
					$str = stream_get_line($pipes[1],1024,"[link]");
					$link = stream_get_line($pipes[1],1024,"[/link]");
					$tweetlink = "<a href='".$link."'>".$tweet."</a>";
					echo '<script language="javascript"> document.getElementById("anti_itb").innerHTML += "anti_itb"</script>';
					if(strcmp ($tag,"sport") == 0){
						$count_sport++;
						echo '<script language="javascript"> document.getElementById("sport").innerHTML += "'.($count_sport).'. '.$user.'"</script>';
						echo '<script language="javascript"> document.getElementById("sport").innerHTML += "'.$tweetlink.'"</script>';
						echo '<script language="javascript"> document.getElementById("sport").innerHTML += "<br>" </script>';
					} else if(strcmp ($tag,"hiburan") == 0){
						$count_hiburan++;
						echo '<script language="javascript"> document.getElementById("hiburan").innerHTML += "'.($count_hiburan).'. '.$user.'"</script>';
						echo '<script language="javascript"> document.getElementById("hiburan").innerHTML += "'.$tweetlink.'"</script>';
						echo '<script language="javascript"> document.getElementById("hiburan").innerHTML += "<br>" </script>';
					} else if (strcmp ($tag,"teknologi") == 0){
						$count_teknologi++;
						echo '<script language="javascript"> document.getElementById("teknologi").innerHTML += "'.($count_teknologi).'. '.$user.'"</script>';
						echo '<script language="javascript"> document.getElementById("teknologi").innerHTML += "'.$tweetlink.'"</script>';
						echo '<script language="javascript"> document.getElementById("teknologi").innerHTML += "<br>" </script>';
					} else if (strcmp ($tag,"healthbeauty") == 0){
						$count_healthbeauty++;
						echo '<script language="javascript"> document.getElementById("healthbeauty").innerHTML += "'.($count_healthbeauty).'. '.$user.'"</script>';
						echo '<script language="javascript"> document.getElementById("healthbeauty").innerHTML += "'.$tweetlink.'"</script>';
						echo '<script language="javascript"> document.getElementById("healthbeauty").innerHTML += "<br>" </script>';
					} else if (strcmp ($tag,"unknown") == 0){
						$count_unknown++;
						echo '<script language="javascript"> document.getElementById("unknown").innerHTML += "'.($count_unknown).'. '.$user.'"</script>';
						echo '<script language="javascript"> document.getElementById("unknown").innerHTML += "'.$tweetlink.'"</script>';
						echo '<script language="javascript"> document.getElementById("unknown").innerHTML += "<br>" </script>';
					}
					$count_found++;
					$str = stream_get_line($pipes[1],1024,"[/catend]");
				} else if (strcmp($tag,"notmatch") == 0){
					$str = stream_get_line($pipes[1],1024,"[/notmatch]");
				}
			$count++;
			echo str_repeat(' ',1024 * 64);
			flush();
			}		
			$count_found--;
		}
		proc_close($process);
} else {
	echo '<script language="javascript"> document.getElementById("error").innerHTML += "</br></br><font color=\'red\'>Pencarian tidak dapat dilakukan</font>" </script>';
}

?>
<section>
<div class="navbar navbar-fixed-bottom" id="footer">
	<div class="row">
		<center>
		(C) 2015 Tweet Hunt
		</center>
	</div>
</div>
</section>
</div>
<script src="src/bootstrap/js/bootstrap.js"></script>
</body>
</html>