<!DOCTYPE html>
<html lang="en-us">

<head>
  <title>Translator</title>
  <link rel="stylesheet" href="css\p-project.css">
  <link rel="stylesheet" href="css\f-graphics.css">
  <link rel="stylesheet" href="css\s-text.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="resources\javascript\redirect.js"></script>
</head>

<body>
<div class="project">

    <div class="project-head">

        <div class="project-title">
            <web-header2>Translator</web-header2>
        </div>

        <div class="project-info">

            <button class="redirect-bttn" onclick="translator()">
				<div class="graphic-translator"></div>
			</button>

            <div class="project-stats">
                <!-- Languages -->
                <web-header4>
                Language(s):
                </web-header4>
                <web-body>
                    <span style="color:#ED8B00 ;">Java</span>, 
                    <span style="color:#F29111;">SQL</span>
                </web-body>

                <!-- Dates -->
                <web-header4>
                <br>Dates of Development:
                </web-header4>
                <web-body>
                January 2023 - May 2024
                </web-body>

            </div>
        </div>
    </div>

    <div class="project-description">
                <!-- Information -->
                <web-header3>Information</web-header3>

        <web-body>
            <br>&emsp;This project was completed for my Senior Thesis for Computer Science at Furman University. In this project, I implemented a Statistical Machine Translator that manipulates a syntax tree data structure through algorithms encoded in a visitor pattern. The translator takes a grammar-conforming English sentence and acquires the appropriate Japanese translation. The translator makes use of multiple Linguistic Corpora whose information is stored with a PostgreSQL database. The storing of sentences in a tree structure is determined through a generative grammar based on X-Bar Syntax Theory.
        </web-body>
    </div>

    <div class="project-downloads">
            <web-header3>Project Files</web-header3>
            <br>

            <!-- Paper File -->
            <div class="download">
                <div class=file>
                    <a href="resources\p-academia\Context-Driven-Translation\Research-Paper.pdf" download>
                        <img src="resources\media\graphic-paper.png" alt="Research Paper">
                    </a>
                </div>
                <div class="filename">
                    <web-header4>Research-Paper.pdf</web-header4>
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
                    <web-header4>Presentation-FE.pptx</web-header4>
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
                    <web-header4>Presentation-Committee.pptx</web-header4>
                </div>
            </div>
 </div>

</body>
</html>