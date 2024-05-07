<?php 
declare(strict_types= 1);

include 'includes/header.php';


//Definir una clase
//ENCAPSULAMIENTO
class Producto
{
    //Public - se puede acceder ymodificar en cualquier lugar(clase y objeto)
    //protected -se puede accede y modificar unicamente de en la clase
    //private solo mienbros de la misma clase pueden acceder a el 

    public function __construct(protected string $nombre,public int $precio,public bool $disponible)
    {

    }

    public function mostrarProducto():void{
        echo "El producto es: ".$this->nombre." y su precio es de: ".$this->precio;
    }

    public function getNombre():string {
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre= $nombre;
    }
}

//Crear una instancia de Producto que es un objeto de la clase Producot
$producto = new Producto('Tablet',200,true);
//$producto->mostrarProducto();


echo $producto ->getNombre();

echo $producto ->setNombre('celular');


echo "<pre>";
var_dump($producto);
echo "</pre>";



$producto2 = new Producto('Monitor Curvo',340,true);
echo "  ";
echo $producto2 ->getNombre();
/* echo "<pre>";
var_dump($producto2);
echo "</pre>"; */

include 'includes/footer.php';