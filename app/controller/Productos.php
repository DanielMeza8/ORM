<?php 


    namespace controller;
    use model\TablaProductos;


    require_once realpath('.../../vendor/autoload.php');



    class Productos {

        public static function numeroProductos(){
            $producto = new TablaProductos();
            return json_encode($producto->contar()->all());
        }


        public static function tresProductos(){
            $producto = new TablaProductos();
            return json_encode($producto->consulta()->limite(3)->all());
        }
        
        
        public static function filtrarProducto(){
            $producto = new TablaProductos();
            return json_encode($producto->consulta()->where('precio','20')->all());
        }
        

        public static function obtenerProductos(){
            $producto = new TablaProductos();
            return json_encode($producto->consulta()->all());
        }


        public static function obtenerPrimerProducto(){
            $producto = new TablaProductos();
            return json_encode($producto->consulta()->first());
        }


        public static function eliminarProducto (){
            $producto = new TablaProductos();
            return json_encode($producto->eliminar()->where('id','7')->first());
        }
        



    }



?>