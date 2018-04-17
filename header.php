<?php
class UserCount{
	public $count = 0;	
};
$num = -1;
$my_conf = file_get_contents("count.json");
if($my_conf == NULL || $my_conf == -1 || !is_string($my_conf)){
	$num = 0;	
	$my_ccf = new UserCount();
	$my_ccf->count = 1;
	file_put_contents("count.json",json_encode($my_ccf));
}else{
	@ $my_conf_t = json_decode($my_conf);
	if(isset($my_conf_t) && $my_conf_t != NULL){
		$num = $my_conf_t->count;
		$my_conf_t->count = $my_conf_t->count + 1;
		file_put_contents("count.json",json_encode($my_conf_t));
	}else{
		$num = 1;
		$my_ccf = new UserCount();
		$my_ccf->count = 1;
		file_put_contents("count.json",json_encode($my_ccf));
	}
}
?><!--mobile-apps-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--mobile-apps-->
<!--Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css?<?php echo time();?>" type="text/css" rel="stylesheet" media="all"> 
<link href="css/popuo-box.css" rel="sty lesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!--audio-->
<link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
<!--//audio-->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.63321.js"></script> 
<script src="js/pretty-doughtnut.js"></script>
<script src="js/Chart.bundle.min.js"></script>
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--web-fonts-->
<!--<link href='http://fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>-->
<!--//web-fonts-->