<!DOCTYPE html>
<html lang="en-us">

<head>
    <!-- Title -->
    <title>Contact</title>

    <!-- Imports -->
    <link rel="stylesheet" href="css\f-elements.css">
    <link rel="stylesheet" href="css\f-graphics.css">
    <link rel="stylesheet" href="css\s-responsive.css">
    <link rel="stylesheet" href="css\s-override.css">
    <!-- Class CSS File -->
    <link rel="stylesheet" href="css\p-contatct.css">

    <link rel="icon" type="image/x-icon" href="resources\media\logo-jtd-fauxicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Javascript -->
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
            <div class="container box">

                <button class="work-bttn box" onclick="work()">
                    <h3>Student at Furman University<br></h3>
                    <h4>&ensp;&ensp;3300 Poinsett Hwy PMB 27852 <br>&ensp;&ensp;Greenville, SC 29613 USA</h4>
                </button>

                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.161815772634!2d-82.44226194890304!3d34.92747847844961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885833a55f710e07%3A0x5b1b1259fa3a0f86!2sFurman%20University!5e0!3m2!1sen!2sus!4v1675989647055!5m2!1sen!2sus"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
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
            <div class="container box">
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