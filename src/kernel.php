<?php

declare(strict_types=1);

    /**
     * ---------------------------------------------------------------------
     *                                Le noyau  
     * 
     * Le composant kernel fournit un processus structuré pour convertir
     * une requête en réponse.
     * 
     * Le processus :
     *  - Charger le routeur
     *  - Charger toutes les routes dont l'application attend la réception
     *  - Exécuter le routeur
     *  - Le routeur lui retourne comme réponse, le contrôleur en charge
     *    de la requête
     *  - Exécuter le contrôleur afin qu'il génère la réponse corresopndante
     *    à la requête
     *  - Retourner cette réponse au contrôleur frontal
     * 
     *  @author Iulian ROTARU <rotaruiulian19@gmail.com>
     *  @version 1.0.0
     *  @copyright (c) 2023 
     * ---------------------------------------------------------------------
     */

     /**
      * Cette fonction du noyau permet de soummetre la requête du
      * client et récupérer la rèponse corespondante
      *
      * @return string
      */
     function handleRequest() : string {
        
        // Chargement du routeur
        require VEGA_CORE . "/routing/router.php";

        // Si aucun contrôleur n'existe:
            // Affiche la page de bienvenue dans le framework

        // Dans le cas contraire,
        if ( ! controller_exists() ) {
            die("Aucun contrôleur");
        }
        // Exécution du routeur et récupération de sa réponse

        // Exécution du côntroleur pour générer la réponse correspondante à la requête
        // Récupération de cette réponse.

        // Retour de cette réponse au contrôleur frontal

        return "hello";

     }


    
?>