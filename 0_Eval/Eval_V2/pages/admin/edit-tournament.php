<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" href="../../images/logo-removebg.png" type="img/x-icon">
        <title>eWins - Edition tournois</title>
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
                <h3>Modification des tournois</h3>
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
                    <label class="edit" for="sport">
                        <p>Sélectionner le sport concerné par ce tournoi:</p>
                        <select name="sport" id="sport">
                            <option value="belote">Belote</option>
                            <option value="tennis">Tennis</option>
                            <option value="ping-pong">Ping-pong</option>
                            <option value="echecs">Échecs</option>
                            <option value="fifa">FIFA</option>
                        </select>
                    </label>
                    <label class="edit" for="date-d">
                        <p>Date et heure de début du tournoi:</p>
                        <input type="datetime-local" name="date-d" id="date-d">
                    </label>
                    <label class="edit" for="date-f">
                        <p>Date et heure de fin des inscriptions:</p>
                        <input type="datetime-local" name="date-f" id="date-f">
                    </label>
                    <label class="edit" for="nb">
                        <p>Nombre de participants:</p>
                        <input type="number" name="nb" id="nb" value="2" min="2" max="16">
                    </label>
                    <button type="submit">Soumettre</button>
                    <aside class="option">
                        <a href="../delete.php">Supprimer tournoi</a>
                    </aside>
                </form>
            </article>
        </main>

        <?php include("../../inc/footer.inc.php") ?>
    </body>
</html>
