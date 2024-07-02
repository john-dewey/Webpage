<!DOCTYPE html>
<html>
<head>
    <title>Software</title>
    <link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
    <link rel="stylesheet" href="css\pages\software.css">
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
        <web-header1>My Software Projects</web-header1>
    </div>
    <div class="project-container">
            <div>
                <?php include 'softwareTranslator.php'; ?>
            </div>
            <div>
                <?php include 'softwareIP.php'; ?>
            </div>
            <div>
                <?php include 'softwareDeepDrug.php'; ?>
            </div>
            <div>
                <?php include 'softwareFuForce.php'; ?>
            </div>
            <div>
                <?php include 'softwareMancala.php'; ?>
            </div>

    </div>

    <footer>
	<?php
		include 'layoutFooter.php';
		?>
	</footer>
</body>
</html>