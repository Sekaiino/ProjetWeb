<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../images/logo-removebg.png" type="img/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
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
                    <label for="email">
                        <b>Votre adresse email<b class="red">*</b></b>
                        <input
                            class="form"
                            id="email"
                            type="email"
                            required
                            placeholder="ex: xyz@yoursite.com">
                    </label>
                    <label for="subject">
                        <b>Sujet de votre message<b class="red">*</b></b>
                        <input 
                            class="form" 
                            type="text" 
                            required>
                    </label>
                    <label for="message">
                        <b>Votre message<b class="red">*</b></b>
                        <textarea
                            class="form"
                            id="message"
                            cols="30"
                            rows="10"
                            required>
                        </textarea>
                    </label>
                    <button type="submit">Envoyer</button>
                </form>
            </article>
        </main>

        <?php include("../inc/footer.inc.php") ?>
    </body>
</html>
