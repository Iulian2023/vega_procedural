<?php

    /**
     * --------------------------------------------------------------
     *                      Les raccourcis
     * 
     * Les constantes représentent des raccourcis permettant d'accéder
     * plus rapidement aux dossiers et fichiers souhaités
     * --------------------------------------------------------------
    */


    /**
     * Cette constante représente le raccourci permettant d'accéder à la racine de vega
    */
    define("ROOT", dirname(__DIR__));
    
    
    /**
     * Cette constante représente le raccourci permettant d'accéder au dossier de configuration
     */
    const CONFIG = ROOT . "/config";

        /**
     * Cette constante représente le raccourci permettant d'accéder au dossier "src"
     */

     const SRC = ROOT . "/src";

     /**
     * Cette constante représente le raccourci permettant d'accéder au coeur de Vega
     */

     const VEGA_CORE = ROOT . "/vegaCore";

     /**
     * Cette constante représente le raccourci permettant d'accéder au dossier des contrôleurs
     */

     const CONTROLLER = ROOT . "/src/controller";

     /**
     * Cette constante représente le raccourci permettant d'accéder au dossier des templates
     */

     const TEMPLATES = ROOT . "/templates";

     /**
     * Cette constante représente le raccourci permettant d'accéder au controller abstrait
     */

     const ABSTRACT_CONTROLLER = ROOT . "/vegaCore/abstractController/abstractController.php";
     
     /**
     * Cette constante représente le raccourci permettant d'accéder au validateur
     */

     const VALIDATOR = VEGA_CORE . "/validation/validator.php";

     /**
     * Cette constante représente le raccourci permettant d'accéder à la base des donées
     */

     const DB = CONFIG . "/database.php";

     /**
     * Cette constante représente le raccourci permettant d'accéder aux managers
     */

     const USER = SRC . "/manager/user.php";

     /**
     * Cette constante représente le raccourci permettant de charger l'agent de sécurité d'authentification
     */

     const LOGIN_AUTHENTICATOR = SRC . "/security/loginAuthenticator.php";

     /**
     * Cette constante représente le raccourci permettant de charger le Middleware d'authentification
     */

     const AUTH_MIDDLEWARE = SRC . "/security/authMiddleware.php";