<?php

    /**
     * Configuraciones para acceso a la BD
     */
    define('DB_HOST','localhost');
    define('DB_USUARIO','root');
    define('DB_PASSWORD','r4t0n3s4');
    define('DB_NOMBRE','xpec');
    /**
     * Ruta app
     */
    define('RUTA_APP',dirname(dirname(__FILE__)));
   
    define('RUTA_URL',url());
    
    define('NOMBRESITIO','CRUD PROGRAMADORES');

    function url()
    {
        return sprintf(
        "%s://%s/",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME']
    );
    }

?>