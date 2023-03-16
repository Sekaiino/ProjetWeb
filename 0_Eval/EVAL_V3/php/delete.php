<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../images/logo-removebg.png" type="img/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
        <title>eWins - Edition tournois</title>
    </head>
    <body>
        <?php include("../inc/header.inc.php") ?>
        <main id="main-form">
            <article>
                <h3>Suppression du tournoi</h3>
                <form>
                    <p>Êtes-vous sûr de vouloir supprimer ce tournoi ?<br><br>Si oui, écrivez "supprimer" ci-dessous et confirmer</p>
                    <label for="delete"><input class="form" type="text" name="delete" id="delete" placeholder="supprimer" required></label>
                    <button class="delete-btn" type="submit">Supprimer</button>
                    <section class="option">
                        <a href="edit-tournament.php">Annuler</a>
                    </section>
                </form>
            </article>
        </main>

        <?php include("../inc/footer.inc.php") ?>
    </body>
</html>
