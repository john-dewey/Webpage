<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="resources\media\logo-jtd-fauxicon.jpg">
    <link rel="stylesheet" href="css\p-contatct.css">
    <link rel="stylesheet" href="css\s-responsive.css">
    <link rel="stylesheet" href="css\f-graphics.css">
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
        <div class="col-12 main-header">
            <h1>Find Me...</h1>
        </div>
    </div>

    <!-- Second Level -->
    <div class="row">
        <!-- Work -->
        <div class="col-6 main-container">

            <!-- Header -->
            <div class="container-header">
                <h2>At Work</h2>
            </div>

            <!-- Work Information -->
            <div class="container-box">

                <button class="work-bttn" onclick="work()">
                    <h3>Student at Furman University<br></h3>
                    <h4>&ensp;&ensp;3300 Poinsett Hwy PMB 27852 <br>&ensp;&ensp;Greenville, SC 29613 USA</h4>
                </button>

                <div class="map">
                    <?php
                    include 'f-map.php';
                    ?>
                </div>
            </div>
        </div>

        <!-- Socials -->
        <div class="col-6 main-container">

            <!-- Header -->
            <div class="container-header">
                <h2>Or Online</h2>
            </div>

            <!-- Social Information -->
            <div class="container-box">
                <div class="grid">
                    <button class="social-bttn" onclick="social1()">
                        <div class="graphic-X"></div>
                    </button>

                    <button class="social-bttn" onclick="social2()">
                        <div class="graphic-mail"></div>
                    </button>

                    <button class="social-bttn" onclick="social3()">
                        <div class="graphic-linkedin"></div>
                    </button>

                    <button class="social-bttn" onclick="social4()">
                        <div class="graphic-github"></div>
                    </button>
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