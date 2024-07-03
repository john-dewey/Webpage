<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Websites</title>
    <link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
    <link rel="stylesheet" href="css\software.css">
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

    <div class="project-message">
        <web-header1>My Web Projects</web-header1>
    </div>
    <div class="project-container">
            <div>
                <?php include 'webWebpage.php'; ?>
            </div>
    </div>
    
    <footer>
        
	<?php
		include 'layoutFooter.php';
		?>
	</footer>

</body>
</html>