<?php 

/**
 * -------------------------------------------------
 *                  Bienvenue sur Vega
 * 
 * L'index.php représente le contrôleur frontal
 * https://en.wikipedia.org/wiki/Front_controller
 * 
 * Ses rôles :
 * 
 * - Amorcer l'application (Charger les fichiers de configuration)
 * - Charger le noyau
 * - Executer le noyeau
 * - Récupérer la réponse du noyau
 * - Retourner cette réponse au serveur
 * - Le serveur envoie la réponse au navigateur du client
 * - Le navigateur affiche la réponse au client sous forme de page web
 * ----------------------------------------------------
 */

// Amorçage de l'application
    require __DIR__ . "/../config/bootstrap.php"
?>