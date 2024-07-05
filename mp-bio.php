<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>About</title>
    <link rel="icon" type="image/x-icon" href="resources\media\logo-jtd-fauxicon.jpg">
    <link rel="stylesheet" href="css\p-bio.css">
    <link rel="stylesheet" href="css\s-override.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
    <header>
        <?php
        include 'f-header.php';
        ?>
    </header>


    <div class="header">
        <h1>About Me</h1>
    </div>

    <div class="top">
        <div class="top-box">
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
        <div class="top-picture">
            <img src="resources\media\image-me.jpg"
                style="border-radius: 25px; width: 200px;border: 3px solid #000000;"></img>

        </div>
        <div class="top-box">
            <h3>Johnathan Dewey</h3> <br>
            <h4>ジョン・デューウィー</h4> <br>
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
    <div class="bottom-container">
        <div class="bottom">
            
            <div style="text-align: center;">
                <h4>Biography</h4>
            </div>

            <?php
            include 'textBiography.html';
            ?>
        </div>
    </div>

    <footer>
        <?php
        include 'f-footer.php';
        ?>
    </footer>
</body>

</html>