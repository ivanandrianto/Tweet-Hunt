<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	set_time_limit(1000);
	
	$keyword=(isset($_POST['keyword']))?$_POST['keyword']:'';
	$category1=(isset($_POST['category1']))?$_POST['category1']:'';
	$category2=(isset($_POST['category2']))?$_POST['category2']:'';
	$category3=(isset($_POST['category3']))?$_POST['category3']:'';
	$category4=(isset($_POST['category4']))?$_POST['category4']:'';
	$type=(isset($_POST['type']))?$_POST['type']:'';
	$arraycat1 = explode(",",$category1);
	$arraycat2 = explode(",",$category2);
	$arraycat3 = explode(",",$category3);
	$arraycat4 = explode(",",$category4);
	$arraycat1 = urlencode(serialize($arraycat1));
	$arraycat2 = urlencode(serialize($arraycat2));
	$arraycat3 = urlencode(serialize($arraycat3));
	$arraycat4 = urlencode(serialize($arraycat4));
	$redirectURL = 'search.php?keyword='.$keyword.'&type='.$type.'&cat1='.$arraycat1.'&cat2='.$arraycat2.'&cat3='.$arraycat3.'&cat4='.$arraycat4;
	header("Location:".$redirectURL);
	$array = explode("|",$line);
}
?>