<?php 
declare(strict_types=1);

require ABSTRACT_CONTROLLER;

    function register(): string {
        /* Si le formulaire est soumis comme cela se doit */
        if ( isFormSubmitted($_POST) ) {

            /* Charger le validateur */
            require VALIDATOR;

            /* Demander au validateur de valider les données */
            /* Récuperer la réponse du validateur */
            $errors = makeValidation(
                $_POST,
                [
                    "firstName"        => ["required", "string", "max:255"],
                    "lastName"         => ["required", "string", "max:255"],
                    "email"            => ["required", "string", "max:255", "email", "unique:user,email"],
                    "password"        => ["required", "string", "min:12" ,"max:255", 
                                           "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,255}$/"],
                    "confirmPassword" => ["required", "string", "min:12" ,"max:255", 
                                           "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,255}$/",
                                           "same:password"]
                ],
                [
                    "firstName.required"       => "Le prénom est obligatoire.",
                    "firstName.string"         => "Veillez entre une chaine de caractères.",
                    "firstName.max"            => "Le prénom ne doit pas dépasser 255 caractères.",

                    "lastName.required"        => "Le nom est obligatoire.",
                    "lastName.string"          => "Veillez entre une chaine de caractères.",
                    "lastName.max"             => "Le nom ne doit pas dépasser 255 caractères.",

                    "email.required"           => "L'email est obligatoire.",
                    "email.string"             => "Veillez entre une chaine de caractères.",
                    "email.max"                => "L'email ne doit pas dépasser 255 caractères.",
                    "email.email"              => "Veillez entre un email valide.",
                    "email.unique"             => "Impossible de créer un compte avec cet email.",

                    "password.required"        => "Le mot de passe est obligatoire.",
                    "password.string"          => "Veillez entre une chaine de caractères.",
                    "password.min"             => "Le mot de passe doit contenir au moins 12 caractères.",
                    "password.max"             => "Le mot de passe ne doit pas dépasser 255 caractères.",
                    "password.regex"           => "Le mot de passe doit contenir au moins une lettre minuscule,
                                                       majuscule, un chifftre et un caractère spécial.",

                    "confirmPassword.required" => "La confirmation mot de passe est obligatoire.",
                    "confirmPassword.string"   => "Veillez entre une chaine de caractères.",
                    "confirmPassword.min"      => "La confirmation mot de passe doit contenir au moins 12 caractères.",
                    "confirmPassword.max"      => "La confirmation mot de passe ne doit pas dépasser 255 caractères.",
                    "confirmPassword.regex"    => "La confirmation mot de passe doit contenir au moins une lettre minuscule,
                                                   majuscule, un chifftre et un caractère spécial.",
                    "confirmPassword.same"     => "Le mot de passe doit être indentique à sa confirmation.",
                ]
            );

            dd($errors);


            /* Si le validateur dit du'il y a des erreur */ 

                /* Sauvegarder les anciennes données en sesion */
            
                /* Sauvegarder les messager d'erreurs en sesion */

                /* Redirige automatiquement l'utilisateur vers 
                la page de laquelle provient les informations */
            
                /* Arrêter l'exécution du script */
            
            /* Dans le cas contraire */

            /* Appeler le manager de la table "user" (model) */

            /* Demander au manager d'insérer le nouvel utilisateur dans le table "user" */

            /* Générer le message flash attestant de la réussite de la requête */

            /* Rediriger l'utilisateur ver la page de connexion */

            /* Arrêter l'éxecution du script */
        }

        return render("pages/visitor/registration/register.html.php");
    }