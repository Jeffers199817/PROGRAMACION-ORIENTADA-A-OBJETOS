<?php include 'includes/header.php';


//INTERFACES
//Una interfaz nos dice que hace una clase que funciones tienee y que datos retorna 
// pero no nos dice como lo hace 
// la interfaz es como un plano de una clase.


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
include 'includes/footer.php';