<?php include 'includes/header.php';


//POLIMORFISMO 
//eL POLImorfismo es cuando diferentes clases iimplementan una interfaz 

interface TransporteInterfaz{

    public function getInfo(): string;
    public function getRuedas(): int;

}
class Transporte implements TransporteInterfaz{

    public function __construct(protected int $ruedas, protected int $capacidad)
    {


    }

    public function getInfo(): string{
        return "El Transporte tiene" . $this->ruedas . " y una capacidad de " . $this->capacidad . "personas";
    }

    public function getRuedas():int{
        return $this->ruedas;
    }

}


class Automovil extends Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {


    }
     public function getInfo(): string{
        return "El Transporte AUTO tiene" . $this->ruedas . " y una capacidad de " . $this->capacidad . "personas y tiene el color".$this->color;
    }

    public function getColor(): string{
        return "El color es" . $this->color;
} }


echo "<pre>";
var_dump($transporte = new Transporte(2,4));
var_dump($auto = new Automovil(2,4,"rojo"));

echo $transporte->getInfo();

echo "<br>";
echo $auto-> getInfo();
echo "<br>";
echo $auto->getColor();
echo "</pre>";

include 'includes/footer.php';