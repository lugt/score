<!DOCTYPE html>
<html>
<head>
<title>样例</title>
<?php include "header.php"; ?>
</head>
<body class="blue-grad">
	<div class="test_cover"></div>
	<!-- content -->
	<div class="main">
		<div class="container">
			<h1 class="left-bottom-bar corner-bar bar-blue">学习进度</h1>
			<div class="clearfix"></div>
			<!--row-two-->
			<div class="main-row row2">
				<div class="col-md-8 charts-left">
					<h3 class="title">近期情况</h3>
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
						<h3 class="title">倒计时</h3>
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
									days: '日'
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
							</form>
						</div>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list">
									<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span class="glyphicon glyphicon-menu-up"> </span></li>
									<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"> ... 注册</li>
								</ul>
								<div class="clearfix"> </div>			
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="tab-bottom">
											<h4>忘记了登录密码？ </h4>
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
			<?php include "inner-footer.php";?>
		</div>
	</div>
	<!--//content -->
	<?php include "page-bottom.php";?>
</body>
</html>