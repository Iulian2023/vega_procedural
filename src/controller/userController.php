<?php

declare(strict_types=1);

require ABSTRACT_CONTROLLER;

    function index() : string
    {
        $users = ["Mario", "Luigi", "Bowser", "Pink", "Toad"];

        return render("users.html.php", [
            "users" => $users
        ]);
    }

?>