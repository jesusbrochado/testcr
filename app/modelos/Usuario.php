<?php
    class Usuario{
        private $db;

        public function __construct(){

            $this->db = new Base;

        }

        public function obtenerUsuarios(){
            $this->db->query('SELECT * FROM programador');
            $resultados= $this->db->registros();
            return $resultados;
        }

        public function agregarUsuario($datos){
            $this->db->query('INSERT INTO programador (id_programador, nombre_programador, email, estado) VALUES (null,:nombre_programador, :email, :estado)');

            $this->db->bind(':nombre_programador', $datos['nombre_programador']);
            $this->db->bind(':email', $datos['email']);
            $this->db->bind(':estado', $datos['estado']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function obtenerUsuarioId($id_programador){
            $this->db->query('SELECT * FROM programador WHERE id_programador = :id_programador');
            $this->db->bind(':id_programador', $id_programador);

            $fila = $this->db->registro();
            return $fila;
        }

        public function actualizarUsuario($datos){
            
            $this->db->query('UPDATE programador SET nombre_programador = :nombre_programador, email = :email, estado= :estado WHERE id_programador= :id_programador ');

            $this->db->bind('id_programador',$datos['id_programador']);
            $this->db->bind('nombre_programador',$datos['nombre_programador']);
            $this->db->bind('email',$datos['email']);
            $this->db->bind('estado',$datos['estado']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }

        public function borrarUsuario($datos){

            $this->db->query('DELETE FROM programador WHERE id_programador= :id_programador ');

            $this->db->bind('id_programador',$datos['id_programador']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

        }

    }
