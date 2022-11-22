<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="icon" href="../images/logo-removebg.png" type="img/x-icon" />
        <title>eWins - Contact</title>
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
                <h3>Contactez-nous</h3>
                <form>
                    <label for="username"
                        ><input
                            class="form"
                            id="username"
                            type="email"
                            required
                            placeholder="e-mail"
                    /></label>
                    <label for="subject"
                        ><input class="form" type="text" required placeholder="Intitulé du message"
                    /></label>
                    <label for="message">
                        <textarea
                            class="form"
                            id="message"
                            cols="30"
                            rows="10"
                            required
                            placeholder="Votre message"
                        ></textarea>
                    </label>
                    <button type="submit">Envoyer</button>
                </form>
            </article>
        </main>

        <?php include("../inc/footer.inc.php") ?>
    </body>
</html>
