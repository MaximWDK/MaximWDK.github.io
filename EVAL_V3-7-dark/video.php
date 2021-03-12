<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>FaceTube - Vidéo</title>
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
        <section class="videoaffichage">
            <iframe width="1280" height="720" src="https://www.youtube.com/embed/5t1ICryZrKA"></iframe>
            <section class="infosvideo">
                <header>
                    <a href="profilAutre.php">
                        <img src="images/logoChaine.png" alt="image chaine" width="50" height="50">
                    </a>
                    <h3>Teaser - Walt Disney Kingdom
                        <span class="vues">Vues: 100</span>
                    </h3>
                </header>
                <p class="desc">Walt Disney Kingdom a pour but de recréer le plus fidèlement possible le Parc Magic Kingdom du complexe Walt Disney Resort basé en Floride. C’est pourquoi notre équipe travaille d'arrache-pied pour vous offrir une expérience inoubliable au sein de notre serveur.</p>
                <form class="avis">
                    <label for="avis">Avis: 8/10</label>
                    <input type="range" name="avis" id="avis" min="0" max="10" step="1">
                    <p>Je n'aime pas
                        <span>J'adore</span>
                    </p>
                    <button class="posbouton" type="submit">Envoyer</button>
                </form>
                <form class="commentaire">
                    <label for="message">Envoyer un commentaire</label>
                    <textarea id="message" name="message" rows="3" cols="20" required="" placeholder="Votre commentaire"></textarea>
                    <section class="espacebtext">
                        <button class="posbouton" type="submit">Envoyer</button>
                    </section>
                </form>
                <section class="compublies">
                    <h3>Commentaires:</h3>
                    <section class="compubliesepare">
                        <section class="poscom">
                            <section class="poschaine">
                                <a href="profilAutre.php">
                                    <img src="images/logoChaine1.png" alt="image chaine" width="50" height="50">
                                    <h2>Wankil Studio</h2>
                                </a>
                            </section>
                            <h3>Joli trailer !</h3>
                        </section>
                    </section>
                    <section class="compubliesepare">
                        <section class="poscom">
                            <section class="poschaine">
                                <a href="profilAutre.php">
                                    <img src="images/logoChaine2.png" alt="image chaine" width="50" height="50">
                                    <h2>Mister V - Yvick</h2>
                                </a>
                            </section>
                            <h3>Tu gères la fougère !</h3>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </main>
    <footer>
        <h3>Facetube - 2021</h3>
    </footer>
    </body>
</html>