<!DOCTYPE html>
<html lang="en-us">

<html>
<head>
    <title>Resumes</title>
    <link rel="stylesheet" href="..\..\css\slides\resumeSlides.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class ="page-container">

    <a onclick = "plusSlides(-1)">
            <div class="button">
                &#10094;
            </div>
    </a>



        <div class ="slideshow-container">
            <div class="slide">

                <div class="numbertext"> 1 / 2</div>
                <embed 
                    src= "../../resources/bio/ElectronicResume.pdf" 
                    width="450"
                    height="550"
                    >


            </div>

            <div class="slide">

                <div class="numbertext"> 2 / 2</div>

                <embed 
                    src= "../../resources/bio/Resume.pdf" 
                    width="450"
                    height="550"
                >
                
            </div>

        </div>


        <a onclick="plusSlides(1)">
            <div class="button">
                &#10095;
            </div>
        </a>

    </div>


    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("slide");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex-1].style.display = "block";
        }
    </script>
</body>
</html>
