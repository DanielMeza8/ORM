<?php
    use config\Config;
    require_once realpath('./vendor/autoload.php');
    require_once './app/config/Config.php';

    class Router {
        private $config;

        public function __construct() {
            $this->config = new Config();
        }

        public function route() {
            $view = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'login';
            $directory = $this->config->getDirectory();
            if (array_key_exists($view, $directory)) {
                require_once $directory[$view] . '.view.php';
            } else {
                require_once $directory['error'] . '.view.php';
            }
        }

    }

    $router = new Router();
    $router->route();

?>

<?php

// require_once realpath('./vendor/autoload.php');
// require_once './app/config/Config.php';

// class Router {
//     private $config;

//     public function __construct() {
//         $this->config = new Config();
//     }

//     public function route() {
//         if (isset($_REQUEST['view'])) {
//             $view = $_REQUEST['view'];
//             $viewPath = $this->config->getViewPath($view);
//             if ($viewPath) {
//                 require_once $viewPath;
//             } else {
//                 $this->showError();
//             }
//         } elseif (isset($_REQUEST['controller'])) {
//             $controller = $_REQUEST['controller'];
//             $controllerPath = $this->config->getControllerPath($controller);
//             if ($controllerPath) {
//                 require_once $controllerPath;
//                 $controllerClassName = ucfirst($controller) . 'Controller';
//                 if (class_exists($controllerClassName)) {
//                     $controllerInstance = new $controllerClassName();
//                     $controllerInstance->index(); // Método principal del controlador
//                 } else {
//                     $this->showError();
//                 }
//             } else {
//                 $this->showError();
//             }
//         } else {
//             $this->showError();
//         }
//     }

//     private function showError() {
//         $errorViewPath = $this->config->getViewPath('error');
//         if ($errorViewPath) {
//             require_once $errorViewPath;
//         } else {
//             echo "Error: View not found!";
//         }
//     }
// }

// $router = new Router();
// $router->route();

?>
