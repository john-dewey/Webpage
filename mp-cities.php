<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Cities</title>
    <link rel="icon" type="image/x-icon" href="resources\media\logo-jtd-fauxicon.jpg">
    <link rel="stylesheet" href="css\p-cities.css">
    <link rel="stylesheet" href="css\f-graphics.css">
    <link rel="stylesheet" href="css\s-override.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <header>
        <?php
        include 'f-header.php';
        ?>
    </header>

    <div class="main">
        <div class="top">
            <h1>My Cities</h1>
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
        include 'f-footer.php';
        ?>
    </footer>

</body>

</html>