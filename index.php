<!DOCTYPE html>
<html lang="en-us">

<head>
	<!-- Title -->
	<title>Homepage</title>

	<!-- Description and Keywords (Keep <155 characters) -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<!-- Imports -->
	<link rel="stylesheet" href="css\f-elements.css">
	<link rel="stylesheet" href="css\s-responsive.css">
	<link rel="stylesheet" href="css\s-override.css">
	<!-- Class CSS File -->
	<link rel="stylesheet" href="css\p-index.css">

	<link rel="icon" type="image/x-icon" href="resources\media\logo-jtd-fauxicon.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Javascript -->
	<script src="javascript\redirect.js"></script>
	<script src="javascript\loader.js"></script>

</head>

<body>
	<header>
		<?php
		include 'f-header.php';
		?>
	</header>

	<div class="row p-i-main">
		<div class="col-7 p-i-container-greeting">
			<!-- Header -->
			<div class="p-i-header-greeting">
				<h1>Welcome to my Page</h1>
			</div>

			<!-- Time Display -->
			<div class="p-i-container-time">
				<h3>
					<?php
					include ('f-time.php');
					?>
				</h3>
			</div>

			<!-- News Post -->
			<div class="p-i-container-news box">
				<div class="p-i-header-news">
					<h2>What I'm Currently Doing</h2>
				</div>
				<div class="p-i-body-news">
					<?php
					include ('textNewsPost.html');
					?>
				</div>
			</div>
		</div>

		<div class="col-5 p-i-container-causes">
			<!-- Header -->
			<div class="p-i-header-entry">
				<h2>Endeavors Important to Me</h2>
			</div>

			<!-- Cause 1 -->
			<div class="p-i-container-entry">
				<div class="p-i-contatiner-button">
					<button class="p-i-cause-button" onclick="cause1()">
						<img src="resources\media\logo-CFA.jpg"></img>
					</button>
				</div>

				<div class="p-i-container-description">
					<div class="p-i-header-entry">
						<h4>Car Free America</h4>
					</div>
					<div class="p-i-body-entry">
						<causes-text>
							<?php
							include ('textCause1.html');
							?>
						</causes-text>
					</div>
				</div>
			</div>

			<!-- Cause 2 -->
			<div class="p-i-container-entry">
				<div class="p-i-contatiner-button">
					<button class="p-i-cause-button" onclick="cause2()">
						<img src="resources\media\logo-SBD.png"></img>
					</button>
				</div>

				<div class="p-i-container-description">
					<div class="p-i-header-entry">
						<h4>Segregation by Design</h4>
					</div>
					<div class="p-i-body-entry">
						<causes-text>
							<?php
							include ('textCause2.html');
							?>
						</causes-text>
					</div>
				</div>
			</div>

			<!-- Cause 3 -->
			<div class="p-i-container-entry">
				<div class="p-i-contatiner-button">
					<button class="p-i-cause-button" onclick="cause3()">
						<img src="resources\media\logo-JDRF.jpg"></img>
					</button>
				</div>

				<div class="p-i-container-description">
					<div class="p-i-header-entry">
						<h4>Juvenile Diabetes Research Foundation</h4>
					</div>
					<div class="p-i-body-entry">
						<causes-text>
							<?php
							include ('textCause3.html');
							?>
						</causes-text>
					</div>
				</div>
			</div>

			<!-- Cause 4 -->
			<div class="p-i-container-entry">
				<div class="p-i-contatiner-button">
					<button class="p-i-cause-button" onclick="cause4()">
						<img src="resources\media\logo-NCTE.png"></img>
					</button>
				</div>

				<div class="p-i-container-description">
					<div class="p-i-header-entry">
						<h4>National Center for Transgender Equality</h4>
					</div>
					<div class="p-i-body-entry">
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