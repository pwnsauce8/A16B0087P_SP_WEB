<?php
/**
 * Router
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */


class Router
{

    private $routes;

    public function __construct()
    {
        // Pripojeni vsech cest
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * Returns request string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        // Ziskat retezec dotazu
        $uri = $this->getURI();

        // Zkontrolovat zda existuje takovy retezec v routes.php
        foreach ($this->routes as $uriPattern => $path) {

            // Porovname $uriPattern a $uri
            if (preg_match("~$uriPattern~", $uri)) {

                // Dostaneme vnitrni cestu z vnejsku podle pravidla
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Indefikovat controller, action a args
                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));
                             
                $parameters = $segments;

                // Pripojit soubor tridy-controller
                $controllerFile = ROOT . '/controllers/' .
                        $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // Zavolat metodu Action
                $controllerObject = new $controllerName;
                

                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                
                
                if ($result != null) {
                    break;
                }
            }
        }
    }

}
