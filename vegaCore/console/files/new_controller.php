<?php
declare(strict_types=1);

require ABSTRACT_CONTROLLER;

    function index() : string
    {
        return render("pages/page_name.html.php");
    }