<!DOCTYPE html>
<html>

<head>
    <title>Academia Projects</title>
    <link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
    <link rel="stylesheet" href="css\p-project.css">
    <link rel="stylesheet" href="css\s-override.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <?php
        include 'f-header.php';
        ?>
    </header>

    <div class="project-message">
        <h1>My Academic Projects</h1>
    </div>
    <div class="project-container">
        <div>
            <?php include 'p-a-translator.php'; ?>
        </div>
        <div>
            <?php include 'p-a-discrepancies.php'; ?>
        </div>
        <div>
            <?php include 'p-a-lgbt.php'; ?>
        </div>
        <div>
            <?php include 'p-a-xgender.php'; ?>
        </div>
        <div>
            <?php include 'p-a-urban.php'; ?>
        </div>
        <div>
            <?php include 'p-a-buddhism.php'; ?>
        </div>
        <div>
            <?php include 'p-a-game.php'; ?>
        </div>
    </div>

    <footer>
        <?php
        include 'f-footer.php';
        ?>
    </footer>
</body>

</html>