<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Facetube - Amis</title>
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
                <li class="pageouverte"><a href="amis.php">Amis</a></li>
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
        <section class="ami">
            <header>
                <h2>Liste des amis</h2>
                <form>
                    <label>Ajouter un ami</label>
                    <section class="searchami">
                        <input type="search" id="search" name="recherche-amis" placeholder="Rechercher">
                        <button>
                            <i class="material-icons">search</i>
                        </button>
                    </section>
                </form>
            </header>
            <section class="amis">
                <section class="attenteamis">
                    <article>
                        <h3>Demandes d'amis reçues en attente:</h3>
                        <section class="ligneamis">
                            <section class="listeamis">
                                <header>
                                    <a href="profilAutre.php">
                                        <img class="imagesamis" src="images/logoAmi1.png" alt="image chaine" width="100" height="100">
                                        <h4>Gotaga</h4>
                                    </a>
                                </header>
                            </section>
                            <section class="boutonsamis">
                                <button type="submit">Accepter</button>
                                <button type="submit">Refuser</button>
                            </section>
                        </section>
                        <section class="ligneamis">
                            <section class="listeamis">
                                <header>
                                    <a href="profilAutre.php">
                                        <img class="imagesamis" src="images/logoAmi2.png" alt="image chaine" width="100" height="100">
                                        <h4>Ninja</h4>
                                    </a>
                                </header>
                            </section>
                            <section class="boutonsamis">
                                <button type="submit">Accepter</button>
                                <button type="submit">Refuser</button>
                            </section>
                        </section>
                        <section class="ligneamis">
                            <section class="listeamis">
                                <header>
                                    <a href="profilAutre.php">
                                        <img class="imagesamis" src="images/logoAmi3.png" alt="image chaine" width="100" height="100">
                                        <h4>Pewdiepie</h4>
                                    </a>
                                </header>
                            </section>
                            <section class="boutonsamis">
                                <button type="submit">Accepter</button>
                                <button type="submit">Refuser</button>
                            </section>
                        </section>
                    </article>
                </section>
                <section class="attenteamis">
                    <article>
                        <h3>Demandes d'amis en attente:</h3>
                        <section class="ligneamis">
                            <section class="listeamis">
                                <header>
                                    <a href="profilAutre.php">
                                        <img class="imagesamis" src="images/logoAmi4.png" alt="image chaine" width="100" height="100">
                                        <h4>Squeezie</h4>
                                    </a>
                                </header>
                            </section>
                            <section class="boutonsamis">
                                <button type="submit">Annuler</button>
                            </section>
                        </section>
                        <section class="ligneamis">
                            <section class="listeamis">
                                <header>
                                    <a href="profilAutre.php">
                                        <img class="imagesamis" src="images/logoAmi5.png" alt="image chaine" width="100" height="100">
                                        <h4>Cyril</h4>
                                    </a>
                                </header>
                            </section>
                            <section class="boutonsamis">
                                <button type="submit">Annuler</button>
                            </section>
                        </section>
                        <section class="ligneamis">
                            <section class="listeamis">
                                <header>
                                    <a href="profilAutre.php">
                                        <img class="imagesamis" src="images/logoAmi6.png" alt="image chaine" width="100" height="100">
                                        <h4>Roi des rats</h4>
                                    </a>
                                </header>
                            </section>
                            <section class="boutonsamis">
                                <button type="submit">Annuler</button>
                            </section>
                        </section>
                    </article>
                </section>
                <section class="enligne">
                    <article>
                        <h3>En ligne:</h3>
                        <section class="ligneamis">
                            <section class="listeamis">
                                <header>
                                    <a href="profilAutre.php">
                                        <img class="imagesamis" src="images/logoAmi7.png" alt="image chaine" width="100" height="100">
                                        <h4>Kalipso53</h4>
                                    </a>
                                </header>
                            </section>
                            <section class="boutonsamis">
                                <button type="submit">Supprimer</button>
                            </section>
                        </section>
                        <section class="ligneamis">
                            <section class="listeamis">
                                <header>
                                    <a href="profilAutre.php">
                                        <img class="imagesamis" src="images/logoAmi8.png" alt="image chaine" width="100" height="100">
                                        <h4>G-Moustache</h4>
                                    </a>
                                </header>
                            </section>
                            <section class="boutonsamis">
                                <button type="submit">Supprimer</button>
                            </section>
                        </section>
                        <section class="ligneamis">
                            <section class="listeamis">
                                <header>
                                    <a href="profilAutre.php">
                                        <img class="imagesamis" src="images/logoAmi9.png" alt="image chaine" width="100" height="100">
                                        <h4>Trash</h4>
                                    </a>
                                </header>
                            </section>
                            <section class="boutonsamis">
                                <button type="submit">Supprimer</button>
                            </section>
                        </section>
                    </article>
                </section>
                <section class="horsligne">
                    <article>
                        <h3>Hors ligne:</h3>
                        <section class="ligneamis">
                            <section class="listeamis">
                                <header>
                                    <a href="profilAutre.php">
                                        <img class="imagesamis" src="images/logoAmi10.png" alt="image chaine" width="100" height="100">
                                        <h4>Le Grand JD</h4>
                                    </a>
                                </header>
                            </section>
                            <section class="boutonsamis">
                                <button type="submit">Supprimer</button>
                            </section>
                        </section>
                        <section class="ligneamis">
                            <section class="listeamis">
                                <header>
                                    <a href="profilAutre.php">
                                        <img class="imagesamis" src="images/logoAmi11.png" alt="image chaine" width="100" height="100">
                                        <h4>Mastu</h4>
                                    </a>
                                </header>
                            </section>
                            <section class="boutonsamis">
                                <button type="submit">Supprimer</button>
                            </section>
                        </section>
                        <section class="ligneamis">
                            <section class="listeamis">
                                <header>
                                    <a href="profilAutre.php">
                                        <img class="imagesamis" src="images/logoAmi12.png" alt="image chaine" width="100" height="100">
                                        <h4>Galax</h4>
                                    </a>
                                </header>
                            </section>
                            <section class="boutonsamis">
                                <button type="submit">Supprimer</button>
                            </section>
                        </section>
                    </article>
                </section>
            </section>
        </section>
    </main>
    <footer>
        <h3>Facetube - 2021</h3>
    </footer>
    </body>
</html>