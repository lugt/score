<!DOCTYPE html>
<html>
<head>
<title>登陆 - 校园成绩</title>
<?php include "header.php"; ?>
</head>
<body class="pink-yellow">
	<!-- content -->
	<div class="main">
		<div class="container">
			<h1 class="left-bottom-bar corner-bar bar-grass">教育智能-Beta</h1>
			<div class="main-row row3">
				<div class="col-md-4 grid-one">
					<h3 class="title">教师／学校入口</h3>
					<div class="sign-in grid">
						<div class="login-top">
							<form action="teacher.php">
								<input type="text" class="email" placeholder="手机号/职工卡号" required=""/>
								<input type="password" class="password" placeholder="密码" required=""/>	
								<input type="submit" value="登入"/>
								<p>了解如何填写？ </p>
							</form>
						</div>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list">
									<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span class="glyphicon glyphicon-menu-up"> </span></li>
									<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"> 新教师注册</li>
								</ul>
								<div class="clearfix"> </div>			
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="tab-bottom">
											<h4>无法登陆？ </h4>
											<p> 请联系学校管理IT部门。<br>或者联系小二：<a href="https://wx.qq.com" style="color:#FFDF71">戳这里进入</a> </p>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="login-top tab-bottom">
											<form>
												<input type="text" class="name active" placeholder="教职工ID" required="required" name="staffid"/>
												<input name="phone" type="text" class="email" placeholder="手机号" required=""/>
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
				<div class="myclear"> </div>
				<div class="col-md-4 grid-one">	
					<h3 class="title">学生入口</h3>
					<div class="sign-in grid">
						<div class="login-top">
							<form action="teacher.php">
								<input type="text" class="email" placeholder="手机号/学籍号/阳光ID" required=""/>
								<input type="password" class="password" placeholder="密码" required=""/>	
								<input type="submit" value="登入"/>
								<p>了解如何填写？ </p>
							</form>
						</div>
						<div class="sap_tabs">
							<div id="horizontalTab2" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list">
									<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span class="glyphicon glyphicon-menu-up"> </span></li>
									<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"> 首次使用</li>
								</ul>
								<div class="clearfix"> </div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="tab-bottom">
											<h4>无法登陆？ </h4>
											<p> 请联系班主任协助恢复密码。<br>或者联系阳光小二：<a href="https://wx.qq.com" style="color:#FFDF71">戳这里进入</a> </p>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="login-top tab-bottom">
											<form>
												<input type="text" class="name active" placeholder="学生ID" required="required" name="staffid"/>
												<input name="phone" type="text" class="email" placeholder="手机号" required=""/>
												<input type="password" class="password" placeholder="密码" required=""/>		
												<input type="submit" value="确认信息"/>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="myclear"> </div>
				<div class="col-md-4 grid-one">	
					<h3 class="title">家长入口</h3>
					<div class="sign-in grid">
						<div class="login-top">
							<form action="teacher.php">
								<input type="text" class="email" placeholder="手机号/阳光家长ID" required=""/>
								<input type="password" class="password" placeholder="密码" required=""/>	
								<input type="submit" value="登入"/>
								<p>您不了解如何填写？ </p>
							</form>
						</div>
						<div class="sap_tabs">
							<div id="horizontalTab3" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list">
									<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span class="glyphicon glyphicon-menu-up"> </span></li>
									<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"> 新教师注册</li>
								</ul>
								<div class="clearfix"> </div>			
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="tab-bottom">
											<h4>无法登陆？ </h4>
											<p> 请联系学校管理IT部门。<br>或者联系小二：<a href="https://wx.qq.com" style="color:#FFDF71">戳这里进入</a> </p>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="login-top tab-bottom">
											<form>
												<input type="text" class="name active" placeholder="教职工ID" required="required" name="staffid"/>
												<input name="phone" type="text" class="email" placeholder="手机号" required=""/>
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
				<div class="clearfix"></div>
			</div>
			<div class="main-row">
				<!--news feed-->
				<div class="col-md-4 content-grids">
					<h3 class="title">你的关注</h3>
					<div class="profile-info grid">
						<div class="profile-img">
						</div>
						<div class="profile-bottom">
							<ul>
								<li>
									<img src="images/img1.jpg" alt=""/>
								</li>
								<li>
									<a href="#">1 hour ago</a>
								</li>
								<li>
									<a href="#"><span class="glyphicon glyphicon-heart"></span></a>
								</li>
								<li>
									<a href="#" class="active"><span class="glyphicon glyphicon-comment"></span></a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="chat-grids">
							<div class="profile-text">
								<span class="quote"><img src="images/icon1.png" alt=""/></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculiscursus utp massae malesuada, Morbi eget ornare quam tristique placerat</p>
								<div class="clearfix"></div>
							</div>
							<div class="profile-bottom">
								<ul>
									<li>
										<img src="images/img2.jpg" alt=""/>
									</li>
									<li>
										<a href="#">5 hours ago</a>
									</li>
									<li>
										<a href="#"><span class="glyphicon glyphicon-heart"></span></a>
									</li>
									<li>
										<a href="#"><span class="glyphicon glyphicon-comment"></span></a>
									</li>
								</ul>
								<div class="clearfix"></div>
							</div>
						</div>					
					</div>
				</div>
				<!--//news feed-->
				<!--menu-list-->
				<div class="col-md-4 content-grids">
					<h3 class="title">消息</h3>
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
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										<h4>Date List new order</h4> <h6>Lorem ipsum</h6> <span class="glyphicon glyphicon-menu-down"></span>
									</a>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body">
										<p> Laoreet dolore tincidunt ut </p>
										<p> Consectetuer adipiscing elit</p>
										<p> Deleniti atque voluptatum </p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFive">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										<h4>List of friend requests</h4> <h6>Priority Today</h6> <span class="glyphicon glyphicon-menu-down"></span>
									</a>
								</div>
								<div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
									<div class="panel-body">
										<div class="request-left">
											<img src="images/img4.jpg" alt=""/>
										</div>
										<div class="request-right">
											<h5>Hernandez </h5>
											<h6>Web designer</h6>
											<ul>
												<li><a href="#"><span class="glyphicon glyphicon-heart-empty"></span> 360</a></li> 
												<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> 112</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--//menu-list-->
				<!--calendar-->
				<div class="col-md-4 content-grids content-right">
					<h3 class="title">我的日历</h3>
					<div class="custom-calendar-wrap">
						<div id="custom-inner" class="custom-inner">
							<div class="custom-header clearfix">
								<nav>
									<span id="custom-prev" class="custom-prev"></span>
									<span id="custom-next" class="custom-next"></span>
									<span id="custom-current" class="custom-current" title="Go to current date"></span>
								</nav>
								<h2 id="custom-month" class="custom-month">MARCH</h2>
								<h3 id="custom-year" class="custom-year">2016</h3>
							</div>
							<div id="calendar" class="fc-calendar-container"></div>
						</div>
					</div>
					<script type="text/javascript" src="js/jquery.calendario.js"></script>
					<script type="text/javascript" src="js/data.js"></script>
					<script type="text/javascript"> 
						$(function() {
							function updateMonthYear() {
								$( '#custom-month' ).html( $( '#calendar' ).calendario('getMonthName') );
								$( '#custom-year' ).html( $( '#calendar' ).calendario('getYear'));
							}
							
							$(document).on('finish.calendar.calendario', function(e){
								$( '#custom-month' ).html( $( '#calendar' ).calendario('getMonthName') );
								$( '#custom-year' ).html( $( '#calendar' ).calendario('getYear'));
								$( '#custom-next' ).on( 'click', function() {
									$( '#calendar' ).calendario('gotoNextMonth', updateMonthYear);
								} );
								$( '#custom-prev' ).on( 'click', function() {
									$( '#calendar' ).calendario('gotoPreviousMonth', updateMonthYear);
								} );
								$( '#custom-current' ).on( 'click', function() {
									$( '#calendar' ).calendario('gotoNow', updateMonthYear);
								} );
								$( '#custom-current' ).on( 'click', function() {
									$( '#calendar' ).calendario('gotoNow', updateMonthYear);
								} );
							});
							
							$('#calendar').on('shown.calendar.calendario', function(){
								$('div.fc-row > div').on('onDayClick.calendario', function(e, dateprop) {
									console.log(dateprop);
									if(dateprop.data) {
										showEvents(dateprop.data.html, dateprop);
									}
								});
							});
						
							var transEndEventNames = {
								'WebkitTransition' : 'webkitTransitionEnd',
								'MozTransition' : 'transitionend',
								'OTransition' : 'oTransitionEnd',
								'msTransition' : 'MSTransitionEnd',
								'transition' : 'transitionend'
							},
							transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
							$wrapper = $( '#custom-inner' );

							function showEvents( contentEl, dateprop ) {
								hideEvents();
								var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateprop.monthname + ' '
								+ dateprop.day + ', ' + dateprop.year + '</h4></div>' ),
								$close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents);
								$events.append( contentEl.join('') , $close ).insertAfter( $wrapper );
								setTimeout( function() {
									$events.css( 'top', '0%' );
								}, 25);
							}
							
							function hideEvents() {
								var $events = $( '#custom-content-reveal' );
								if( $events.length > 0 ) {   
									$events.css( 'top', '100%' );
									Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();
								}
							}
							
							$( '#calendar' ).calendario({
								caldata : events,
								displayWeekAbbr : true,
								events: ['click', 'focus']
							});
						
						});
					</script>
				</div>
				<!--//calendar-->
				<div class="col-md-8 gallery-slider">
					<section class="slider grid">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="gallery-bg gallery-text">
										<h3>领先的教育智能</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculiscursus utp massae malesuada, Morbi eget ornare quam tristique placera </p>
									</div>
								</li>
								<li>
									<div class="gallery-bg1 gallery-text">
										<h3>人工智能前沿</h3>
										<p>用创新的思维和管理方式领跑在新教育之路上<br>紧密配合教育全面改革，领先改革步伐<br>深度学习赋能未来教育 </p>
									</div>
								</li>
								<li>
									<div class="gallery-bg2 gallery-text">
										<h3>赋能教育升级</h3>
										<p>走上一流教育之路</p>
									</div>
								</li>
							</ul>
						</div>
					</section>
					<!--FlexSlider-->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(document).load(function(){
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
			<?php include "inner-footer.php";?>
		</div>
	</div>
	<!--//content -->
	<?php include "page-bottom.php";?>
</body>
</html>