<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../images/logo-removebg.png" type="img/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
        <title>eWins - Mot de passe oublié</title>
    </head>
    <body>
        <?php include("../inc/header.inc.php") ?>
        <main id="main-form">
            <article>
                <h3>Réinitialiser le mot de passe</h3>
                <form>
                    <label for="email">
                        <b>Votre adresse mail de récupération<b class="red">*</b></b>
                        <input
                            class="form"
                            id="email"
                            type="email"
                            required
                            placeholder="ex: xyz@yoursite.com">
                    </label>
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
