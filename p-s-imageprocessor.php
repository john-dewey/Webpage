<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Image Processor</title>
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
                <web-header2>Image Processor</web-header2>
            </div>

            <div class="project-info">

                <button class="redirect-bttn" onclick="imageProcessor()">
                    <div class="graphic-IP"></div>
                </button>

                <div class="project-stats">
                    <!-- Languages -->
                    <web-header4>
                        Language(s):
                    </web-header4>
                    <web-body>
                        <span style="color:#ED8B00 ;">Java</span>,
                        <span style="color:#ED8B00 ;">JavaFX</span>
                    </web-body>

                    <!-- Dates -->
                    <web-header4>
                        <br>Dates of Development:
                    </web-header4>
                    <web-body>
                        August - September 2023
                    </web-body>

                </div>
            </div>
        </div>

        <div class="project-description">
            <!-- Information -->
            <web-header3>Information</web-header3>

            <web-body>
                <br>&emsp;This project is software that was completed for the class CSC-344: Computer Graphics and Image Processing. This project implements JavaFX and Java's Image and Canvas libraries to actively manipulate pixels of an imported image to acquire some type of effect. The software can take in any arbitrary image and apply Multimedia Effects (Composite, Interpolation/Extrapolation) or Pixel Effects (Box Blur, Gaussian Blur, Edge Detection, Channel Adjustment, Noise Adjustment, Brightness Adjustment, Greyscale, Threshold) to the image. The software handles user's input and output with Java's I/O library, and implements a forward and backward memento state system utilizing a stack data structure.</web-body>
        </div>

        <div class="project-downloads">
            <web-header3>Project Files</web-header3>
            <br>

            <!-- Paper File -->
            <div class="download">
                <div class=file>
                    <a href="resources\p-software\Image-Processor\Image Processor Demonstration.pdf" download>
                        <img src="resources\media\graphic-presentation.png" alt="Research Paper">
                    </a>
                </div>
                <div class="filename">
                    <web-header4>Image-Processor-Demonstration.pdf</web-header4>
                </div>

            </div>
        </div>
    </div>

</body>

</html>