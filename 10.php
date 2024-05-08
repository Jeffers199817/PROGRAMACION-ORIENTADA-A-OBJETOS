<?php 


include 'includes/header.php';


//CONECTAR A LA BD CON PDO

$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud','root','Jeff1998');

//Creamos el query

$query = "SELECT titulo FROM propiedades";


//Lo preparamos

$stmt = $db->prepare($query);


//Lo ejecutamos 
$stmt->execute();


//obtener resultados 

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);



foreach($result as $propiedad):
    echo $propiedad['titulo'];
    echo '<br>';
    echo $propiedad['imagen'];
    echo '<br>';
    endforeach;
echo "<pre>";
var_dump($result);
echo "</pre>";

include 'includes/footer.php';

?>