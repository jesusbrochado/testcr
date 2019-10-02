<?php
/**
 * Cargo las librerias
*/
require 'config/configurar.php';
require 'helpers/url_helper.php';


/**
 * Autoload
 */

 spl_autoload_register(function($nombreClase){

    require 'librerias/'. $nombreClase . '.php';
 });

?>