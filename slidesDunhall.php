<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Dunhall Slides</title>
    <link rel="stylesheet" href="..\..\css\f-slides.css">
    <link rel="stylesheet" href="..\..\css\f-graphics.css">
    <link rel="stylesheet" href="..\..\css\s-text.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="projectPicture">

        <div class ="button-container">
            <button class="buttonLeft" onclick="plusDivs('dunhall-slides', -1)">&#10094;</button>
            <button class="buttonRight" onclick="plusDivs('dunhall-slides', 1)">&#10095;</button>
        </div>

        <div class = "slide-container">
            <div class="dunhall-slides">
                <div class="graphic-dunhall1"></div>
            </div>
            <div class="dunhall-slides">
                <div class="graphic-dunhall2"></div>
            </div>
            <div class="dunhall-slides">
                <div class="graphic-dunhall3"></div>
            </div>
            <div class="dunhall-slides">
                <div class="graphic-dunhall4"></div>
            </div>
            <div class="dunhall-slides">
                <div class="graphic-dunhall5"></div>
            </div>
            <div class="dunhall-slides">
                <div class="graphic-dunhall6"></div>
            </div>
            <div class="dunhall-slides">
                <div class="graphic-dunhall7"></div>
            </div>
            <div class="dunhall-slides">
                <div class="graphic-dunhall8"></div>
            </div>
        </div>

    </div>



    <script>
        var slideIndex = 1;
        classes = ["dunhall-slides"];
        for (i = 0; i < classes.length; i++)
        {
            showDivs(classes[i], slideIndex);
        }
        
        function plusDivs(classname, n) {
          showDivs(classname, slideIndex += n);
        }
        
        function showDivs(classname, n) {
          var i;
          var x = document.getElementsByClassName(classname);
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
        </script>
</body>