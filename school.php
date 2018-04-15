<!DOCTYPE html>
<html>
<head>
<title>学校入口 - 样例</title>
<?php include "header.php"; ?>
</head>
<body class="blue-grad">
	<div class="test_cover"></div>
	<!-- content -->
	<div class="main">
		<div class="container">
			<style>
			.back_btn{
				/*color:rgba(0,0,0,0);*/
				/*border : 0px;*/
				background:#00000000;
				height:0.99em;
				width:0.3em;
			}
			
			.hide {
			  display: none;
			}

			.button_sma {
			  position: relative;
			  display: flex;
			  flex-direction: column;
			  align-items: center;
			  justify-content: center;
			  width: 12.5rem;
			  magrin: 0;
			  padding: 1.5rem 3.125rem;
			  background-color: #3498db;
			  border: none;
			  border-radius: 0.3125rem;
			  box-shadow: 0 12px 24px 0 rgba(0, 0, 0, 0.2);
			  color: white;
			  font-weight: 300;
			  text-transform: uppercase;
			  overflow: hidden;
			}
				
			.button_sma:before {
			  position: absolute;
			  content: '';
			  bottom: 0;
			  left: 0;
			  width: 0%;
			  height: 100%;
			  background-color: #54d98c;
			}
			.button_sma span {
			  position: absolute;
			  line-height: 0;
			}
			.button_sma span i {
			  transform-origin: center center;
			}
			.button_sma span:nth-of-type(1) {
			  top: 50%;
			  transform: translateY(-50%);
			}
			.button_sma span:nth-of-type(2) {
			  top: 100%;
			  transform: translateY(0%);
			  font-size: 24px;
			}
			.button_sma span:nth-of-type(3) {
			  display: none;
			}

			.active {
			  background-color: #2ecc71;
			}
			.active:before {
			  width: 100%;
			  transition: width 3s linear;
			}
			.active span:nth-of-type(1) {
			  top: -100%;
			  transform: translateY(-50%);
			}
			.active span:nth-of-type(2) {
			  top: 50%;
			  transform: translateY(-50%);
			}
			.active span:nth-of-type(2) i {
			  animation: loading 500ms linear infinite;
			}
			.active span:nth-of-type(3) {
			  display: none;
			}

			.finished {
			  background-color: #54d98c;
			}
			.finished .submit {
			  display: none;
			}
			.finished .loading {
			  display: none;
			}
			.finished .check {
			  display: block !important;
			  font-size: 24px;
			  animation: scale 0.5s linear;
			}
			.finished .check i {
			  transform-origin: center center;
			}

			@keyframes loading {
			  100% {
				transform: rotate(360deg);
			  }
			}
			@keyframes scale {
			  0% {
				transform: scale(10);
			  }
			  50% {
				transform: scale(0.2);
			  }
			  70% {
				transform: scale(1.2);
			  }
			  90% {
				transform: scale(0.7);
			  }
			  100% {
				transform: scale(1);
			  }
			}
			</style>
			<button class="button back_btn goback finished" data-color="green" data-style="slide-down" onclick="/*setTimeout(function(){location.href='student.php'},1000);"></button>
			<h1 class="bubble">教学数据大屏</h1>
			<div class="clearfix"></div>
			<!--row-two-->
			<div class="main-row row2">
				<div class="col-md-8 charts-left">
					<h3 class="title">近期情况</h3>
					<div id="graph" class="grid"> </div>
					<div class="count main-row">
						<h3 class="title">下次课程开始</h3>
						<div class="grid">
							<ul id="example">
								<li><span class="hours">00</span><p class="hours_text">小时</p></li>
								<li class="seperator">:</li>
								<li><span class="minutes">00</span><p class="minutes_text">分钟</p></li>
								<li class="seperator">:</li>
								<li><span class="seconds">00</span><p class="seconds_text">秒钟</p></li>
							</ul>
							<div class="clearfix"> </div>
							<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
							<script type="text/javascript">
								$('#example').countdown({
									date: '12/24/2020 18:59:59',
									offset: -8,
									day: '天',
									days: '日',
									hour:'小时',
									hours:'小时',
									minute:'分',
									minutes:'分',
									second:'秒',
									seconds:'秒'
								}, function () {
									alert('Done!');
								});
							</script>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 charts-right">
					<h3 class="title">学期任务</h3>
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
						  //doughnutWidget.render(data());
						}
						function data() {
							var data = {
							concepts: {
							  val: 50,
							  color: '#57B4F2',
							  click: function(e) {
								console.log('hi');
							  }
							},
							completed: {
							  val: 50,
							  color: '#6DED5C'
							},
							delayed: {
							  val: 50,
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
			<div class="main-row row4">
				<h3 class="title">教学效果</h3>
				<div class="charts-info grid">
					<div id="expolar" class="margin grid-info" role="group"></div>
				</div>
			</div>
			<script>
				document.addEventListener("WeixinJSBridgeReady",function(){
					WeixinJSBridge.call("showToolbar")
				});
			</script>
			<!--row-four-->
			<div class="main-row row4">
				<h3 class="title">教学效果</h3>
				<div class="buttons grid">
					<div class="grid-info">
						<h3 id="progress">近期课程内容</h3>
						
					</div>
				</div>
			</div>
			<!--//row-four-->
			<script>
			$(function(){
				Highcharts.chart('graph', {

					chart: {polar: true	},
					title: {text: 'Highcharts Polar Chart'},
					pane: {	startAngle: 0,	endAngle: 360 },
					xAxis: {tickInterval: 45,
						min: 0, max: 360, labels: {
							formatter: function () {
								return this.value + '°';
							}  }
					},

					yAxis: {	min: 0 	},

					plotOptions: {
						series: {
							pointStart: 0,
							pointInterval: 45
						},
						column: {
							pointPadding: 0,
							groupPadding: 0
						}
					},

					series: [{	type: 'column',		name: 'Column',
							  data: [8, 7, 6, 5, 4, 3, 2, 1],
						pointPlacement: 'between'
					}, {	type: 'line',	name: 'Line',
						data: [1, 2, 3, 4, 5, 6, 7, 8]
					}, {	type: 'area',	name: 'Area',
						data: [1, 8, 2, 7, 3, 6, 4, 5]
					}]
				});
				Highcharts.chart('expolar', {
				chart: {		polar : true,    			type: 'line'	},

				title: {
					text: 'Highcharts Polar Chart'
				},

				pane: {
					startAngle: 0,
					endAngle: 360
				},

				xAxis: {
					tickInterval: 45,
					min: 0,
					max: 360,
					labels: {
						formatter: function () {
							return this.value + '°';
						}
					}
				},

				yAxis: {	min: 0	},

				plotOptions: {		
					series: {			pointStart: 0,
						pointInterval: 45
					},
					column: {
						pointPadding: 0,
						groupPadding: 0
					}
				},

				series: [{
					type: 'column',
					name: 'Column',
					data: [8, 7, 6, 5, 4, 3, 2, 1],
					pointPlacement: 'between'
				}, {
					type: 'line',
					name: 'Line',
					data: [1, 2, 3, 4, 5, 6, 7, 8]
				}, {
					type: 'area',
					name: 'Area',
					data: [1, 8, 2, 7, 3, 6, 4, 5]
				}]
				});
			});
			</script>
			
			<?php include "inner-footer.php";?>
		</div>
	</div>
	<!--//content -->
	<?php include "page-bottom.php";?>
</body>
</html>
