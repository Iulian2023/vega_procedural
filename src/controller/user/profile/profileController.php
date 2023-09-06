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
            $errors = makeValidation(
                $_POST,
                [
                    "firstName" => ["required", "string", "max:255", "regex:/^[a-zA-Z-_]+$/"],
                    "lastName"  => ["required", "string", "max:255", "regex:/^[a-zA-Z-_]+$/"],
                    "email"     => ["required", "string", "max:255", "email", "uniqueOnUpdate:user,email,$user[id]"],
                ],
                [
                    "firstName.required"       => "Le prénom est obligatoire.",
                    "firstName.string"         => "Veillez entre une chaine de caractères.",
                    "firstName.max"            => "Le prénom ne doit pas dépasser 255 caractères.",
                    "firstName.regex"          => "Le prénom ne doit pas contenir des chiffres.",

                    "lastName.required"        => "Le nom est obligatoire.",
                    "lastName.string"          => "Veillez entre une chaine de caractères.",
                    "lastName.max"             => "Le nom ne doit pas dépasser 255 caractères.",
                    "lastName.regex"           => "Le nom ne doit pas contenir des chiffres.",

                    "email.required"           => "L'email est obligatoire.",
                    "email.string"             => "Veillez entre une chaine de caractères.",
                    "email.max"                => "L'email ne doit pas dépasser 255 caractères.",
                    "email.email"              => "Veillez entre un email valide.",
                    "email.uniqueOnUpdate"     => "Cet email appartient déjà à un utilisateur.",
                    ]
                );
                
                if (count($errors) > 0) {
                    /* Sauvegarder les anciennes données en sesion */
                    $_SESSION['old'] = getOldValues($_POST);
                    /* Sauvegarder les messager d'erreurs en sesion */
                    $_SESSION['form_errors'] = $errors;
                    /* Redirige automatiquement l'utilisateur vers 
                    la page de laquelle provient les informations */
                
                    /* Arrêter l'exécution du script */
                    return redirectBack();
                }

                $cleanData = getOldValues($_POST);

                /* Dans le cas contraire */
                editUser($cleanData, $user['id']);

                $_SESSION['success'] = "Vore profile a été modifié avec succès";

                return redirectToUrl('/user/profile');
        }

        return render("pages/user/profile/edit.html.php", [
            "user" => $user
        ]);

    }

    /**
     * Cette fonction permet de retourner le contenu de la page de modification du mot de passe
     * Et de traiter les données du formulaire
     *
     * @return string
     */
    function editPassword() : string
    {

        if ( isFormSubmitted($_POST) ) 
        {
            require VALIDATOR;

            require USER;
            $user = findUserBy(["id" => $_SESSION['user']['id']]);

            $errors = makeValidation(
                $_POST,
                [
                    "currentPassword"         => ["required", "string", "min:12", "max:255", "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,255}$/", "currentPassword:user,password,$user[id]"],
                    "newPassword"             => ["required", "string", "min:12", "max:255", "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,255}$/"],
                    "confirmNewPassword"      => ["required", "string", "min:12", "max:255", "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,255}$/", "same:newPassword"],
                ],
                [
                    "currentPassword.required"           => "Le mot de passe actuel est obligatoire.",
                    "currentPassword.string"             => "Veuillez entrer une chaine de caractères.",
                    "currentPassword.min"                => "Le mot de passe actuel doit contenir au moins 12 caractères.",
                    "currentPassword.max"                => "Le mot de passe actuel ne doit pas dépasser 255 caractères.",
                    "currentPassword.regex"              => "Le mot de passe actuel doit contenir au moins une lettre minuscule, majuscule, un chiffre et un caractère spécial.",
                    "currentPassword.currentPassword"    => "Veuillez entrer votre mot de passe actuel.",
                    
                    "newPassword.required"               => "Le nouveau mot de passe est obligatoire.",
                    "newPassword.string"                 => "Veuillez entrer une chaine de caractères.",
                    "newPassword.min"                    => "Le nouveau mot de passe doit contenir au moins 12 caractères.",
                    "newPassword.max"                    => "Le nouveau mot de passe ne doit pas dépasser 255 caractères.",
                    "newPassword.regex"                  => "Le nouveau mot de passe doit contenir au moins une lettre minuscule, majuscule, un chiffre et un caractère spécial.",

                    "confirmNewPassword.required"        => "La confirmation du nouveau mot de passe est obligatoire.",
                    "confirmNewPassword.string"          => "Veuillez entrer une chaine de caractères.",
                    "confirmNewPassword.min"             => "La confirmation du nouveau mot de passe doit contenir au moins 12 caractères.",
                    "confirmNewPassword.max"             => "La confirmation du nouveau mot de passe ne doit pas dépasser 255 caractères.",
                    "confirmNewPassword.regex"           => "La confirmation du nouveau mot de passe doit contenir au moins une lettre minuscule, majuscule, un chiffre et un caractère spécial.",
                    "confirmNewPassword.same"            => "La confirmation du nouveau mot de passe doit contenir au moins une lettre minuscule, majuscule, un chiffre et un caractère spécial.",
                ]
            );

            /* Si le validateur dit du'il y a des erreur */ 
            if (count($errors) > 0) {
            /* Sauvegarder les anciennes données en sesion */
                $_SESSION['old'] = getOldValues($_POST);
                /* Sauvegarder les messager d'erreurs en sesion */
                $_SESSION['form_errors'] = $errors;
                /* Redirige automatiquement l'utilisateur vers 
                 la page de laquelle provient les informations */
                        
                /* Arrêter l'exécution du script */
                return redirectBack();
            }

            $cleanData = getOldValues($_POST);

            editUserPassword($cleanData['newPassword'], $user['id']);

            // Générer le message flash attestant de la réussite de la requête
            $_SESSION['success'] = "Votre mot de passe a été bien modifié.";

            // Rediriger l'utilisateur vers la page de connexion
            // Arrêter l'exécution du script
            return redirectToUrl('/user/profile');
        }

        return render("pages/user/profile/editPassword.html.php");
    }

    function deleteAccount() {
        require USER;

        $user = findUserBy(["id" => $_SESSION['user']['id']]);

        if ( $user !== null ) {
            session_destroy();
            unset($_SESSION['user']);
            deleteUser($user['id']);
            $_SESSION['success'] = "Votre compte a été bien supprimé!";
        }


        return redirectToUrl("/login");
    }