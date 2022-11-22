<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style.css" />
        <title>eWins - S'identifier</title>
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
                        <a href="../index.html" data-text="&nbsp;Accueil&nbsp;"
                            >&nbsp;Accueil&nbsp;</a
                        >
                    </li>
                    <li>
                        <a href="../pages/tournois.html" data-text="&nbsp;Tournois&nbsp;"
                            >&nbsp;Tournois&nbsp;</a
                        >
                    </li>
                    <li>
                        <a href="../pages/contact.html" data-text="&nbsp;Contact&nbsp;"
                            >&nbsp;Contact&nbsp;</a
                        >
                    </li>
                </ul>
                <div>
                    <a href="../pages/login.html">
                        <button>Se connecter</button>
                    </a>
                    <a href="../pages/create.html">
                        <button>Créer un compte</button>
                    </a>
                </div>
                <!-- <details class="user-profile">
                    <summary><img src="./images/pp.png" alt="profile picture"></summary>
                    <ul>
                        <li><p>Vullo Enzo</p></li>
                        <li><a href="./edit-profile.html">Editer profil</a></li>
                        <li><a href="">Déconnexion</a></li>
                    </ul>
                </details> -->
            </nav>
        </header>

        <main id="main-form">
            <article>
                <h3>Identifiez-vous</h3>
                <form>
                    <label for="username"
                        ><input
                            class="form"
                            id="username"
                            type="email"
                            required
                            placeholder="e-mail"
                    /></label>
                    <label for="password"
                        ><input
                            class="form"
                            id="password"
                            type="password"
                            required
                            placeholder="mot de passe"
                    /></label>
                    <label id="last" for="remember"
                        ><input id="remember" type="checkbox" /> Se souvenir de moi</label
                    >
                    <button type="submit">Se connecter</button>
                </form>
                <div class="option">
                    <a href="./forgot.html">Mot de passe oublié ?</a>
                    <a href="./create.html">Créer un compte ?</a>
                </div>
            </article>
        </main>

        <footer>
            <p>@2022 Enzo Vullo</p>
        </footer>
    </body>
</html>
