<!DOCTYPE html>
<html lang="en-us">

<head>
	<title>Homepage</title>
	<link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
	<link rel="stylesheet" href="css\f-loader.css">
	<link rel="stylesheet" href="css\p-index.css">
	<link rel="stylesheet" href="css\s-override.css">
	<link rel="stylesheet" href="css\s-text.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script>
		function cause1() {
			window.open('https://carfreeamerica.net/', '_blank');
		}

		function cause2() {
			window.open('https://www.segregationbydesign.com/', '_blank');
		}

		function cause3() {
			window.open('https://www.jdrf.org/', '_blank');
		}

		function cause4() {
			window.open('https://transequality.org/', '_blank');
		}
	</script>

	<script src="javascript\loader.js"></script>
	<script src="javascript\date.js"></script>

</head>



<body onload="timeoutFunction()">

	<div id="loader"></div>

	<header>
			<?php
			include 'f-header.php';
			?>
	</header>

	<div id="myDiv" class="animate-bottom">

		<div class="main">
			<div class="main-left">

				
				<div class="left-header">
					<h1>Welcome to my Page</h1>
				</div>

				<div class="left-time">
					<h3>
					<?php
						include('f-time.php');
					?>
					</h3>
				</div>

				<!-- News Post -->
				<div class="left-info">
					<div class="info-header">
						<h2>What I'm Currently Doing</h2>
					</div>
					<div class="info-body">
						<?php
						include('textNewsPost.html');
						?>
					</div>
				</div>
			</div>

			<!-- Causes -->
			<div class="main-right">
				<div class="right-causes">
					<div class="causes-header">
						<h2>Endeavors Important to Me</h2>
					</div>
					<div class="causes-container">

						<!-- Cause 1 -->
						<div class="causes-entry">

							<button class="cause-bttn" onclick="cause1()">
								<img src = "resources\media\logo-CFA.jpg" style = "height: 100px; width: 100px; border-radius: 25px;"></img>
							</button>


							<div class="entry-content">
								<div class="content-title">
									<h4>Car Free America</h4>
								</div>
								<div class="content-body">
									<causes-text>
									<?php
									include('textCause1.html');
									?>
									</causes-text>
								</div>
							</div>
						</div>

						<!-- Cause 2 -->
						<div class="causes-entry">

							<button class="cause-bttn" onclick="cause2()" target="_blank">
								<img src = "resources\media\logo-SBD.png" style = "height: 100px; width: 100px; border-radius: 25px;"></img>
							</button>

							<div class="entry-content">
								<div class="content-title">
									<h4>Segregation by Design</h4>
								</div>
								<div class="content-body">
								<causes-text>
									<?php
									include('textCause2.html');
									?>
									</causes-text>
								</div>

							</div>
						</div>

						<!-- Cause 3 -->
						<div class="causes-entry">

							<button class="cause-bttn" onclick="cause3()">
								<img src = "resources\media\logo-JDRF.jpg" style = "height: 100px; width: 100px; border-radius: 25px;"></img>
							</button>

							<div class="entry-content">
								<div class="content-title">
									<h4>Juvenile Diabetes Research Foundation</h4>
								</div>
								<div class="content-body">
								<causes-text>
									<?php
									include('textCause3.html');
									?>
									</causes-text>
								</div>
							</div>
						</div>

						<!-- Cause 4 -->
						<div class="causes-entry">

							<button class="cause-bttn" onclick="cause4()">
								<img src = "resources\media\logo-NCTE.png" style = "height: 100px; width: 100px; border-radius: 25px;"></img>
							</button>
							<div class="entry-content">
								<div class="content-title">
									<h4> National Center for Transgender Equality </h4>
								</div>
								<div class="content-body">
								<causes-text>
									<?php
									include('textCause4.html');
									?>
									</causes-text>
								</div>
							</div>
						</div>
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