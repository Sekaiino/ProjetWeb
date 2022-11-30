<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="icon" href="../images/logo-removebg.png" type="img/x-icon" />
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
                    <a href="./forgot.php">Mot de passe oublié ?</a>
                    <a href="./register.php">Créer un compte ?</a>
                </div>
            </article>
        </main>

        <?php include("../inc/footer.inc.php") ?>
    </body>
</html>
