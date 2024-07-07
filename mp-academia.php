<!DOCTYPE html>
<html>

<head>
    <title>Academia Projects</title>
    <link rel="icon" type="image/x-icon" href="resources\media\logo-jtd-fauxicon.jpg">
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

    <!-- Top Level -->
    <div class="row">
        <div class="col-12 page-header">
            <h1>My Academic Projects</h1>
        </div>
    </div>

    <!-- Project List -->
    <div class="row">
        <div class="col-12 container">
            <!-- Translator -->
            <div>
                <?php include 'p-a-translator.php'; ?>
            </div>
            <!-- Discrepancies -->
            <div>
                <?php include 'p-a-discrepancies.php'; ?>
            </div>
            <!-- LBGT -->
            <div>
                <?php include 'p-a-lgbt.php'; ?>
            </div>
            <!-- X Gender -->
            <div>
                <?php include 'p-a-xgender.php'; ?>
            </div>
            <!-- Urban -->
            <div>
                <?php include 'p-a-urban.php'; ?>
            </div>
            <!-- Buddhism -->
            <div>
                <?php include 'p-a-buddhism.php'; ?>
            </div>
            <!-- Video Games -->
            <div>
                <?php include 'p-a-game.php'; ?>
            </div>
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