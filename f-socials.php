<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Socials</title>
    <!-- Class CSS File -->
    <link rel="stylesheet" href="css\f-socials.css">
    <!-- Fa Fa Library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- Meta Information-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        //Switch "socials": determines which link to choose from
        function socials(x) {
            switch (x) {
                case 1:
                    window.open('https://x.com/johnathan_dewey', '_blank');
                    break;
                case 2:
                    window.open('mailto:jtdewey2@gmail.com', '_blank');
                    break;
                case 3:
                    window.open('https://www.linkedin.com/in/jtdewey', '_blank');
                    break;
                case 4:
                    window.open('https://github.com/john-dewey', '_blank');
                    break;
                default:
                    window.open('https://www.johnathandewey.com', '_blank');
            }
        }
    </script>
</head>

<body>
    <!-- Grid Containing Icons -->
    <div class="f-s-wrapper">
        <button class="f-s-icon" onclick="socials(1)"><i class="fa-brands fa-x-twitter"></i></button>
        <button class="f-s-icon" onclick="socials(2)"><i class=" fa-brands fa-google"></i></button>
        <button class="f-s-icon" onclick="socials(3)"><i class=" fa-brands fa-linkedin-in"></i></button>
        <button class="f-s-icon" onclick="socials(4)"><i class=" fa-brands fa-github"></i></button>
    </div>
</body>

</html>