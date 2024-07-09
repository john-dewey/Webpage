<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Websites</title>
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
            <h1>My Web Projects</h1>
        </div>
    </div>

    <!-- Project List -->
    <div class="row">
        <div class="col-12 container">
            <!-- Johanthan Dewey Webpage -->
            <div>
                <?php include 'p-w-webpage.php'; ?>
            </div>
            <!-- Dewey Family Genealogy -->
            <div>
                <?php include 'p-w-genealogy.php'; ?>
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