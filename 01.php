<?php 
declare(strict_types= 1);

include 'includes/header.php';


//Definir una clase

class Producto
{
/* Esto ya no se requiere en php8
    public $nombre;
    public $precio;
    public $disponible;
 */

    public function __construct(public string $nombre,public int $precio,public bool $disponible)
    {
     /*   Esto ya no se requiere en php8
      $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible; */

    }

    public function mostrarProducto(){
        echo "El producto es: ".$this->nombre." y su precio es de: ".$this->precio;
    }
}

//Crear una instancia de Producto que es un objeto de la clase Producot
$producto = new Producto('Tablet',200,true);
$producto->mostrarProducto();




echo "<pre>";
var_dump($producto);
echo "</pre>";



$producto2 = new Producto('Monitor Curvo',340,true);


echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';