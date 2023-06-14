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