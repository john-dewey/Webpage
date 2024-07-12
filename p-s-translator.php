<!DOCTYPE html>
<html lang="en-us">

<head>
    <!-- Title -->
    <title>Translator</title>

    <!-- Imports -->
    <link rel="stylesheet" href="css\f-graphics.css">
    <link rel="stylesheet" href="css\f-download.css">
    <link rel="stylesheet" href="css\s-override.css">
    <link rel="stylesheet" href="css\p-project.css">

    <!-- Meta Information -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Javascript Imports -->
    <script src="javascript\redirect.js"></script>
</head>

<body>
    <div class="project">

        <div class="project-head">

            <div class="project-title">
                <h2>Translator</h2>
            </div>

            <div class="project-info">

                <button class="redirect-bttn" onclick="translator()">
                    <div class="graphic-translator"></div>
                </button>

                <div class="project-stats">
                    <!-- Languages -->
                    <h4>
                        Language(s):
                    </h4>
                    <p>
                        <span style="color:#ED8B00 ;">Java</span>,
                        <span style="color:#F29111;">SQL</span>
                    </p>

                    <!-- Dates -->
                    <h4>
                        <br>Dates of Development:
                    </h4>
                    <p>
                        January 2023 - May 2024
                    </p>

                </div>
            </div>
        </div>

        <div class="project-description">
            <!-- Information -->
            <h3>Information</h3>

            <p>
                &emsp;This project was completed for my Senior Thesis for Computer Science at Furman University. In this
                project, I implemented a Statistical Machine Translator that manipulates a syntax tree data structure
                through algorithms encoded in a visitor pattern. The translator takes a grammar-conforming English
                sentence and acquires the appropriate Japanese translation. The translator makes use of multiple
                Linguistic Corpora whose information is stored with a PostgreSQL database. The storing of sentences in a
                tree structure is determined through a generative grammar based on X-Bar Syntax Theory.
            </p>
        </div>

        <div class="project-downloads">
            <h3>Project Files</h3>


            <!-- Paper File -->
            <div class="download">
                <div class=file>
                    <a href="resources\p-academia\Context-Driven-Translation\Research-Paper.pdf" download>
                        <img src="resources\media\graphic-paper.png" alt="Research Paper">
                    </a>
                </div>
                <div class="filename">
                    <h4>Research-Paper.pdf</h4>
                </div>

            </div>

            <!-- Presentation File A -->
            <div class="download">
                <div class=file>
                    <a href="resources\p-academia\Context-Driven-Translation\Presentation-FE.pptx" download>
                        <img src="resources\media\graphic-presentation.png" alt="Furman Engaged Presentation">
                    </a>
                </div>
                <div class="filename">
                    <h4>Presentation-FE.pptx</h4>
                </div>
            </div>


            <!-- Presentation File B -->
            <div class="download">
                <div class=file>
                    <a href="resources\p-academia\Context-Driven-Translation\Presentation-Committee.pptx" download>
                        <img src="resources\media\graphic-presentation.png" alt="Furman Engaged Presentation">
                    </a>
                </div>
                <div class="filename">
                    <h4>Presentation-Committee.pptx</h4>
                </div>
            </div>
        </div>
    </div>

</body>

</html>