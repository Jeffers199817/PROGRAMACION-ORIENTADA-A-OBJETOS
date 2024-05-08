<?php include 'includes/header.php';



//Conectar a la bd con Mysqli.

$db = new mysqli('localhost','root','Jeff1998','bienesraices_crud');

//CREAMOS EL QUERY
$query = 'SELECT titulo, imagen FROM propiedades';

  //3. LO PREPARAMOS
$stmt = $db->prepare($query);

//4.LO EJECUTAMOS 

$stmt -> execute();

//5. CREAMOS UNA VARIABLE

$stmt->bind_result($titulo, $imagen);
/* 
// ASIGNAMOS EL RESULTADO
$stmt->fetch();

//imprimir el resultado 

var_dump($titulo);
var_dump( $imagen);
 */
//PARA IMPRIMIR EL RESULTADO A MULTIPLES 

while ($stmt->fetch()):
    var_dump($titulo);
    endwhile;


//UTILIZAMOS ESTE CODIGO PAR PODER ITERAR TODO LO QUE TIENE EN LA BASE DE DATOS

/* while($row = $resultado->fetch_assoc()):
    var_dump($row);
endwhile; */

// UTILIZAMOS ESTE CODIGO PARA REALIZAR UNA SOLA ITERACIÓN. 

/* var_dump($resultado->fetch_assoc()); */

include 'includes/footer.php';