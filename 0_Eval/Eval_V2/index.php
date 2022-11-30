<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/style.css" />
        <link rel="icon" href="./images/logo-removebg.png" type="img/x-icon" />
        <title>eWins - Accueil</title>
    </head>
    <body>
        <?php
            $a = FALSE; 
            $img = ".";
            $pages = "./pages";
            $index = ".";
            include("./inc/header.inc.php") 
        ?>

        <main id="accueil">
            <h2>Les 5 derniers tournois ouverts</h2>
            <article>
                <h3>Tournoi 1</h3>
                <p>
                    Tournoi de belote qui opposera les joueurs dans le but de remporter le
                    tournoi qui aura pour seul prix, la satisfaction personelle du vainqueur.
                </p>
                <ul class="tournament-details">
                    <li><b>Sport:</b> belote</li>
                    <li><b>Nombre d'inscrits:</b> 10</li>
                    <li><b>Places disponibles:</b> 2</li>
                    <li><b>Statut:</b> ouvert</li>
                    <li><b>Date de fin des inscriptions:</b> O2 Avril 2022</li>
                    <li><b>Date d'ouverture du tournoi:</b> 07 Avril 2022</li>
                </ul>
            </article>
            <article>
                <h3>Tournoi 2</h3>
                <p>
                    Tournoi de tennis qui opposera les joueurs dans le but de remporter le
                    tournoi qui aura pour seul prix, la satisfaction personelle du vainqueur.
                </p>
                <ul class="tournament-details">
                    <li><b>Sport:</b> échecs</li>
                    <li><b>Nombre d'inscrits:</b> 10</li>
                    <li><b>Places disponibles:</b> 2</li>
                    <li><b>Statut:</b> ouvert</li>
                    <li><b>Date de fin des inscriptions:</b> O2 Avril 2022</li>
                    <li><b>Date d'ouverture du tournoi:</b> 07 Avril 2022</li>
                </ul>
            </article>
            <article>
                <h3>Tournoi 3</h3>
                <p>
                    Tournoi de ping-pong qui opposera les joueurs dans le but de remporter le
                    tournoi qui aura pour seul prix, la satisfaction personelle du vainqueur.
                </p>
                <ul class="tournament-details">
                    <li><b>Sport:</b> tennis</li>
                    <li><b>Nombre d'inscrits:</b> 10</li>
                    <li><b>Places disponibles:</b> 2</li>
                    <li><b>Statut:</b> ouvert</li>
                    <li><b>Date de fin des inscriptions:</b> O2 Avril 2022</li>
                    <li><b>Date d'ouverture du tournoi:</b> 07 Avril 2022</li>
                </ul>
            </article>
            <article>
                <h3>Tournoi 4</h3>
                <p>
                    Tournoi de FIFA qui opposera les joueurs dans le but de remporter le tournoi
                    qui aura pour seul prix, la satisfaction personelle du vainqueur.
                </p>
                <ul class="tournament-details">
                    <li><b>Sport:</b> ping-pong</li>
                    <li><b>Nombre d'inscrits:</b> 10</li>
                    <li><b>Places disponibles:</b> 2</li>
                    <li><b>Statut:</b> ouvert</li>
                    <li><b>Date de fin des inscriptions:</b> O2 Avril 2022</li>
                    <li><b>Date d'ouverture du tournoi:</b> 07 Avril 2022</li>
                </ul>
            </article>
            <article>
                <h3>Tournoi 5</h3>
                <p>
                    Tournoi d'échecs qui opposera les joueurs dans le but de remporter le
                    tournoi qui aura pour seul prix, la satisfaction personelle du vainqueur.
                </p>
                <ul class="tournament-details">
                    <li><b>Sport:</b> FIFA</li>
                    <li><b>Nombre d'inscrits:</b> 10</li>
                    <li><b>Places disponibles:</b> 2</li>
                    <li><b>Statut:</b> ouvert</li>
                    <li><b>Date de fin des inscriptions:</b> O2 Avril 2022</li>
                    <li><b>Date d'ouverture du tournoi:</b> 07 Avril 2022</li>
                </ul>
            </article>
        </main>

        <?php include("./inc/footer.inc.php") ?>
    </body>
</html>
