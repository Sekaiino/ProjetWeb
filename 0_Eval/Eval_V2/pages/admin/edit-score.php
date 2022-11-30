<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" href="../../images/logo-removebg.png" type="img/x-icon">
        <title>eWins - Edition scores</title>
    </head>
    <body>
        <?php
            $a = TRUE;
            $img = "../..";
            $pages = "..";
            $index = "../.."; 
            include("../../inc/header.inc.php") 
        ?>

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

        <?php include("../../inc/footer.inc.php") ?>
    </body>
</html>
