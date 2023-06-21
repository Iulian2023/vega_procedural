<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Vega</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link<?= ($_SERVER['REQUEST_URI'] === '/') ? ' active' : '' ;?>"<?= ($_SERVER['REQUEST_URI'] === '/') ? ' aria-current="page"' : '' ?> href="/">Accueil</a>
                    </li>
                    <?php if ( isset($_SESSION['user']) && !empty($_SESSION['user']) ) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/home">Espace</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Déconnexion</a>
                        </li>
                        <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link<?= ($_SERVER['REQUEST_URI'] === '/login') ? ' active' : '' ;?>"<?= ($_SERVER['REQUEST_URI'] === '/login') ? ' aria-current="page"' : '' ?> href="/login">Conexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?= ($_SERVER['REQUEST_URI'] === '/register') ? ' active' : '' ;?>"<?= ($_SERVER['REQUEST_URI'] === '/register') ? ' aria-current="page"' : '' ?> href="/register">Inscription</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>