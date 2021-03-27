<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="../css/style_quizz_mobile.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="../css/style_quizz_print.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="../css/global.css" type="text/css" />
</head>

<body>

<div class="bigBox"><!-- on entoure toutes les box et le formulaire -->
    <nav>
        <ul id="menu-deroulant">
            <li><a href="#" id="alt-titreHide">Quizz</a>
                <ul>
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="histoire.php">Histoire</a></li>
                    <li><a id="titre_navbar" href="compétences.php">Compétences</a></li>
                    <li><a href="articles.php">Arcticles</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="art-container">
        <header>
            <h1 id="titre">Quizz</h1>
        </header>

        <main> <!-- Le contenu principal de notre page -->
            <div id="formulaire_quizz"> <!-- formulaire du quizz -->
                <form method="post" action="">
                    <?php
                    $error = "";
                    $answered =[];
                    if(isset($_POST['submit_button']))
                    {
                        if(!empty($_POST['answer_1']) && !empty($_POST['answer_2']) && !empty($_POST['answer_3']) && !empty($_POST['answer_4']) && !empty($_POST['answer_5']))
                        {
                            echo "ok";
                        }
                        else
                        {
                            $error= "Tout les champs doivent être renseignés";
                        }
                    }

                    ?>
                    <div class="question_formulaire">Quel est le nom de Eric ?<br>
                        <label for="answer_1"></label>
                        <input type="radio" name="answer_1"> Hochet
                        <input type="radio" name="answer_1"> Hockel
                        <input type="radio" name="answer_1"> Hocret
                        <input type="radio" name="answer_1"> Lavinass
                    </div>

                    <div class="question_formulaire">Quel âge a Eric ?<br>
                        <label for="answer_2"></label>
                        <input type="radio" name="answer_2"> 17
                        <input type="radio" name="answer_2"> 30
                        <input type="radio" name="answer_2"> 32
                        <input type="radio" name="answer_2"> 45
                    </div>
                    <div class="question_formulaire">De quel ville vient-il ?<br>
                        <label for="answer_3"></label>
                        <input type="radio" name="answer_3"> Paris
                        <input type="radio" name="answer_3"> Strasbourg
                        <input type="radio" name="answer_3"> Lovigny
                        <input type="radio" name="answer_3"> Metz
                    </div>
                    <div class="question_formulaire">En 1998 qu'à t-il fait comme exploit ?<br>
                        <label for="answer_4"></label>
                        <input type="radio" name="answer_4"> Traire sa première vache
                        <input type="radio" name="answer_4"> Dragué à une prostitué
                        <input type="radio" name="answer_4"> Sérré la main à Jean De La Fontaine
                        <input type="radio" name="answer_4"> Ecrit son premier poème " La vache nommée Marguerite"
                    </div>
                    <div class="question_formulaire">Quel est le nom de Eric ?<br>
                        <label for="answer_5"></label>
                        <input type="radio" name="answer_5"> Hochet
                        <input type="radio" name="answer_5"> Hockel
                        <input type="radio" name="answer_5"> Hocret
                        <input type="radio" name="answer_5"> Lavinass
                    </div>

                    <div id="bouton_formulaire">
                        <input id="button_submit" type="submit" name="submit_button" value="Envoyer">
                    </div>
                </form>
                <?php if(isset($error)) echo '<p style="color:red;text-align:center;">' . $error ?>
            </div>

        </main>
    </div>

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