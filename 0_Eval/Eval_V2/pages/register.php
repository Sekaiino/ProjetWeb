<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../images/logo-removebg.png" type="img/x-icon">
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
        >
        <title>eWins - Créer un compte</title>
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
                <h3>Créer un compte</h3>
                <form>
                    <label class="pp" for="pp">
                        <span class="material-symbols-outlined"> add_a_photo</span>
                        modifier votre photo de profil
                    </label>
                    <input type="file" name="pp" id="pp" accept=".png, .jpg, .jpeg">
                    <aside id="name">
                        <label for="nom">
                            <b>Votre nom<b class="red">*</b></b>
                            <input 
                                class="form" 
                                id="nom" 
                                type="text" 
                                required 
                                placeholder="ex: Doe">
                        </label>
                        <label for="prenom">
                            <b>Votre prénom<b class="red">*</b></b>
                            <input
                                class="form"
                                id="prenom"
                                type="text"
                                required
                                placeholder="ex: John"
                        ></label>
                    </aside>
                    <label for="email"
                        ><b>Votre email<b class="red">*</b></b><input
                            class="form"
                            id="email"
                            type="email"
                            required
                            placeholder="ex: xyz@yoursite.com"
                    ></label>
                    <label for="pseudo">
                        <b>Votre pseudo<b class="red">*</b></b>
                        <input 
                            class="form" 
                            id="pseudo" 
                            type="text" 
                            required 
                            placeholder="ex: j.doe07"
                    ></label>
                    <label for="password">
                        <b>Votre mot de passe<b class="red">*</b></b>
                        <input
                            class="form"
                            id="password"
                            type="password"
                            required
                            placeholder="****"
                    ></label>
                    <label for="confirmPassword">
                        <b>Confirmer votre mot de passe<b class="red">*</b></b>
                        <input
                            class="form"
                            id="confirmPassword"
                            type="password"
                            required
                            placeholder="****"
                    ></label>
                    <button type="submit">Créer</button>
                </form>
                <aside class="option">
                    <a href="./login.php">Déjà enregistré ? Se connecter</a>
                </aside>
            </article>
        </main>

        <?php include("../inc/footer.inc.php") ?>
    </body>
</html>
