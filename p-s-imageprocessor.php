<!DOCTYPE html>
<html lang="en-us">

<head>
    <!-- Title -->
    <title>Image Processor</title>

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
                <h2>Image Processor</h2>
            </div>

            <div class="project-info">

                <button class="redirect-bttn" onclick="imageProcessor()">
                    <div class="graphic-IP"></div>
                </button>

                <div class="project-stats">
                    <!-- Languages -->
                    <h4>
                        Language(s):
                    </h4>
                    <p>
                        <span style="color:#ED8B00 ;">Java</span>,
                        <span style="color:#ED8B00 ;">JavaFX</span>
                    </p>

                    <!-- Dates -->
                    <h4>
                        <br>Dates of Development:
                    </h4>
                    <p>
                        August - September 2023
                    </p>

                </div>
            </div>
        </div>

        <div class="project-description">
            <!-- Information -->
            <h3>Information</h3>

            <p>
                &emsp;This project is software that was completed for the class CSC-344: Computer Graphics and Image Processing. This project implements JavaFX and Java's Image and Canvas libraries to actively manipulate pixels of an imported image to acquire some type of effect. The software can take in any arbitrary image and apply Multimedia Effects (Composite, Interpolation/Extrapolation) or Pixel Effects (Box Blur, Gaussian Blur, Edge Detection, Channel Adjustment, Noise Adjustment, Brightness Adjustment, Greyscale, Threshold) to the image. The software handles user's input and output with Java's I/O library, and implements a forward and backward memento state system utilizing a stack data structure.</p>
        </div>

        <div class="project-downloads">
            <h3>Project Files</h3>
           

            <!-- Paper File -->
            <div class="download">
                <div class=file>
                    <a href="resources\p-software\Image-Processor\Image Processor Demonstration.pdf" download>
                        <img src="resources\media\graphic-presentation.png" alt="Research Paper">
                    </a>
                </div>
                <div class="filename">
                    <h4>Image-Processor-Demonstration.pdf</h4>
                </div>

            </div>
        </div>
    </div>

</body>

</html>