<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>About</title>
    <link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
    <link rel="stylesheet" href="css\pages\bio.css">
    <link rel="stylesheet" href="css\system\graphics.css">
    <link rel="stylesheet" href="css\system\override.css">
    <link rel="stylesheet" href="css\system\text.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
    <header>
        <?php
        include 'layoutHeader.php';
        ?>
    </header>


    <div class="header">
        <web-header1>About Me</web-header1>
    </div>

    <div class="top">
        <div class="top-box">
            <web-header3>Interests</web-header3> <br>
            <br><web-body>Video Games</web-body>
            <br><web-body>Music</web-body>
            <br><web-body>Language</web-body>
            <br><web-body>Travel</web-body>
            <br><web-body>Thrifting</web-body>
            <br><web-body>Kirby</web-body>
            <br><web-body>Interests</web-body>
            <br><web-body>Collecting Figurines</web-body>
            <br><web-body>Museums</web-body>
        </div>
        <div class="top-picture">
            <img src="resources\bio\me.jpg" style="border-radius: 25px; width: 200px;border: 3px solid #000000;"></img>

        </div>
        <div class="top-box">
            <web-header3>Johnathan Dewey</web-header3> <br>
            <web-header4>ジョン・デューウィー</web-header4> <br>
            <web-header4>He/Him/His</web-header4>

            <!-- Resume Input -->

            <a href="resources\bio\Resume.pdf" download>
                <div class="download">
                    <div class=file>
                        <img src="resources\graphics\research-paper.png" alt="Resume">
                    </div>
                    <div class="filename">
                        <web-header4>Resume.pdf</web-header4>
                    </div>
                </div>
            </a>


        </div>
    </div>

    <div class="bottom">
        <div style="text-align: center;">
            <web-header4>Biography</web-header4>
        </div>

        <?php
        include 'textBiography.html';
        ?>

    </div>

    <footer>
        <?php
        include 'layoutFooter.php';
        ?>
    </footer>
</body>

</html>