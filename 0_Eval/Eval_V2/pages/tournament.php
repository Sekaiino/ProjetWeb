<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../images/logo-removebg.png" type="img/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
        <title>eWins - Liste des tournois</title>
    </head>
    <body>
        <?php
            $a = TRUE;
            $img = "..";
            $pages = ".";
            $index = ".."; 
            include("../inc/header.inc.php") 
        ?>

        <main id="tournois">
            <ul class="btn-ul">
                <li>
                    <a href="./admin/edit-score.php">Edition des scores</a>
                </li>
                <li>
                    <a href="./admin/edit-tournament.php">Edition des tournois</a>
                </li>
                <li class="state">
                    <select name="state" id="state">
                        <option value="all">Tous</option>
                        <option value="open">Ouvert</option>
                        <option value="closed">Fermé</option>
                    </select>
                </li>
            </ul>
            <section id="main-display">
                <h2>Liste des tournois</h2>
                <article>
                    <details>
                        <summary>Nom du tournoi</summary>
                        <ul class="tournament-details">
                            <li><b>Sport:</b> belote</li>
                            <li><b>Nombre d'inscrits:</b> 10</li>
                            <li><b>Places disponibles:</b> 2</li>
                            <li><b>Statut:</b> ouvert</li>
                            <li><b>Date de fin des inscriptions:</b> O2 Avril 2022</li>
                            <li><b>Date d'ouverture du tournoi:</b> 07 Avril 2022</li>
                            <li><button>Rejoindre</button></li>
                        </ul>
                    </details>
                </article>
                <article>
                    <details>
                        <summary>Nom du tournoi</summary>
                        <ul class="tournament-details">
                            <li><b>Sport:</b> échecs</li>
                            <li><b>Nombre d'inscrits:</b> 10</li>
                            <li><b>Places disponibles:</b> 2</li>
                            <li><b>Statut:</b> ouvert</li>
                            <li><b>Date de fin des inscriptions:</b> O2 Avril 2022</li>
                            <li><b>Date d'ouverture du tournoi:</b> 07 Avril 2022</li>
                            <li><button>Rejoindre</button></li>
                        </ul>
                    </details>
                </article>
                <article>
                    <details>
                        <summary>Nom du tournoi</summary>
                        <ul class="tournament-details">
                            <li><b>Sport:</b> tennis</li>
                            <li><b>Nombre d'inscrits:</b> 10</li>
                            <li><b>Places disponibles:</b> 2</li>
                            <li><b>Statut:</b> ouvert</li>
                            <li><b>Date de fin des inscriptions:</b> O2 Avril 2022</li>
                            <li><b>Date d'ouverture du tournoi:</b> 07 Avril 2022</li>
                            <li><button>Rejoindre</button></li>
                        </ul>
                    </details>
                </article>
                <article>
                    <details>
                        <summary>Nom du tournoi</summary>
                        <ul class="tournament-details">
                            <li><b>Sport:</b> ping-pong</li>
                            <li><b>Nombre d'inscrits:</b> 10</li>
                            <li><b>Places disponibles:</b> 2</li>
                            <li><b>Statut:</b> ouvert</li>
                            <li><b>Date de fin des inscriptions:</b> O2 Avril 2022</li>
                            <li><b>Date d'ouverture du tournoi:</b> 07 Avril 2022</li>
                            <li><button>Rejoindre</button></li>
                        </ul>
                    </details>
                </article>
                <article>
                    <details>
                        <summary>Nom du tournoi</summary>
                        <ul class="tournament-details">
                            <li><b>Sport:</b> FIFA</li>
                            <li><b>Nombre d'inscrits:</b> 10</li>
                            <li><b>Places disponibles:</b> 2</li>
                            <li><b>Statut:</b> ouvert</li>
                            <li><b>Date de fin des inscriptions:</b> O2 Avril 2022</li>
                            <li><b>Date d'ouverture du tournoi:</b> 07 Avril 2022</li>
                            <li><button>Rejoindre</button></li>
                        </ul>
                    </details>
                </article>
            </section>
        </main>
        
        <?php include("../inc/footer.inc.php") ?>
    </body>
</html>
