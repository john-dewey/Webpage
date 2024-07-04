<!DOCTYPE html>
<html>

<head>
    <title>Software</title>
    <link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
    <link rel="stylesheet" href="css\p-software.css">
    <link rel="stylesheet" href="css\s-override.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <?php
        include 'layoutHeader.php';
        ?>
    </header>

    <div class="project-message">
        <h1>My Software Projects</h1>
    </div>
    <div class="project-container">
        <div>
            <?php include 'p-s-translator.php'; ?>
        </div>
        <div>
            <?php include 'p-s-deepdrug.php'; ?>
        </div>
        <div>
            <?php include 'p-s-dreamsandnightmares.php'; ?>
        </div>
        <div>
            <?php include 'p-s-imageprocessor.php'; ?>
        </div>
        <div>
            <?php include 'p-s-fuforce.php'; ?>
        </div>
        <div>
            <?php include 'p-s-mancala.php'; ?>
        </div>

    </div>

    <footer>
        <?php
        include 'layoutFooter.php';
        ?>
    </footer>
</body>

</html>