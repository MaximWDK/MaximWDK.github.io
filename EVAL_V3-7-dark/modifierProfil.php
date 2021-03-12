<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Facetube - Inscription </title>
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
        <form action="index.php" class="inscription">
            <h2>MODIFIER PROFIL</h2>
            <section class="labelinscription">
                <label for="nom">Nom*</label>
                <input id="nom" name="nom" type="text" required placeholder="Votre nom">
                <label for="prénom">Prénom*</label>
                <input id="prénom" name="prénom" type="text" required placeholder="Votre prénom">
                <label for="courriel">Courriel*</label>
                <input id="courriel" name="courriel" type="email" autofocus  placeholder="Votre courriel">
                <label for="motPasse">Mot de passe*</label>
                <input id="motPasse" name="motPasse" type="password" required placeholder="Votre mot de passe">
                <label for="confirmerMotPasse">Confirmer le mot de passe*</label>
                <input id="confirmerMotPasse" name="confirmerMotPasse" type="password" required placeholder="Confirmer mot de passe">
                <label for="date">Date de naissance</label><input id="date" name="date" type="date">
                <section class="hommeoufemme">
                    <label for="sexe">Sexe</label>
                    <input id="sexe"  name="sexe" type="radio" value="Femme">Femme
                    <input id="sexeH" name="sexe" type="radio" value="Homme">Homme
                </section>
            </section>
            <section class="posbouton">
                <button class="boutonpublier" type="submit">Modifer</button>
            </section>
        </form>
    </main>
    <footer>
        <h3>Facetube - 2021</h3>
    </footer>
    </body>
</html>