<?php
declare(strict_types=1);

require ABSTRACT_CONTROLLER;
require AUTH_MIDDLEWARE;


    /**
     * Cette function permet de retourner le contenu de la page de profil
     *
     * @return string
     */
    function index() : string{
        require USER;

        $user = findUserBy(["id" => $_SESSION['user']['id']]);
        
        return render("pages/user/profile/index.html.php", [
            "user" => $user
        ]);
    }
    
    
    /**
     * Cette function permet de retourner le contenu de la page de modification de profil
     *
     * @return string
     */
    function edit() : string{
        require USER;
        
        $user = findUserBy(["id" => $_SESSION['user']['id']]);

        if ( isFormSubmitted($_POST) ) {
            require VALIDATOR;

            dd('PAUSE');
            // makeValidation(
            //     $_POST,
            //     [

            //     ],
            //     [

            //     ]
            // );
        }

        return render("pages/user/profile/edit.html.php", [
            "user" => $user
        ]);

    }