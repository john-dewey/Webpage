<!DOCTYPE html>
<html>


<head>
	<title>Header</title>
	<link rel="stylesheet" href="css\f-header.css">
	<link rel="stylesheet" href="css\s-responsive.css">
	<link rel="stylesheet" href="css\s-override.css">

	<script>
		function home() {
			window.location.href = "index.php";
		}

		function bio() {
			window.location.href = "mp-bio.php";
		}

		function contact() {
			window.location.href = "mp-contact.php";
		}

		function portfolio() {
			window.location.href = "mp-portfolio.php";
		}
	</script>
</head>

<body>
	<div class="row">
		<div class="name-container">
			<h4>J . D E W E Y</h4>
		</div>


		<div class="col-12 redirect-container">
			<button class="header-button" onclick="home()">
				<h4>Home</h4>
			</button>

			<button class="header-button" onclick="bio()">
				<h4>About</h4>
			</button>

			<button class="header-button" onclick="contact()">
				<h4>Contact</h4>
			</button>

			<button class="header-button" onclick="portfolio()">
				<h4>Portfolios</h4>
			</button>
		</div>

	</div>


</body>


</html>