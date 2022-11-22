<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="icon" href="../images/logo-removebg.png" type="img/x-icon" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
                <div>
                    <li>
                        <a href="./admin/edit-score.php"><button>Edition des scores</button></a>
                    </li>
                    <li>
                        <a href="./admin/edit-tournament.php"
                            ><button>Edition des tournois</button></a
                        >
                    </li>
                </div>
                <li class="state"><select name="state" id="state">
                    <option value="all">Tous</option>
                    <option value="open">Ouvert</option>
                    <option value="closed">Fermé</option>
                </select></li>
            </ul>
            <div id="main-display">
                <article>
                    <details>
                        <summary>Nom du tournoi</summary>
                        <ul>
                            <li><span>Sport:</span> belote</li>
                            <li><span>Nombre d'inscrits:</span> 10</li>
                            <li><span>Places disponibles:</span> 2</li>
                            <li><span>Statut:</span> ouvert</li>
                            <li><span>Date de fin des inscriptions:</span> O2 Avril 2022</li>
                            <li><span>Date d'ouverture du tournoi:</span> 07 Avril 2022</li>
                            <li><button>Rejoindre</button></li>
                        </ul>
                        <section>
                            <div id="player">
                                <h3>Liste des participants</h3>
                                <ul>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                </ul>
                            </div>
                            <div id="tree">
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p><span class="material-symbols-outlined">military_tech</span>Joueur</p>
                                </div>
                            </div>
                        </section>
                    </details>
                </article>
                <article>
                    <details>
                        <summary>Nom du tournoi</summary>
                        <ul>
                            <li><span>Sport:</span> échecs</li>
                            <li><span>Nombre d'inscrits:</span> 10</li>
                            <li><span>Places disponibles:</span> 2</li>
                            <li><span>Statut:</span> ouvert</li>
                            <li><span>Date de fin des inscriptions:</span> O2 Avril 2022</li>
                            <li><span>Date d'ouverture du tournoi:</span> 07 Avril 2022</li>
                            <li><button>Rejoindre</button></li>
                        </ul>
                        <section>
                            <div id="player">
                                <h3>Liste des participants</h3>
                                <ul>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                </ul>
                            </div>
                            <div id="tree">
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p><span class="material-symbols-outlined">military_tech</span>Joueur</p>
                                </div>
                            </div>
                        </section>
                    </details>
                </article>
                <article>
                    <details>
                        <summary>Nom du tournoi</summary>
                        <ul>
                            <li><span>Sport:</span> tennis</li>
                            <li><span>Nombre d'inscrits:</span> 10</li>
                            <li><span>Places disponibles:</span> 2</li>
                            <li><span>Statut:</span> ouvert</li>
                            <li><span>Date de fin des inscriptions:</span> O2 Avril 2022</li>
                            <li><span>Date d'ouverture du tournoi:</span> 07 Avril 2022</li>
                            <li><button>Rejoindre</button></li>
                        </ul>
                        <section>
                            <div id="player">
                                <h3>Liste des participants</h3>
                                <ul>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                </ul>
                            </div>
                            <div id="tree">
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p><span class="material-symbols-outlined">military_tech</span>Joueur</p>
                                </div>
                            </div>
                        </section>
                    </details>
                </article>
                <article>
                    <details>
                        <summary>Nom du tournoi</summary>
                        <ul>
                            <li><span>Sport:</span> ping-pong</li>
                            <li><span>Nombre d'inscrits:</span> 10</li>
                            <li><span>Places disponibles:</span> 2</li>
                            <li><span>Statut:</span> ouvert</li>
                            <li><span>Date de fin des inscriptions:</span> O2 Avril 2022</li>
                            <li><span>Date d'ouverture du tournoi:</span> 07 Avril 2022</li>
                            <li><button>Rejoindre</button></li>
                        </ul>
                        <section>
                            <div id="player">
                                <h3>Liste des participants</h3>
                                <ul>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                    <li>Joueur: inscrit</li>
                                </ul>
                            </div>
                            <div id="tree">
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p><span class="material-symbols-outlined">military_tech</span>Joueur</p>
                                </div>
                            </div>
                        </section>
                    </details>
                </article>
                <article>
                    <details>
                        <summary>Nom du tournoi</summary>
                        <ul>
                            <li><span>Sport:</span> FIFA</li>
                            <li><span>Nombre d'inscrits:</span> 10</li>
                            <li><span>Places disponibles:</span> 2</li>
                            <li><span>Statut:</span> ouvert</li>
                            <li><span>Date de fin des inscriptions:</span> O2 Avril 2022</li>
                            <li><span>Date d'ouverture du tournoi:</span> 07 Avril 2022</li>
                            <li><button>Rejoindre</button></li>
                        </ul>
                        <section>
                            <div id="player">
                                <h3>Liste des participants</h3>
                                <ul>
                                    <li>Joueur</li>
                                    <li>Joueur</li>
                                    <li>Joueur</li>
                                    <li>Joueur</li>
                                    <li>Joueur</li>
                                    <li>Joueur</li>
                                    <li>Joueur</li>
                                    <li>Joueur</li>
                                </ul>
                            </div>
                            <div id="tree">
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p>Joueur:<span> 0</span></p>
                                    <br>
                                    <p>Joueur:<span> 0</span></p>
                                </div>
                                <div class="tree-column">
                                    <p><span class="material-symbols-outlined">military_tech</span>Joueur</p>
                                </div>
                            </div>
                        </section>
                    </details>
                </article>
            </div>
        </main>
        
        <?php include("../inc/footer.inc.php") ?>
    </body>
</html>
