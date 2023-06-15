<?php

    declare(strict_types=1);

    require ABSTRACT_CONTROLLER;


    /**
     * Cette fonction se charge de retourner la 
     * réponse représant la page d'accueil
     *
     * @return string
     */
    function index() : string 
    {
        $firstName = "Iulian";

        $somme = 1 + 1;

        return render("test.html.php", [
            "firstName" => $firstName,
            "somme"     => $somme
    ]);
    }

    function toGreat() :string
    {
        return render("great.html.php");
    }
?>