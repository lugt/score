<!DOCTYPE html>
<html>
<head>
<title>校园 - 单科成绩</title>
<?php include "header.php"; ?>
</head>
<body class="">
	<!-- content -->
	<div class="main">
		<div class="container">
			<div class="main-row row3">
				<div class="col-md-2 grid-one">
					<div class="data-bars grid-tansparent" style="padding:2em 3em 1em 3em;align-content: center;text-align: center;">
						<img src="images/avatar1.png" alt="" class="left_upper_photo" style="border-radius: 50%;box-shadow: 2px 2px 40px #33333355; border: solid #fff 2px;"/>
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
				<div class="charts-info grid-tansparent" style="">
				</div>
				<div class="col-md-6 charts-info grid">
					<div class="row">
						<div class="col-md-4 charts-right">
							<div id="container-right" class="margin" role="group"></div>

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
												enabled:true,
												/*useHTML:true,*/
												floating:true,
												text: '55%',
												//verticalAlign:'middle'
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
																/*chart.setTitle({
																	text: e.target.name+ '\t'+ e.target.y + ' %'
																});*/
															}
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
												name: '学科完成度',
												data: [
													{
														name: '已完成',
														y: 55,
														color:'#5cb85c'
													},
													{
														name: '加强复习',    
														y:15,
														color:'#ffcb71',
													},
													{
														name: '未开始',    
														y:30,
														color:'#f3f3f3',
													}
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
						<div class="col-md-8 charts-right" style="border-left-width: 0px;">

								<div id="info-part" class="margin grid-info" role="group" style="padding:1em 2em 1em 2em;font-size: 1.1em;">
								<div class="row top-bottom-3"><em class="glyphicon glyphicon-ok-circle font-big right-space"></em> 第二章：元素化合物</div>
								<div class="row top-bottom-3"><i class="glyphicon glyphicon-retweet font-big right-space"></i> 需要加强：铁的相关反应</div>
								</div>
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
				<div class="col-12">
				<canvas id="mycanv"></canvas>
				<button id="randomizeData">Randomize Data</button>
				<button id="addDataset">Add Dataset</button>
				<button id="removeDataset">Remove Dataset</button>
				<button id="addData">Add Data</button>
				<button id="removeData">Remove Data</button>
				<script src="js/chart-util.js"></script>
				<script src="js/Chart.min.js"></script>
				<script>
					var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
					var config = {
						type: 'line',
						data: {
							labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
							datasets: [{
								label: 'My First dataset',
								borderColor: window.chartColors.red,
								backgroundColor: window.chartColors.red,
								data: [
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor()
								],
							}, {
								label: 'My Second dataset',
								borderColor: window.chartColors.blue,
								backgroundColor: window.chartColors.blue,
								data: [
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor()
								],
							}, {
								label: 'My Third dataset',
								borderColor: window.chartColors.green,
								backgroundColor: window.chartColors.green,
								data: [
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor()
								],
							}, {
								label: 'My Third dataset',
								borderColor: window.chartColors.yellow,
								backgroundColor: window.chartColors.yellow,
								data: [
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor()
								],
							}]
						},
						options: {
							responsive: true,
							title: {
								display: true,
								text: 'Chart.js Line Chart - Stacked Area'
							},
							tooltips: {
								mode: 'index',
							},
							hover: {
								mode: 'index'
							},
							scales: {
								xAxes: [{
									scaleLabel: {
										display: true,
										labelString: 'Month'
									}
								}],
								yAxes: [{
									stacked: true,
									scaleLabel: {
										display: true,
										labelString: 'Value'
									}
								}]
							}
						}
					};

					window.onload = function() {
						var ctx = document.getElementById('mycanv').getContext('2d');
						window.myLine = new Chart(ctx, config);
					};

					document.getElementById('randomizeData').addEventListener('click', function() {
						config.data.datasets.forEach(function(dataset) {
							dataset.data = dataset.data.map(function() {
								return randomScalingFactor();
							});

						});

						window.myLine.update();
					});

					var colorNames = Object.keys(window.chartColors);
					document.getElementById('addDataset').addEventListener('click', function() {
						var colorName = colorNames[config.data.datasets.length % colorNames.length];
						var newColor = window.chartColors[colorName];
						var newDataset = {
							label: 'Dataset ' + config.data.datasets.length,
							borderColor: newColor,
							backgroundColor: newColor,
							data: [],
						};

						for (var index = 0; index < config.data.labels.length; ++index) {
							newDataset.data.push(randomScalingFactor());
						}

						config.data.datasets.push(newDataset);
						window.myLine.update();
					});

					document.getElementById('addData').addEventListener('click', function() {
						if (config.data.datasets.length > 0) {
							var month = MONTHS[config.data.labels.length % MONTHS.length];
							config.data.labels.push(month);

							config.data.datasets.forEach(function(dataset) {
								dataset.data.push(randomScalingFactor());
							});

							window.myLine.update();
						}
					});

					document.getElementById('removeDataset').addEventListener('click', function() {
						config.data.datasets.splice(0, 1);
						window.myLine.update();
					});

					document.getElementById('removeData').addEventListener('click', function() {
						config.data.labels.splice(-1, 1); // remove the label first

						config.data.datasets.forEach(function(dataset) {
							dataset.data.pop();
						});

						window.myLine.update();
					});
				</script>
				</div>
				<div class="clearfix"></div>
			</div>
			<!--//row-three-->
			<?php include "inner-footer.php";?>
		</div>
	</div>
	<!--//content -->
	<?php include "page-bottom.php";?>
</body>
</html>