<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Context-Driven English to Japanese Translation</title>
    <link rel="stylesheet" href="css\p-project.css">
    <link rel="stylesheet" href="css\f-graphics.css">
    <link rel="stylesheet" href="css\s-override.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>


    <div class="project">

        <div class="project-head">

            <div class="project-title">

                <h2>
                    Context-Driven English to Japanese Translation
                </h2>

            </div>

            <div class="project-info">
                <!-- Graphic -->
                <img src="resources\media\logo-furman.png" alt="Research Paper">

                <div class="project-stats">
                    <!-- Key Topics -->
                    <h4> <br> <b>Key Topics:</b> </h4>

                    <p>English and Japanese Translation, Visitior Design Pattern, X-Bar Theory, SLIM Theory,
                        Linguistic Corpora</p>

                    <!-- Class -->
                    <h4> <br> <b>Class:</b> </h4>
                    <p>Computer Science Senior Research Capstone</p>

                    <!-- Dates -->
                    <h4> <br> <b>Dates of Research:</b> </h4>
                    <p>January - May 2024</p>
                </div>
            </div>
        </div>

        <div class="project-description">
            <!-- Info -->
            <h3>Information</h3>

            <p>
                &emsp; This project was completed for my Senior Thesis for Computer Science at Furman University.
                In this project, I implemented a Statistical Machine Translator that manipulates a syntax tree data
                structure through algorithms encoded in a visitor pattern. The translator takes a grammar-conforming
                English sentence and acquires the appropriate Japanese translation. The translator makes use of multiple
                Linguistic Corpora whose information is stored with a PostgreSQL database. The storing of sentences in a
                tree structure is determined through a generative grammar based on X-Bar Syntax Theory.
            </p>
        </div>

        <div class="project-description">
            <!-- Abstract -->
            <h3>Abstract</h3>

            <p>
                &emsp; In past decades, computational translation has been a widely used tool due to its
                accessibility and
                ease of use. Despite its popularity, computational translators are second-rate compared to multilingual
                humans who can provide natural translations of phrases—which computational translators cannot. This
                paper presents algorithms and techniques of a mechanical translator that uses context to drive the
                transfer
                of phrase representation from English to Japanese thus effectively producing a translation. This
                translator
                consists of three distinct steps. The first takes raw text in English, it is tokenized, and each token
                is then
                classified according to its part of speech. These tokens act as terminals in a sentence tree that is
                constructed
                using a bottom-up technique. Given a sentence tree, the next step works to manipulate the internal nodes
                (non-leaf) nodes of the sentence tree to reflect an ordering of nodes consistent with the sentence
                structure
                Japanese language: Subject-verb-object in English to subject-object-verb in Japanese. The last step
                involves manipulating the terminal nodes in the sentence tree so that the translator ‘translates’
                English
                words to Japanese, verify conjugation, and that the use of particles is correct. We verified the
                effectiveness
                of the proof-of-concept translator by testing for usage of proper nouns, conjunctions, and all
                variations of
                tense features.
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