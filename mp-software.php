<!DOCTYPE html>
<html>

<head>
    <title>Software</title>
    <link rel="icon" type="image/x-icon" href="resources\media\logo-jtd-fauxicon.jpg">
    <link rel="stylesheet" href="css\p-software.css">
    <link rel="stylesheet" href="css\s-responsive.css">
    <link rel="stylesheet" href="css\s-override.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <?php
        include 'f-header.php';
        ?>
    </header>

    <!-- Top Level -->
    <div class="row">
        <div class="col-12 page-header">
            <h1>My Software Projects</h1>
        </div>
    </div>

    <!-- Project List -->
    <div class="row">
        <div class="col-12 container">
            <!-- Translator -->
            <div>
                <?php include 'p-s-translator.php'; ?>
            </div>
            <!-- Deep Drug -->
            <div>
                <?php include 'p-s-deepdrug.php'; ?>
            </div>
            <!-- Dreams and Nightmares -->
            <div>
                <?php include 'p-s-dreamsandnightmares.php'; ?>
            </div>
            <!-- Image Processor -->
            <div>
                <?php include 'p-s-imageprocessor.php'; ?>
            </div>
            <!-- FuForce -->
            <div>
                <?php include 'p-s-fuforce.php'; ?>
            </div>
            <!-- Mancala -->
            <div>
                <?php include 'p-s-mancala.php'; ?>
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