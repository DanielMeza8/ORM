<?php
    namespace controller;
    use model\TablaMaterias;
    require_once realpath('.../../vendor/autoload.php');
    
    class Materias{
        public static function obtener_datos(){
            $materi = new TablaMaterias();
            echo json_encode( $materi->consulta());
        }

        public static function insertar_Datos(){
            $materi = new TablaMaterias();
            // echo json_encode( $materi->insercion(['nombre'=>'Matematicas', 'id'=>4]));
            // echo json_encode( $materi->insercion(['nombre'=>'Programacion', 'id'=>5]));
            // echo json_encode( $materi->insercion(['nombre'=>'Ciencia de datos', 'id'=>6]));
            echo json_encode( $materi->insercion(['nombre'=>'Ciencia de datos', 'id'=>7]));
        }

        public static function actualizar_datos(){
            $materia = new TablaMaterias();

            echo json_encode($materia->actualizar(['nombre'=>'Finanzas','id'=>7]));
        }

        public static function eliminar_datos(){
            $materia = new TablaMaterias();
            echo json_encode($materia->eliminar(['id'=>3]));
        }
    }

?>