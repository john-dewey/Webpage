<!DOCTYPE html>
<html lang="en-us">

<head>
	<title>Homepage</title>
	<link rel="icon" type="image/x-icon" href="resources\media\logo-jtd-fauxicon.jpg">
	<link rel="stylesheet" href="css\f-loader.css">
	<link rel="stylesheet" href="css\f-redirect.css">
	<link rel="stylesheet" href="css\p-index.css">
	<link rel="stylesheet" href="css\s-override.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="javascript\redirect.js"></script>
	<script src="javascript\loader.js"></script>

</head>

<body onload="timeoutFunction()">

	

	<header>
		<?php
		include 'f-header.php';
		?>
	</header>

	<div id="myDiv" class="animate-bottom">
		<!-- Top Level -->

	</div>

	<div class="row">
		<div class="col-7 information">
			<!-- Header -->
			<div class="information-header">
				<h1>Welcome to my Page</h1>
			</div>

			<!-- Time Display -->
			<div class="information-time">
				<h3>
					<?php
					include ('f-time.php');
					?>
				</h3>
			</div>

			<!-- News Post -->
			<div class="information-news">
				<div class="news-header">
					<h2>What I'm Currently Doing</h2>
				</div>
				<div class="news-body">
					<?php
					include ('textNewsPost.html');
					?>
				</div>
			</div>
		</div>

		<div class="col-5 causes">
			<!-- Header -->
			<div class="causes-header">
				<h2>Endeavors Important to Me</h2>
			</div>

			<!-- Cause 1 -->
			<div class="causes-entry">
				<div class="entry-left">
					<button class="cause-button" onclick="cause1()">
						<img src="resources\media\logo-CFA.jpg"></img>
					</button>
				</div>

				<div class="entry-right">
					<div class="right-title">
						<h4>Car Free America</h4>
					</div>
					<div class="right-body">
						<causes-text>
							<?php
							include ('textCause1.html');
							?>
						</causes-text>
					</div>
				</div>
			</div>

			<!-- Cause 2 -->
			<div class="causes-entry">
				<div class="entry-left">
					<button class="cause-button" onclick="cause2()">
						<img src="resources\media\logo-SBD.png"></img>
					</button>
				</div>

				<div class="entry-right">
					<div class="right-title">
						<h4>Segregation by Design</h4>
					</div>
					<div class="right-body">
						<causes-text>
							<?php
							include ('textCause2.html');
							?>
						</causes-text>
					</div>
				</div>
			</div>

			<!-- Cause 3 -->
			<div class="causes-entry">
				<div class="entry-left">
					<button class="cause-button" onclick="cause3()">
						<img src="resources\media\logo-JDRF.jpg"></img>
					</button>
				</div>

				<div class="entry-right">
					<div class="right-title">
						<h4>Juvenile Diabetes Research Foundation</h4>
					</div>
					<div class="right-body">
						<causes-text>
							<?php
							include ('textCause3.html');
							?>
						</causes-text>
					</div>
				</div>
			</div>

			<!-- Cause 4 -->
			<div class="causes-entry">
				<div class="entry-left">
					<button class="cause-button" onclick="cause4()">
						<img src="resources\media\logo-NCTE.png"></img>
					</button>
				</div>

				<div class="entry-right">
					<div class="right-title">
						<h4>National Center for Transgender Equality</h4>
					</div>
					<div class="right-body">
						<causes-text>
							<?php
							include ('textCause4.html');
							?>
						</causes-text>
					</div>
				</div>
			</div>









		</div>
	</div>

	<footer>
		<?php
		include 'f-footer.php';
		?>
	</footer>
</body>

</html>