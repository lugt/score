<!DOCTYPE html>
<html>
<head>
<title>样例</title>
<?php include "header.php"; ?>
</head>
<body class="pink-yellow">
	<div class="test_cover"></div>
	<!-- content -->
	<div class="main">
		<div class="container">
			<h1 class="bubble">教学近况-化学</h1>
			<div class="clearfix"></div>
			<div class="main-row row4">
				<h3 class="title">近期课程内容</h3>
				<div class="buttons grid">
					<div class="grid-info">
						<h3 id="progress">金属元素</h3>
						<section class="button-demo">
							<button class="ladda-button" data-color="green" data-style="expand-left" onclick="location.href='teacher.php'">查看情况</button>
						</section>
					</div>
				</div>
			</div>
			<script>
				document.addEventListener("WeixinJSBridgeReady",function(){
					WeixinJSBridge.call("showToolbar")
				});
			</script>
			<!--row-four-->
			<div class="main-row row4">
				<h3 class="title">复习内容</h3>
				<div class="buttons grid">
					<div class="grid-info">
						<h3 id="progress">卤族元素</h3>
						<section class="button-demo">
							<button class="ladda-button" data-color="green" data-style="slide-down" onclick="setTimeout(function(){location.href='teacher.php'},1000);">Teacher</button>
							<button class="ladda-button" data-color="green" data-style="slide-down" onclick="setTimeout(function(){location.href='teaching-recent.php'},1000);">Recent</button>
						</section>
					</div>
				</div>
			</div>
			<!--row-four-->
			<div class="main-row row4">
				<h3 class="title">相关指标情况</h3>
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
			<?php include "inner-footer.php";?>
		</div>
	</div>
	<!--//content -->
	<?php include "page-bottom.php";?>
</body>
</html>