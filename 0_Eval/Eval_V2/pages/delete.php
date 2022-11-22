<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style.css" />
        <title>eWins - Edition tournois</title>
    </head>
    <body>
        <header>
            <nav>
                <ul class="nav-ul">
                    <li>
                        <img src="../images/logo-removebg.png" alt="" />
                        <p>eWins</p>
                    </li>
                    <li>
                        <a href="../index.php" data-text="&nbsp;Accueil&nbsp;"
                            >&nbsp;Accueil&nbsp;</a
                        >
                    </li>
                    <li>
                        <a href="./tournois.php" data-text="&nbsp;Tournois&nbsp;"
                            >&nbsp;Tournois&nbsp;</a
                        >
                    </li>
                    <li>
                        <a href="./contact.php" data-text="&nbsp;Contact&nbsp;"
                            >&nbsp;Contact&nbsp;</a
                        >
                    </li>
                </ul>
                <!-- <div>
                    <a href="./login.php">
                        <button>Se connecter</button>
                    </a>
                    <a href="./create.php">
                        <button>Créer un compte</button>
                    </a>
                </div> -->
                <details class="user-profile">
                    <summary><img src="../images/pp.png" alt="profile picture" /></summary>
                    <ul>
                        <li><p>Vullo Enzo</p></li>
                        <li><a href="./admin/edit-profile.php">Editer profil</a></li>
                        <li><a href="">Déconnexion</a></li>
                    </ul>
                </details>
            </nav>
        </header>

        <main id="main-form">
            <article>
                <h3>Suppression du tournoi</h3>
                <form>
                    <p>Êtes-vous sûr de vouloir supprimer ce tournoi ?<br><br>Si oui écrivez "supprimer" ci-dessous et confirmer</p>
                    <label for="delete"><input class="form" type="text" name="delete" id="delete" placeholder="supprimer" required></label>
                    <button type="submit">Supprimer</button>
                    <section class="option">
                        <a href="./admin/edit-tournament.php">Annuler</a>
                    </section>
                </form>
            </article>
        </main>

        <footer>
            <p>@2022 Enzo Vullo</p>
        </footer>
    </body>
</html>