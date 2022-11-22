<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style.css" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
        />
        <title>eWins - Créer un compte</title>
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
                    <a href="./pages/create.html">
                        <button>Créer un compte</button>
                    </a>
                </div>
                <!-- <details class="user-profile">
                    <summary><img src="./images/pp.png" alt="profile picture"></summary>
                    <ul>
                        <li><p>Vullo Enzo</p></li>
                        <li><a href="../edit-profile.html">Editer profil</a></li>
                        <li><a href="">Déconnexion</a></li>
                    </ul>
                </details> -->
            </nav>
        </header>

        <main id="main-form">
            <article>
                <h3>Créer un compte</h3>
                <form>
                    <label class="pp" for="pp">
                        <span class="material-symbols-outlined"> add_a_photo</span>
                        modifier votre photo de profil
                    </label>
                    <input type="file" name="pp" id="pp" accept=".png, .jpg, .jpeg" />
                    <div id="name">
                        <label for="nom"
                            ><input class="form" id="nom" type="text" required placeholder="nom"
                        /></label>
                        <label for="prenom"
                            ><input
                                class="form"
                                id="prenom"
                                type="text"
                                required
                                placeholder="prenom"
                        /></label>
                    </div>
                    <label for="username"
                        ><input
                            class="form"
                            id="username"
                            type="email"
                            required
                            placeholder="e-mail"
                    /></label>
                    <label for="pseudo"
                        ><input class="form" id="pseudo" type="text" required placeholder="pseudo"
                    /></label>
                    <label for="password"
                        ><input
                            class="form"
                            id="password"
                            type="password"
                            required
                            placeholder="mot de passe"
                    /></label>
                    <label for="confirmPassword"
                        ><input
                            class="form"
                            id="confirmPassword"
                            type="password"
                            required
                            placeholder="confirmer mot de passe"
                    /></label>
                    <button type="submit">Créer</button>
                </form>
                <section class="option">
                    <a href="./login.html">Déjà enregistré ? Se connecter</a>
                </section>
            </article>
        </main>

        <footer>
            <p>@2022 Enzo Vullo</p>
        </footer>
    </body>
</html>
