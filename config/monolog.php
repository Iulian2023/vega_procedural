<?php
declare(strict_types=1);


    /**
     * Cette fonction permet de générer un log et de le stocker dans le fichier dédié
     *
     * @param integer $level
     * @param string $errorMessage
     * 
     * @return void
     */
    function generateLog(int $level, string $errorMessage) : void
    {

        // Chemin vers votre fichier log
        $logFile = ROOT . "/var/log/dev.log";

        // Message d'erreur par défaut
        $errorType = "Error";

        switch ($level)
        {
            case 1:
                $errorType = "INFO";
                break;

            case 2:
                $errorType = "WARNING";
                break;

            case 3:
                $errorType = "FATAL ERROR";
                break;
        }
    
        $errorMessage = '[' . date('Y-m-d H:i:s') . '] ' . $errorType . ' : ' . $errorMessage . "\n";

        if ( ! file_exists($logFile) )
        {
            // Créer le fichier log s'il n'existe pas
            $directory = dirname($logFile);

            if (!is_dir($directory)) 
            {
                mkdir($directory, 0777, true); // Crée les répertoires parents si nécessaire
            }

            touch($logFile); // Crée le fichier log
        }
    
        file_put_contents($logFile, $errorMessage, FILE_APPEND | LOCK_EX); 
    }