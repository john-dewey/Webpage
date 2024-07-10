<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>About</title>
    <link rel="icon" type="image/x-icon" href="resources\media\logo-jtd-fauxicon.jpg">
    <link rel="stylesheet" href="css\f-download.css">
    <link rel="stylesheet" href="css\f-elements.css">
    <link rel="stylesheet" href="css\p-bio.css">
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
        <div class="col-12 header">
            <h1>About Me</h1>
        </div>
    </div>

    <!-- Second Level -->
    <div class="row">
        <div class="col-5 container">
            <!-- Interest Input -->
            <div class="top-interests box">
                <h3>Interests</h3>
                <br>Video Games
                <br>Music
                <br>Language
                <br>Travel
                <br>Thrifting
                <br>Kirby
                <br>Interests
                <br>Collecting Figurines
                <br>Museums
            </div>
        </div>

        <div class="col-2 container">
            <div class="top-picture">
                <img src="resources\media\image-me.jpg"
                    style="border-radius: 5%; width: 200px;border: 3px solid #000000;">
                </img>
            </div>
        </div>

        <div class="col-5 container">
            <!-- Name Input -->
            <div class="top-name box">
                <h3>Johnathan Dewey</h3>
                <h4>ジョン・デューウィー</h4>
                <h4>He/Him/His</h4>


                <!-- Resume Input -->
                <a href="resources\resume.pdf" download>
                    <div class="download">
                        <div class=file>
                            <img src="resources\media\graphic-paper.png" alt="Resume">
                        </div>
                        <div class="filename">
                            <h4>Resume.pdf</h4>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- Third Level -->
    <div class="row">
        <div class="col-12 container">
            <div class="bottom box">

                <div style="text-align: center;">
                    <br>
                    <h4>Biography</h4>
                </div>

                <?php
                include 'textBiography.html';
                ?>
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