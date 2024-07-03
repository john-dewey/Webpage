<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Cities</title>
    <link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
    <link rel="stylesheet" href="css\cities.css">
    <link rel="stylesheet" href="css\graphics.css">
    <link rel="stylesheet" href="css\override.css">
    <link rel="stylesheet" href="css\text.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <header>
            <?php
            include 'layoutHeader.php';
            ?>
    </header>

    <div class="main">
        <div class="top">
            <web-header1>My Cities</web-header1>
        </div>

        <div class="projects">

            <div>
                <?php include 'citySharpton.php'; ?>
            </div>

            <div>
                <?php include 'cityDunhall.php'; ?>
            </div>

            <div>
                <?php include 'cityAthaea.php'; ?>
            </div>

            <div>
                <?php include 'cityDiamanti.php'; ?>
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