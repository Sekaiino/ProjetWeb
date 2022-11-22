<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style.css" />
        <title>eWins - Contact</title>
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
                        <a href="../pages/tournois.php" data-text="&nbsp;Tournois&nbsp;"
                            >&nbsp;Tournois&nbsp;</a
                        >
                    </li>
                    <li>
                        <a href="../pages/contact.php" data-text="&nbsp;Contact&nbsp;"
                            >&nbsp;Contact&nbsp;</a
                        >
                    </li>
                </ul>
                <div>
                    <a href="../pages/login.php">
                        <button>Se connecter</button>
                    </a>
                    <a href="../pages/create.php">
                        <button>Créer un compte</button>
                    </a>
                </div>
                <!-- <details class="user-profile">
                    <summary><img src="./images/pp.png" alt="profile picture"></summary>
                    <ul>
                        <li><p>Vullo Enzo</p></li>
                        <li><a href="./edit-profile.php">Editer profil</a></li>
                        <li><a href="">Déconnexion</a></li>
                    </ul>
                </details> -->
            </nav>
        </header>

        <main id="main-form">
            <article>
                <h3>Contactez-nous</h3>
                <form>
                    <label for="username"
                        ><input
                            class="form"
                            id="username"
                            type="email"
                            required
                            placeholder="e-mail"
                    /></label>
                    <label for="subject"
                        ><input class="form" type="text" required placeholder="Intitulé du message"
                    /></label>
                    <label for="message">
                        <textarea
                            class="form"
                            id="message"
                            cols="30"
                            rows="10"
                            required
                            placeholder="Votre message"
                        ></textarea>
                    </label>
                    <button type="submit">Envoyer</button>
                </form>
            </article>
        </main>

        <footer>
            <p>@2022 Enzo Vullo</p>
        </footer>
    </body>
</html>
