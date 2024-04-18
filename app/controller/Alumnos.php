<?php
    namespace controller;
    use model\TablaAlumnos;
    require_once realpath('.../../vendor/autoload.php');
    
    class Alumnos{
        public static function obtener_datos(){
            $alumno = new TablaAlumnos();
            echo json_encode( $alumno->consulta());
        }

        public static function insertar_Datos(){
            $alumno = new TablaAlumnos();
            echo json_encode( $alumno->insercion(['nombre'=>'Juan','profesor'=>'Juan','materia'=>'Fisica','id'=>2]));
        }

        public static function actualizar_datos(){
            $alumno = new TablaAlumnos();

            echo json_encode($alumno->actualizar(['materia'=>'Finanzas','id'=>5]));
        }

        public static function eliminar_datos(){
            $alumno = new TablaAlumnos();
            echo json_encode($alumno->eliminar(['id'=>3]));
        }
    }

?>