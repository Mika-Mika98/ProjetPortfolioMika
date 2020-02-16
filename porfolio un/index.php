<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/main.css">
    <script src="asset/js/script.js"></script>
    <title>Portfolio Mika</title>
</head>
<body>
    <main>
        <header>
            <a href="web gnezale.pdf">Téléchargement CV</a>
        </header>
        <section>
            <article id="présentation">
                <div>
                    <img src="EMEMU.png" alt="" id="moi">
                    <h4>Mikael .G</h4>
                </div>
                <div id="LOGO">
                    <img src="html.png" alt="" id="logo">
                    <img src="css.png" alt=""id="logo"> 
                    <img src="js.png" alt="" id="logo">
                    <img src="unity.png" alt=""id="unité">
                </div>
            </article>
        </section>
        <section id="diagonal">
            <div id="un">
                <h1 id="TITRE">Web</h1>
            </div>
            <div id="pro">
                <img src="HTMLI.png" id="html">:
                <progress class="progress-bar" min="0" max="100" value="25" style="width:25%" id="HT">25%</progress>
            
                <img src="css.png" id="css">:
                <progress class="" min="0" max="100" value="35" style="width: 25%" id="CS"></progress>
                <br/>
                <img src="js.png" id="js">:
                <progress class="" min="0" max="100" value="20" style="width: 25%" id="JS"></progress>
                
                <img src="unity.png" id="unité">:
                <progress class="" min="0" max="100" value="25" style="width: 25%"></progress>
                <br/>
                <img src="maya.png" id="maya">:
                <progress class="" min="0" max="100" value="25" style="width: 25%"></progress>

                <img src="c.png">
                <progress class="" min="0" max="100" value="" style="width: 25%"></progress>
            </div>
        </section>

        <section id="diago">
            <div>
                <h2 id="titre">Art</h2>
            </div>
            <div id="deux">
               <img src="theatre.png" id="img"> 
            </div>
        </section>
        <section id="nl">
            <div id="fo">
                <form name="general" action="asset/PHP/connection.php" method="POST">
                    <h3>Contactez-Moi</h3>
                    <input type="text" id='username' name="username" placeholder="Votre nom" required/>
                    <br/>
                    <input type="text" id="email" name="email" placeholder="email">
                    <br/> 
                    <textarea type="text" name="message" placeholder="message" required></textarea>
                    <br/>
                    <button type="submit" name="envoyer" id="submit">envoyer</button>
                </form>
            </div>    
        </section>
    </main>
</body>
</html>