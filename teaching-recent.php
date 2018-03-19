<!DOCTYPE html>
<html>
<head>
<title>教师版 - 近期学情</title>
<?php include "header.php"; ?>	
</head>
<body class="blue-grad">
	<div class="test_cover"></div>
	<!-- content -->
	<div class="main">
		<div class="container">
			<h1 class="bubble">教学进度</h1>
			<div class="clearfix"></div>
			<!--row-two-->
			<div class="main-row row2">
				<div class="col-md-8 charts-left">
					<h3 class="title">近期情况</h3>
					<div id="graph" class="grid" style="max-height:800px;height:400px"> </div>
					<script>
						$(function () {							
						Highcharts.chart('graph', {
							chart: {
								plotBackgroundColor: null,
								plotBorderWidth: 0,
								plotShadow: false,
								scale:1.0							
							},
							title: {
								text: '<span style="color:red">需要讲解</span> ： 动态平衡规律',
								align: 'center',
								verticalAlign:'center'
							},
							tooltip: {
								pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
							},
							plotOptions: {
								pie: {
									dataLabels: {
										enabled: true,
										distance: -2,
										style: {
											fontWeight: 'bold',
											color: 'white'
										}
									},
									//startAngle: -90,
									//endAngle: 90,
									center: ['50%', '75%']
								}
							},
							series: [{
								type: 'pie',
								name: '知识讲解难点-掌握盲区',
								innerSize: '50%',
								data: [
									['完全掌握', 29.9],
									['平衡中的守恒关系', 13.29],
									{
										name: '多种平衡之间的差异',
										y: 100-29.9-13.29,
										dataLabels: {
											enabled: true
										}
									}
								]
							}]
						});
						});
					</script>
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
						<div id="container-speed" class="margin grid-info" role="group"></div>
						<div id="container-rpm" class="margin grid-info" role="group"></div>
					</div>
					<script>
		var gaugeOptions = {

			chart: {
				type: 'solidgauge'
			},

			title: null,

			pane: {
				center: ['50%', '85%'],
				size: '140%',
				startAngle: -90,
				endAngle: 90,
				background: {
					backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
					innerRadius: '60%',
					outerRadius: '100%',
					shape: 'arc'
				}
			},

			tooltip: {
				enabled: false
			},

			// the value axis
			yAxis: {
				stops: [
					[0.1, '#55BF3B'], // green
					[0.5, '#DDDF0D'], // yellow
					[0.9, '#DF5353'] // red
				],
				lineWidth: 0,
				minorTickInterval: null,
				tickAmount: 2,
				title: {
					y: -70
				},
				labels: {
					y: 16
				}
			},

			plotOptions: {
				solidgauge: {
					dataLabels: {
						y: 5,
						borderWidth: 0,
						useHTML: true
					}
				}
			}
		};

		// The speed gauge
		var chartSpeed = Highcharts.chart('container-speed', Highcharts.merge(gaugeOptions, {
			yAxis: {
				min: 0,
				max: 200,
				title: {
					text: '接受程度'
				}
			},

			credits: {
				enabled: false
			},

			series: [{
				name: 'Speed',
				data: [80],
				dataLabels: {
					format: '<div style="text-align:center"><span style="font-size:25px;color:' +
						((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
						   '<span style="font-size:12px;color:silver">km/h</span></div>'
				},
				tooltip: {
					valueSuffix: ' km/h'
				}
			}]

		}));

		// The RPM gauge
		var chartRpm = Highcharts.chart('container-rpm', Highcharts.merge(gaugeOptions, {
			yAxis: {
				min: 0,
				max: 5,
				title: {
					text: 'RPM'
				}
			},

			series: [{
				name: 'RPM',
				data: [1],
				dataLabels: {
					format: '<div style="text-align:center"><span style="font-size:25px;color:' +
						((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
						   '<span style="font-size:12px;color:silver">* 1000 / min</span></div>'
				},
				tooltip: {
					valueSuffix: ' revolutions/min'
				}
			}]

		}));

		// Bring life to the dials
		setInterval(function () {
			// Speed
			var point,
				newVal,
				inc;

			if (chartSpeed) {
				point = chartSpeed.series[0].points[0];
				inc = Math.round((Math.random() - 0.5) * 100);
				newVal = point.y + inc;

				if (newVal < 0 || newVal > 200) {
					newVal = point.y - inc;
				}

				point.update(newVal);
			}

			// RPM
			if (chartRpm) {
				point = chartRpm.series[0].points[0];
				inc = Math.random() - 0.5;
				newVal = point.y + inc;

				if (newVal < 0 || newVal > 5) {
					newVal = point.y - inc;
				}

				point.update(newVal);
			}
		}, 2000);
					</script>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--//row-two-->
			<div class="main-row row2">
				<div class="col-md-8 charts-left">
					<h3 class="title">小测情况</h3>
					<div id="weekquiz" class="grid"> </div>
					
				</div>
			</div>
			<div class="main-row row2">
				<div class="col-md-8 charts-left">
					<h3 class="title">专题掌握情况</h3>
					<div id="endterm" class="grid"> </div>
					<script>
						Highcharts.chart('endterm', {

							chart: {
								type: 'columnrange',
								inverted: true
							},

							title: {
								text: '专题掌握情况'
							},

							subtitle: {
								text: '学生测试数据 第5周'
							},

							xAxis: {
								categories: ['计算基础', '数学概念基础', '根据问题建方程', '相关数据的理解', '一元一次方程', '二元一次方程',
									'方程的组合', '换元法解方程组', '系数法解方程组', '解法的比较', '解法运用规律', '方程加减规律']
							},

							yAxis: {
								title: {
									text: '能力点'
								}
							},

							tooltip: {
								valueSuffix: '/100'
							},

							plotOptions: {
								columnrange: {
									dataLabels: {
										enabled: true,
										format: '{y}%'
									}
								}
							},

							legend: {
								enabled: false
							},

							series: [{
								name: 'Temperatures',
								data: [
									[85, 93],
									[73, 95.5],
									[-10.2, 11.8],
									[-1.7, 12.2],
									[-0.6, 23.1],
									[3.7, 25.4],
									[6.0, 26.2],
									[6.7, 21.4],
									[3.5, 19.5],
									[-1.3, 16.0],
									[-8.7, 9.4],
									[-9.0, 8.6]
								]
							}]

						});
					</script>
				</div>
			</div>
			<script>
				document.addEventListener("WeixinJSBridgeReady",function(){
					WeixinJSBridge.call("showToolbar")
				});
			</script>
			<!--//row-four-->
			<?php include "inner-footer.php";?>
		</div>
	</div>
	<!--//content -->
	<?php include "page-bottom.php";?>
</body>
</html>