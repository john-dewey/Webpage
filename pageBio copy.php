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

    <div class="bio-header">
        <web-header1>Who Am I?</web-header1>
    </div>

    <!-- Main -->
    <div class = "main">
        <div class="bio-top">

            <div class="profile">
                <div class="graphic-profile">
                </div>

                <div class="profile-pronouns">
                    <pronouns>
                        Cisgender Male<br>
                        He | Him | His
                    </pronouns>
                </div>
            </div>

            <div class="biography-container">
                <div class="biography">
                <?php
                    include('textBiography.html');
                ?>
                </div>
            </div>
    
        </div>

        <div class="bio-bottom">
            <div class="main-header">
                <web-header1>Resumes</web-header1>
            </div>

            <div class="resume-container">
                    <?php
                        include('slidesResume.php');
                    ?>
            </div>
        </div>
    </div>

    <footer>
	<?php
		include 'layoutFooter.php';
		?>
	</footer>
</body>
</html>

