<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Facetube - Nous contacter</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="shortcut icon" href="images/logoFaceTube.png" type="image/x-icon">
    </head>
    <body>
    <header>
        <img src="images/logoFaceTube.png" alt="logo FaceTube" width="50" height="50">
        <nav>
            <ul class="menu">
                <li class="nonouverte"><a href="index.php">Accueil</a></li>
                <li class="pageouverte"><a href="contactFacetube.php">Nous contacter</a></li>
                <li class="nonouverte"><a href="amis.php">Amis</a></li>
                <li class="nonouverte"><a href="publierVideo.php">Publier</a></li>
            </ul>
        </nav>
        <form class="search" action="search.php">
            <input type="search" id="recherche" name="recherche" placeholder="Rechercher">
            <button>
                <i class="material-icons">search</i>
            </button>
        </form>
        <section class="profilbulle">
            <a href="profilFacetube.php">
                <img src="images/logoChaine.png" alt="image chaine" width="30" height="30"></a>
        </section>
        <form action="connexionFacetube.php" class="posboutondeco">
            <button class="boutondeco" type="submit">Se déconnecter</button>
        </form>
    </header>
    <main>
        <form action="index.php" class="contacter">
            <header>
                <h2>Contacter un administrateur</h2>
            </header>
            <section class="labelcontacter">
                <section class="courrielsujet">
                    <label for="courriel">Courriel*</label>
                    <input id="courriel" name="courriel" type="email" autofocus required placeholder="Votre courriel">
                    <label for="sujet">Sujet*</label>
                    <input id="sujet" name="sujet" type="text" required placeholder="Sujet">
                </section>
                <label for="message">Message*</label>
                <textarea id="message" name="message" rows="3" cols="20" required="" placeholder="Votre message" style="margin: 0px; width: 19em; height: 50px;"></textarea>
                <label for="fichier">Ajouter un fichier (facultatif)</label>
                <input class="minia" id="fichier" name ="fichier" type="file" accept=".png, .jpg">
                <section class="posbouton">
                    <button class="boutonpublier" type="submit">Publier</button>
                </section>
            </section>
        </form>
    </main>
    <footer>
        <h3>Facetube - 2021</h3>
    </footer>
    </body>
</html>