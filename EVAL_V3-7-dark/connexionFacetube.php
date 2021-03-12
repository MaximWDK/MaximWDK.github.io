<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Facetube - Connexion </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="images/logoFaceTube.png" type="image/x-icon">
    </head>
    <body>
    <header>
        <img src="images/logoFaceTube.png" alt="logo FaceTube" width="50" height="50">
    </header>
    <main>
        <form action="index.php" class="connexion">
            <h2>SE CONNECTER</h2>
            <section class="labelconnexion">
                <label for="courriel">Courriel*</label>
                <input id="courriel" name="courriel" type="email" required placeholder="Votre courriel">
                <label for="motPasse">Mot de passe*</label>
                <input id="motPasse" name="motPasse" type="password" required placeholder="Votre mot de passe">
                <section class="posbouton">
                    <button class="boutonpublier" type="submit">Connexion</button>
                </section>
                <section class="exception">
                    <p>Pas de compte ? <a href="inscriptionFacetube.php">S'inscrire</a></p>
                    <p>Mot de passe oublié ? <a href="mdpOublie.php">Cliquez ici</a></p>
                </section>
            </section>
        </form>
    </main>
    <footer>
        <h3>Facetube - 2021</h3>
    </footer>
    </body>
</html>