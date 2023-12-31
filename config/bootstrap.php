<?php 

    /**
     * ----------------------------------------------------
     *                 Amorceur de l'application
     * 
     * L'amorçage fait référence au processus de          
     * préparation de l'environnement avant qu'une 
     * application ne démarre, pour résoudre et traiter 
     * une requête d'entrée. L'amorçage se fait en deux 
     * endroits : le script d'entrée et l'application.
     * 
     * Ses rôles:
     *  - Charges les (raccourcis) constantes
     *  - Charger les variables d'environnement
     *  - Charger la configuration système
     *  - Charger la configuration session
     *  - Charger le monolog
     * ----------------------------------------------------
     */


    // Chargement des constantes
    require __DIR__ . "/constants.php";

    // Chargement et traitement les variables d'environnement
    require CONFIG . "/environment.php";

    // Chargement la configuration système
    require CONFIG . "/system.php";

    //Chargement la configuration session
    require CONFIG . "/session.php";

    // Chargement de monolog
    require CONFIG . "/monolog.php";
?>