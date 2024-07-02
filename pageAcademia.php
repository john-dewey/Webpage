<!DOCTYPE html>
<html>
<head>
    <title>Software</title>
    <link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
    <link rel="stylesheet" href="css\pages\academiaProject.css">
    <link rel="stylesheet" href="css\system\override.css">
    <link rel="stylesheet" href="css\system\text.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
            <?php
            include 'layoutHeader.php';
            ?>
    </header>

    <div class="project-message">
        <web-header1>My Academic Projects</web-header1>
    </div>
    <div class="project-container">
            <div>
                <?php include 'academiaTranslator.php'; ?>
            </div>
            <div>
                <?php include 'academiaDiscrepancies.php'; ?>
            </div>
            <div>
                <?php include 'academiaLGBT.php'; ?>
            </div>
            <div>
                <?php include 'academiaXGender.php'; ?>
            </div>
            <div>
                <?php include 'academiaUrban.php'; ?>
            </div>
            <div>
                <?php include 'academiaBuddhism.php'; ?>
            </div>
            <div>
                <?php include 'academiaGame.php'; ?>
            </div>
    </div>

    <footer>
	<?php
		include 'layoutFooter.php';
		?>
	</footer>
</body>
</html>