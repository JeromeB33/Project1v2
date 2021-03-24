<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="../css/articles-mobile.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="../css/articles-screen.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="../css/global.css" type="text/css" />
</head>

<body>
    <div class="bigBox"><!-- on entoure toutes les box  -->
        <nav id="art-nav">
            <ul id="menu-deroulant">
                <li><a href="#" id="alt-titreHide">Articles</a>
                    <ul>
                        <li><a href="../index.php">Accueil</a></li>
                        <li><a href="histoire.php">Histoire</a></li>
                        <li><a id="art-comp" href="compétences.php">Compétences</a></li>
                        <li><a href="quizz.php">Quizz</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="art-container"> 
            <header>
                <h1 id="art-h1">Articles</h1>
            </header>

            <main> <!-- Le contenu principal de notre page -->  
                
                    <article>
                        
                        <button id="article1"  onclick="audioPlay1()">
                            <h2 class='art-titre'>L'homme aux grosses chevilles</h2>
                            <p class='art-info'> écrit par Eva Skacélagueul le 21/03/21</p>
                            <p class='art-contenu'> Eric Hochet a physiquement interagit avec un autre humain pour la première fois depuis cinq mois.<br> 
                            Interaction qu’il a complètement gâchée en centrant la conversation entièrement sur lui-même.</p>
                        </button>
                    </article>  

                    <article>
                        <button id="article2" onclick="audioPlay2()">
                            <h2 class='art-titre'>L'homme de culture</h2>
                            <p class='art-info'> écrit par Eva Sion le 21/03/21</p>
                            <p class='art-contenu'> Eric Hochet avait annoncé sur les réseaux sociaux qu’il avait compris totalement les nouvelles mesures sanitaires de lutte contre la Covid19
                            et qu’il ne lui avait fallu moins d’une minute pour remplir la nouvelle attestation.</p>
                        </button>
                    </article>

                    <article>
                        <button id="article3" onclick="audioPlay3()">
                            <h2 class='art-titre'>La passion avant tout</h2>
                            <p class='art-info'> écrit par Eva Pisser le 21/03/21</p>
                            <p class='art-contenu'> Eric Hochet et sa femme ont finalement décidé de ne pas faire d’enfant afin de pouvoir pleinement se concentrer sur ce qu’ils aiment vraiment : <br>
                            Leur profonde haine des enfants des autres.</p>
                        </button>
                    </article>  

                    <article>
                        <button id="article4" onclick="audioPlay4()">
                            <h2 class='art-titre'>Le Jésus des temps modernes</h2>
                            <p class='art-info'> écrit par Eva porée le 21/03/21</p>
                            <p class='art-contenu'> Récemment d écédé lors d’un accident, Bernard n’a pas été autorisé à franchir les portes du Paradis car il n’est pas en possession d’un test PCR négatif <br> il a donc réssucité.</p>
                        </button>
                    </article>

                    
 
 
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
    <script type="text/javascript" src="../script.js"></script>
</body>
</html>