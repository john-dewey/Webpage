<!DOCTYPE html>
<html lang="en-us">

<head>
	<title>Homepage</title>
	<link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
	<link rel="stylesheet" href="css\system\loader.css">
	<link rel="stylesheet" href="css\pages\index.css">
	<link rel="stylesheet" href="css\system\graphics.css">
	<link rel="stylesheet" href="css\system\override.css">
	<link rel="stylesheet" href="css\system\text.css">
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

	<script src="resources\javascript\loader.js"></script>

</head>



<body onload="timeoutFunction()">

	<div id="loader"></div>

	<header>
			<?php
			include 'layoutHeader.php';
			?>
	</header>

	<div id="myDiv" class="animate-bottom">

		<div class="main">
			<div class="main-left">

				<!-- Information -->
				<div class="left-header">
					<web-header1>Welcome to my Page Test</web-header1>
				</div>


				<div class="left-info">
					<div class="info-header">
						<web-header2>What I'm Currently Doing</web-header2>
					</div>
					<div class="info-body">
						<?php
						include('textNewsPost.html');
						?>
					</div>
				</div>

				<!-- Directory -->
			</div>
			<div class="main-right">

				<!-- Causes -->
				<div class="right-causes">
					<div class="causes-header">
						<web-header2>Endeavors Important to Me</web-header2>
					</div>
					<div class="causes-container">

						<!-- Cause 1 -->
						<div class="causes-entry">

							<button class="cause-bttn" onclick="cause1()">
								<img src = "resources\index\CFA.jpg" style = "height: 100px; width: 100px; border-radius: 25px;"></img>
							</button>


							<div class="entry-content">
								<div class="content-title">
									<web-header4>Car Free America</web-header4>
								</div>
								<div class="content-body">
									<?php
									include('textCause1.html');
									?>
								</div>
							</div>
						</div>

						<!-- Cause 2 -->
						<div class="causes-entry">

							<button class="cause-bttn" onclick="cause2()" target="_blank">
								<img src = "resources\index\SBD.png" style = "height: 100px; width: 100px; border-radius: 25px;"></img>
							</button>

							<div class="entry-content">
								<div class="content-title">
									<web-header4>Segregation by Design</web-header4>
								</div>
								<div class="content-body">
									<?php
									include('textCause2.html');
									?>
								</div>

							</div>
						</div>

						<!-- Cause 3 -->
						<div class="causes-entry">

							<button class="cause-bttn" onclick="cause3()">
								<img src = "resources\index\JDRF.jpg" style = "height: 100px; width: 100px; border-radius: 25px;"></img>
							</button>

							<div class="entry-content">
								<div class="content-title">
									<web-header4>Juvenile Diabetes Research Foundation</web-header4>
								</div>
								<div class="content-body">
									<?php
									include('textCause3.html');
									?>
								</div>
							</div>
						</div>

						<!-- Cause 4 -->
						<div class="causes-entry">

							<button class="cause-bttn" onclick="cause4()">
								<img src = "resources\index\NCTE.png" style = "height: 100px; width: 100px; border-radius: 25px;"></img>
							</button>
							<div class="entry-content">
								<div class="content-title">
									<web-header4> National Center for Transgender Equality </web-header4>
								</div>
								<div class="content-body">
									<?php
									include('textCause4.html');
									?>
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
			include 'layoutFooter.php';
			?>
		</footer>
</body>

</html>