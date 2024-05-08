<?php include 'includes/header.php';


class Transporte
{

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

class Bicicleta extends Transporte{
  public function getInfo(): string{
        return "El Transporte tiene" . $this->ruedas . " y una capacidad de " . $this->capacidad . "personas"." NO TIENE GAS NI GASOLINA ";
    }
}
 
class Automovil extends Transporte{
     public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {


    }

    public function getTransmision(): string{
        return "La transmisión es:".$this->transmision;

}

  }


$bicicleta = new Bicicleta(2,1);
echo $bicicleta->getInfo();
echo $bicicleta ->getRuedas();

echo "<hr>";

$auto = new Automovil(3,1,"Manual");
echo $auto->getInfo();
echo "<hr>";
echo $auto->getTransmision();

include 'includes/footer.php';