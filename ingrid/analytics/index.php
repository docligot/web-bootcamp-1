<!DOCTYPE HTML>
<html>
<head>
	<title>CirroLytix Analytics Demo</title>
	<link rel="stylesheet" href="resources/css/all.css"/>
	<link rel="stylesheet" href="resources/app_css.css"/>
	<link rel="stylesheet" href="resources/w3.css"/>	
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
</head>

<body class="roboto" onresize="toggleClose('navBar');">

	<header class="w3-top">
		<div class="w3-highway-red w3-xlarge w3-bar">
			<div class="w3-bar-item w3-highway-red w3-button w3-hide-large" onclick="toggle('navBar');"><i class="fa fa-bars"></i></div>
			<div class="w3-bar-item"></b>CirroLytix Alpha</div>
		</div>
	</header>
	
	<div class="spacer"></div>	
	
	<nav class="quattrocento">
		<div class="w3-sidebar ambient w3-light-grey w3-col l2 w3-bar-block w3-hide-medium w3-hide-small">
			<? include('menu.php'); ?>
		</div>

		<div id="navBar" class="w3-sidebar ambient w3-light-grey w3-animate-left w3-bar-block w3-hide w3-large">
			<? include('menu.php'); ?>
		</div>
	</nav>

	<div class="w3-row">
		<div class="w3-col l2 w3-hide-medium w3-hide-small">&nbsp;</div>
		<div class="w3-col l10 w3-light-grey">
			<section id="section1" class="w3-padding">
				<div class="w3-xlarge">Indicators</div>	
				<p>This shows KPIs on HUD to highlight the main figures being monitored by a dashboard.</p>
				<div class="w3-row w3-dark-grey">
					<div class="indicator w3-quarter">
						<div class="w3-bar w3-padding w3-light-grey w3-hover-grey">
							<div class="w3-bar-item">Users</div>
							<div class="w3-bar-item w3-right" id="indicator1">1,000</div>
						</div>
					</div>

					<div class="indicator w3-quarter">
						<div class="w3-bar w3-row w3-padding w3-light-grey w3-hover-grey">
							<div class="w3-bar-item">Samples</div>
							<div class="w3-bar-item w3-right" id="indicator2" >1,000</div>
						</div>
					</div>

					<div class="indicator w3-quarter">
						<div class="w3-bar w3-padding w3-light-grey w3-hover-grey">
							<div class="w3-bar-item">Items</div>
							<div class="w3-bar-item w3-right" id="indicator3" >1,000</div>
						</div>
					</div>

					<div class="indicator w3-quarter">
						<div class="w3-bar w3-padding w3-light-grey w3-hover-grey">
							<div class="w3-bar-item">Cash</div>
							<div class="w3-bar-item w3-right" id="indicator4" >1,000</div>
						</div>
					</div>
					
				</div>
				<br/>
				<button class="w3-button w3-grey" onclick="reloadIndicators();">Reload</button>	
				<hr/>
			</section>

			<section id="section2" class="w3-padding">
				<div class="w3-xlarge">Progress</div>
				<p>KPIs can also be reflected as progress meters to monitor performance vs. a target or goal.</p>
				<p><div class="w3-large">Users</div>
				<div class="w3-grey">
					<div id="progress1" class="w3-dark-grey w3-hover-black w3-center" style="width:25%">25%</div>
				</div>
				</p>
				
				<p><div class="w3-large">Samples</div>
				<div class="w3-grey">
					<div id="progress2" class="w3-dark-grey w3-hover-black w3-center" style="width:50%">50%</div>
				</div>
				</p>
				
				<p><div class="w3-large">Items</div>
				<div class="w3-grey">
					<div id="progress3" class="w3-dark-grey w3-hover-black w3-center" style="width:85%">85%</div>
				</div>
				</p>
								
				<p><div class="w3-large">Cash</div>
				<div class="w3-grey">
					<div id="progress4" class="w3-dark-grey w3-hover-black w3-center" style="width:5%">5%</div>
				</div>
				</p>
				<br/>
				<button class="w3-button w3-grey" onclick="reloadProgress();">Reload</button>
				<hr/>
			</section>

			<section id="section3" class="w3-padding">
				<div class="w3-xlarge" >Chart</div>
				<p>Standard bar, line, scatterplot graphs can be displayed powered by data from a database.</p>
				<br/><? include ('chart/chart_sample.html'); ?>
				<hr/>
			</section>			

			<section id="section4" class="w3-padding">
				<div class="w3-xlarge" >Customer Journey Flow</div>
				<p>A sankey or flow diagram shows sequences of events and common paths from event data.</p>
				<br/><? include ('sankey/index.html'); ?>
				<hr/>
			</section>	

			<section id="section5" class="w3-padding">
				<div class="w3-xlarge" >Activity Network</div>
				<p>A network diagram shows inter-relationships between entities, items, and concepts and shows clustering of ideas.</p>
				<br/><? include ('network/network2.html'); ?>
				<hr/>
			</section>	

			<section id="section6" class="w3-padding">
				<div class="w3-xlarge" >Maps</div>
				<p>Locate places based on longitude and latitude values.</p>
				<br/><? include ('maps/index.html'); ?>
				<hr/>
			</section>	

			<section id="section7" class="w3-padding">
				<div class="w3-xlarge" >Text Analysis</div>
				<p>Inspect word relationships.</p>
				<br/><? include ('wordcloud/index.html'); ?>
				<hr/>
			</section>	

			<section id="about" class="w3-padding">
				<div class="w3-xlarge" >About</div>
				<p>This is a demonstration portal to illustrate various analytics visualizations and web-based dashboards.</p>
				<p>CirroLytix enables researchers, brands, and organizations harness data without unnecessary complexity. Through the use of digital tools developed by CirroLytix, clients are able to navigate data and generate actionable insights.</p>
				<hr/>
			</section>			

			<footer class="w3-padding w3-small w3-highway-red">
				&copy; 2019 CirroLytix Research Services
			</footer>
		</div>	
	</div>
	
	<script src="resources/app_js.js"></script> 

</body>
</html>