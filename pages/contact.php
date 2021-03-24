<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="../css/contact-mobile.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="../css/contact-screen.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="../css/global.css" type="text/css" />
</head>

<body>
    <div class="bigBox"><!-- on entoure toutes les box  -->
        <nav id="contact-nav">
            <ul id="menu-deroulant">
                <li><a href="#" id="alt-titreHide">Contact</a>
                    <ul>
                        <li><a href="../index.php">Accueil</a></li>
                        <li><a href="histoire.php">Histoire</a></li>
                        <li><a id="contact-comp" href="compétences.php">Compétences</a></li>
                        <li><a id="articles" href="articles.php">Articles</a></li>
                        <li><a href="quizz.php">Quizz</a></li>
                    </ul>
                    </li>
            </ul>
        </nav>
        <div class="contact-container"> 
            <header>
                <h1 id="contact-h1">Contact</h1>
            </header>

            <main> <!-- Le contenu principal de notre page -->
                <form action="" method="post">
                    <div>
                        <label for="name">Renseine ici ton Nom et Prénom:</label>
                        <input type="text" id="name" name="user_name" placeholder="Eric Hochet">
                    </div>
                    <div>
                        <label for="mail">T'y es presque! Il me faut ton mail:</label>
                        <input type="email" id="mail" name="user_mail" placeholder="EricHochet@monmail.com">
                    </div>
                    <div>
                        <label for="msg">Si t'as envie de me faire plaisir envoie moi un message!</label>
                        <textarea id="msg" name="user_message" placeholder="Je me voue depuis mon passage sur ce site, un culte à Eric Hochet"></textarea>
                    </div>
                    <div class="submit">
                        <button type="submit">Envoyer le message</button>
                    </div>
                </form>
 
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
    <script type="text/javascript" src="./script.js"></script>
</body>
</html>