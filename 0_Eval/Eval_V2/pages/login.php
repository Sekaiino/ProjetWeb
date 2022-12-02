<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../images/logo-removebg.png" type="img/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
        <title>eWins - S'identifier</title>
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
                <h3>Identifiez-vous</h3>
                <form>
                    <label for="email">
                        <b>Votre adresse e-mail<b class="red">*</b></b>
                        <input
                            class="form"
                            id="email"
                            type="email"
                            required
                            placeholder="e-mail"
                    ></label>
                    <label for="password">
                        <b>Votre mot de passe<b class="red">*</b></b>
                        <input
                            class="form"
                            id="password"
                            type="password"
                            required
                            placeholder="mot de passe"
                    ></label>
                    <label id="last" for="remember">
                        <input id="remember" type="checkbox"> 
                        Se souvenir de moi
                    </label>
                    <button type="submit">Se connecter</button>
                </form>
                <aside class="option">
                    <a href="./forgot.php">Mot de passe oublié ?</a>
                    <a href="./register.php">Créer un compte ?</a>
                </aside>
            </article>
        </main>

        <?php include("../inc/footer.inc.php") ?>
    </body>
</html>
