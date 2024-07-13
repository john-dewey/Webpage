<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Socials</title>
    <link rel="stylesheet" href="css\f-elements.css">
    <!-- Class CSS File -->
    <link rel="stylesheet" href="css\f-endeavors.css">
    <!-- Fa Fa Library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- Meta Information-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        function causes(x) {
            switch (x) {
                case 1:
                    window.open('https://carfreeamerica.net/', '_blank');
                    break;
                case 2:
                    window.open('https://www.segregationbydesign.com/', '_blank');
                    break;
                case 3:
                    window.open('https://www.jdrf.org/', '_blank');
                    break;
                case 4:
                    window.open('https://github.com/john-dewey', '_blank');
                    break;
                default:
                    window.open('https://transequality.org/', '_blank');
            }
        }
    </script>
</head>

<body>
    <div class="f-en-container">
        <!-- Entry 1-->
        <div class="f-en-entry-header">
            <h4>Car Free America</h4>
        </div>
        <!-- Entry Content-->
        <div class="f-en-entry">
            <!-- Button Insert-->
            <div class="f-en-button-container">
                <button class="f-en-icon" onclick="causes(1)">
                    <img src="resources\media\logo-CFA.jpg"></img>
                </button>
            </div>

            <!-- Description Insert-->
            <div class="f-en-text-container">
                <causes-text>
                    <?php
                    include ('textCause1.html');
                    ?>
                </causes-text>
            </div>
        </div>

        <!-- Entry 2-->
        <div class="f-en-entry-header">
            <h4>Segregation by Design</h4>
        </div>
        <!-- Entry Content-->
        <div class="f-en-entry">
            <!-- Button Insert-->
            <div class="f-en-button-container">
                <button class="f-en-icon" onclick="causes(1)">
                    <img src="resources\media\logo-SBD.png"></img>
                </button>
            </div>

            <!-- Description Insert-->
            <div class="f-en-text-container">
                <causes-text>
                    <?php
                    include ('textCause2.html');
                    ?>
                </causes-text>
            </div>
        </div>

        <!-- Entry 3-->
        <div class="f-en-entry-header">
            <h4>Juvenile Diabetes Research Foundation</h4>
        </div>
        <!-- Entry Content-->
        <div class="f-en-entry">
            <!-- Button Insert-->
            <div class="f-en-button-container">
                <button class="f-en-icon" onclick="causes(1)">
                    <img src="resources\media\logo-JDRF.jpg"></img>
                </button>
            </div>

            <!-- Description Insert-->
            <div class="f-en-text-container">
                <causes-text>
                    <?php
                    include ('textCause3.html');
                    ?>
                </causes-text>
            </div>
        </div>

        <!-- Entry 4-->
        <div class="f-en-entry-header">
            <h4>National Center for Transgender Equality</h4>
        </div>
        <!-- Entry Content-->
        <div class="f-en-entry">
            <!-- Button Insert-->
            <div class="f-en-button-container">
                <button class="f-en-icon" onclick="causes(1)">
                    <img src="resources\media\logo-NCTE.png"></img>
                </button>
            </div>

            <!-- Description Insert-->
            <div class="f-en-text-container">
                <causes-text>
                    <?php
                    include ('textCause4.html');
                    ?>
                </causes-text>
            </div>
        </div>
    </div>
</body>

</html>