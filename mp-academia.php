<!DOCTYPE html>
<html>

<head>
    <!-- Title -->
    <title>Academia Projects</title>

    <!-- Imports -->
	<link rel="stylesheet" href="css\f-elements.css">
    <link rel="stylesheet" href="css\f-graphics.css">
	<link rel="stylesheet" href="css\s-responsive.css">
	<link rel="stylesheet" href="css\s-override.css">

	<!-- Class CSS File -->
    <link rel="stylesheet" href="css\p-software.css">

    <!-- Meta Information -->
    <link rel="icon" type="image/x-icon" href="resources\media\logo-jtd-fauxicon.jpg">
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