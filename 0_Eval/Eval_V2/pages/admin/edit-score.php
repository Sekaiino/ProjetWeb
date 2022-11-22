<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../../css/style.css" />
        <title>eWins - Edition scores</title>
    </head>
    <body>
        <header>
            <nav>
                <ul class="nav-ul">
                    <li>
                        <img src="../../images/logo-removebg.png" alt="" />
                        <p>eWins</p>
                    </li>
                    <li>
                        <a href="../../index.php" data-text="&nbsp;Accueil&nbsp;"
                            >&nbsp;Accueil&nbsp;</a
                        >
                    </li>
                    <li>
                        <a href="../tournois.php" data-text="&nbsp;Tournois&nbsp;"
                            >&nbsp;Tournois&nbsp;</a
                        >
                    </li>
                    <li>
                        <a href="../contact.php" data-text="&nbsp;Contact&nbsp;"
                            >&nbsp;Contact&nbsp;</a
                        >
                    </li>
                </ul>
                <!-- <div>
                    <a href="../pages/login.php">
                        <button>Se connecter</button>
                    </a>
                    <a href="../pages/create.php">
                        <button>Créer un compte</button>
                    </a>
                </div> -->
                <details class="user-profile">
                    <summary><img src="../../images/pp.png" alt="profile picture" /></summary>
                    <ul>
                        <li><p>Vullo Enzo</p></li>
                        <li><a href="../edit-profile.php">Editer profil</a></li>
                        <li><a href="">Déconnexion</a></li>
                    </ul>
                </details>
            </nav>
        </header>

        <main id="main-form">
            <article>
                <h3>Edition des scores</h3>
                <form>
                    <label class="edit" for="tournament">
                        <p>Sélectionner le tournoi à modifier:</p>
                        <select name="tournament" id="tournament">
                            <option value="tournoi-1">Tournoi 1</option>
                            <option value="tournoi-2">Tournoi 2</option>
                            <option value="tournoi-3">Tournoi 3</option>
                            <option value="tournoi-4">Tournoi 4</option>
                            <option value="tournoi-5">Tournoi 5</option>
                        </select>
                    </label>
                    <table>
                        <tr>
                            <th>Quart de finale</th>
                        </tr>
                        <tr>
                            <td>
                                <label for="joueur1"
                                    >Joueur <input type="number" name="joueur1"
                                /></label>
                            </td>
                            <td>
                                <label for="joueur2"
                                    ><input type="number" name="joueur2" />Joueur</label
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="joueur1"
                                    >Joueur <input type="number" name="joueur1"
                                /></label>
                            </td>
                            <td>
                                <label for="joueur2"
                                    ><input type="number" name="joueur2" />Joueur</label
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="joueur1"
                                    >Joueur <input type="number" name="joueur1"
                                /></label>
                            </td>
                            <td>
                                <label for="joueur2"
                                    ><input type="number" name="joueur2" />Joueur</label
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="joueur1"
                                    >Joueur <input type="number" name="joueur1"
                                /></label>
                            </td>
                            <td>
                                <label for="joueur2"
                                    ><input type="number" name="joueur2" />Joueur</label
                                >
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th>Demi-finale</th>
                        </tr>
                        <tr>
                            <td>
                                <label for="joueur1"
                                    >Joueur <input type="number" name="joueur1"
                                /></label>
                            </td>
                            <td>
                                <label for="joueur2"
                                    ><input type="number" name="joueur2" />Joueur</label
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="joueur1"
                                    >Joueur <input type="number" name="joueur1"
                                /></label>
                            </td>
                            <td>
                                <label for="joueur2"
                                    ><input type="number" name="joueur2" />Joueur</label
                                >
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th>Finale</th>
                        </tr>
                        <tr>
                            <td>
                                <label for="joueur1"
                                    >Joueur <input type="number" name="joueur1"
                                /></label>
                            </td>
                            <td>
                                <label for="joueur2"
                                    ><input type="number" name="joueur2" />Joueur</label
                                >
                            </td>
                        </tr>
                    </table>
                    <label for="winner"><input class="form win" type="text" name="winner" id="winner" placeholder="Gagnant"></label>
                    <button type="submit">Confirmer</button>
                </form>
            </article>
        </main>

        <footer>
            <p>@2022 Enzo Vullo</p>
        </footer>
    </body>
</html>
