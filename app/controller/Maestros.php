<?php
    namespace controller;
    use model\TablaMaestros;
    require_once realpath('.../../vendor/autoload.php');
    
    class Maestros{
        public static function obtener_datos(){
            $maestro = new TablaMaestros();
            echo json_encode( $maestro->consulta());
        }

        public static function insertar_Datos(){
            $maestro = new TablaMaestros();
            // echo json_encode( $maestro->insercion(['nombre'=>'Juan','materia'=>'Fisica','id'=>1]));
            // echo json_encode( $maestro->insercion(['nombre'=>'Fernanda','materia'=>'Quimica','id'=>2]));
            // echo json_encode( $maestro->insercion(['nombre'=>'Flor','materia'=>'Gastronomia','id'=>3]));
            // echo json_encode( $maestro->insercion(['nombre'=>'Angel','materia'=>'Matematicas','id'=>4]));
            echo json_encode( $maestro->insercion(['nombre'=>'Axel','materia'=>'Matematicas','id'=>5]));
        }

        public static function actualizar_datos(){
            $maestro = new TablaMaestros();

            echo json_encode($maestro->actualizar(['materia'=>'Finanzas','id'=>5]));
        }

        public static function eliminar_datos(){
            $maestro = new TablaMaestros();
            echo json_encode($maestro->eliminar(['id'=>3]));
        }
    }

?>