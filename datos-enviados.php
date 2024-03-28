<?php


$edad = $_POST["edad"];
$fechaNacimiento = date('Y');
$edadResultado = $fechaNacimiento - $edad;
echo "Tu edad es de ", $edadResultado;






/*$miarray = [$edad, $nombre];
foreach ($miarray as $key => $value) {
    echo $value;
    echo "<br>";
}
*/
?>