<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Portfolios</title>
    <link rel="icon" type="image/x-icon" href="resources\media\logo-jtd-fauxicon.jpg">
    <link rel="stylesheet" href="css\p-portfolio.css">
    <link rel="stylesheet" href="css\s-responsive.css">
    <link rel="stylesheet" href="css\s-override.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="javascript\redirect.js"></script>
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
            <h1> All My Work, All in One Place. </h1>
        </div>
    </div>

    <!-- Second Level -->
    <div class="row">
        <!-- Software -->
        <div class="col-3 container">
            <button class="bttn" onclick="software()">
                <h2>Software</h2>
            </button>
        </div>
        <!-- Websites-->
        <div class="col-3 container">
            <button class="bttn" onclick="website()">
                <h2>Websites</h2>
            </button>
        </div>
        <!-- Academia -->
        <div class="col-3 container">
            <button class="bttn" onclick="academia()">
                <h2>Academia</h2>
            </button>
        </div>
        <!-- Cities -->
        <div class="col-3 container">
            <button class="bttn" onclick="cities()">
                <h2>Cities</h2>
            </button>
        </div>
    </div>


    <footer>
        <?php
        include 'f-footer.php';
        ?>
    </footer>


</body>

</html>