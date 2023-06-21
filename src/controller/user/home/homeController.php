<?php
declare(strict_types=1);

require ABSTRACT_CONTROLLER;
require AUTH_MIDDLEWARE;

    function index() : string {
        return render("pages/user/home/index.html.php");
    }