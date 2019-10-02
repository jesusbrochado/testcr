<?php

    class Controlador{
        /**
         * Cargar los modelos y las vistas
         */
        public function modelo($modelo){
            require '../app/modelos/' .$modelo .'.php';
            return new $modelo();
        }

        public function vista($vista, $datos=[]){
            if(file_exists('../app/vistas/'.$vista.'.php')){
                require '../app/vistas/'.$vista.'.php';
            }else{
                die('La vista no existe');
            }
            
        }
    }

?>