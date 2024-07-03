<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Cities</title>
    <link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
    <link rel="stylesheet" href="css\p-cities.css">
    <link rel="stylesheet" href="css\f-graphics.css">
    <link rel="stylesheet" href="css\s-override.css">
    <link rel="stylesheet" href="css\s-text.css">
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
                <?php include 'p-c-sharpton.php'; ?>
            </div>

            <div>
                <?php include 'p-c-dunhall.php'; ?>
            </div>

            <div>
                <?php include 'p-c-athaea.php'; ?>
            </div>

            <div>
                <?php include 'p-c-diamanti.php'; ?>
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