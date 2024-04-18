<?php
    namespace controller;
    use model\TablaPersona;
    require_once realpath('.../../vendor/autoload.php');
    
    class Personas{
        public static function contar_datos(){
            $persona = new TablaPersona();
            echo json_encode( $persona->contar(['id'])->where('nombre', 'Brayan')->all());
        }
        
        public static function obtener_datos(){
            $persona = new TablaPersona();
            echo json_encode( $persona->consulta()->where('nombre', 'Brayan')->where('apellido', 'Solis')->where('id', '2'));
        }

        public static function insertar_Datos(){
            $persona = new TablaPersona();
            echo json_encode( $persona->insercion(['nombre'=>'random','apellido'=>'random','carrera'=>'random','semestre'=>'random']));
        }

        public static function actualizar_Datos(){
            $persona = new TablaPersona();
            return $persona->actualizar(['nombre'=>'random','apellido'=>'random','carrera'=>'random','semestre'=>'random'])->where('id','1');
        }

        public static function emilinar_Datos(){
            $persona = new TablaPersona();
            return $persona->eliminar()->where('id','15 ');
        }

        public static function limite_Datos(){
            $persona = new TablaPersona();
            echo json_encode( $persona->consulta()->limite(5)->all());
        }

        public static function like_datos(){
            $persona = new TablaPersona();
            echo json_encode($persona->consulta()->where('nombre')->likes()->all());
        }
        

        public static function max_datos(){
            $persona = new TablaPersona();
            echo json_encode( $persona->maximo(['id'])->all());
        }

        public static function min_datos(){
            $persona = new TablaPersona();
            echo json_encode( $persona->minimo(['id'])->all());
        }

        public static function sum_datos(){
            $persona = new TablaPersona();
            echo json_encode( $persona->suma(['id'])->all());
        }

        public static function avg_datos(){
            $persona = new TablaPersona();
            echo json_encode( $persona->avg(['id'])->all());
        }
    }

?>