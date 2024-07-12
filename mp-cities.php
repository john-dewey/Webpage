<!DOCTYPE html>
<html lang="en-us">

<head>
    <!-- Title -->
    <title>Cities</title>

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
            <h1>My <i>Cities: Skylines</i> Projects</h1>
        </div>
    </div>

    <!-- Project List -->
    <div class="row">
        <div class="col-12 container">
            <!-- Sharpton -->
            <div>
                <?php include 'p-c-sharpton.php'; ?>
            </div>
            <!-- Dunhall -->
            <div>
                <?php include 'p-c-dunhall.php'; ?>
            </div>
            <!-- Athaea -->
            <div>
                <?php include 'p-c-athaea.php'; ?>
            </div>
            <!-- Diamanti -->
            <div>
                <?php include 'p-c-diamanti.php'; ?>
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