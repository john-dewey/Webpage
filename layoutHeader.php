<!DOCTYPE html>
<html>


<head>
	<title>Header</title>
	<link rel="stylesheet" href="css\f-header.css">
	<link rel="stylesheet" href="css\s-text.css">

	<script>
		function home(){
			window.location.href = "index.php";
		}

		function bio(){
			window.location.href = "pageBio.php";
		}

		function contact(){
			window.location.href = "pageContact.php";
		}

		function portfolio(){
			window.location.href = "pagePortfolio.php";
		}
	</script>
</head>

<body>
		<div class="name">
			<web-header4>J . T . D e w e y</web-header4>
		</div>
		<div class="bar-conatiner">
			<div class="nav-container">
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