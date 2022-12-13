<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="icon" href="../../images/logo-removebg.png" type="img/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
        <title>eWins - Edition scores</title>
    </head>
    <body>
        <?php
            $a = TRUE;
            $img = "../..";
            $pages = "..";
            $index = "../.."; 
            include("../../inc/header.inc.php") 
        ?>

        <main id="main-form">
            <article>
                <form>
                    <h3>Scores:</h3>
                    <section class="edit-score">
                        <h4>1/4 de finale</h4>
                        <aside>
                            <label for="quart_1j1">Joueur1</label><input class="first-input" name="quart_1j1" id="quart_1j1" type="number" min="0" value="0"><b>-</b>
                            <input class="second-input" name="quart_1j2" id="quart_1j2" type="number" min="0" value="0"><label for="quart_1j2">Joueur2</label>
                            <button>Valider vainqueur</button>
                        </aside>
                        <aside>
                            <label for="quart_2j1">Joueur1</label><input class="first-input" name="quart_2j1" id="quart_2j1" type="number" min="0" value="0"><b>-</b>
                            <input class="second-input" name="quart_2j2" id="quart_2j2" type="number" min="0" value="0"><label for="quart_2j2">Joueur2</label>
                            <button>Valider vainqueur</button>
                        </aside>
                        <aside>
                            <label for="quart_3j1">Joueur1</label><input class="first-input" name="quart_3j1" id="quart_3j1" type="number" min="0" value="0"><b>-</b>
                            <input class="second-input" name="quart_3j2" id="quart_3j2" type="number" min="0" value="0"><label for="quart_3j2">Joueur2</label>
                            <button>Valider vainqueur</button>
                        </aside>
                        <aside>
                            <label for="quart_4j1">Joueur1</label><input class="first-input" name="quart_4j1" id="quart_4j1" type="number" min="0" value="0"><b>-</b>
                            <input class="second-input" name="quart_4j2" id="quart_4j2" type="number" min="0" value="0"><label for="quart_4j2">Joueur2</label>
                            <button>Valider vainqueur</button>
                        </aside>
                    </section>
                    <section class="edit-score">
                        <h4>1/2 finale</h4>
                        <aside>
                            <label for="demi_1j1">Joueur1</label><input class="first-input" name="demi_1j1" id="demi_1j1" type="number" min="0" value="0"><b>-</b>
                            <input class="second-input" name="demi_1j2" id="demi_1j2" type="number" min="0" value="0"><label for="demi_1j2">Joueur2</label>
                            <button>Valider vainqueur</button>
                        </aside>
                        <aside>
                            <label for="demi_2j1">Joueur1</label><input class="first-input" name="demi_2j1" id="demi_2j1" type="number" min="0" value="0"><b>-</b>
                            <input class="second-input" name="demi_2j2" id="demi_2j2" type="number" min="0" value="0"><label for="demi_2j2">Joueur2</label>
                            <button>Valider vainqueur</button>
                        </aside>
                    </section>
                    <section class="edit-score">
                        <h4>Finale</h4>
                        <aside>
                            <label for="fin_1j1">Joueur1</label><input class="first-input" name="fin_1j1" id="fin_1j1" type="number" min="0" value="0"><b>-</b>
                            <input class="second-input" name="fin_1j2" id="fin_1j2" type="number" min="0" value="0"><label for="fin_1j2">Joueur2</label>
                            <button>Valider vainqueur</button>
                        </aside>
                    </section>
                    <button type="submit">Confirmer</button>
                </form>
            </article>
        </main>

        <?php include("../../inc/footer.inc.php") ?>
    </body>
</html>
