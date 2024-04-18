<?php
    namespace config;

    class Config {
        private $server;
        private $depImg;
        private $depJs;
        private $depCss;
        private $directory;

        public function __construct() {
            $this->server = 'http://back-end.local/';
            $this->depImg = $this->server . 'public/img/';
            $this->depJs = $this->server . 'public/js/';
            $this->depCss = $this->server . 'public/css/';
            $this->directory = array(
                'home' => 'view/home',
                'login' => 'view/login',
                'error' => 'view/error',
                'register' => 'view/register',
                'perfil' => 'view/perfil',
                'registerUser' => 'view/registerUser',
                'loginUser' => 'view/loginUser'

            );
        }

        public function getServer() {
            return $this->server;
        }

        public function getDepImg() {
            return $this->depImg;
        }

        public function getDepJs() {
            return $this->depJs;
        }

        public function getDepCss() {
            return $this->depCss;
        }

        public function getDirectory() {
            return $this->directory;
        }

        public function redirigir($ruta){
            echo '<script>window.location= "/'.$ruta.'";</script>';
        }
    }

?>


<?php
// class Config {
//     private $server;
//     private $depImg;
//     private $depJs;
//     private $depCss;
//     private $viewDirectory;
//     private $controllerDirectory;

//     public function __construct() {
//         $this->server = 'http://back-end.local/';
//         $this->depImg = $this->server . 'public/img/';
//         $this->depJs = $this->server . 'public/js/';
//         $this->depCss = $this->server . 'public/css/';
//         $this->viewDirectory = array(
//             'home' => 'view/home',
//             'login' => 'view/login',
//             'error' => 'view/error',
//             'register' => 'view/register',
//             'perfil' => 'view/perfil'
//         );
//         $this->controllerDirectory = array(
//             'loginController' => 'controller/Login',
//             // Agrega aquí otras rutas de controladores...
//         );
//     }


//     public function getServer() {
//         return $this->server;
//     }

//     public function getDepImg() {
//         return $this->depImg;
//     }

//     public function getDepJs() {
//         return $this->depJs;
//     }

//     public function getDepCss() {
//         return $this->depCss;
//     }

//     public function getViewPath($viewName) {
//         if (array_key_exists($viewName, $this->viewDirectory)) {
//             return $this->viewDirectory[$viewName] . '.view.php';
//         } else {
//             // Manejo de error si la vista no existe...
//             return false;
//         }
//     }

//     public function getControllerPath($controllerName) {
//         if (array_key_exists($controllerName, $this->controllerDirectory)) {
//             return $this->controllerDirectory[$controllerName] . '.controller.php';
//         } else {
//             // Manejo de error si el controlador no existe...
//             return false;
//         }
//     }
// }

