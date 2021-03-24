<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

    <link rel="stylesheet" media="screen" href="./css/global.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="./css/index-mobile.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="./css/index-screen.css" type="text/css" />

</head>
<body>

    <div class="bigBox"><!-- on entoure toutes les box  -->
        <header>
            <h1 id="titre">Éric Hochet</h1>
        </header>

        <main> <!-- Le contenu principal de notre page -->
            <div class="container">

                <div id="photoContainer">
                    <img id="photo" src="./images/EricHochet.jpg" alt="magnifique image de Eric Hochet" >
                </div>

                

                <a href="./pages/histoire.php" id="histoire"><!-- entourer de la balise a permet de rendre la box entière cliquable -->

                    <div class="boutons">
                        <h2>Histoire</h2>
                        <p>Le Lorem Ipsum est simplement du faux</p>
                    </div>
                </a>

                <a href="./pages/compétences.php" id="compétences">

                    <div class="boutons">
                        <h2>Compétences</h2>
                        <p>Le Lorem Ipsum est simplement du faux</p>
                    </div>
                </a>


                <a href="./pages/articles.php" id="articles" >

                    <div class="boutons">
                        <h2>Articles</h2>
                        <p>Le Lorem Ipsum est simplement du faux</p>
                    </div>
                </a>


                <a href="./pages/quizz.php" id="quizz" >
                    <div class="boutons">
                        <h2>Quizz</h2>
                        <p>Le Lorem Ipsum est simplement du faux</p>
                    </div>
                </a>



                <a href="./pages/contact.php" id="contact" >

                    <div class="boutons">
                        <h2>Contact</h2>
                        <p>Le Lorem Ipsum est simplement du faux</p>
                    </div>
                </a>
                

            </div>
        </main>


    </div>




    <footer> <!-- Le footer commun à toutes les pages -->
        <p>
            Eric Hochet <br />
            Telephone : 36.15 <br />
            E-mail :

            <a href="mailto:eric.hochet@gmail.com">eric.hochet@gmail.com</a>

            <br><br>
            <span id="disclaimer">Ce site est en contruction dans le cadre d'un projet pour la Wild Code School</span>
        </p>

    </footer>

</body>
</html>