<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" href="../../images/logo-removebg.png" type="img/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
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
                        <b>Sélectionnez le tournoi à modifier:</b>
                        <select name="tournament" id="tournament">
                            <option value="tournoi-1">Tournoi 1</option>
                            <option value="tournoi-2">Tournoi 2</option>
                            <option value="tournoi-3">Tournoi 3</option>
                            <option value="tournoi-4">Tournoi 4</option>
                            <option value="tournoi-5">Tournoi 5</option>
                        </select>
                    </label>
                    <aside id="score">
                        <h3>Scores:</h3>
                        <section>
                            <h4>Joueur 1</h4>
                            <select name="player1" id="player1">
                                <option value="joueur-1">Joueur 1</option>
                                <option value="joueur-2">Joueur 2</option>
                                <option value="joueur-3">Joueur 3</option>
                                <option value="joueur-4">Joueur 4</option>
                                <option value="joueur-5">Joueur 5</option>
                                <option value="joueur-6">Joueur 6</option>
                                <option value="joueur-7">Joueur 7</option>
                                <option value="joueur-8">Joueur 8</option>
                            </select>
                            <label for="score-j1"><input name="score-j1" id="score-j1" type="number" min="0" value="0"></label>
                        </section>
                        <section>
                            <h4>Joueur 2</h4>
                            <label for="score-j2"><input name="score-j2" id="score-j2" type="number" min="0" value="0"></label>
                            <select name="player2" id="player2">
                                <option value="joueur-1">Joueur 1</option>
                                <option value="joueur-2">Joueur 2</option>
                                <option value="joueur-3">Joueur 3</option>
                                <option value="joueur-4">Joueur 4</option>
                                <option value="joueur-5">Joueur 5</option>
                                <option value="joueur-6">Joueur 6</option>
                                <option value="joueur-7">Joueur 7</option>
                                <option value="joueur-8">Joueur 8</option>
                            </select>
                        </section>
                        <section class="win">
                            <h4>Confirmer le gagnant:</h4>
                            <label for="win-player1"><input type="radio" name="winner" id="win-player1">Joueur 1</label>
                            <label for="win-player2"><input type="radio" name="winner" id="win-player2">Joueur 2</label>
                        </section>
                    </aside>

                    <button type="submit">Confirmer</button>
                </form>
            </article>
        </main>

        <?php include("../../inc/footer.inc.php") ?>
    </body>
</html>
