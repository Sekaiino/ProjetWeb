<header>
    <nav class="nav-tel">
        <details>
            <summary>
                <img src=<?php echo $img . "/images/logo-removebg.png" ?> alt="logo-eWins" >
                <h1>eWins</h1>
            </summary>
            <ul class="nav-ul">
                <li>
                    <a href=<?php echo $index . "/index.php" ?> data-text="&nbsp;Accueil" >&nbsp;Accueil</a>
                </li>
                <li>
                    <a href=<?php echo $pages . "/tournament.php" ?> data-text="&nbsp;Tournois" >&nbsp;Tournois</a>
                </li>
                <li>
                    <a href=<?php echo $pages . "/contact.php" ?> data-text="&nbsp;Contact" >&nbsp;Contact</a>
                </li>
            </ul>
        </details>

        <?php if($a == FALSE): ?>
            <aside>
                <a href=<?php echo $pages . "/login.php" ?>>
                    Se connecter
                </a>
                <a href=<?php echo $pages . "/register.php" ?>>
                    Créer un compte
                </a>
            </aside>

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

    <nav>
        <ul class="nav-ul">
            <li>
                <img src=<?php echo $img . "/images/logo-removebg.png" ?> alt="logo-eWins" >
                <h1>eWins</h1>
            </li>
            <li>
                <a href=<?php echo $index . "/index.php" ?> data-text="&nbsp;Accueil">&nbsp;Accueil</a>
            </li>
            <li>
                <a href=<?php echo $pages . "/tournament.php" ?> data-text="&nbsp;Tournois">&nbsp;Tournois</a>
            </li>
            <li>
                <a href=<?php echo $pages . "/contact.php" ?> data-text="&nbsp;Contact">&nbsp;Contact</a>
            </li>
        </ul>

        <?php if($a == FALSE): ?>
            <ul class="connect">
                <li>
                    <a class="btn" href=<?php echo $pages . "/login.php" ?>>
                        Se connecter
                    </a>
                </li>
                <li>
                    <a class="btn" href=<?php echo $pages . "/register.php" ?>>
                        Créer un compte
                    </a>
                </li>
            </ul>

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