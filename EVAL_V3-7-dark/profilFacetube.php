<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Facetube - Mon profil </title>
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
            <a class="profilouvert" href="profilFacetube.php">
                <img src="images/logoChaine.png" alt="image chaine" width="30" height="30"></a>
        </section>
        <form action="connexionFacetube.php" class="posboutondeco">
            <button class="boutondeco" type="submit">Se déconnecter</button>
        </form>
    </header>
    <main>
        <section class="profil">
            <header>
                <h2>Mon profil</h2>
            </header>
            <section class="infos">
                <h4>Pseudo: Maxim_WDK</h4>
                <h4>Nom: Léonet</h4>
                <h4>Prénom: Maxim</h4>
                <h4>Email: m.leonet@student.helmo.be</h4>
                <h4>Date de naissance: 23/10/2002</h4>
                <h4>Sexe: Homme</h4>
            </section>
            <form action="modifierProfil.php" class="posboutonprofil">
                <button class="boutonpublier" type="submit">Modifier mon profil</button>
            </form>
        </section>
    </main>
    <footer>
        <h3>Facetube - 2021</h3>
    </footer>
    </body>
</html>