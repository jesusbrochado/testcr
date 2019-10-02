<?php

class Paginas extends Controlador{
    public function __construct(){
        $this->usuarioModelo = $this->modelo('Usuario');

    }

    public function index(){

        /**
         * Obtengo los usuarios
         */

        $usuarios = $this->usuarioModelo->obtenerUsuarios();
        $datos =[
                'usuarios' => $usuarios
                ];
        $this->vista('paginas/inicio',$datos);

    }
    public function agregar(){

        if($_SERVER['REQUEST_METHOD']=='POST'){
            
        $datos=[
            'nombre_programador' => trim($_POST['nombre_programador']),
            'email' => trim($_POST['email']),
            'estado' => trim($_POST['estado'])
                ];
            if($this->usuarioModelo->agregarUsuario($datos)){
                redireccionar('paginas');
            }else{
                die('Algo salio mal');
            }

        }else{
        $datos =[
            'nombre_programador' =>'',
            'email' =>'',
            'estado' =>''
        ];
        $this->vista('paginas/agregar', $datos);
        }

    }

    public function editar($id_programador){

        if($_SERVER['REQUEST_METHOD']=='POST'){
            
            $datos=[
                'id_programador' => $id_programador,
                'nombre_programador' => trim($_POST['nombre_programador']),
                'email' => trim($_POST['email']),
                'estado' => trim($_POST['estado'])
                    ];
                if($this->usuarioModelo->actualizarUsuario($datos)){
                    redireccionar('paginas');
                }else{
                    die('Algo salio mal');
                }
    
            }else{

                $usuario = $this->usuarioModelo->obtenerUsuarioId($id_programador);

            $datos =[
                'id_programador' => $usuario->id_programador,
                'nombre_programador' =>$usuario->nombre_programador,
                'email' => $usuario->email,
                'estado' =>$usuario->estado
            ];
            $this->vista('paginas/editar', $datos);
            }



    }

    public function borrar($id_programador){

            $datos=[
                'id_programador' => $id_programador
                ];
                if($this->usuarioModelo->borrarUsuario($datos)){
                    redireccionar('paginas');
                }else{
                    die('Algo salio mal');
                }

    }
  
}

?>