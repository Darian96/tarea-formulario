<?php 
require('persona.php');
$persona1 = new Persona();
$persona1->nombre = "luis";
$persona1->apellido = "loe";
$persona1->edad = 27;
$persona1->setTelefono("123123213");

 echo $persona1->getTelefono();

echo '<br>';
foreach ($persona1 as $indice => $value) {
	echo "$indice  : ", $value;
	echo "<br>";
}
echo "<br>";
$persona2 = new Persona();
$persona2->nombre = "mike";
$persona2->apellido = "makina";
$persona2->edad = 27;


$personas = [$persona1,$persona2];

for ($i = 0; $i < count($personas); ++$i) {
	echo $personas[$i]->nombre;
}
 ?>