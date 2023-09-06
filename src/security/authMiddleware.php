<?php 
declare(strict_types=1);

    if ( !isset($_SESSION['user']) || empty($_SESSION['user'])) {
        session_destroy();
        $_SESSION = [];
        return redirectToUrl("/login");
    }

    require DB;

    $req = $db->prepare("SELECT * FROM user WHERE id=:id LIMIT 1");
    $req->bindValue(":id", $_SESSION['user']['id']);
    $req->execute();

    if ( $req->rowCount() != 1 ) {
        session_destroy();
        $_SESSION = [];
        return redirectToUrl("/login");
    }