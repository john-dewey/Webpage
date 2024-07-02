<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
    <link rel="stylesheet" href="css\pages\contact.css">
    <link rel="stylesheet" href="css\system\graphics.css">
    <link rel="stylesheet" href="css\system\override.css">
    <link rel="stylesheet" href="css\system\text.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="resources\javascript\redirect.js"></script>
</head>


<body>
    <header>
            <?php
            include 'layoutHeader.php';
            ?>
    </header>

    <!-- Main -->
    <div class="main">
        <div class="main-header">
            <web-header1>Find Me...</web-header1>
        </div>
        <div class="main-body">

            <!-- Left -->
            <div class="body-left">

                <div class="body-header">
                    <web-header2>At Work</web-header2>
                </div>

                <div class="main-container">

                    <button class="work-bttn" onclick="work()">
                            <web-header3>Student at Furman University<br></web-header3>
                            <web-header4>&ensp;&ensp;3300 Poinsett Hwy PMB 27852 <br>&ensp;&ensp;Greenville, SC 29613 USA</web-header4>
                    </button>

                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.161815772634!2d-82.44226194890304!3d34.92747847844961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885833a55f710e07%3A0x5b1b1259fa3a0f86!2sFurman%20University!5e0!3m2!1sen!2sus!4v1675989647055!5m2!1sen!2sus"
                            width="325" height="325"
                            style=" border-radius: 25px; border-style:solid; border-color: gray;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        
                    </div>

                </div>

            </div>

            <!-- Right -->
            <div class="body-right">

                <div class="body-header">
                    <web-header2>Or Online</web-header2>
                </div>
                <div class="main-container">
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

    </div>

    <footer>
	<?php
		include 'layoutFooter.php';
		?>
	</footer>

</body>

</html>