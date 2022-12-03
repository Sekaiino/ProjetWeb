<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../images/logo-removebg.png" type="image/x-icon">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../images/logo-removebg.png" type="img/x-icon">
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
        >
        <title>eWins - Editer profil</title>
    </head>
    <body>
        <?php
            $a = TRUE;
            $img = "..";
            $pages = ".";
            $index = ".."; 
            include("../inc/header.inc.php") 
        ?>

        <main id="main-form">
            <article>
                <h3>Editer votre profil</h3>
                <form>
                    <label class="pp" for="pp">
                        <span class="material-symbols-outlined"> add_a_photo</span>
                        modifier votre photo de profil
                    </label>
                    <input type="file" name="pp" id="pp" accept=".png, .jpg, .jpeg">
                    <label for="pseudo">
                        <b>Votre pseudo</b>
                        <input class="form" id="pseudo" type="text" placeholder="ex: j.doe07">
                    </label>
                    <label for="password">
                        <b>Nouveau mot de passe</b>
                        <input
                            class="form"
                            id="password"
                            type="password"
                            placeholder="ex: ****">
                    </label>
                    <label for="confirmPassword">
                        <b>Confirmer le nouveau mot de passe</b>
                        <input
                            class="form"
                            id="confirmPassword"
                            type="password"
                            placeholder="ex: ****">
                    </label>
                    <button type="submit">Confirmer</button>
                </form>
            </article>
        </main>

        <?php include("../inc/footer.inc.php") ?>
    </body>
</html>
