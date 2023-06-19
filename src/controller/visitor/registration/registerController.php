<?php 
declare(strict_types=1);

require ABSTRACT_CONTROLLER;

    function register(): string {
        /* 
        Si la methode d'envoie est poste entre dans la condition 
        Si les donnés arivent au serveur via la méthode http : "POST"
        */
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            /* Protection coontre les failles de type CSRF */

            /* Protection coontre les spams grâce au pot de miel */
            
            /* Charger le validateur */

            /* Demander au validateur de valider les données */
            
            /* Récuperer la réponse du validateur */

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