<?php
declare(strict_types=1);

// var_dump($argv);
// die();

    function make($make_file, $argv) : void
    {
        $fileName = $argv[2] ?? '';
        
        if ( empty($fileName) )
        {
            die("\nPlease, provide a file name.\n");
        }
        
        switch ($make_file) 
        {
            case 'controller':
                $newFileContent = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "files" . DIRECTORY_SEPARATOR . "new_controller.php");
                $newFile = dirname(__DIR__, 2) . "/src/controller/$fileName.php";

                if ( file_exists($newFile) )
                {
                    die("\n ***File already exists!***\n\n ");
                }

                touch($newFile);

                if ( file_put_contents($newFile, $newFileContent) ) 
                {
                    die("\n ***Controller created Successfully.***\n ");
                }
                else 
                {
                    die(" \n***Failed to create controller due to an error.***\n ");    
                }
                break;
            default:
                die("\n Unknow 'make' command ! \n");
                break;
        }
    }

    function help() : void
    {
        echo "
Vega in command line

Maker
    make:controller                         Generates a controller file.
        ";
    }