<!DOCTYPE html>
<html>
<head>
<title>校园 - 单科成绩</title>
<?php include "header.php"; ?>
</head>
<body class="dark-purple">
	<!-- content -->
	<div class="main">
		<div class="container">
			<div class="main-row row3">
				<div class="col-md-2 grid-one">
					<div class="data-bars grid-tansparent" style="padding:2em 3em 1em 3em;align-content: center;text-align: center;">
						<img src="images/avatar1.png" alt="" class="left_upper_photo" style="border-radius: 50%;box-shadow: 2px 2px 40px #cb1f45; border: solid #fff 2px;"/>
					</div>
				</div>
				<div class="col-md-4 content-grids">
					<div class="data-bars grid-tansparent">
						<div class="grid-transparent-row row">
							<div class="bar_group center-bar mask-shadow pink-shadow" style="-webkit-text-stroke: 3px  #fff;">
								<span class="glyphicon glyphicon-star start-big" aria-hidden="true" style="color:#fe2a04"></span>
								<span class="glyphicon glyphicon-star start-big" aria-hidden="true" style="color:#ff6110"></span>
								<span class="glyphicon glyphicon-star start-big" aria-hidden="true" style="color:#ffce34"></span>
								<span class="glyphicon glyphicon-star start-big" aria-hidden="true" style="color:#ffe759"></span>
							</div>
							<div class="btn-group center-bar" role="group" aria-label ="..." >
							  	<button type="button" class="btn btn-default btn-pink-shadow" style="float:none;">教师学科反馈</button>
							  	<button type="button" class="btn btn-default btn-pink-shadow" style="float:none;"s>近况</button>

							  	<div class="btn-group btn-pink-shadow" role="group" style="float:none;">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  考核
								  <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
								  <li><a href="#">教学进度</a></li>
								  <li><a href="#">考核指标进度</a></li>
								</ul>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 charts-right">
					<div class="charts-info grid-tansparent" style="">
						<div id="container-right" class="margin" role="group"></div>
					</div>
					<script>
						(function (){
							var chart = null;
							$(function () {
								$('#container-right').highcharts({
									chart: {
										backgroundColor:0,
										plotBackgroundColor: null,
										plotBorderWidth: null,
										plotShadow: false,
										spacing : [0, 0 , 0, 0],
										height:'140px',
									},
									title: {
										useHTML:true,
										floating:false,
										text: '',
										verticalAlign:'middle'
									},
									tooltip: {
										pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
									},
									plotOptions: {
										pie: {
											allowPointSelect: true,
											cursor: 'pointer',
											dataLabels: {
												enabled: false,
												format: '<b>{point.name}</b>: {point.percentage:.1f} %',
												style: {
													color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
												}
											},
											point: {
												events: {
													mouseOver: function(e) {  // 鼠标滑过时动态更新标题
														// 标题更新函数，API 地址：https://api.hcharts.cn/highcharts#Chart.setTitle
														chart.setTitle({
															text: e.target.name+ '\t'+ e.target.y + ' %'
														});
													}
													//, 
													// click: function(e) { // 同样的可以在点击事件里处理
													//     chart.setTitle({
													//         text: e.point.name+ '\t'+ e.point.y + ' %'
													//     });
													// }
												}
											},
										}
									},
									exporting:{
										enabled :false
									},
									series: [{
										type: 'pie',
										innerSize: '80%',
										name: '市场份额',
										data: [
											{name:'Firefox',   y: 45.0, url : 'http://bbs.hcharts.cn'},
											['IE',       26.8],
											{
												name: 'Chrome',
												y: 12.8,
												sliced: true,
												selected: true,
												url: 'http://www.hcharts.cn'
											},
											['Safari',    8.5],
											['Opera',     6.2],
											['其他',   0.7]
										]
									}]
								}, function(c) {
									// 环形图圆心
									var centerY = c.series[0].center[1],
										titleHeight = parseInt(c.title.styles.fontSize);
									c.setTitle({
										y:centerY + titleHeight/2
									});
									chart = c;
								});
							});

						})();
					</script>
				</div>
				<div class="col-md-4 charts-right">
					<div class="charts-info grid">
						<div id="info-part" class="margin grid-info" role="group" style="padding:1em 2em 1em 2em;font-size: 1.1em;">
						<div class="row top-bottom-3"><em class="glyphicon glyphicon-ok-circle font-big right-space"></em> 第二章：元素化合物</div>
						<div class="row top-bottom-3"><i class="glyphicon glyphicon-retweet font-big right-space"></i> 需要加强：铁的相关反应</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="alert alert-success" role="alert" style="margin: 2em 0 4em 0;"> 很不错， 当前教学进度与 <b>学区教学计划</b> 同步进行 !</div>
			<div class="main-row">
				<!--news feed-->
				<div class="col-md-6 content-grids">
					<div class="grid menu-info" style="padding:3em;">
						考评进度：<br>
						<div class="progress top-bottom-2">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
							<span class="sr-only">20% Complete</span>
						  </div>
						</div>
						学生接受度：<br>
						<div class="progress top-bottom-2">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
							<span class="sr-only">20% Complete</span>
						  </div>
						  <div class="progress-bar progress-bar-tobedone" style="width: 60%">
							<span class="sr-only">10% Complete (danger)</span>
						  </div>
						</div>
						教学进度：<br>
						<div class="progress top-bottom-2">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
							<span class="sr-only">60% Complete (warning)</span>
						  </div>
					      <div class="progress-bar progress-bar-tobedone" style="width: 70%">
							<span class="sr-only">10% Complete (danger)</span>
						  </div>
						</div>
						教学进度：<br>
						<div class="progress top-bottom-2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						  <div class="progress-bar progress-bar-success" style="width: 35%">
							<span class="sr-only">35% Complete (success)</span>
						  </div>
						  <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">
							<span class="sr-only">20% Complete (warning)</span>
						  </div>
						  <div class="progress-bar progress-bar-danger" style="width: 10%">
							<span class="sr-only">10% Complete (danger)</span>
						  </div>
						</div>
					</div>
				</div>
				<!--menu-list-->
				<div class="col-md-3 content-grids">
					<div class="grid menu-info">
						<div class="panel-group" id="accordion" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" id="headingOne">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<h4 class="panel-title">List of Messages</h4> <h6>Today</h6> <span class="glyphicon glyphicon-menu-down"></span>
									</a>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<h4>Date List Downloads</h4> <h6>Lorem ipsum</h6> <span class="glyphicon glyphicon-menu-down"></span>
										</a>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<p> Tincidunt ut laoreet dolore</p>
										<p> Consectetuer adipiscing elit</p>
										<p> Voluptatum deleniti atque</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--//menu-list-->
				<!--menu-list-->
				<div class="col-md-3 content-grids">
					<div class="grid menu-info">
						<div class="panel-group" id="accordion" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" id="headingOne">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<h4 class="panel-title">List of Messages</h4> <h6>Today</h6> <span class="glyphicon glyphicon-menu-down"></span>
									</a>
								</div>
								<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<p> Tincidunt ut laoreet dolore At vero eos et Lorem ipsum <i class="time">02:10 PM</i></p>
										<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam<i class="time">01:00 PM</i></p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<h4>Date List Downloads</h4> <h6>Lorem ipsum</h6> <span class="glyphicon glyphicon-menu-down"></span>
										</a>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<p> Tincidunt ut laoreet dolore</p>
										<p> Consectetuer adipiscing elit</p>
										<p> Voluptatum deleniti atque</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--//menu-list-->
				<div class="col-md-8 gallery-slider" style="display:none;">
					<section class="slider grid">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="gallery-bg gallery-text">
										<h3>Exclude UI Kit</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculiscursus utp massae malesuada, Morbi eget ornare quam tristique placera </p>
									</div>
								</li>
								<li>
									<div class="gallery-bg1 gallery-text">
										<h3>Exclude UI Kit</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculiscursus utp massae malesuada, Morbi eget ornare quam tristique placera </p>
									</div>
								</li>
								<li>
									<div class="gallery-bg2 gallery-text">
										<h3>Exclude UI Kit</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculiscursus utp massae malesuada, Morbi eget ornare quam tristique placera </p>
									</div>
								</li>
							</ul>
						</div>
					</section>
					<!--FlexSlider-->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "pagination",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					</script>
					<!--End-slider-script-->
				</div>
				<div class="clearfix"></div>
			</div>
			<!--row-two-->
			<div class="main-row row2">
				<div class="col-md-8 charts-left">
					<h3 class="title">GRAPHS</h3>
					<div id="graph" class="grid"> </div>
					<script src="js/graph.js"></script>
					<script>
						$(function () {
							$('#graph').graphify({
								//options: true,
								start: 'combo',
								obj: {
									id: 'ggg',
									width: 680,
									height: 375,
									xGrid: false,
									legend: true,
									title: 'Linux vs Mac',
									points: [
										[7, 26, 33, 74, 12, 49, 33],
										  [32, 46, 75, 38, 62, 20, 52]
										],
									pointRadius: 2,
									colors: ['blue', 'red'],
									xDist: 80,
									dataNames: ['Linux', 'Mac'],
									xName: 'Day',
									tooltipWidth: 15,
									animations: true,
									pointAnimation: true,
									averagePointRadius: 10,
									design: {
										tooltipColor: '#fff',
										gridColor: 'grey',
										tooltipBoxColor: 'green',
										averageLineColor: 'green',
										pointColor: 'green',
										lineStrokeColor: 'grey',
									}
								}
							});
							
							var bar = new GraphBar({
								attachTo: '#graph3',
								special: 'combo',
								height: 725,
								width: '100%',
								yDist: 60,
								xDist: 150,
								showPoints: false,
								xGrid: false,
								legend: true,
								points: [
								  [17, 21, 51, 74, 12, 49, 33],
								  [32, 15, 75, 20, 45, 90, 52]
								],
								colors: ['red', 'orange'],
								dataNames: ['Hot', 'Warm'],
								xName: 'Day',
								tooltipWidth: 15,
								design: {
									tooltipColor: '#fff',
									gridColor: 'black',
									tooltipBoxColor: 'green',
									averageLineColor: 'blue',
								}
							});
							bar.init();
						});
					</script>
					<div class="count main-row">
						<h3 class="title">COUNTDOWN</h3>
						<div class="grid">
							<ul id="example">
								<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
								<li class="seperator">:</li>
								<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
								<li class="seperator">:</li>
								<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
							</ul>
							<div class="clearfix"> </div>
							<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
							<script type="text/javascript">
								$('#example').countdown({
									date: '12/24/2020 18:59:59',
									offset: -8,
									day: 'Day',
									days: 'Days'
								}, function () {
									alert('Done!');
								});
							</script>
						</div>
					</div>
				</div>
				<div class="col-md-4 charts-right">
					<h3 class="title">PRODUCTS STATUS</h3>
					<div class="charts-info grid">
						<div id="container" class="margin grid-info" role="group"></div>
					</div>
					<script>
						$(window).load(function() {
						  doughnutWidget.options = {
							container: $('#container'),
							width: 100,
							height: 100,
							class: 'myClass',
							cutout: 60
						  };
						  doughnutWidget.render(data());

						  setInterval(init, 3000);
						});

						function init() {
						  doughnutWidget.render(data());
						}

						function data() {
							var data = {
							pending: {
							  val: Math.round(Math.random() * 100),
							  color: '#57B4F2',
							  click: function(e) {
								console.log('hi');
							  }
							},
							delivered: {
							  val: Math.round(Math.random() * 100),
							  color: '#6DED5C'
							},
							delayed: {
							  val: Math.round(Math.random() * 100),
							  color: '#E63329'
							}
						  };
						  return data;
						}
					</script>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--//row-two-->
			<!--row-three-->
			<div class="main-row row3">
				<div class="col-md-4 grid-one">
					<h3 class="title">SIGN IN FORM</h3>
					<div class="sign-in grid">
						<div class="login-top">
							<form>
								<input type="text" class="email" placeholder="Email" required=""/>
								<input type="password" class="password" placeholder="Password" required=""/>	
								<input type="submit" value="SignIn"/>
								<p>Connect with.... </p>
								<div class="social-icons">
									<ul>
										<li><a href="#">Facebook </a></li>
										<li><a href="#">Twitter </a></li>
									</ul>
									<div class="clearfix"> </div>
								</div>	
							</form>
						</div>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list">
									<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span class="glyphicon glyphicon-menu-up"> </span></li>
									<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">... or click here to Sign up now</li>
								</ul>
								<div class="clearfix"> </div>			
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="tab-bottom">
											<h4>Morbi eget ornare quam </h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculiscursus utp massae malesuada, Morbi eget ornare quam tristique placera </p>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="login-top tab-bottom">
											<form>
												<input type="text" class="name active" placeholder="Your Name" required=""/>
												<input type="text" class="email" placeholder="Email" required=""/>
												<input type="password" class="password" placeholder="Password" required=""/>		
												<input type="submit" value="Sign Up"/>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 content-grids">
					<h3 class="title">FEATURES</h3>
					<div class="features grid">
						<div class="grid-info">
							<div class="features-img">
								<h4>$25</h4>
							</div>
							<div class="features-tabs">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Features</a></li>
									<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Description</a></li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="home">Duis eget aliquet nibh. Cras pharetra enim in tortor varius pretium at eget nulla. Mauris nec neque sit amet est imperdiet maximus. Proin suscipit, tortor quis mollis posuere, eros erat tristique turpis, nec facilisis mauris est sit amet risus. Phasellus mollis arcu sapien eget ultrices od.<br>
										Vivamus elementum tempor suscipit. Cras in risus id libero malesuada finibus pulvinar vitae purus. Praesent eget leo enim Cras.
									</div>
									<div role="tabpanel" class="tab-pane" id="profile">Enim eiusmod high life accusamus Anim pariatur cliche reprehenderit, terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod Brunch est sit amet risus. Phasellus mollis arcu sapien eget ultrices od.<br>
										Vivamus elementum tempor suscipit. Cras in risus id libero malesuada finibus pulvinar vitae purus. Praesent eget leo enim Cras.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 content-grids content-right">
					<h3 class="title">WEATHER REPORT</h3>
					<div class="weather grid">
						<div class="weather-info">
							<div class="weather-left">
								<div class="weather-left-text">
									<h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Washington, DC, USA </h4>
									<h5><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Tuesday,25 MAR  </h5>
								</div>
								<ul class="report">
									<li><a href="#">25 °C</a></li>
									<li><a href="#"><span>79</span> °F</a></li>
								</ul>
							</div>
							<div class="weather-right">
								<ul>
									<li>
										<figure class="icons">
											<canvas id="partly-cloudy-day" width="60" height="60"></canvas>
										</figure>
										<h3>25 °C</h3>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="clear-day" width="40" height="40"></canvas>
										</figure>
										<div class="weather-text">
											<h4>WED</h4>
											<h5>27 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="snow" width="40" height="40"></canvas>
										</figure>
										<div class="weather-text">
											<h4>THR</h4>
											<h5>13 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="partly-cloudy-night" width="40" height="40"></canvas>
										</figure>
										<div class="weather-text">
											<h4>FRI</h4>
											<h5>18 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
								<script>
									 var icons = new Skycons({"color": "#ef4f69"}),
										  list  = [
											"partly-cloudy-day"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
								<script>
									 var icons = new Skycons({"color": "#999"}),
										  list  = [
											"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
										  ],
										  i;

									  for(i = list.length; i--; )
										icons.set(list[i], list[i]);
									  icons.play();
								</script>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="main-row">
						<h3 class="title">SEARCH BAR</h3>
						<div class="search grid">
							<div class="grid-info">	
								<form>
									<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
									<input type="submit" value=" ">
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!--//row-three-->
			<!--row-four-->
			<div class="main-row row4">
				<h3 class="title">BUTTON EFFECTS</h3>
				<div class="buttons grid">
					<div class="grid-info">
						<h3 id="progress">Button effects</h3>
						<section class="button-demo">
							<h5>expand-left</h5>
							<button class="ladda-button" data-color="green" data-style="expand-left">Submit</button>
						</section>
						<section class="button-demo">
							<h5>expand-right</h5>
							<button class="ladda-button" data-color="green" data-style="expand-right">Submit</button>
						</section>
						<section class="button-demo">
							<h5>expand-up</h5>
							<button class="ladda-button" data-color="green" data-style="expand-up">Submit</button>
						</section>
						<section class="button-demo">
							<h5>expand-down</h5>
							<button class="ladda-button" data-color="green" data-style="expand-down">Submit</button>
						</section>
						<section class="button-demo">
							<h5>contract</h5>
							<button class="ladda-button" data-color="red" data-style="contract">Submit</button>
						</section>
						<section class="button-demo">
							<h5>contract-overlay</h5>
							<button class="ladda-button" data-color="red" data-style="contract-overlay" style="z-index: 10;">Submit</button>
						</section>
						<section class="button-demo">
							<h5>zoom-in</h5>
							<button class="ladda-button" data-color="red" data-style="zoom-in">Submit</button>
						</section>

						<section class="button-demo">
							<h5>zoom-out</h5>
							<button class="ladda-button" data-color="red" data-style="zoom-out">Submit</button>
						</section>
						<section class="button-demo">
							<h5>slide-left</h5>
							<button class="ladda-button" data-color="blue" data-style="slide-left">Submit</button>
						</section>
						<section class="button-demo">
							<h5>slide-right</h5>
							<button class="ladda-button" data-color="blue" data-style="slide-right">Submit</button>
						</section>
						<section class="button-demo">
							<h5>slide-up</h5>
							<button class="ladda-button" data-color="blue" data-style="slide-up">Submit</button>
						</section>
						<section class="button-demo">
							<h5>slide-down</h5>
							<button class="ladda-button" data-color="blue" data-style="slide-down">Submit</button>
						</section>
						<div class="col-md-4 button-grids">
							<h3 id="progress">Built-in progress bar</h3>
							<section class="progress-demo">
								<h5>expand-right</h5>
								<button class="ladda-button" data-color="purple" data-style="expand-right">Submit</button>
							</section>

							<section class="progress-demo">
								<h5>contract</h5>
								<button class="ladda-button" data-color="purple" data-style="contract">Submit</button>
							</section>
						</div>
						<div class="col-md-8 button-grids buttons-right">
							<h3 id="progress">Button Sizes</h3>
							
							<section class="progress-demo">
								<h5>Extra Large</h5>
								<button class="ladda-button" data-color="mint" data-style="expand-right" data-size="xl">Submit</button>
							</section>
							<section class="progress-demo">
								<h5>Large</h5>
								<button class="ladda-button" data-color="mint" data-style="expand-right" data-size="l">Submit</button>
							</section>
							
							<section class="progress-demo">
								<h5>Small</h5>
								<button class="ladda-button" data-color="mint" data-style="expand-right" data-size="s">Submit</button>
							</section>
							<section class="progress-demo">
								<h5>Extra Small</h5>
								<button class="ladda-button" data-color="mint" data-style="expand-right" data-size="xs">Submit</button>
							</section>
						</div>
						<div class="clearfix"> </div>
						<script src="js/spin.min.js"></script>
						<script src="js/ladda.min.js"></script>
						<script>
							// Bind normal buttons
							Ladda.bind( '.button-demo button', { timeout: 2000 } );

							// Bind progress buttons and simulate loading progress
							Ladda.bind( '.progress-demo button', {
								callback: function( instance ) {
									var progress = 0;
									var interval = setInterval( function() {
										progress = Math.min( progress + Math.random() * 0.1, 1 );
										instance.setProgress( progress );

										if( progress === 1 ) {
											instance.stop();
											clearInterval( interval );
										}
									}, 200 );
								}
							} );
						</script>
					</div>
				</div>
			</div>
			<!--//row-four-->
			<!--row-five-->
			<div class="main-row row5">
				<div class="col-md-4 content-grids">
					<h3 class="title">PROGRESS BARS</h3>
					<div class="data-bars grid">
						<div class="grid-info">
							<div class="bar_group">
								<div class='bar_group__bar thin' label='Friends' show_values='true' tooltip='true' value='350'></div>
								<div class='bar_group__bar thin' label='Requests' show_values='true' tooltip='true' value='222'></div>
								<div class='bar_group__bar thin' label='Messages' show_values='true' tooltip='true' value='475'></div>
								<div class='bar_group__bar thin' label='Blog' show_values='true' tooltip='true' value='286'></div>
							</div>
							<script src="js/bars.js"></script>
						</div>
					</div>
				</div>
				<div class="col-md-4 content-grids">
					<h3 class="title">DRAG AND DROP LIST</h3>
					<div class="sortable-info grid">
						<div id="sortable" class="sortable-grids">
							<div>Clicking on these elements triggers a regular <code>click</code> event you can listen to.</div>
							<div>Try dragging or clicking on this element.</div>
							<div>Note how you can click normally?</div>
							<div>Drags don't trigger click events.</div>
						</div>
						<script>
							dragula([document.getElementById(container)]);
						</script>
						<script src='js/dragula.js'></script>
						<script src='js/example.min.js'></script>
					</div>
				</div>
				<div class="col-md-4 content-grids content-right">
					<h3 class="title">MAP</h3>
					<div class="map grid">
						<div id="container1"></div>
					</div>
					<script src="js/datamaps-all.js"></script>
					<script src="js/map.js"></script>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--//row-five-->
			<!--row-six-->
			<div class="main-row row6">
				<div class="col-md-6 content-grids">
					<h3 class="title">VIDEO PLAYER</h3>
					<div class="video grid">
						<div class="grid-info">
							<div class="video-info">
								<div class="video-img">
									<a class="popup-with-zoom-anim" href="#small-dialog"><span class="glyphicon glyphicon-play"></span></a>
								</div>
								<div class="video-text">
									<h4> Donec sollicitudin magna vitae ultricies suscipit vitae lobortis erat justo vel nisi. </h4>
									<ul>
										<li><span class="glyphicon glyphicon-time"></span> 25 MAR 2016</li>
										<li><span class="glyphicon glyphicon-pencil"></span>  <a href="#">Lorem Ipsum</a></li>
									</ul>
								</div>
								<!-- pop-up-box -->
								<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
								<!--//pop-up-box -->
								<div id="small-dialog" class="mfp-hide">
									<iframe src="https://player.vimeo.com/video/95929658" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>
								<script>
									$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});
																									
									});
								</script>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 content-grids content-right">
					<h3 class="title">MUSIC PLAYER</h3>
					<div class="music-player grid">
						<div class="grid-info">
							<div class="player-bottom">
								<div class="music-left">
									<img src="images/img12.jpg" alt=""/>
								</div>
								<div class="music-right">
									<h4>Morbi eget ornare </h4>
									<div class="rating">
										<span class="starRating">
											<input id="rating5" type="radio" name="rating" value="5">
											<label for="rating5">5</label>
											<input id="rating4" type="radio" name="rating" value="4">
											<label for="rating4">4</label>
											<input id="rating3" type="radio" name="rating" value="3" checked>
											<label for="rating3">3</label>
											<input id="rating2" type="radio" name="rating" value="2">
											<label for="rating2">2</label>
											<input id="rating1" type="radio" name="rating" value="1">
											<label for="rating1">1</label>
										  </span>
									</div>
									<p> Where Are U now With Diplo</p>
									<h5>1:31</h5>
									<!--audio-player-->
									<div class="audio-player">
										<audio id="audio-player"  controls="controls">
										<source src="media/Blue Browne.ogg" type="audio/ogg"></source>
										<source src="media/Blue Browne.mp3" type="audio/mpeg"></source>
									</div>
									<ul class="next-top">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i class="next"> </i></a></li>
									</ul>
									<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
									<!---->
									<script type="text/javascript">
										$(function(){
										  $('#audio-player').mediaelementplayer({
											alwaysShowControls: true,
											features: ['playpause','progress','volume'],
											audioVolume: 'horizontal',
											iPadUseNativeControls: true,
											iPhoneUseNativeControls: true,
											AndroidUseNativeControls: true
										});
									 });
									</script>
									<!--//-->	
									<!--audio-player-->
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="video-text">
								<h4> Donec sollicitudin magna vitae ultricies suscipit vitae lobortis erat justo vel nisi. </h4>
								<ul>
									<li><span class="glyphicon glyphicon-time"></span> 27 MAR 2016</li>
									<li><span class="glyphicon glyphicon-pencil"></span>  <a href="#">Lorem Ipsum</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--//row-six-->
			<!--row-seven-->
			<div class="main-row row7">
				<h3 class="title">SOCIAL MEDIA</h3>
				<div class="social grid">
					<div class="grid-info">
						<div class="col-md-3 top-comment-grid">
							<div class="comments likes">
								<div class="comments-icon">
									<i class="fa fa-facebook"></i>
								</div>
								<div class="comments-info likes-info">
									<h3>950</h3>
									<a href="#">Likes</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments">
								<div class="comments-icon">
									<i class="fa fa-comments"></i>
								</div>
								<div class="comments-info">
									<h3>125</h3>
									<a href="#">Comments</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments tweets">
								<div class="comments-icon">
									<i class="fa fa-twitter"></i>
								</div>
								<div class="comments-info tweets-info">
									<h3>275</h3>
									<a href="#">Tweets</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments views">
								<div class="comments-icon">
									<i class="fa fa-eye"></i>
								</div>
								<div class="comments-info views-info">
									<h3>5571</h3>
									<a href="#">Views</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!--//row-seven-->
			<?php include "inner-footer.php";?>
		</div>
	</div>
	<!--//content -->
	<?php include "page-bottom.php";?>
</body>
</html>