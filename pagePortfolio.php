<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Portfolios</title>
    <link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
    <link rel="stylesheet" href="css\p-portfolio.css">
    <link rel="stylesheet" href="css\s-override.css">
    <link rel="stylesheet" href="css\s-text.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        function software() {
            window.location.href = "pageSoftware.php";
        }

        function website() {
            window.location.href = "pageWebsites.php";
        }

        function academia() {
            window.location.href = "pageAcademia.php";
        }

        function cities() {
            window.location.href = "pageCities.php";
        }
    </script>
</head>


<body>
    <header>
        <?php
        include 'layoutHeader.php';
        ?>
    </header>

    <div class="main">
        <div class="main-header">
            <web-header1> All My Work, All in One Place. </web-header1>
        </div>

        <div class="main-container">
            <button class = "bttn" onclick="software()">
                <web-header2>Software</web-header2>
            </button>

            <button class = "bttn" onclick="website()">
                <web-header2>Websites</web-header2>
            </button>

            <button class = "bttn" onclick="academia()">
                <web-header2>Academia</web-header2>
            </button>

            <button class = "bttn" onclick="cities()">
                <web-header2>Cities</web-header2>
            </button>

        </div>
    </div>

    <footer>
	<?php
		include 'layoutFooter.php';
		?>
	</footer>


</body>

</html>