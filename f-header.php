<!DOCTYPE html>
<html>


<head>
	<title>Header</title>
	<link rel="stylesheet" href="css\f-header.css">
	<link rel="stylesheet" href="css\s-text.css">

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
		<div class="name">
			<web-header4>J . T . D e w e y</web-header4>
		</div>


		<div class="col-12 nav-container">
			<button class="head-bttn" onclick="home()">
				<web-header4>Home</web-header4>
			</button>

			<button class="head-bttn" onclick="bio()">
				<web-header4>About</web-header4>
			</button>

			<button class="head-bttn" onclick="contact()">
				<web-header4>Contact</web-header4>
			</button>

			<button class="head-bttn" onclick="portfolio()">
				<web-header4>Portfolios</web-header4>
			</button>
		</div>

	</div>


</body>


</html>