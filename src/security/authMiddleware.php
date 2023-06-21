<?php 
declare(strict_types=1);

    if ( !isset($_SESSION['user']) || empty($_SESSION['user'])) {
        session_destroy();
        $_SESSION = [];
        return redirectToUrl("/login");
    }