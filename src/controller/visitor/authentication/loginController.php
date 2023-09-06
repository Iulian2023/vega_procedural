<?php
declare(strict_types=1);

require ABSTRACT_CONTROLLER;

    /**
     * Cette function permet de connecter l'utilisateur
     *
     * @return string
     */
    function login() :string
    {

        if ( isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            return redirectToUrl('/');
        }

        /* Si le formulaire est soumis comme cela se doit */
        if ( isFormSubmitted($_POST)) {


            require VALIDATOR;

            $errors = makeValidation(
                $_POST,
                [
                    "email"    => ["required", "string", "max:255", "email"],
                    "password" => ["required", "string", "min:12", "max:255", 
                                   "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,255}$/"]
                ],
                [
                    "email.required"    => "L'email est obligatoire",
                    "email.string"      => "Veuillez entrer une chaine dees caractères",
                    "email.max"         => "L'email ne doit pas dépasser 255 caractères",
                    "email.email"       => "Veillez entrer un email valide",

                    "password.required" => "Le mot de passe est obligatoire.",
                    "password.string"   => "Veuillez entrer une chaine de caractères",
                    "password.min"      => "Le mot de passe doit contenir au minimum 12 caractères",
                    "password.max"      => "Le mot de passe doit contenir au maximum 255 caractères",
                    "password.regex"    => "Le mot de passe doit contenir au moins une lettre minuscule,
                                            majuscule, un chiffre et un caractère spécial"
                ]
            );
            /* S'il y a au moins une error,*/
            if ( count($errors) > 0) {

                /* Sauvgarder les anciennes valeur provenant de formulaire en session */
                $_SESSION['old'] = getOldValues($_POST);

                /* Sauvegarder les messages d'erreurs en session*/
                $_SESSION['form_errors'] = $errors;

                /* Rediriger l'utilisateur ver la page de laquelle proviennent les informations*/
                return redirectBack();
            }

            /* Dans le cas contraire */

            require LOGIN_AUTHENTICATOR;

            $formData = getOldValues($_POST);
            
            /* Tenter d'authentifier et récupérer la réponse coresspondante */
            $response = authenticate($formData);

            /* Si aucun utilisteur n'est récupéré, */
            if ( $response === null) {
                /* Sauvgarder les anciennes valeurs provenant du formulaire en session */
                $_SESSION['old'] = getOldValues($_POST);

                /* Sauvgarder le massage d'error en sesion*/
                $_SESSION['bad_credentials'] = "Vos identifiants sont incorrects";

                /* Rediriger l'utilisateur ver la page de laquelle proviennent les informations*/
                return redirectBack();
            }

            /* Dans le cas contraire */

            /* Authentifier l'utilisateur en sauvegardant ces données en session. */
            $_SESSION['user'] = $response;

            /* Le rediriger ver la page accueil et arrêter l'exécuion du script. */
            return redirectToUrl('/user/home');
        }


        return render("pages/visitor/authentication/login.html.php");
    }

    /**
     * Cette fonction permet de déconnecter l'utilisateur
     *
     * @return void
     */
    function logout() 
    {
        if ( isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            session_destroy();
            unset($_SESSION['user']);
            $_SESSION = [];
        }

        return redirectToUrl('/login');
    }