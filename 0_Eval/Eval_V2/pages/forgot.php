<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../images/logo-removebg.png" type="img/x-icon">
        <title>eWins - Mot de passe oublié</title>
    </head>
    <body>
        <?php
            $a = FALSE;
            $img = "..";
            $pages = ".";
            $index = ".."; 
            include("../inc/header.inc.php") 
        ?>

        <main id="main-form">
            <article>
                <h3>Réinitialiser le mot de passe</h3>
                <form>
                    <label for="username"
                        ><input
                            class="form"
                            id="username"
                            type="email"
                            required
                            placeholder="e-mail de récupération"
                    ></label>
                    <button type="submit">Recevoir l'e-mail de récupération</button>
                </form>
                <aside class="option">
                    <a href="./register.php">Créer un compte ?</a>
                </aside>
            </article>
        </main>

        <?php include("../inc/footer.inc.php") ?>
    </body>
</html>
