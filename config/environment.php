<?php

    $env_file = file_exists(__DIR__ . "/../env.local.conf") ? __DIR__ . "/../env.local.conf" : __DIR__ . "/../env.local.conf";
    
    
    $_ENV = parse_ini_file($env_file);

    if (isset($_ENV['APP_ENV']) && !empty($_ENV['APP_ENV'])) 
    {
        if ($_ENV['APP_ENV'] === "dev" || $_ENV['APP_ENV'] === "development") {
            error_reporting(E_ALL);
            ini_set("display_errors", 1);
        }

        if ($_ENV['APP_ENV'] === "prod" || $_ENV['APP_ENV'] === "production") {
            error_reporting(0);
            ini_set("display_errors", 1);
        }
    }
?>