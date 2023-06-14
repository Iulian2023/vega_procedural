<?php 

    /**
     * -----------------------------------------------------------------
     *                        Le routeur
     * 
     * 
     * -----------------------------------------------------------------
     */

     /**
      * Cette méthode du routeur lui permet de générer les routes
      * dont l'application attend la réception via la méthode http "GET"
      *
      * @param string $route_uri
      * @param array $route_action

      * @return void
      */
     function get(string $route_uri, array $route_action = []) : void
     {
        collectRoutes("GET", $route_uri, $route_action);
     }

     /**
      * Cette méthode du routeur lui permet de générer les routes
      * dont l'application attend la réception via la méthode http "POST"
      *
      * @param string $route_uri
      * @param array $route_action

      * @return void
      */
     function post(string $route_uri, array $route_action = []) : void
     {
        collectRoutes("POST", $route_uri, $route_action);
     }


     /**
      * Cette méthode du routeur lui permet de collectioner les différentes routes dont l'application
      * attand la recéption.
      * Puis, elle se charge de les trier en foction de leur méthode d'envoi dans un tableau
      *
      * @param string $http_method
      * @param string $route_uri
      * @param array $route_action
      * @return void
      */
     function collectRoutes(string $http_method, string $route_uri, array $route_action) : void
     {
        global $routes;
        $route = [];

        $route[] = $route_uri;
        $route[] = $route_action;

        $routes[$http_method] = $route;
    }


     function run()
     {
        global $routes;
     }

     function controller_exists() : bool
     {

        $controllers = [];

        $controllers_files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator(CONTROLLER),
            RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($controllers_files as $file) 
        {
            if ( ($file->isFile() ) && ( $file->getExtension() === "php") ) {
                $controllers[] = $file->getPathname();
            }
        }


        if (count($controllers) === 0) {
            return false;
        }
        return true;

     }
?>