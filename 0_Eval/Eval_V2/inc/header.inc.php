<header>
    <nav>
        <ul class="nav-ul">
            <li>
                <img src=<?php echo $img . "/images/logo-removebg.png" ?> alt="logo-eWins" />
                <p>eWins</p>
            </li>
            <li>
                <a href=<?php echo $index . "/index.php" ?> data-text="&nbsp;Accueil&nbsp;"
                    >&nbsp;Accueil&nbsp;</a
                >
            </li>
            <li>
                <a href=<?php echo $pages . "/tournois.php" ?> data-text="&nbsp;Tournois&nbsp;"
                    >&nbsp;Tournois&nbsp;</a
                >
            </li>
            <li>
                <a href=<?php echo $pages . "/contact.php" ?> data-text="&nbsp;Contact&nbsp;"
                    >&nbsp;Contact&nbsp;</a
                >
            </li>
        </ul>
        <?php if($a == FALSE): ?>
            <div>
                <a href=<?php echo $pages . "/login.php" ?>>
                    <button>Se connecter</button>
                </a>
                <a href=<?php echo $pages . "/create.php" ?>>
                    <button>Créer un compte</button>
                </a>
            </div>
        <?php elseif($a == TRUE): ?>
            <details class="user-profile">
                <summary><img src=<?php echo $img . "/images/pp.png" ?> alt="profile picture"></summary>
                <ul>
                    <li><p>Vullo Enzo</p></li>
                    <li><a href=<?php echo $pages . "/edit-profile.php" ?>>Editer profil</a></li>
                    <li><a href="">Déconnexion</a></li>
                </ul>
            </details>
        <?php endif; ?>
    </nav>
</header>