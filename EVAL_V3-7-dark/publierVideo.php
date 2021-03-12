<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Facetube - Publier</title>
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
                <li class="nonouverte"><a href="contactFacetube.php">Nous contacter</a></li>
                <li class="nonouverte"><a href="amis.php">Amis</a></li>
                <li class="pageouverte"><a href="publierVideo.php">Publier</a></li>
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
        <form action="video.php">
            <section class="publier">
                <h2>PUBLIER UNE VIDEO</h2>
                <label for="url">URL de la vidéo*</label>
                <input id="url" name="url" type="url" required placeholder="URL">
                <label for="titre">Titre*</label>
                <input id="titre" name="titre" type="text" required placeholder="Titre">
                <label for="description">Description*</label>
                <input id="description" name="description" type="text" required placeholder="Description">
                <label for="fichier">Ajouter une miniature</label>
                <input class="minia" id="fichier" name="fichier" type="file" required accept=".png, .jpg">
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