<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Websites</title>
    <link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
    <link rel="stylesheet" href="css\p-software.css">
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
        <h1>My Web Projects</h1>
    </div>
    <div class="project-container">
        <div>
            <?php include 'p-w-webpage.php'; ?>
        </div>
        <div>
            <?php include 'p-w-genealogy.php'; ?>
        </div>
    </div>

    <footer>

        <?php
        include 'f-footer.php';
        ?>
    </footer>

</body>

</html>