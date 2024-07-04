<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="resources\logos\fauxicon.jpg">
    <link rel="stylesheet" href="css\p-contact.css">
    <link rel="stylesheet" href="css\f-graphics.css">
    <link rel="stylesheet" href="css\s-override.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="javascript\redirect.js"></script>
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
            <h1>Find Me...</h1>
        </div>
        <div class="main-body">

            <!-- Left -->
            <div class="body-left">

                <div class="body-header">
                    <h2>At Work</h2>
                </div>

                <div class="main-container">

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

            <!-- Right -->
            <div class="body-right">

                <div class="body-header">
                    <h2>Or Online</h2>
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