<nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Vega</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link<?= ($_SERVER['REQUEST_URI'] === '/user/home') ? ' active' : '' ;?>"<?= ($_SERVER['REQUEST_URI'] === '/user/home') ? ' aria-current="page"' : '' ?> href="/user/home">Espace</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= ($_SERVER['REQUEST_URI'] === '/user/profile') ? ' active' : '' ;?>"<?= ($_SERVER['REQUEST_URI'] === '/user/profile') ? ' aria-current="page"' : '' ?> href="/user/profile">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= ($_SERVER['REQUEST_URI'] === '/') ? ' active' : '' ;?>"<?= ($_SERVER['REQUEST_URI'] === '/') ? ' aria-current="page"' : '' ?> href="/">Retour au site</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= ($_SERVER['REQUEST_URI'] === '/logout') ? ' active' : '' ;?>"<?= ($_SERVER['REQUEST_URI'] === '/logout') ? ' aria-current="page"' : '' ?> href="/logout">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>