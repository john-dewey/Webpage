<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Macala</title>
    <link rel="stylesheet" href="css\p-project.css">
    <link rel="stylesheet" href="css\f-graphics.css">
    <link rel="stylesheet" href="css\s-text.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="javascript\redirect.js"></script>
</head>

<body>
    <div class="project">

        <div class="project-head">

            <div class="project-title">
                <web-header2>Mancala</web-header2>
            </div>

            <div class="project-info">
                <button class="redirect-bttn" onclick="mancala()">
                    <div class="graphic-mancala"></div>
                </button>

                <div class="project-stats">
                    <!-- Languages -->
                    <web-header4>
                        Language(s):
                    </web-header4>
                    <web-body>
                        <span style="color:blue ;">MIPS Assembly</span>
                    </web-body>

                    <!-- Dates -->
                    <web-header4>
                        <br>Dates of Development:
                    </web-header4>
                    <web-body>
                        March - April 2022
                    </web-body>

                </div>

            </div>
        </div>

        <div class="project-description">
            <!-- Information -->
            <web-header3>Information</web-header3>

            <web-body>
                <br>&emsp;This project was completed for a final project in the class CSC-231: Computer Organization.
                The project uses MIPS Assembly to facilitate a text-based game of Mancala that uses registers as
                different parts of the game such as the two players stores and holes. The game uses a player’s input of
                numbers to determine how beads get moved and checks on every turn if a winner has been found. The game
                incorporates all the rules of Mancala, including the special rules of a player’s turn and winning
                conditions.
            </web-body>
        </div>

        <div class="project-downloads">
            <web-header3>Project Files</web-header3>
            <br>

            <!-- Default Screen -->
            <div class="download">
                <div class=file>
                    <a href="resources\p-software\Mancala\default-screen.png" download>
                        <img src="resources\media\graphic-image.png" alt="Research Paper">
                    </a>
                </div>
                <div class="filename">
                    <web-header4>default-screen.png</web-header4>
                </div>
            </div>

            <!-- Gameplay -->
            <div class="download">
                <div class=file>
                    <a href="resources\p-software\Mancala\gameplay.png" download>
                        <img src="resources\media\graphic-image.png" alt="Research Paper">
                    </a>
                </div>
                <div class="filename">
                    <web-header4>gameplay.png</web-header4>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>