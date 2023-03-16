<?php
if(strpos($_SERVER['PHP_SELF'], "php/")) {
    $img = "../images/";
    $pages = "./";
    $index = "../index.php";
} else {
    $img = "./images/";
    $pages = "./php/";
    $index = "./index.php";
}

$a = false;
?>
<header>
    <nav>
        <ul class="nav-ul">
            <li>
                <img src="<?php echo $img . "logo-removebg.png" ?>" alt="logo-eWins" >
                <h1>eWins</h1>
            </li>
            <li>
                <a href="<?php echo $index ?>" data-text="&nbsp;Accueil&nbsp;">&nbsp;Accueil</a>
            </li>
            <li>
                <a href="<?php echo $pages . "tournament.php" ?>" data-text="&nbsp;Tournois&nbsp;">&nbsp;Tournois</a>
            </li>
            <li>
                <a href="<?php echo $pages . "contact.php" ?>" data-text="&nbsp;Contact&nbsp;">&nbsp;Contact</a>
            </li>
        </ul>

        <?php if(!$a): ?>
            <ul class="connect">
                <li>
                    <a class="btn" href="<?php echo $pages . "login.php" ?>">
                        Se connecter
                    </a>
                </li>
                <li>
                    <a class="btn" href="<?php echo $pages . "register.php" ?>">
                        Créer un compte
                    </a>
                </li>
            </ul>

        <?php else: ?>
            <details class="user-profile">
                <summary>
                    <span id="arrow" class="material-symbols-outlined">arrow_forward_ios</span>
                    <p>Enzo Vullo</p>
                    <span class="material-symbols-outlined">settings</span>
                </summary>
                <ul>
                    <li><img src="<?php echo $img . "pp.png"; ?>" alt="profile picture"></li>
                    <li>
                        <span class="material-symbols-outlined">manage_accounts</span>
                        <a href="<?php echo $pages . "edit-profile.php" ?>">Éditer profile</a>
                    </li>
                    <li>
                        <span class="material-symbols-outlined">logout</span>
                        <a href="">Déconnexion</a>
                    </li>
                </ul>
            </details>
        <?php endif; ?>
    </nav>
</header>