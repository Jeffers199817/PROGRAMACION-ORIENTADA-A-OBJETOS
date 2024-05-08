<?php include 'includes/header.php';


require 'vendor/autoload.php';

/* 
include 'clases/Clientes.php';
include 'clases/Detalles.php'; */
//incluir las otras clasess




//UTILIZAR EL USE PARA NO UTILIZAR EL APP\

use App\Clientes;
use App\Detalles;

/* require 'clases/Clientes.php';
require 'clases/Detalles.php'; */

//para no utilizar tantos require puedes utilizar la funcion autoload 
/*  function mi_autoload($clase)
{

    $partes = explode('\\', $clase);


    require __DIR__ . '/clases/' . $partes[1] . '.php';
}  


 spl_autoload_register('mi_autoload'); 


 */

$clientes = new Clientes(); 
$detalle = new Detalles();









include 'includes/footer.php';