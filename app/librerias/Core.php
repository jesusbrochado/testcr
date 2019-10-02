<?php
/**
 * mapeo de la url
 */

class Core{

protected $controladorActual = 'paginas';
protected $metodoActual= 'index';
protected $parametros=[];

public function __construct(){

    $url=$this->getUrl();
    /**
     * Verifica que el controlador exista, si existe lo setea
     */
    if (file_exists('../app/controladores/'.ucwords($url[0]).'.php')){
        $this->controladorActual = ucwords($url[0]);

        /**
         * libera el anterior controlador
         */
        unset($url[0]);
    }
    /**
     * Llama al nuevo controlador
     */
    require '../app/controladores/'.ucwords($this->controladorActual).'.php';
    $this-> controladorActual = new $this->controladorActual;

    /**
     * Chequea los metodos
     */
    if(isset($url[1])){
        if(method_exists($this->controladorActual, $url[1])){
            $this->metodoActual = $url[1];
            unset($url[1]);

        }
    }

    /**
     * Chequear los parametors
    */

    $this->parametros =$url ? array_values($url): [];
    /**
     * llama los parametros
     */
    call_user_func_array([$this->controladorActual,$this->metodoActual], $this->parametros);



} 

public function getUrl(){

    if (isset($_GET['url'])){
        $url = rtrim($_GET['url'],'/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }
}

}

?>

